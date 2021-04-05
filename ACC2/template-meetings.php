<?php
/*
Template Name: Meetings Template
*/
?>

<?php get_header(); ?>

<div class="two-thirds column">
	<?php //get_sidebar(hero); ?>  	
        <section class="pagecontent content-block">
        <h1>Past Meetings</h1>   
            <?php //pagination only works on one (the main) query per page. ?>  
            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;      
            	  query_posts( 'cat=4&posts_per_page=10&paged=' . $paged );
					 while ( have_posts() ) : the_post(); ?>
						<article class="clearfix">
							 <div class="latestthumb">
								<?php if ( has_post_thumbnail() ) : ?>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <?php the_post_thumbnail('latest'); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
							   <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                <p class="latestdate"><?php the_date(); ?></p>
							   <?php the_excerpt(); ?>  
						 </article> 
	
					<?php endwhile; ?>
                
                 <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
				  <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
                  

        </section>
</div><!--2/3 col-->
        
        
		<div class="one-third column">
			
			<?php get_sidebar(); ?>
        
        </div><!--off one third col-->




		
	</div><!-- container -->
</div><!--off wrapper?-->

 
<?php get_footer(); ?>