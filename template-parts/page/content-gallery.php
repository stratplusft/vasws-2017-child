<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * 
 *
 * @package vasws-2017-child
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twentyseventeen_edit_link( get_the_ID() ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>
                <?php 
                    if(get_field('town_link')){
                        $image = get_field('town_image');
                        echo '<article class="twentyseventeen-panel  page type-page status-publish has-post-thumbnail hentry">';
                        echo '<div class="panel-image" style="background-image: url( '?><?php echo $image['url']?><?php echo ' ">';
                        echo '</div>';
                        echo '<div class="entry-panel-header">'; 
                        echo '<h4>' . get_field('town_link') . '</h4>';
                        ?>
                       
                 <?php
                        echo '</div>';
                        echo '</article>';
                        
                    }
                
                ?>
            
                <?php 
                    if(get_field('town_link_2')){
                        $image = get_field('town_image_2');
                        echo '<article class="twentyseventeen-panel  page type-page status-publish has-post-thumbnail hentry">';
                        echo '<div class="panel-image" style="background-image: url( '?><?php echo $image['url']?><?php echo ' ">';
                        echo '</div>';
                        echo '<div class="entry-panel-header">'; 
                        echo '<h4>' . get_field('town_link_2') . '</h4>';
                        ?>
                       
                 <?php
                        echo '</div>';
                        echo '</article>';
                        
                    }
                
                ?>
            <?php 
                    if(get_field('town_link_3')){
                        $image = get_field('town_image_3');
                        echo '<article class="twentyseventeen-panel  page type-page status-publish has-post-thumbnail hentry">';
                        echo '<div class="panel-image" style="background-image: url( '?><?php echo $image['url']?><?php echo ' ">';
                        echo '</div>';
                        echo '<div class="entry-panel-header">'; 
                        echo '<h4>' . get_field('town_link_3') . '</h4>';
                        ?>
                       
                 <?php
                        echo '</div>';
                        echo '</article>';
                        
                    }
                
                ?>
            <?php 
                    if(get_field('town_link_4')){
                        $image = get_field('town_image_4');
                        echo '<article class="twentyseventeen-panel  page type-page status-publish has-post-thumbnail hentry">';
                        echo '<div class="panel-image" style="background-image: url( '?><?php echo $image['url']?><?php echo ' ">';
                        echo '</div>';
                        echo '<div class="entry-panel-header">'; 
                        echo '<h4>' . get_field('town_link_4') . '</h4>';
                        ?>
                       
                 <?php
                        echo '</div>';
                        echo '</article>';
                        
                    }
                
                ?>
            <?php 
                    if(get_field('town_link_5')){
                        $image = get_field('town_image_5');
                        echo '<article class="twentyseventeen-panel  page type-page status-publish has-post-thumbnail hentry">';
                        echo '<div class="panel-image" style="background-image: url( '?><?php echo $image['url']?><?php echo ' ">';
                        echo '</div>';
                        echo '<div class="entry-panel-header">'; 
                        echo '<h4>' . get_field('town_link_5') . '</h4>';
                        ?>
                       
                 <?php
                        echo '</div>';
                        echo '</article>';
                        
                    }
                
                ?>
            <?php 
                    if(get_field('town_link_6')){
                        $image = get_field('town_image_6');
                        echo '<article class="twentyseventeen-panel  page type-page status-publish has-post-thumbnail hentry">';
                        echo '<div class="panel-image" style="background-image: url( '?><?php echo $image['url']?><?php echo ' ">';
                        echo '</div>';
                        echo '<div class="entry-panel-header">'; 
                        echo '<h4>' . get_field('town_link_6') . '</h4>';
                        ?>
                       
                 <?php
                        echo '</div>';
                        echo '</article>';
                        
                    }
                
                ?>

		<?php	wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
