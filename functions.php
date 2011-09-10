<?php

// Add action hooks
add_action('init', 'clarity_theme_init');

/**
 * Initialises specifically frontend items
 */
function clarity_theme_init_frontend()
{
	// Grab the template URL
	$template_url = get_bloginfo('template_url');
	
	// Register styles
	wp_register_style('skeleton', $template_url . '/assets/css/skeleton.css', false, '1.1');
	wp_register_style('droid_sans_font', 'http://fonts.googleapis.com/css?family=Droid+Sans');
	wp_register_style('clarity_theme_styles', $template_url . '/style.css', array('skeleton', 'droid_sans_font'));
	
	// Register scripts
	wp_register_script('mootools', $template_url . '/assets/javascript/mootools.js', false, '1.4.0', true);
	wp_register_script('clarity_theme_scripts', $template_url . '/assets/javascript/clarity.js', array('mootools'), false, true);
	
	// Enqueue styles
	wp_enqueue_style('clarity_theme_styles');
	
	// Enqueue scripts
	wp_enqueue_script('clarity_theme_scripts');
	
	// Remove all of the random crap WordPress dumps in the header
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'rel_canonical');
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
	wp_deregister_script('l10n');
}

/**
 * Initialises the theme
 */
function clarity_theme_init()
{
	if (!is_admin())
	{
		clarity_theme_init_frontend();
	}
	
	// Register widget areas
	register_sidebar(array(
		'name'=> 'Right widget area',
		'id' => 'right_widget_area',
		'before_widget' => '<li>',
		'after_widget' => '</li>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
}