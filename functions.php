<?php
if ( ! function_exists( 'personalwp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function personalwp_setup() {
  if ( ! isset( $content_width ) ) {
	$content_width = 900;
}
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain( 'personalwp', get_template_directory() . '/languages' );

    /** Enable support for post thumbnails and featured images. */
    add_theme_support( 'post-thumbnails' );

    /** Add support for title tag */
    add_theme_support( 'title-tag' );

    /**  Add support for two custom navigation menus. */
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'personalwp' ),
        'secondary' => __('Secondary Menu', 'personalwp' )
    ) );
}
endif; // personalwp_setup
add_action( 'after_setup_theme', 'personalwp_setup' );

/** Custom Logo */
add_theme_support( 'custom-logo' );


/** Post Thumbnails */
add_theme_support( 'post-thumbnails' );


/** Feed Links */
add_theme_support( 'automatic-feed-links' );
function personalwp_custom_logo_setup() {
    $defaults = array(
        'height'      => 200,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'personalwp_custom_logo_setup' );


/** Load CSS and Javascripts */
function personalwp_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_script( 'scripts.js', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.4.1', true );
}
add_action( 'wp_enqueue_scripts', 'personalwp_styles' );


/** Load Font Awesome into the website's front-end */
function font_awesome_styles() {
	wp_enqueue_style( 'Font-awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'font_awesome_styles' );


/** Changing excerpt length */
function new_excerpt_length($length) {
return 60;
}
add_filter('excerpt_length', 'new_excerpt_length');


/** Custom Header Support */
add_theme_support( 'custom-header' );
$defaults = array(
	'default-image'          => '',
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );


/** Sidebar */
add_action( 'widgets_init', 'personalwp_widget_areas' );
function personalwp_widget_areas() {
    register_sidebar( array(
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'description' => 'The main sidebar shown on the right in our awesome theme',
        'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ));
}

?>
