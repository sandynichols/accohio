<section class="featured">  
      <h1>Featured Articles</h1>    	
      <?php //add_action( 'pre_get_posts', 'my_featured_category' ); ?>
      <?php 
		$myposts = get_posts('category=2');
				foreach( $myposts as $post ) :	setup_postdata($post);
				 ?>
                 <div class="clearfix"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-news.png" width="32" height="39" alt="news icon" class="alignleft"/>
				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>	
                <?php the_excerpt(); ?>	</div>
             
				<?php endforeach; ?>
</section>      
  
   
 <section class="upcoming-meetings">
 <h1>Upcoming Meetings</h1>
 	 <?php 
		$myposts = get_posts('category=14&order=DESC');
				foreach( $myposts as $post ) :	setup_postdata($post);
				 ?>                              
                <article class="meeting">                   
					<?php  
                    $mymonth = do_shortcode ( "[postexpirator  dateformat=' M ']");
                    $myday =  do_shortcode ( "[postexpirator  dateformat=' j']");
                    ?>       
                 	<a class="cal-date" href="<?php the_permalink() ?>"><?php echo $mymonth;?><span><?php echo $myday;?></span></a>                    
					<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                	<p class="date"><?php echo do_shortcode ( '[postexpirator ]') ?></p>         
                </article>           		
				<?php endforeach; ?>
 </section>
 
 <section class="content-block">
 <h1><?php _e( 'Latest in Cardiology', 'my-text-domain' ); ?></h1>

<?php // Get RSS Feed(s)
include_once( ABSPATH . WPINC . '/feed.php' );

// Get a SimplePie feed object from the specified feed source.
//$rss = fetch_feed( 'http://accintouch.wpengine.com/feed/' );
$rss = fetch_feed( 'http://www.acc.org/Feed/LatestCardiology?topicID=8d7f3960-0beb-4a23-b87d-661262d0bb4f' );
	 
if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly

    // Figure out how many total items there are, but limit it to 5. 
    $maxitems = $rss->get_item_quantity( 5 ); 

    // Build an array of all the items, starting with element 0 (first element).
    $rss_items = $rss->get_items( 0, $maxitems );

endif;
?>

<ul>
    <?php if ( $maxitems == 0 ) : ?>
        <li><?php _e( 'No items', 'my-text-domain' ); ?></li>
    <?php else : ?>
        <?php // Loop through each feed item and display each item as a hyperlink. ?>
        <?php foreach ( $rss_items as $item ) : ?>
            <li>
                <a href="<?php echo esc_url( $item->get_permalink() ); ?>"
                    title="<?php printf( __( 'Posted %s', 'my-text-domain' ), $item->get_date('j F Y | g:i a') ); ?>" target="_blank">
                    <?php echo esc_html( $item->get_title() ); ?>
                </a>
            </li>
        <?php endforeach; ?>
    <?php endif; ?>
</ul>
</section>