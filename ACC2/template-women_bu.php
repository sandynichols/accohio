<?php
/*
Template Name: Women in Cardiology
*/
?>

<?php get_header(); ?>


<div class="two-thirds column">
	
        <section class="pagecontent content-block"> 
        <?php
            // set the "paged" parameter (use 'page' if the query is on a static front page)
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(  
                'post_type' => 'women',
                'post_status' => 'publish',
                'posts_per_page' => 5, 
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
            <div class="woman">
                <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                             <?php the_post_thumbnail('women'); ?>
                        </a>
                <?php endif; ?>                 
                <?php //the_title();?>
                        
                <?php
                $women_email =     get_post_meta( get_the_ID(), 'women_email', true );                           
                $women_displayname =  get_post_meta( get_the_ID(), 'women_displayname', true );
                $women_shelooks =  get_post_meta( get_the_ID(), 'women_shelooks', true );
                $women_short =     get_post_meta( get_the_ID(), 'women_short', true );
                $women_specialty = get_post_meta( get_the_ID(), 'women_specialty', true );
                $women_title =     get_post_meta( get_the_ID(), 'women_title', true );
                ?>
                <h1><?php echo $women_displayname;?></h1>

                <?php echo $women_institution . "<br/>" . $women_email . "<br/>" . $women_displayname . "<br/>" . $women_short . "<br/>" . $women_specialty . "<br/>". $women_title;
                ?>
            
            </div><!--off woman-->
            
            <?php endwhile; ?>
            <div class="nav-previous alignleft"><?php next_posts_link( 'Older Entries', $the_query->max_num_pages );?></div>
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
        
        
		<div class="one-third column">
		
        <h3>Search Products</h3>
            <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
                <input type="text" name="s" placeholder="Search by Name"/>
                <input type="hidden" name="post_type" value="women" /> <!-- // hidden 'women' value -->
                <input type="submit" alt="Search" value="Search" />
            </form>

-------------------------------------------

THIS WORKS, BUT YOU HAD TO CARVE THIS QUERY OUT TO IT'S OWN TEMPLATE AS TO
NOT INTERFERE WITH THE MAIN QUERY.

<?php /* You can also leave 'action' blank: action="" */ ?>
<!--<form method="post" action="<?php //echo $_SERVER['PHP_SELF']; ?>">-->
<form method="post" action="">
<select name="filterbyspec" id="size" class="postform" onchange="submit();">
        <option selected="selected">Filter by Specialty</option>
        <option value="ACHD/Peds">ACHD/Peds</option>
        <option value="EP">EP</option>
</select>
</form>
<?php /* Reset filter */ ?>
<p><a href="<?php the_permalink(); ?>">Clear filter</a></p>

<?php
if( !isset($_POST['filterbyspec']) || '' == $_POST['filterbyspec']) {

    // unfiltered product list here

}
else {

    // Get dropdown value
    // Don't forget to sanitize this!
    $size = $_POST['filterbyspec'];

    // Create new query
    $query = new WP_Query( array(
        'post_type'=> 'women', // your CPT
        'post_status' => 'publish',
        'meta_key' => 'women_specialty',
        'meta_value' => $filterbyspec, // Dropdown value
    ) );

    // Loop
    if($query->have_posts()):
        while( $query->have_posts() ): $query->the_post();
            // Product content
           echo the_title();   
        endwhile;
    endif;

    // reset query to default
    wp_reset_postdata();

}

?>









        
        </div><!--off one third col-->




		
	</div><!-- container -->
</div><!--off wrapper?-->

 
<?php get_footer(); ?>