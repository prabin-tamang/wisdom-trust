<?php
    /**
     * The template for displaying all pages
     *
     * This is the template that displays all pages by default.
     * Please note that this is the WordPress construct of pages
     * and that other 'pages' on your WordPress site may use a
     * different template.
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
     *
     * @package Wisdom
     */
    
    get_header();
    ?>
<div id="page">
    <div class="full-width">
        <div class="container">
            <!--breadcrumbs  -->
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb('
                    <p id="breadcrumbs">','</p>');
                }
                ?>
            <div class="wrapper">
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
                <main>
                    <?php get_template_part( 'template-parts/content', 'page' ); ?>
                </main>
                <!-- #main -->
            </div>
        </div>
    </div>
</div>
<?php
get_footer();