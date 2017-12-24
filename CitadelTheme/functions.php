<?php 
	function Citadel_resources(){
		wp_enqueue_style('style', get_stylesheet_uri());
	}

	add_action('wp_enqueue_scripts', 'Citadel_resources');
	
	//Menu Locations
	register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'footer' => __( 'Footer Menu'),
	'projectLinks' =>__('Project Links Menu'),
	'side' => __('Side Menu'),
	));