<?php


// Load style.css on the front-end through the function wp_enqueue_scripts
function agrippa_enqueue_styles() {
	wp_enqueue_style( 
		'agrippa-style', 
		get_stylesheet_uri()    /* ->Returns the active theme’s style.css file URL*/
	);
}

add_action( 'wp_enqueue_scripts', 'agrippa_enqueue_styles' );


// Allow the custom CSS in style.css to load in the editor  
function agrippa_setup() {
    add_editor_style( get_stylesheet_uri() );
}

add_action( 'after_setup_theme', 'agrippa_setup' );
    

