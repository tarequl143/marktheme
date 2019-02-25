<?php

function mark_assets() {

	wp_enqueue_style( 'mark-fonts', '//fonts.googleapis.com/css?family=Cabin|Open+Sans:300,400,600,700' );
	wp_enqueue_style( 'bootstrap-css', get_theme_file_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', null, time(), 'all' );
	wp_enqueue_style( 'fontawesome-css', get_theme_file_uri() . '/assets/vendor/font-awesome/css/font-awesome.min.css', null, time(), 'all' );
	wp_enqueue_style( 'bicon-css', get_theme_file_uri() . '/assets/vendor/bicon/css/bicon.css', null, time(), 'all' );
	wp_enqueue_style( 'owl-carousel-css', get_theme_file_uri() . '/assets/vendor/owl/assets/owl.carousel.min.css', null, time(), 'all' );
	wp_enqueue_style( 'owl-carousel-theme-css', get_theme_file_uri() . '/assets/vendor/owl/assets/owl.theme.default.min.css', null, time(), 'all' );
	wp_enqueue_style( 'magnific-popup-css', get_theme_file_uri() . '/assets/vendor/magnific-popup/magnific-popup.css', null, time(), 'all' );
	wp_enqueue_style( 'animate-css', get_theme_file_uri() . '/assets/vendor/animate.css', null, time(), 'all' );
	wp_enqueue_style( 'main-css', get_theme_file_uri() . '/assets/css/main.css', null, time(), 'all' );
	wp_enqueue_style( 'style-css', get_stylesheet_uri());

	wp_enqueue_script('bootstrap-js', get_theme_file_uri().'/assets/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('owl-carousel-js', get_theme_file_uri().'/assets/vendor/owl/owl.carousel.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('magnific-popup-js', get_theme_file_uri().'/assets/vendor/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('wow-js', get_theme_file_uri().'/assets/vendor/wow.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('visible-js', get_theme_file_uri().'/assets/vendor/visible.js', array('jquery'), 1.0, true);
	wp_enqueue_script('animatenumber-js', get_theme_file_uri().'/assets/vendor/jquery.animateNumber.min.js', array('jquery'), 1.0, true);
	wp_enqueue_script('isotope-js', get_theme_file_uri().'/assets/vendor/jquery.isotope.js', array('jquery'), 1.0, true);
	wp_enqueue_script('images-load-js', get_theme_file_uri().'/assets/vendor/imagesloaded.js', array('jquery'), 1.0, true);
	wp_enqueue_script('mark-scripts-js', get_theme_file_uri().'/assets/js/scripts.js', array('jquery'), 1.0, true);

}

add_action( 'wp_enqueue_scripts', 'mark_assets' );

?>