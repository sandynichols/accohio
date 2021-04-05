<?php get_header(); ?>

<div class="sixteen column single-women">  	

<?php 
 
	$women_email = get_post_meta( get_the_ID(), 'women_email', true);
    $women_shelooks = get_post_meta( get_the_ID(), 'women_shelooks', true);
    $women_short = get_post_meta( get_the_ID(), 'women_short', true);
    $women_title = get_post_meta( get_the_ID(), 'women_title', true);
    $women_institution = get_post_meta( get_the_ID(), 'women_institution', true);
    $women_displayname = get_post_meta( get_the_ID(), 'women_displayname', true);
    $women_specialty = get_post_meta( get_the_ID(), 'women_specialty', true);
    $women_social = get_post_meta( get_the_ID(), 'women_social', true); //this is twitter
    $women_instagram = get_post_meta( get_the_ID(), 'women_instagram', true);
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
           
                <?php if( ! empty( $women_displayname ) ) {
                    ?><h1><?php echo $women_displayname;?></h1><?php
	            }?>

                <?php if( ! empty( $women_title ) ) {
                    ?><p class="womentitle"><?php echo $women_title;?></p><?php
	            }?>
                <?php if( ! empty( $women_institution ) ) {?>
                    <p><?php echo $women_institution;?></p><?php
	            }?>

               
<?php // the BUTTON is here: ?>
                <?php if( ! empty( $women_email ) ) {?>
                     <p class="contactwoman" onclick="showhide()">Contact Me</p>                   
                     <!--<p class="contactwoman"><a href="mailto:<?php //echo $women_email;?>">Email Me</a></p>-->                     
                     <?php               
	            }?>
                

<?php
//local host is 6340
//server is 7410
//you gave up on the form for now.
?>
                <div id="divshowhide" style="display:none;">
                    <?php  echo do_shortcode('[contact-form-7 id="7410" title="Women"]') ;?>  
                    <br/>





                </div>  


<?php // show hide: ?>
                  <script>
                    function showhide() {
                    var x = document.getElementById("divshowhide");
                    if (x.style.display === "none") {
                        x.style.display = "block";
                    } else {
                        x.style.display = "none";
                    }
                    }
                </script>


<?php // using sendgrid, but did not verify the DNS, but it says it's working: https://wpmailsmtp.com/docs/how-to-set-up-the-sendgrid-mailer-in-wp-mail-smtp/ 
 //https://app.sendgrid.com/email_activity?filters=%22%22&isAndOperator=true&page=1
 //https://sevenspark.com/docs/contact-form-7-dynamic-text-extension/shortcodes
 //https://wpmailsmtp.com/docs/how-to-set-up-the-sendgrid-mailer-in-wp-mail-smtp/
 // https://stackoverflow.com/questions/39953217/contact-form-7-dynamic-recipient-email
 //https://stackoverflow.com/questions/25817442/change-cf7-form-values-dynamically  
 //YOUR ANSWER FROM STACK OVERFLOW: https://stackoverflow.com/questions/66881074/wordpress-contact-form-7-insert-dynamic-to-address-based-on-meta-data
?>



              
                <div class="profilepiccenter">
                <?php if ( has_post_thumbnail() ) {
                    //display the full size image:
                    the_post_thumbnail();
                }
                else {
                    //echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
                   //     . '/images/thumbnail-default.jpg" />';
                   echo "please upload a featured image.";
                }
                ?>
                </div>

                

                <?php if( ! empty( $women_shelooks ) ) {?>
                    <h2>#shelookslikeacardiologist</h2>
                    <div class="seventyfive"><p><?php echo $women_shelooks;?></p></div><?php
	            }?>


                <?php if( ! empty( $women_specialty ) ) {?>
                    <h2>Specialty</h2>
                    <p><?php echo $women_specialty;?></p><?php
	            }?>

                <?php if( ! empty( $women_social ) ) {?>
                    <p>Twitter: @<?php echo $women_social;?></p><?php
	            }?>

                <?php if( ! empty( $women_instagram ) ) {?>
                    <p>Instagram: @<?php echo $women_instagram;?></p><?php
	            }?>

                <div class="seventyfive">
                    <?php the_content(); ?>
                </div>
                <h2 class="short seventyfive"><?php echo $women_short;?></h2>

            <?php endwhile; else: ?>
                <p><?php _e('Sorry, this page does not exist.'); ?></p>
            <?php endif; ?>
            


</div><!--16 col-->
        	
	</div><!-- container -->
</div><!--off wrapper?-->




<?php get_footer(); ?>