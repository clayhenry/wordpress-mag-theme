let asides = document.querySelectorAll(".image-aside");
let content = document.getElementById("image-container")
let contentImd = content.getElementsByTagName("img");
let entryContent = document.getElementsByClassName("entry-content")
let quote = document.getElementsByClassName("wp-block-quote")
let page = document.getElementById("page");
let currentOffset = 0;
let currentHeight = window.innerHeight;
let currentElements= [];
let currentQuotes = [];
let scrollIncriment = 0;
let marginInc = 0;
let imagesrc = [];


function calculateDistribution(){

for (let index = 0; index < asides.length; index++) {
    imageDistribution.push()
}
    // console.log(currentHeight / asides.length)
}

let displayed = [];
let current = 0;

function updateDisplay(){

    var distanceFromBottom = document.body.scrollHeight - window.innerHeight - window.scrollY;
   
    // console.log(document.body.scrollHeight)

        scrollIncriment++;
    
        content.style.position = "sticky";
   
        for (var i = 0; i < asides.length; i++) {
    
            var positionFromTop = asides[i].getBoundingClientRect().top;

            if ((positionFromTop - currentHeight <= 0)) {
               
                current = i;
           
                contentImd[i].classList.add("is-visible");
                // contentImd[i].classList.remove("not-visible")
            } 
        
          }

          for (let j = 0; j < contentImd.length; j++) {
              if(j != current){
                contentImd[j].classList.remove("is-visible")
                // contentImd[j].classList.add("not-visible")
              }
              
          }
        
}

window.addEventListener('scroll',updateDisplay);

function init(){

// console.log(content.getElementsByTagName("img")[0].src);

    asides.forEach((e, i)=>{ 

        imagesrc.push(e.getElementsByTagName("img")[0].src)
        currentElements.push(e.outerHTML)
        content.innerHTML += currentElements[i]
        contentImd[i].classList.add("element-img");

    })
    contentImd[0].classList.add("is-visible")

   
}


init();

