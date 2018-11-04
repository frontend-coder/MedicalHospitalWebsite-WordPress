<?php

/** подключение стилей и JS
 * Enqueue scripts and styles.
 */

function medhosp_style() {
wp_enqueue_style( 'main-style', get_stylesheet_uri() );
wp_enqueue_style( 'libscssmin', get_template_directory_uri() . '/css/libs.min.css', array('main-style')  );
}
add_action( 'wp_enqueue_scripts', 'medhosp_style' );

function medhosp_scripts() {
wp_deregister_script( 'jquery' );
wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js',array(),'1',true);
wp_enqueue_script( 'jquery' );
wp_enqueue_script( 'medhosp_scripts', get_template_directory_uri() . '/js/libs.min.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'medhosp_scripts' );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }