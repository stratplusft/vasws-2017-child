<?php
/**
 * Template part for displaying about us contact page content in page.php
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
            <div class="flex-row-panel">
                <?php 
                    if(get_field('photo-1')){
                        $image = get_field('photo-1');
                        echo '<article class="twentyseventeen-panel  page type-page status-publish has-post-thumbnail hentry">';
                        echo '<div class="panel-contact-image" style="background-repeat:no-repeat; background-image: url( '?><?php echo $image['url']?><?php echo ' ">';
                        echo '</div>';
                        echo '<div class="entry-panel-header">'; 
                        echo '<h4>' . get_field('name-1') . '</h4>';
                         echo '<p>' . get_field('role-1') . '</p>';
                        echo '<p>' . get_field('e-mail-1') . '</p>';
                        echo '<p>' . get_field('telephone-1') . '</p>';
                       
                        ?>
                       
                 <?php
                        echo '</div>';
                        echo '</article>';
                        
                    }
                
                ?>
            <?php 
                    if(get_field('photo-2')){
                        $image = get_field('photo-2');
                        echo '<article class="twentyseventeen-panel  page type-page status-publish has-post-thumbnail hentry">';
                        echo '<div class="panel-contact-image" style="background-repeat:no-repeat; background-image: url( '?><?php echo $image['url']?><?php echo ' ">';
                        echo '</div>';
                        echo '<div class="entry-panel-header">'; 
                        echo '<h4>' . get_field('name-2') . '</h4>';
                         echo '<p>' . get_field('role-2') . '</p>';
                        echo '<p>' . get_field('e-mail-2') . '</p>';
                        echo '<p>' . get_field('telephone-2') . '</p>';
                       
                        ?>
                       
                 <?php
                        echo '</div>';
                        echo '</article>';
                        
                    }
                
                ?>
            
            <?php 
                    if(get_field('photo-3')){
                        $image = get_field('photo-3');
                        echo '<article class="twentyseventeen-panel  page type-page status-publish has-post-thumbnail hentry">';
                        echo '<div class="panel-contact-image" style="background-repeat:no-repeat; background-image: url( '?><?php echo $image['url']?><?php echo ' ">';
                        echo '</div>';
                        echo '<div class="entry-panel-header">'; 
                        echo '<h4>' . get_field('name-3') . '</h4>';
                         echo '<p>' . get_field('role-3') . '</p>';
                        echo '<p>' . get_field('email-3') . '</p>';
                        echo '<p>' . get_field('telephone-3') . '</p>';
                       
                        ?>
                       
                 <?php
                        echo '</div>';
                        echo '</article>';
                        
                    }
                
                ?>
            
            <?php 
                    if(get_field('photo-4')){
                        $image = get_field('photo-4');
                        echo '<article class="twentyseventeen-panel  page type-page status-publish has-post-thumbnail hentry">';
                        echo '<div class="panel-contact-image" style="background-repeat:no-repeat; background-image: url( '?><?php echo $image['url']?><?php echo ' ">';
                        echo '</div>';
                        echo '<div class="entry-panel-header">'; 
                        echo '<h4>' . get_field('name-4') . '</h4>';
                         echo '<p>' . get_field('role-4') . '</p>';
                        echo '<p>' . get_field('email-4') . '</p>';
                        echo '<p>' . get_field('telephone-4') . '</p>';
                       
                        ?>
                       
                 <?php
                        echo '</div>';
                        echo '</article>';
                        
                    }
                
                ?>
            
            <?php 
                    if(get_field('photo-5')){
                        $image = get_field('photo-5');
                        echo '<article class="twentyseventeen-panel  page type-page status-publish has-post-thumbnail hentry">';
                        echo '<div class="panel-contact-image" style="background-repeat:no-repeat; background-image: url( '?><?php echo $image['url']?><?php echo ' ">';
                        echo '</div>';
                        echo '<div class="entry-panel-header">'; 
                        echo '<h4>' . get_field('name-5') . '</h4>';
                         echo '<p>' . get_field('role-5') . '</p>';
                        echo '<p>' . get_field('email-5') . '</p>';
                        echo '<p>' . get_field('telephone-5') . '</p>';
                       
                        ?>
                       
                 <?php
                        echo '</div>';
                        echo '</article>';
                        
                    }
                
                ?>
            
            <?php 
                    if(get_field('photo-6')){
                        $image = get_field('photo-6');
                        echo '<article class="twentyseventeen-panel  page type-page status-publish has-post-thumbnail hentry">';
                        echo '<div class="panel-contact-image" style="background-repeat:no-repeat; background-image: url( '?><?php echo $image['url']?><?php echo ' ">';
                        echo '</div>';
                        echo '<div class="entry-panel-header">'; 
                        echo '<h4>' . get_field('name-6') . '</h4>';
                         echo '<p>' . get_field('role-6') . '</p>';
                        echo '<p>' . get_field('email-6') . '</p>';
                        echo '<p>' . get_field('telephone-6') . '</p>';
                       
                        ?>
                       
                 <?php
                        echo '</div>';
                        echo '</article>';
                        
                    }
                
                ?>
            
            <?php 
                    if(get_field('photo-7')){
                        $image = get_field('photo-7');
                        echo '<article class="twentyseventeen-panel  page type-page status-publish has-post-thumbnail hentry">';
                        echo '<div class="panel-contact-image" style="background-repeat:no-repeat; background-image: url( '?><?php echo $image['url']?><?php echo ' ">';
                        echo '</div>';
                        echo '<div class="entry-panel-header">'; 
                        echo '<h4>' . get_field('name-7') . '</h4>';
                         echo '<p>' . get_field('role-7') . '</p>';
                        echo '<p>' . get_field('email-7') . '</p>';
                        echo '<p>' . get_field('telephone-7') . '</p>';
                       
                        ?>
                       
                 <?php
                        echo '</div>';
                        echo '</article>';
                        
                    }
                
                ?>
                
            </div> <!-- end flex-row-panel -->
            
                

		<?php	wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
