<?php
/**
 * Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kulmaus
 */

/**
 * The theme definitions
 */
define( 'KULMAUS_VERSION', '6.0' );
define('THEMEROOT', get_stylesheet_directory_uri()); // Set themeroot URL to THEMEROOT
define('IMAGES', THEMEROOT . '/images'); // Set images URL to IMAGES

/**
 * Enable theme support for essential features
 */
load_theme_textdomain( 'kulmaus', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

/**
 * Register sidebars
 */
register_sidebar( array(
  'name' => __( 'Sidebar', 'kulmaus' ),
  'id' => 'sidebar-1',
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget' => "</aside>",
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>',
  )
);

/**
 * Disable emojicons introduced with WP 4.2
 * @link http://wordpress.stackexchange.com/questions/185577/disable-emojicons-introduced-with-wp-4-2
 */
function disable_wp_emojicons() {
  // All actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  // Remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );
// Disable TinyMCE emojicons
function disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}

/**
 * Set a locale for English language
 */
setlocale( LC_ALL, 'en_EN.utf8' );

/**
 * Navigation menus.
 */
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'kulmaus' ),
) );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function kulmaus_pingback_header() {
	if ( is_singular() && pings_open() ) :
		echo '<link rel="pingback" href="', bloginfo( 'pingback_url' ), '">';
	endif;
}
add_action( 'wp_head', 'kulmaus_pingback_header' );

/**
 * Enqueue scripts and styles.
 */
function kulmaus_scripts() {
  wp_enqueue_style( 'styles', THEMEROOT . '/css/layout.css' );
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), false, true); // Load jQuery @ Footer
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'scripts', THEMEROOT . '/js/all.js', array(), KULMAUS_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'kulmaus_scripts' );

/**
 * Remove Query Strings
 */
function _remove_script_version( $src ){
  $parts = explode( '?', $src );
  return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );