<?php
/**
 * Wisdom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wisdom
 */


// enqueue stylesheet and js

function wisdom_custom_theme() {

    // register stylesheet and js
    wp_register_style('main_css', get_template_directory_uri(). '/style.css', false, '1.0.0');
    wp_register_script('main-js', get_template_directory_uri(). '/js/min/main.min.js', array(), '1.0.0', true);
    
    // enqueue stylesheet and js
    wp_enqueue_style('main_css'); 
	wp_enqueue_script('main-js');
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900', false ); 
}
add_action('wp_enqueue_scripts', 'wisdom_custom_theme');


if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'wisdom_trust_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wisdom_trust_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Wisdom, use a find and replace
		 * to change 'wisdom-trust' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wisdom-trust', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'wisdom-trust' ),
				'menu-2' => esc_html__( 'Secondary', 'wisdom-trust' )
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'wisdom_trust_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'wisdom_trust_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wisdom_trust_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wisdom_trust_content_width', 640 );
}
add_action( 'after_setup_theme', 'wisdom_trust_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wisdom_trust_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wisdom-trust' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'wisdom-trust' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);


		register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar2', 'wisdom-trust' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'wisdom-trust' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wisdom_trust_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wisdom_trust_scripts() {
	wp_enqueue_style( 'wisdom-trust-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'wisdom-trust-style', 'rtl', 'replace' );

	wp_enqueue_script( 'wisdom-trust-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wisdom_trust_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}



// Adding class to header and footer navigation (li)

add_filter( 'nav_menu_css_class', 'special_nav_class', 10, 3 );
function special_nav_class( $classes, $item, $args ) {
    // li class for header
    if ( 'menu-1' === $args->theme_location ) {
        $classes[] = 'nav-link';
    }
    // li class for footer
    if ( 'footer_menu' === $args->theme_location ) {
        $classes[] = 'footer-link';
    }

    return $classes;
}



// BUDDYPRESS

// logout redirect TO HOME
add_action('wp_logout',create_function('','wp_redirect(home_url());exit();'));


// SMTP BUDDYPRESS 
add_filter( 'bp_email_use_wp_mail', '__return_true' );


function mytheme_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );



// get rid of 32px margin html

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');




// function move_admin_bar() {
// echo '
// <style type="text/css">
// body.admin-bar #wphead {padding-top: 0;}
// body.admin-bar #footer {padding-bottom: 28px;}
// #wpadminbar { top: auto !important;bottom: 0;}
// #wpadminbar .quicklinks .menupop ul { bottom: 28px;}
// </style>';
// }
// add_action( 'wp_head', 'move_admin_bar' );



//Exclude pages from WordPress Search
if (!is_admin()) {
function wpb_search_filter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}
add_filter('pre_get_posts','wpb_search_filter');
}



// custom post type for VOTES
function votes_post_type() {

	$args = array(
		'labels' => array(
			'name' => 'Homepage Contents',
			'singular_name' => 'Homepage Content',
		),
		// 'hierarchical' => true, 
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-thumbs-up',
		'supports' => array('title', 'editor', 'thumbnail'),
		// 'rewrite' => array('slug' => 'votes'),
	);

	register_post_type('votes', $args);

}

add_action('init', 'votes_post_type');



