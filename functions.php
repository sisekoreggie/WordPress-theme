<?php
register_sidebar(array(
		'name' => __('First Right Sidebar'),
		'id'   => 'first-right-sidebar',
		'description' => 'The widget position in the top right sidebar',
		'before_title' => '<h2>',
		'after_title'  => '</h2>'
	));

register_sidebar(array(
		'name' => __('Second Right Sidebar'),
		'id'   => 'second-right-sidebar',
		'description' => 'The widget position in the bottom right sidebar',
		'before_title' => '<h2>',
		'after_title'  => '</h2>'
	));

register_sidebar(array(
		'name' => __('Header Right'),
		'id'   => 'header-right',
		'description' => 'The widget position in the header right',
		'before_title' => '<h2>',
		'after_title'  => '</h2>'
	));
	
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// Display 24 products per page. Goes in functions.php
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 24;' ), 20 );

// Change number or products per row to 2
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 2; //display 2 products per row
	}
}

// Override theme default specification for product # per row
function loop_columns() {
	return 2; // 2 products per row
}
add_filter('loop_shop_columns', 'loop_columns', 999);