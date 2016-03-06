<?php

	// Add RSS links to <head> section
	automatic_feed_links();

	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
       wp_register_script('bootstrap', ("http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"), false);
       wp_enqueue_script('bootstrap');
       wp_register_script('main', get_bloginfo('template_directory').'/js/main.js');
       wp_enqueue_script('main');
       wp_register_script('tab-nav', get_bloginfo('template_directory').'/js/tab-nav.js');
       wp_enqueue_script('tab-nav');

	}

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');

	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Left Sidebar',
    		'id'   => 'left-sidebar',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
// create menu support for theme
if (function_exists('register_nav_menus')){
    register_nav_menus (
        array(
            'main_nav' => 'Main Navigation Menu'
            )
    );
}

// feature image of post
if(function_exists('add_theme_support')){
    add_theme_support('post-thumbnails');
}
?>
