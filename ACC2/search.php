<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 ?>
 

<?php get_header(); ?>


<div class="two-thirds column">
	
        <section class="pagecontent content-block">  
        
        
         <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                </header><!-- .page-header -->

                <?php //shape_content_nav( 'nav-above' ); ?>

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php //get_template_part( 'content', 'search' ); ?>
                     <h2><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

                <?php endwhile; ?>
					<div class="nav-previous alignleft"><?php next_posts_link( 'Older results' ); ?></div>
					<div class="nav-next alignright"><?php previous_posts_link( 'Newer results' ); ?></div>
                <?php //shape_content_nav( 'nav-below' ); ?>

            <?php else : ?>

                <?php //get_template_part( 'no-results', 'search' ); ?>
                <h2>No Results Found</h2>

            <?php endif; ?>

        
        
  </section>
</div><!--2/3 col-->
        
        
		<div class="one-third column">
			
			<?php get_sidebar(); ?>
        
        </div><!--off one third col-->




		
	</div><!-- container -->
</div><!--off wrapper?-->
       	
<?php get_footer();?>
