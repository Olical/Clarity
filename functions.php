<?php

// Add action hooks if we are not in the admin section
if (!is_admin())
{
	add_action('init', 'clarity_theme_init');
}

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