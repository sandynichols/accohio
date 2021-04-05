<section class="supporters">
<h2>Supporters</h2>
<?php
//get the slug of the current post
global $post;
$post_slug = $post->post_name;
//grab supporters tagged with the name of the meeting slug
//i.e. tag 2020meeting = slug /2020meeting/
$platinumargs = array(  
    'post_type' => 'supporters',
    'post_status' => 'publish',
    'tax_query' => array(
        array(
        'taxonomy' => 'acc_meeting_tags',
        'field' => 'slug',
        'terms' => $post_slug."-platinum",
        'orderby' => 'menu_order',
        'order'   => 'ASC'
         )
      )
);
$platinumloop = new WP_Query( $platinumargs ); 
$platinumcount = $platinumloop->found_posts; 
    if ($platinumcount >0) {
        echo "<h3>Platinum</h3>";
        while ( $platinumloop->have_posts() ) : $platinumloop->the_post();  
        
            if ( get_post_meta( $post->ID, 'link-to-site', true ) ) {
                $key = "link-to-site";
                if ( has_post_thumbnail() ) { ?>
                    <a href="<?php echo get_post_meta( $post->ID, $key, true ); ?>" title="<?php the_title_attribute(); ?>" target="_blank"><?php the_post_thumbnail( 'supporter' ); ?></a>
                   <?php }           
            }
            else {

                if ( has_post_thumbnail() ) { ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'supporter' ); ?></a>
                   <?php } 
            }

           
        endwhile;
    }     
wp_reset_postdata(); 





$goldargs = array(  
    'post_type' => 'supporters',
    'post_status' => 'publish',
    'tax_query' => array(
        array(
        'taxonomy' => 'acc_meeting_tags',
        'field' => 'slug',
        'terms' => $post_slug."-gold"
         )
      )
);
$goldloop = new WP_Query( $goldargs ); 
$goldcount = $goldloop->found_posts; 
    if ($goldcount >0) {
        echo "<h3>Gold</h3>";
        while ( $goldloop->have_posts() ) : $goldloop->the_post();              
            if ( get_post_meta( $post->ID, 'link-to-site', true ) ) {
                $key = "link-to-site";
                if ( has_post_thumbnail() ) { ?>
                    <a href="<?php echo get_post_meta( $post->ID, $key, true ); ?>" title="<?php the_title_attribute(); ?>" target="_blank"><?php the_post_thumbnail( 'supporter' ); ?></a>
                <?php }           
            }
            else {

                if ( has_post_thumbnail() ) { ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'supporter' ); ?></a>
                <?php } 
            }

        endwhile;
    }     
wp_reset_postdata(); 








$silverargs = array(  
    'post_type' => 'supporters',
    'post_status' => 'publish',
    'tax_query' => array(
        array(
        'taxonomy' => 'acc_meeting_tags',
        'field' => 'slug',
        'terms' => $post_slug."-silver"
         )
      )
);
$silverloop = new WP_Query( $silverargs ); 
$silvercount = $silverloop->found_posts; 
    if ($silvercount >0) {
        echo "<h3>Silver</h3>";
        while ( $silverloop->have_posts() ) : $silverloop->the_post();              
            if ( get_post_meta( $post->ID, 'link-to-site', true ) ) {
                $key = "link-to-site";
                if ( has_post_thumbnail() ) { ?>
                    <a href="<?php echo get_post_meta( $post->ID, $key, true ); ?>" title="<?php the_title_attribute(); ?>" target="_blank"><?php the_post_thumbnail( 'supporter' ); ?></a>
                <?php }           
            }
            else {

                if ( has_post_thumbnail() ) { ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'supporter' ); ?></a>
                <?php } 
            }

        endwhile;
    }     
wp_reset_postdata(); 







$exhibitorargs = array(  
    'post_type' => 'supporters',
    'post_status' => 'publish',
    'tax_query' => array(
        array(
        'taxonomy' => 'acc_meeting_tags',
        'field' => 'slug',
        'terms' => $post_slug."-exhibitor"
         )
      )
);
$exhibitorloop = new WP_Query( $exhibitorargs ); 
$exhibitorcount = $exhibitorloop->found_posts; 
    if ($exhibitorcount >0) {
        echo "<h3>Exhibitor</h3>";
        while ( $exhibitorloop->have_posts() ) : $exhibitorloop->the_post();              
            if ( get_post_meta( $post->ID, 'link-to-site', true ) ) {
                $key = "link-to-site";
                if ( has_post_thumbnail() ) { ?>
                    <a href="<?php echo get_post_meta( $post->ID, $key, true ); ?>" title="<?php the_title_attribute(); ?>" target="_blank"><?php the_post_thumbnail( 'supporter' ); ?></a>
                <?php }           
            }
            else {

                if ( has_post_thumbnail() ) { ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'supporter' ); ?></a>
                <?php } 
            }

        endwhile;
    }     
wp_reset_postdata(); 









$sponsorargs = array(  
    'post_type' => 'supporters',
    'post_status' => 'publish',
    'tax_query' => array(
        array(
        'taxonomy' => 'acc_meeting_tags',
        'field' => 'slug',
        'terms' => $post_slug."-sponsor"
         )
      )
);
$sponsorloop = new WP_Query( $sponsorargs ); 
$sponsorcount = $sponsorloop->found_posts; 
    if ($sponsorcount >0) {
        echo "<h3>Sponsor</h3>";
        while ( $sponsorloop->have_posts() ) : $sponsorloop->the_post();              
            if ( get_post_meta( $post->ID, 'link-to-site', true ) ) {
                $key = "link-to-site";
                if ( has_post_thumbnail() ) { ?>
                    <a href="<?php echo get_post_meta( $post->ID, $key, true ); ?>" title="<?php the_title_attribute(); ?>" target="_blank"><?php the_post_thumbnail( 'supporter' ); ?></a>
                <?php }           
            }
            else {

                if ( has_post_thumbnail() ) { ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'supporter' ); ?></a>
                <?php } 
            }

        endwhile;
    }     
wp_reset_postdata(); 














$sponsorargs = array(  
    'post_type' => 'supporters',
    'post_status' => 'publish',
    'tax_query' => array(
        array(
        'taxonomy' => 'acc_meeting_tags',
        'field' => 'slug',
        'terms' => $post_slug."-educational"
         )
      )
);
$sponsorloop = new WP_Query( $sponsorargs ); 
$sponsorcount = $sponsorloop->found_posts; 
    if ($sponsorcount >0) {
        echo "<h3>Educational Grants</h3>";
        while ( $sponsorloop->have_posts() ) : $sponsorloop->the_post();              
            if ( get_post_meta( $post->ID, 'link-to-site', true ) ) {
                $key = "link-to-site";
                if ( has_post_thumbnail() ) { ?>
                    <a href="<?php echo get_post_meta( $post->ID, $key, true ); ?>" title="<?php the_title_attribute(); ?>" target="_blank"><?php the_post_thumbnail( 'supporter' ); ?></a>
                <?php }           
            }
            else {

                if ( has_post_thumbnail() ) { ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'supporter' ); ?></a>
                <?php } 
            }

        endwhile;
    }     
wp_reset_postdata(); 



?>
</section>