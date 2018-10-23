<?php

/**
MedicalHospital functions and definitions
@link https://developer.wordpress.org/themes/basics/theme-functions/
@package MedicalHospital
*/

// подключение фрейворкаOptionTree.
 add_filter( 'ot_theme_mode', '__return_true' );
 add_filter( 'ot_show_new_layout', '__return_false' );
 add_filter( 'ot_show_pages', '__return_false' );

function theme_options_parent($parent ) {
 	$parent = '';
	return $parent;
 }
 add_filter( 'ot_theme_options_parent_slug', 'theme_options_parent',20 );
/**
 * Required: include OptionTree.
 */
 require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
 require( trailingslashit( get_template_directory() ) . 'functions/theme-options.php' );
 require( trailingslashit( get_template_directory() ) . 'functions/meta-boxes.php' );



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


	function medhosp_setup() {
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
register_nav_menu( 'primary', 'Верхнее меню в шапке' );
register_nav_menu( 'qwiklinks', 'Быстрые ссылки в футере' );
register_nav_menu( 'ourservices', 'Наши услуги' );


		/* Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5. */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
	}

add_action( 'after_setup_theme', 'medhosp_setup' );



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function medhosp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'medhosp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'medhosp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'medhosp_widgets_init' );


