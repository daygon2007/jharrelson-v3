<?php
/**
 * Jonathon Harrelson v3 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Jonathon_Harrelson_v3
 */

if ( ! function_exists( 'jonathon_harrelson_v3_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function jonathon_harrelson_v3_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Jonathon Harrelson v3, use a find and replace
	 * to change 'jonathon-harrelson-v3' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'jonathon-harrelson-v3', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'jonathon-harrelson-v3' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'jonathon_harrelson_v3_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'jonathon_harrelson_v3_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jonathon_harrelson_v3_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jonathon_harrelson_v3_content_width', 640 );
}
add_action( 'after_setup_theme', 'jonathon_harrelson_v3_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jonathon_harrelson_v3_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'jonathon-harrelson-v3' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'jonathon_harrelson_v3_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jonathon_harrelson_v3_scripts() {
    
    wp_deregister_script( 'jquery' );
    
	wp_enqueue_style( 'style', get_stylesheet_uri() );

    wp_enqueue_script( 'leadsius', 'http://app.leadsius.com/bundles/leadsiusplatform/leadsius/New-Form-Builder/public/lswf.js?v=20160414', array(), null, true );
    
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );
    
    wp_enqueue_script( 'recaptcha-api', 'https://www.google.com/recaptcha/api.js', array(), null, true );
    
    wp_localize_script('main', 'ajax_object', array('ajaxurl' => admin_url('admin-ajax.php'),));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    add_filter('script_loader_tag', 'add_async_attribute', 10, 2);
function add_async_attribute($tag, $handle) {
    if ( 'recaptcha-api' !== $handle )
        return $tag;
    return str_replace( ' src', ' defer sync src', $tag );
}
}
add_action( 'wp_enqueue_scripts', 'jonathon_harrelson_v3_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
	* Load Bootstrap NavWalker
	*/
require_once('wp_bootstrap_navwalker.php');
/**
    *Disable unneeded stuff
    */
function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

function disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}
add_action( 'widgets_init', 'my_remove_recent_comments_style' );
function my_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'  ) );
}

/**
    * Contact Form
    */

function contactForm() {
    return '
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm contact-full">
            <fieldset>
                <legend>Contact Me</legend>
            </fieldset>
                <div id="RWhZZ01nPT0="></div>
            </div>
        </div>
    </div>
</div>';
}

add_shortcode('contact-form', 'contactForm');
