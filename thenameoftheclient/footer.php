<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
    
        <div class="footer">
        By Pawel Urbanski | <a href="https://www.instagram.com/todayisanotherdayphoto/">Instagram </a>  | <a href="javascript:location='mailto:\u0068\u0065\u006c\u006c\u006f\u0066\u0072\u006f\u006d\u0070\u0061\u0077\u0065\u006c\u0040\u006f\u0075\u0074\u006c\u006f\u006f\u006b\u002e\u0063\u006f\u006d';void 0"><script type="text/javascript">document.write('\u0068\u0065\u006c\u006c\u006f\u0066\u0072\u006f\u006d\u0070\u0061\u0077\u0065\u006c\u0040\u006f\u0075\u0074\u006c\u006f\u006f\u006b\u002e\u0063\u006f\u006d')</script></a></div>
       
		<!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
