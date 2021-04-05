<?php
/*
Template Name: Search Page
*/
?>
<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
	$query_split = explode("=", $string);
	$search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);
?>


<?php get_header(); ?>


<div class="two-thirds column">
	
        <section class="pagecontent content-block">  
        <?php get_search_form(); ?>
         
        </section>
</div><!--2/3 col-->
        
        
		<div class="one-third column">
			
			<?php get_sidebar(); ?>
        
        </div><!--off one third col-->




		
	</div><!-- container -->
</div><!--off wrapper?-->

 
<?php get_footer(); ?>