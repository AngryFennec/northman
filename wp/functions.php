<?php

function include_css () {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.min.css');
}

function include_script () {
    wp_enqueue_script( 'vendor', get_template_directory_uri() . '/assets/js/vendor.js', [], '', true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', [], '', true);
}

add_action( 'wp_enqueue_scripts', 'include_css' );
add_action( 'wp_enqueue_scripts', 'include_script' );

add_action( 'init', 'true_register_post_type_init' ); // Использовать функцию только внутри хука init
 
function true_register_post_type_init() {
	$labels = array(
		'name' => 'Service',
		'singular_name' => 'Service', // админ панель Добавить->Функцию
		'add_new' => 'add service',
		'add_new_item' => 'add new service', // заголовок тега <title>
		'edit_item' => 'edit service',
		'new_item' => 'new service',
		'all_items' => 'All services',
		'view_item' => 'view services',
		'search_items' => 'search services',
		'not_found' =>  'not found',
		'not_found_in_trash' => 'not found',
		'menu_name' => 'Service' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'has_archive' => true, 
		// 'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
		'menu_position' => 20, // порядок в меню
		'supports' => array( 'title')
	);
	register_post_type('functions', $args);
}

add_action('init', function() {
    pll_register_string('mytheme-header', 'Our Portfolio');
    pll_register_string('mytheme-header', 'Privacy Policy');
    pll_register_string('mytheme-feadback', 'Let’s discuss your project');
});

?>