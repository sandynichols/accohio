<article class="content-block">
    <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail('women'); ?>
            </a>
    <?php endif; ?>                 
            
    <?php
    $women_email =     get_post_meta( get_the_ID(), 'women_email', true );                           
    $women_displayname =  get_post_meta( get_the_ID(), 'women_displayname', true );
    $women_shelooks =  get_post_meta( get_the_ID(), 'women_shelooks', true );
    $women_short =     get_post_meta( get_the_ID(), 'women_short', true );
    $women_specialty = get_post_meta( get_the_ID(), 'women_specialty', true );
    $women_title =     get_post_meta( get_the_ID(), 'women_title', true );
    $women_institution =   get_post_meta( get_the_ID(), 'women_institution', true );
    ?>

        <h1><a href="<?php echo the_permalink();?>" title=""><?php echo $women_displayname;?></a></h1>
            <ul class="womenresult">
                <?php echo "<li>".$women_institution  . "</li><li>". $women_specialty."</li>";  ?>
            </ul>

</article><!--off article-->