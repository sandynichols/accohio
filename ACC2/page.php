<?php get_header(); ?>


<div class="two-thirds column">
	
        <section class="pagecontent content-block">  
        
           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>           
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, this page does not exist.'); ?></p>
            <?php endif; ?> 
        </section>
</div><!--2/3 col-->
        
        
		<div class="one-third column">
			
			<?php get_sidebar(); ?>
        
        </div><!--off one third col-->




		
	</div><!-- container -->
</div><!--off wrapper?-->

 
<?php get_footer(); ?>