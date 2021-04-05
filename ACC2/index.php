<?php get_header(); ?>

<div class="two-thirds column">
	<?php get_sidebar('hero'); ?>  	
        <section class="latestposts content-block">
            <h1>Latest in Cardiology</h1>
					 <?php 
					 
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
						'orderby'		=> 'post_date',
						'order'			=> 'DESC',
						'category'		=> '3',
						'post_type'		=> 'post',
						'post_status'	=> 'publish',
						'paged'			=> $paged,
					);
				
					$postslist = get_posts( $args );
					foreach ($postslist as $post) :  setup_postdata($post);	 
					 
				
				 ?>
				<article class="clearfix">    
                            <div class="latestthumb">
								<?php if ( has_post_thumbnail() ) : ?>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <?php the_post_thumbnail('latest'); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                           <h2><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                          
                           <?php the_excerpt(); ?>
                </article><!--off article--> 
                           
				<?php endforeach; ?>
                
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