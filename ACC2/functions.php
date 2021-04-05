<?php
/*add custom excerpt content to bottom of pages and posts*/

add_post_type_support( 'post', 'excerpt' );	
add_theme_support( 'post-thumbnails' ); 

add_image_size( 'latest', 110, 100, true ); // Latest in Cardiology thumbnail, 110 x 110, crop.
add_image_size( 'recently', 200, 200, true ); // Recently Added thumbnail, 200 x 200, crop.
add_image_size( 'slides', 620, 350, true ); // slides image, 620 x 350, crop.
add_image_size( 'featured', 300, 200, true ); // Featured article thumbnail, 300 x 200, crop.
add_image_size( 'supporter', 108, 108, true ); //Supporter logo in the sidebar
add_image_size( 'women', 110, 100, array('center','top') ); // square headshot, 110 x 110, crop.


function register_my_menus() {  	
register_nav_menus(   		array( 'sidebar-menu' => __( 'Sidebar Menu' ), 'footer-menu' => __( 'Footer Menu' ), 'topright-menu' => __( 'Top Right Menu' )    )  );}

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

add_action( 'init', 'register_my_menus' );


function my_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
	
	add_theme_support( 'html5', array( 'search-form' ) );//just randomly put here.
}
add_action( 'after_setup_theme', 'my_theme_add_editor_styles' );


// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
// Register our callback to the appropriate filter
add_filter('mce_buttons_2', 'my_mce_buttons_2');




// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {  
	// Define the style_formats array
	$style_formats = array(  
		// Each array child is a format with it's own settings
		array(  
			'title' => 'agenda item',  
			'block' => 'div',  
			'classes' => 'agenda',
			'wrapper' => true,
			
		),  
		array(  
			'title' => 'Breakout Session',  
			'block' => 'div',  
			'classes' => 'breakout',
			'wrapper' => true,
		),
		array(  
			'title' => 'winner',  
			'block' => 'div',  
			'classes' => 'winner',
			'wrapper' => true,
		),
		array(  
			'title' => 'register',  
			'block' => 'div',  
			'classes' => 'register',
			'wrapper' => true,
		),
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );  




function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');





add_action( 'init', 'create_meeting_tags' );
function create_meeting_tags() {
	register_taxonomy(
		'acc_meeting_tags',
		'supporters',
		array(
			'label' => __( 'Meeting Tags' ),
			'rewrite' => array( 'slug' => 'meetingtag' ),
			'hierarchical' => false
		)
	);
}




add_action( 'init', 'acc_supporters' );
function acc_supporters() {
  register_post_type( 'supporters',
    array(
      'labels' => array(
        'name' => __( 'Supporters' ),
        'singular_name' => __( 'Supporter' )
      ),
      'public' => true,
      //'rewrite' => array('slug' => 'accsupporter'),
	  'supports'	=>	array('title', 'editor','thumbnail','custom-fields')
    )
  );
}



add_action( 'init', 'acc_women' );
function acc_women() {
  register_post_type( 'women',
    array(
      'labels' => array(
        'name' => __( 'Women in Cardiology' ),
        'singular_name' => __( 'Woman in Cardiology' )
      ),
      'public' => true,
      //'rewrite' => array('slug' => 'accsupporter'),
	  'supports'	=>	array('title', 'editor','thumbnail','custom-fields')
    )
  );
}
//https://wordpress.stackexchange.com/questions/89886/how-to-create-a-custom-search-for-custom-post-type
function template_chooser($template)   
{    
  global $wp_query;   
  $post_type = get_query_var('post_type');   
  if( $wp_query->is_search && $post_type == 'women' )   
  {
    return locate_template('searchresults-women.php');  //  redirect to archive-search.php
  }   
  return $template;   
}
add_filter('template_include', 'template_chooser');  




//https://stackoverflow.com/questions/66881074/wordpress-contact-form-7-insert-dynamic-to-address-based-on-meta-data
//local host is 6340
//server is 7410
//now get form ID
//https://stackoverflow.com/questions/32707898/get-contact-form-7-form-id-in-php
function wpcf7_before_send_mail_function($contact_form, &$abort, $submission){
	$wpcf7 = WPCF7_ContactForm::get_current();
	$form_id = $wpcf7->id;

	if ($form_id === 7410) {
		// This gets your post_id 
		$post_id = $submission->get_meta('container_post_id');
		$properties = $contact_form->get_properties();
		$properties['mail']['recipient'] = get_post_meta( $post_id, 'women_email', true);
		$contact_form->set_properties($properties);
	}
}
add_action( 'wpcf7_before_send_mail', 'wpcf7_before_send_mail_function', 10, 3 );
?>