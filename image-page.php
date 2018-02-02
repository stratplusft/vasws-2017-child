<?php
/* Template Name: ImagePage
 * 
 * The template for displaying pages with featured images
 *
 *  *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vasws-2017-child
 */

get_header('sideimage'); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->



<?php get_footer();
