 <?php
        /* Template Name: Custom Search */        
        get_header(); ?> 


<div class="pad-head-left"><h1>Search Result for : <?php echo htmlentities($s, ENT_QUOTES, 'UTF-8'); ?> </h1>

</div>
            <div class="two-thirds column">
           

                <section class="pagecontent women"> 
                    <?php // this is using the GET method from the searchbox that is searching CPT women BY NAME. Note the parameters in the URL after the search. ?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>  
                            <?php include get_template_directory() . '/template-parts/content-womenresults.php';?>
                            <?php endwhile; ?>
                        <?php endif; ?>  
                </section>
            </div><!--off 2/3-->

            <div class="one-third column resultswrapsidebar">
                <?php get_sidebar('women'); ?>
            </div><!--off one third col-->

		
</div><!-- container -->
</div><!--off wrapper?--> 


        <?php get_footer(); ?>


        
 