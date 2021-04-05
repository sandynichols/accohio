<?php
/*
Template Name: temp form
*/
?>

<?php get_header(); ?>

<div class="sixteen column single-women">  	

          <h1 id="clickme" onclick="whatthehell()">Temporary page to troubleshoot form.</h1>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>            
                
<?php //this is form for localhost
//echo do_shortcode('[contact-form-7 id="6340" title="Women"]') ;
//this form is for the server:
//echo do_shortcode('[contact-form-7 id="7410" title="Women"]') ;  

//tried:
//https://michael-shore.uk/blog/add-an-event-listener-for-a-contact-form-7-form/
//https://javagoal.com/how-to-perform-additional-events-on-wordpress-contact-form-7-submissions-lets-use-dom-events/
//https://vincoding.com/dom-events-method-passing-cf7-data/


//YOUR ANSWER IS HERE:
//https://contactform7.com/why-isnt-my-ajax-contact-form-working-correctly/
//AND you are still working with the form on the SERVER!

?>


<?php echo do_shortcode('[contact-form-7 id="7410" title="Women"]') ;?>


 
                <div class="seventyfive">
                    <?php the_content(); ?>
                </div>
              

            <?php endwhile; else: ?>
                <p><?php _e('Sorry, this page does not exist.'); ?></p>
            <?php endif; ?>
            


</div><!--16 col-->
        	
	</div><!-- container -->
</div><!--off wrapper?-->


<script>
document.addEventListener( 'wpcf7submit', function( event ) {
  alert( "Fire!" );
}, false );
</script>

<script>
function whatthehell() {
    alert("send mail?");
    $to = 'toebird1966@gmail.com';
    $subject = 'Test subject from ACC';
    $body = 'The email body content';
    $headers = array('Content-Type: text/html; charset=UTF-8');
     
    wp_mail( $to, $subject, $body, $headers );
}


</script>

<?php get_footer(); ?>