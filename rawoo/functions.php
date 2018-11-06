<?php

function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
};
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );


function rawoo_enqueue_style() {
	wp_enqueue_style( 'rawoo-style', get_stylesheet_uri());
	wp_enqueue_style('css-fontawesome', get_template_directory_uri().'/node_modules/@fortawesome/fontawesome-free/css/all.css', false);
	wp_enqueue_style('css-bootstrap', get_template_directory_uri().'/node_modules/bootstrap/dist/css/bootstrap.min.css', false);
}

function rawoo_enqueue_script() {
	wp_enqueue_script( 'rawoo-script', get_stylesheet_uri());
	wp_enqueue_script('js-jquery', get_template_directory_uri().'/node_modules/jquery/dist/jquery.min.js', false);
	wp_enqueue_script('css-bootstrap', get_template_directory_uri().'/node_modules/bootstrap/dist/js/bootstrap.min.js', false);
}

add_action("wp_enqueue_scripts", "rawoo_enqueue_style");
add_action("wp_enqueue_scripts", "rawoo_enqueue_script");


 ?> 