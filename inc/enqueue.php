<?php
/**
 * Enqueue scripts and styles.
 */
function thenobility_scripts() {

	// Add custom fonts, used in the main stylesheet.
	//wp_enqueue_style( 'restaurant-fonts', restaurant_theme_fonts_url(), array(), null );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '4.0.0', 'all' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '4.7.0', 'all' );
	wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.css', array(), '3.6.0', 'all' );
	wp_enqueue_style( 'slicknav', get_template_directory_uri().'/assets/css/slicknav.css', array(), '1.0.10', 'all' );
	wp_enqueue_style( 'restaurant-default-style', get_template_directory_uri().'/assets/css/default.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'restaurant-demo-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
	wp_enqueue_script( 'slicknav', get_template_directory_uri().'/assets/js/jquery.slicknav.min.js', array('jquery'), '3.3.7', true );
	wp_enqueue_script( 'popper', get_template_directory_uri().'/assets/js/popper.min.js', array('jquery'), '3.3.7', true );
	wp_enqueue_script( 'wow', get_template_directory_uri().'/assets/js/wow-1.3.0.min.js', array('jquery'), '1.3.0', true );
	wp_enqueue_script( 'main', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '2.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}    
    
}
add_action( 'wp_enqueue_scripts', 'thenobility_scripts' );
