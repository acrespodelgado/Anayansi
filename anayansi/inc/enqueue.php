<?php
/**
 * UnderStrap enqueue scripts
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );	
		wp_enqueue_style( 'linear-styles', 'https://cdn.linearicons.com/free/1.0.0/icon-font.min.css', array(), $css_version );
		wp_enqueue_style( 'animation-styles', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), $css_version );
		wp_enqueue_style( 'owl-styles', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), $css_version );
		wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), $css_version );
		wp_enqueue_style( 'anayansi-styles', get_template_directory_uri() . '/css/anayansi.css', array(), $css_version );
		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		wp_enqueue_script( 'fontawesome-scripts', 'https://kit.fontawesome.com/04d63b174a.js', array(), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
		wp_enqueue_script( 'owl-scripts', get_template_directory_uri() . '/js/owl.carousel.js', array(), $js_version, true );
		wp_enqueue_script( 'anayansi-scripts', get_template_directory_uri() . '/js/anayansi.js', array(), $js_version, true );
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
