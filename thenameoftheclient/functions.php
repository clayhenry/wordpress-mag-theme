<?php

function my_theme_enqueue_styles() {

    wp_register_script( 'custom-script', get_stylesheet_directory_uri() . '/script.js', array() , false, true );
    if(is_front_page()) {
    
       wp_enqueue_style( 'index_style', get_stylesheet_directory_uri() . '/home.css');
    } else {
        wp_enqueue_style( 'post-style', get_stylesheet_directory_uri() . '/content.css');
    }


    wp_enqueue_script( 'custom-script' );

}


function example_cats_related_post() {

    $post_id = get_the_ID();
    $cat_ids = array();
    $categories = get_the_category( $post_id );

    if(!empty($categories) && is_wp_error($categories)):
        foreach ($categories as $category):
            array_push($cat_ids, $category->term_id);
        endforeach;
    endif;

    $current_post_type = get_post_type($post_id);
    $query_args = array( 

        'category__in'   => $cat_ids,
        'post_type'      => $current_post_type,
        'post__not_in'    => array($post_id),
        'posts_per_page'  => '20'


     );

    $related_cats_post = new WP_Query( $query_args );
?>

<?php
    if($related_cats_post->have_posts()):
         while( $related_cats_post->have_posts() ): $related_cats_post->the_post(); 
       
         ?>
         
            
                
                    <div class="recommended-item">
                    <a href="<?php the_permalink(); ?>">
                   

                    <div class="recommended-image" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>')">
                    </div>
                    <div class="recommended-title-container">
                            <div class="recommended-title"> <?php the_title(); ?> </div> 
                    
                        </div>

                        
                    </a>
                    </div>
                    
                
            
        <?php  endwhile;

        // Restore original Post Data
        wp_reset_postdata();
     endif;

}



add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles');
