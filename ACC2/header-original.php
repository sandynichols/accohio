<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/dropdown-style.css" media="screen" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/responsiveslides.css">
 
<link rel='stylesheet' id='responsive-lightbox-swipebox-front-css'  href='<?php echo site_url(); ?>/wp-content/plugins/responsive-lightbox/assets/swipebox/source/swipebox.css?ver=4.0.1' type='text/css' media='all' />
  
<link rel='stylesheet' id='tabby.css-css'  href='<?php echo site_url(); ?>/wp-content/plugins/tabby-responsive-tabs/css/tabby.css?ver=1.2.1' type='text/css' media='all' />
<script type='text/javascript' src='<?php echo site_url(); ?>/wp-includes/js/jquery/jquery.js?ver=1.11.1'></script>
<script type='text/javascript' src='<?php echo site_url(); ?>/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<script type='text/javascript' src='<?php echo site_url(); ?>/wp-content/plugins/tabby-responsive-tabs/js/tabby.js?ver=1.2.1'></script>
<script type='text/javascript' src='<?php echo site_url(); ?>/wp-content/plugins/responsive-lightbox/assets/swipebox/source/jquery.swipebox.min.js?ver=4.0.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var rlArgs = {"script":"swipebox","selector":"lightbox","custom_events":"","activeGalleries":"1","animation":"1","hideBars":"1","hideBarsDelay":"5000","videoMaxWidth":"1080"};
/* ]]> */</script>

<script type='text/javascript' src='<?php echo site_url(); ?>/wp-content/plugins/responsive-lightbox/js/front.js?ver=4.0.1'></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
      $("#slider1").responsiveSlides({
        maxwidth: 800,
        speed: 800
      });

      // Slideshow 2
      $("#slider2").responsiveSlides({
        auto: false,
        pager: true,
        speed: 300,
        maxwidth: 540
      });

      // Slideshow 3
      $("#slider3").responsiveSlides({
        manualControls: '#slider3-pager',
        maxwidth: 616
      });

      // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: false,
        speed: 500,
		 maxwidth: 620,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script>


	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="UTF-8">
	<title>Ohio Chapter, American College of Cardiology
</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/base.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/skeleton.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/layout.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-114x114.png">
	
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59458964-1', 'auto');
  ga('send', 'pageview');

</script>

<script>
  function WriteCookie() {
      var now = new Date();
      now.setMonth( now.getMonth() + 1 );
      cookievalue = "mybirthday" + ";"
      
      document.cookie = "name=" + cookievalue;
      document.cookie = "expires=" + now.toUTCString() + ";"
      document.write ("Setting Cookies : " + "name=" + cookievalue );
  }
</script>

</head>


<body <?php body_class( $class ); ?>>


	<!-- Primary Page Layout
	================================================== -->

	

<div class="wrapper">
<div class="container">  
    
    <div class="banner">
		<div class="one-third column">
 
<div class="logo"> <a href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"  alt=""/></a>

</div></div>

	<div class="two-thirds column">
    
    <?php // You already created and assigned menu "top right" so now just call it.  ?>
    <div class="rightext"><a href="<?php echo site_url(); ?>/contact/" title="contact Ohio ACC"> Contact Us</a>&nbsp;  |&nbsp;      <a href="http://www.acc.org" title="ACC" target="_blank">American College of Cardiology</a><br>
            <br>
           
           <?php echo get_search_form(); ?>
    
    </div></div>

</div>

	<div class="banner2 clearfix">
		<div class="sixteen columns">
 			<a href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo2.png"  alt=""/></a>
			<button id="mysearch"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/search2.png"  alt="magnifying glass to open search field" /></button>
             <div class="mobilesearch"><?php echo get_search_form(); ?></div>
            
		</div>
    </div>

</div><!--off container temp for nav-->

<div class="sixteen columns">
<div class="menubg">
	<div class="menu-container">
        <a  class="toggleMenu" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/men.png"  alt=""/> Menu</a>
        
        <!--<ul class="nav">  just add this class to the wp generated list -->     
            <?php
        
				$defaults = array(
					'theme_location'  => '',
					'menu'            => '',
					'container'       => 'div',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'menu nav', //add the class nav for the acc styles
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				);
				
				wp_nav_menu( $defaults );
				
				?>

  	</div><!--off menu-container-->
</div><!--off menubg-->
</div><!--off 16col-->

<div class="container">