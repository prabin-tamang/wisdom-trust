<?php
    /**
     * The template for displaying all single posts
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
     *
     * @package Wisdom
     */
    
    get_header();
    ?>
<div class="single-blog-content">
    <div class="full-width">
        <div class="container">
            <main>
                <?php
                    while ( have_posts() ) :
                    	the_post();
                    
                    	get_template_part( 'template-parts/content', get_post_type() );
                    
                    	the_post_navigation(
                    		array(
                    			'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'wisdom-trust' ) . '</span> <span class="nav-title">%title</span>',
                    			'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'wisdom-trust' ) . '</span> <span class="nav-title">%title</span>',
                    		)
                    	);
                    
                    
                    
                    endwhile; // End of the loop.
                    ?>
            </main>
            <!-- #main -->
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php
get_footer();