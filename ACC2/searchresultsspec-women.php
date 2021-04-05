 <?php
        /* Template Name: Custom Search Specialty */        
        get_header(); ?> 

        <?php //this template has to be assigned to a page.  I called it "results-by-specialty". you had to do this so this query by specialty was not on the same page as the main query for CPT Women.
            if( !isset($_POST['filterbyspec']) || '' == $_POST['filterbyspec']) {
                // unfiltered product list here
            }
            else {
                // Get dropdown value
                // Don't forget to sanitize this!
                $spec = $_POST['filterbyspec'];?>                
                    <?php // Create new query
                    $querybyspecialty = new WP_Query( array(
                        'post_type'=> 'women', // your CPT
                        'post_status' => 'publish',
                        'posts_per_page' => 5, 
                        'orderby' => 'title', 
                        'order' => 'ASC',
                        'meta_key' => $women_specialty,
                        'meta_value' => $spec, // Dropdown value
                    ) ); ?>


<div class="pad-head-left"><h1>Filtered for Specialty: <?php echo $spec;?></h1>
</div>   
                <div class="two-thirds column">
                                      
                            <section class="pagecontent women"> 
                                <?php // Loop
                                    if($querybyspecialty->have_posts()):
                                        while( $querybyspecialty->have_posts() ): $querybyspecialty->the_post();
                                            include get_template_directory() . '/template-parts/content-womenresults.php';
                                        endwhile;
                                    endif;
                                    // reset query to default
                                    wp_reset_postdata();?>
                            </section>

            <?php }  //end else for filterbyspecialty ?>                 
        
                </div><!--off 2/3-->

                <div class="one-third column resultswrapsidebar">
                    <?php get_sidebar('women'); ?>
                </div><!--off one third col-->

		
            </div><!-- container -->
        </div><!--off wrapper?--> 

        <?php get_footer(); ?>