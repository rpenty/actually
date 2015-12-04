<?php
/**
 * actually functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package actually
 */

if ( ! function_exists( 'actually_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function actually_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on actually, use a find and replace
	 * to change 'actually' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'actually', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary Menu', 'actually' ),
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
	add_theme_support( 'custom-background', apply_filters( 'actually_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // actually_setup
add_action( 'after_setup_theme', 'actually_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function actually_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'actually_content_width', 640 );
}
add_action( 'after_setup_theme', 'actually_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function actually_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'actually' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'actually_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function actually_scripts() {
	wp_enqueue_style( 'actually-style', get_stylesheet_uri() );
	wp_enqueue_style( 'actually-custom-style', get_template_directory_uri() . '/css/actually.css' );

	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'actually-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'actually-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'actually-script', get_template_directory_uri() . '/js/actually.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

function bootstrap_scripts() {
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/js/bootstrap.min.js' );
}

function fontawesome_scripts() {
	wp_enqueue_style( 'font-awesome-style', get_template_directory_uri() . '/css/font-awesome.min.css' );
}

function google_fonts() {
	wp_enqueue_style( 'google-font-crimson', 'https://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,700,700italic', false );
	wp_enqueue_style( 'google-font-roboto', 'http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic', false );
}

add_action( 'wp_enqueue_scripts', 'google_fonts' );


add_action( 'wp_enqueue_scripts', 'bootstrap_scripts' );
add_action( 'wp_enqueue_scripts', 'fontawesome_scripts' );
add_action( 'wp_enqueue_scripts', 'actually_scripts' );

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
