<div class="callbacks_container">
              <ul class="rslides" id="slider4">
				 <?php 
                    $myposts = get_posts('category=5');
                            foreach( $myposts as $post ) :	setup_postdata($post);
                             ?>
                             <li>    
                                <?php if ( has_post_thumbnail() ) : ?>
                                                <?php the_post_thumbnail('slides'); ?>
                                            <?php endif; ?>
                                 <span class="caption"><?php the_title(); ?></span>
                            </li>	
                            <?php endforeach; ?>
    
              </ul>
</div><!--off callbacks-->