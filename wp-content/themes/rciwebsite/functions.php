<?php
    add_theme_support( 'menus' );
	function rciwebsite(){
		wp_enqueue_style('style',get_stylesheet_uri());
	}
	add_action('wp_enqueue_scripts','rciwebsite');

    //navigation menus
	register_nav_menus(
		array(
			'primary' => __('Primary Menu'),
			'footer' => __('Footer Menu')
		)
	);
?>