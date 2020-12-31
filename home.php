<?php
    /**
     * The template for displaying all blog posts
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
<div class="blog">
    <div class="full-width">
        <div class="container">
              <?php
                if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb('
                    <p id="breadcrumbs">','</p>');
                }
                ?>
                <div class="wrapper">
                      <?php dynamic_sidebar( 'sidebar-2' ); ?>
                     <main class="wisdom-opinion">
                <?php get_template_part( 'template-parts/content', 'blog' ); ?>
            </main>
                </div>
           
            <!-- #main -->
            <?php
                /** 
                 * Create numeric pagination in WordPress
                 */
                
                // Get total number of pages
                global $wp_query;
                $total = $wp_query->max_num_pages;
                // Only paginate if we have more than one page
                if ( $total > 1 )  {
                	// Get the current page
                	if ( !$current_page = get_query_var('paged') )
                		$current_page = 1;
                	// Structure of “format” depends on whether we’re using pretty permalinks
                	$format = empty( get_option('permalink_structure') ) ? '&page=%#%' : 'page/%#%/';
                	echo paginate_links(array(
                		'base' => get_pagenum_link(1) . '%_%',
                		'format' => $format,
                		'current' => $current_page,
                		'total' => $total,
                		'mid_size' => 4,
                		'type' => 'list'
                	));
                }?>
        </div>
    </div>
</div>
<?php
get_footer();