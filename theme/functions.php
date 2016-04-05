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
    * Contact Form
    */
// grab recaptcha library
require_once "recaptchalib.php";
// your secret key
$secret = "6LddFgoTAAAAALZQWeg7vif3179mdISRDCs_302S";
 
// empty response
$response = null;
 
// check secret key
$reCaptcha = new ReCaptcha($secret);

// Check Submitted recaptcha response
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REQUEST_URI"],
        $_POST["g-recaptcha-response"]
    );
}

function contactForm() {
    return '
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" id="contact-form">
                    <fieldset>
                        <legend class="text-center header">Contact Me</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="name" name="name" type="text" placeholder="First Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="name" name="name" type="text" placeholder="Last Name" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="subject" name="subject" type="text" placeholder="Subject" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg" id="contact-submit">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                    <div class="success">
                        <div class="alert alert-success">
                            <p>Your Message has successfully been sent feel free to scope out more of my site in the mean time.</p>
                            <a class="ghost-dark button" href="portfolio">Portfolio</a>
                            <a class="ghost-dark button" href="blog">Portfolio</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>';
}

add_shortcode('contact-form', 'contactForm');

function contactForm_send(){
    $headers = "From: " . $name . "\r\n";
    $headers .= "Reply-To: ". $email . "\r\n";
    $headers .= "CC: daygon07@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    
    $message = '<html><body>';
    $message .= '<h1>Email from Personal Website</h1>';
    $message .= '<p>' . $name . ' wants to know about '. $subject . '<p>';
    $message .= '<p>' . $message . '</p>';
    
    $name = sanitize_text_field($_POST['name']);
	$email = sanitize_email($_POST['email']);
	$phone = sanitize_text_field($_POST['phone']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_text_field($_POST['message']);
	$to = get_option('admin_email');
    
    if(isset($_POST)){
        if (empty($name)){
            echo 'Please Enter Name';
        }
        if (empty($email)){
            echo 'Please Enter Valid Email';
        }
        if (empty($phone)){
            echo 'Please Enter Phone Number';
        }
        if (empty($subject)){
            echo 'Please Enter Name';
        }
        if (empty($message)){
            echo 'Please Enter Name';
        }
    }
    

    
    
    wp_mail($to, $subject, $message, $headers);

}
add_action('wp_ajax_contactForm_send', 'contactForm_send');
add_action('wp_ajax_nopriv_contactForm_send', 'contactForm_send');
