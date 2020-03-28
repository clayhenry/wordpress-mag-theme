<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

$discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null; ?>
<div class="entry-title">
<?php the_title( '<h1>', '</h1>' ); ?>
<div class="post-excerpt">
	<?php the_excerpt() ?>
</div>
<?php


 	$category_detail=get_the_category();//$post->ID
	 foreach($category_detail as $cd){
		 $cat_url = get_category_link($cd->term_id);
	 echo "<div class='category'>From <a href='{$cat_url}'>{$cd->cat_name}</a></div>";

	 

}


?>
</div>
<?php if ( ! is_page() ) : ?>
<div class="entry-meta">
	<?php twentynineteen_posted_by(); ?>
	<?php twentynineteen_posted_on(); ?>
	<span class="comment-count">
		<?php
		if ( ! empty( $discussion ) ) {
			twentynineteen_discussion_avatars_list( $discussion->authors );
		}
		?>
		<?php twentynineteen_comment_count(); ?>
	</span>


	<?php

	
	// Edit post link.
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'twentynineteen' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">' . twentynineteen_get_icon_svg( 'edit', 16 ),
			'</span>'
		);
	?>
</div><!-- .entry-meta -->
<?php endif; ?>
