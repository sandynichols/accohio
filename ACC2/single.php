<?php get_header(); ?>

<div class="two-thirds column">  	

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
    
    <!-- <p><span style="color:#2383af">February 2014  </span>-->
               
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, this page does not exist.'); ?></p>
            <?php endif; ?>

</div><!--2/3 col-->
        
        
		<div class="one-third column">
			
        <?php if ( in_category('meetings-with-supporters')) {
                get_sidebar('supporters');
            }
            else {
                get_sidebar();
            }
            ?>
        
        </div><!--off one third col-->




		
	</div><!-- container -->
</div><!--off wrapper?-->




<?php get_footer(); ?>