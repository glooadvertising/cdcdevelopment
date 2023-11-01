<?php

// ADD STYLESHEETS AND SCRIPTS
function add_theme_scripts_and_stylesheets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.min.css', array(), '1.1', 'all' );

	wp_enqueue_script( 'alpinejs', 'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js', array(), false, true );
	wp_enqueue_script( 'jquery-gallery', get_template_directory_uri() . '/assets/js/jquery-gallery.js', array( 'jquery' ), false, true);
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts_and_stylesheets' );

// ENABLE CLASSiC EDiTOR
add_filter('use_block_editor_for_post', '__return_false');

add_post_type_support( 'page', 'excerpt' );
add_theme_support( 'post-thumbnails' ); 