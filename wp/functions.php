<?php

// update_option('siteurl','http://logvinb9.beget.tech');
// update_option('home','http://logvinb9.beget.tech');

function include_css () {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.min.css');
}

function include_script () {
    wp_enqueue_script( 'vendor', get_template_directory_uri() . '/assets/js/vendor.js', [], '', true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', [], '', true);
}

add_action( 'wp_enqueue_scripts', 'include_css' );
add_action( 'wp_enqueue_scripts', 'include_script' );

add_action( 'init', 'true_register_post_type_init' );
add_action( 'init', 'true_register_post_type_portfolio_init' ); 
 
function true_register_post_type_init() {
	$labels = array(
		'name' => 'Service',
		'singular_name' => 'Service', 
		'add_new' => 'add service',
		'add_new_item' => 'add new service', 
		'edit_item' => 'edit service',
		'new_item' => 'new service',
		'all_items' => 'All services',
		'view_item' => 'view services',
		'search_items' => 'search services',
		'not_found' =>  'not found',
		'not_found_in_trash' => 'not found',
		'menu_name' => 'Service' 
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true,
		'has_archive' => true, 
		'menu_position' => 30, 
		'supports' => array( 'title')
	);
	register_post_type('functions', $args);
}

function true_register_post_type_portfolio_init() {
	$labels = array(
		'name' => 'Portfolio',
		'singular_name' => 'Portfolio', 
		'add_new' => 'add Portfolio',
		'add_new_item' => 'add new Portfolio',
		'edit_item' => 'edit Portfolio',
		'new_item' => 'new Portfolio',
		'all_items' => 'All Portfolio',
		'view_item' => 'view Portfolio',
		'search_items' => 'search Portfolio',
		'not_found' =>  'not found',
		'not_found_in_trash' => 'not found',
		'menu_name' => 'Portfolio' 
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true, 
		'has_archive' => true, 
		'menu_position' => 20, 
		'supports' => array( 'title')
	);
	register_post_type('Portfolio', $args);
}

add_action('init', function() {
	pll_register_string('mytheme-header', 'Our Portfolio');
	pll_register_string('mytheme-header', 'Main Page');
    pll_register_string('mytheme-header', 'Privacy Policy');
	pll_register_string('mytheme-feadback', 'Let’s discuss your project');
	pll_register_string('mytheme-feadback', 'VR');
	pll_register_string('mytheme-feadback', '3D');
	pll_register_string('mytheme-feadback', 'IVT');
	pll_register_string('mytheme-feadback', 'DS');
	pll_register_string('mytheme-feadback', '360');
});

?>