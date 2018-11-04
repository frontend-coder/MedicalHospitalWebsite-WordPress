<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function medhosp_widgets_init() {
	register_sidebar( array(
		'name'          => 'Сайдбар для сайта',
		'id'            => 'sidebar-left',
		'description'   => 'Это единственная боковая панель, которая выводится слева от контента на обычных страницах, постов, рубрик, тегов и тому подобное',
	 'before_title'  => '<h2 class="footer_title">',
	 'after_title'   => '</h2>',
'before_widget' => '<div class="widget %2$s">',
'after_widget'  => '</div>'

	) );
}
add_action( 'widgets_init', 'medhosp_widgets_init' );






?>