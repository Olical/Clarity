<?php

// Add action hooks
add_action('init', 'clarity_theme_init');

/**
 * Initialises the theme
 * Enqueues all scripts and styles
 */
function clarity_theme_init()
{
	// Grab the template URL
	$template_url = get_bloginfo('template_url');
	
	// Register styles
	wp_register_style('skeleton', $template_url . '/assets/css/skeleton.css', false, '1.1');
	wp_register_style('clarity_theme_styles', $template_url . '/style.css', array('skeleton'));
	
	// Register scripts
	wp_register_style('mootools', $template_url . '/assets/javascript/mootools.js', false, '1.4.0', true);
	wp_register_style('clarity_theme_scripts', $template_url . '/assets/javascript/clarity.js', array('mootools'));
	
	// Enqueue styles
	wp_enqueue_style('clarity_theme_styles');
	
	// Enqueue scripts
	wp_enqueue_script('clarity_theme_scripts');
}