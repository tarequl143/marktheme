<?php

function mark_theme_setup(){
	load_theme_textdomain('mark', get_template_directory_uri()."/languages");
	add_theme_support( 'post-thumbnails' ); 
	add_theme_support('title-tags');
	add_theme_support('automatic-feed-links');
	add_theme_support('custom-logo');
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'gallery',
		'caption',
		'comment-list'
	));
	
	register_nav_menu("top-main-menu", __("Top Main Menu", "mark"));
}
add_action('after_setup_theme', 'mark_theme_setup');

?>