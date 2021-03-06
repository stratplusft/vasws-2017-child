<?php
/* Template Name: NetworksPage
 * 
 * The template for displaying Networks page and similar. 
 * Adds a networks class to distguish from the Galleries pages
 *  *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vasws-2017-child
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area networks">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'gallery' );

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
