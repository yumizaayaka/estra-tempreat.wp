<?php
function twpp_enqueue_styles(){
	wp_enqueue_style( 'reset-sheet-name', get_theme_file_uri( '/css/reset.css' ) );
    wp_enqueue_style( 'common-sheet-name', get_theme_file_uri( '/css/common.css' ) );
    wp_enqueue_style( 'style-sheet-name', get_theme_file_uri( '/style.css' ));
    
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/main.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );
