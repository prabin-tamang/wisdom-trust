<?php
    /**
     * Template part for displaying page content in page.php
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package Wisdom
     */
    
    ?>
<h1><?php the_title(); ?></h1>
<?php
if ( have_posts() ) : 
while ( have_posts() ) : the_post();
the_content();
endwhile;
else :
_e( 'Sorry, page doesnt exist.', 'textdomain' );
endif;