let asides = document.querySelectorAll(".image-aside");
let content = document.getElementById("image-container")
let contentImd = content.getElementsByTagName("img");
let entryContent = document.getElementsByClassName("entry-content")
let quote = document.getElementsByClassName("wp-block-quote")
let paragraph = document.querySelectorAll(".entry-body p");
let headding = document.querySelectorAll(".entry-body h2");
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
let contentParagraph
let contentHeading;

function updateDisplay(){

    // var distanceFromBottom = document.body.scrollHeight - window.innerHeight - window.scrollY;
   
    // console.log(document.body.scrollHeight)

        scrollIncriment++;
    
        content.style.position = "sticky";

        paragraph.forEach((e,i)=>{
            var paragraphPositionFromTop = paragraph[i].getBoundingClientRect().top;

            if ((paragraphPositionFromTop - currentHeight <= 0)) {
               
                // console.log(e)
                // contentParagraph = i;
                
                paragraph[i].classList.remove("hidden-paragraph")
                paragraph[i].classList.add("show-paragraph")
            } 
          
        });

        headding.forEach((e, i)=>{
            var headingFromTop = headding[i].getBoundingClientRect().top;

            if ((headingFromTop - currentHeight <= 0)) {
               
                // console.log(e)
                // contentParagraph = i;
                
                headding[i].classList.remove("hidden-paragraph")
                headding[i].classList.add("show-paragraph")
            } 
        })
 
   
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

    paragraph.forEach((e,i)=>{
        e.classList.add("hidden-paragraph")
    })

    asides.forEach((e, i)=>{ 

        imagesrc.push(e.getElementsByTagName("img")[0].src)
        currentElements.push(e.outerHTML)
        content.innerHTML += currentElements[i]
        contentImd[i].classList.add("element-img");

        setTimeout(function(){
            if(contentImd[i].height < contentImd[i].width ){

                contentImd[i].classList.add("horisontal-img");
            }

        }, 0)
       

    })
    contentImd[0].classList.add("is-visible")

   
}


init();

