<?php
/*
Template Name: Women in Cardiology
*/
?>

<?php get_header(); ?>
        <div class="pad-head-left"><h1>Women in Cardiology</h1>
        <a href="#search-filters" class="mobile-only pad-bottom-20">Jump to Search Filters <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/search3.png" alt="search button magnify glass"/></a>
    </div>


    <div class="two-thirds column">

            <section class="pagecontent women"> 
                <?php
                    // set the "paged" parameter (use 'page' if the query is on a static front page)
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $args = array(  
                        'post_type' => 'women',
                        'post_status' => 'publish',
                        'posts_per_page' => 50, 
                        'orderby' => 'title', 
                        'order' => 'ASC',
                        'paged' => $paged
                    );
                    // the query
                    $the_query = new WP_Query($args);
                    ?>

                    <?php if ( $the_query->have_posts() ) : ?>

                    <?php
                    // the loop
                    while ( $the_query->have_posts() ) : $the_query->the_post(); 
                    ?>
                        <?php include get_template_directory() . '/template-parts/content-womenresults.php';?>
                    
                    <?php endwhile; ?>
                    <div class="nav-previous alignleft"><?php next_posts_link( 'Previous Entries', $the_query->max_num_pages );?></div>
                    <div class="nav-next alignright"><?php previous_posts_link( 'Newer Entries' );?></div>
                    

                    <?php 
                    // clean up after the query and pagination
                    wp_reset_postdata(); 
                    ?>

                    <?php else:  ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>

                        
            </section>              
    </div><!--2/3 col-->

    <div class="one-third column resultswrapsidebar">
        <?php get_sidebar('women'); ?>
    </div><!--off one third col-->




		
</div><!-- container -->
</div><!--off wrapper?-->   
 
<?php get_footer(); ?>