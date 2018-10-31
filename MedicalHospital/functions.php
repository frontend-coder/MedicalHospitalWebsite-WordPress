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
add_theme_support( 'post-thumbnails',array('post', 'page' ) );
add_image_size('post_thumb', 1300, 500, true);
add_image_size('man-post_thumb', 335, 215, true);

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

function wp_corenavi() {
global $wp_query, $wp_rewrite;
$pages = '';
$max = $wp_query->max_num_pages;
if (!$current = get_query_var('paged')) $current = 1;
$a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
$a['total'] = $max;
$a['current'] = $current;

$total = 0; //1 - выводить текст "Страница N из N", 0 - не выводить
$a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
$a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
$a['prev_text'] = '<i class="fas fa-caret-left"></i>'; //текст ссылки "Предыдущая страница"
$a['next_text'] = '<i class="fas fa-caret-right"></i>'; //текст ссылки "Следующая страница"

if ($max > 1) echo '<nav class="navigation">';
if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
echo $pages . paginate_links($a);
if ($max > 1) echo '</nav>';
}

//the_excerpt установка ссылки по выбору заказчика
add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_more($more) {
	global $post;
	return '';
}
//the_excerpt обрезка до 20 слов + вывод ссылки читать далее
function new_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');

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


