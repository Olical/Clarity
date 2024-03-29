<!DOCTYPE html>
<html lang='en'>
	<head>
		<title><?php the_title(); ?></title>
		<meta name='author' content='Oliver Caldwell' />
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
		<!--[if lt IE 9]><script type='text/javascript' src='<?php bloginfo('template_url'); ?>/assets/javascript/html5.js'></script><![endif]-->
		<?php wp_head(); ?>
	</head>
	
	<body>
		<div class='container'>
			<header class='sixteen columns'>
				<h1><a href='/'><?php bloginfo('name'); ?></a></h1>
				<p><em><?php bloginfo('description'); ?></em></p>
			</header>
			
			<nav class='sixteen columns'>
				<?php
					wp_nav_menu(array(
						'menu' => 'Main navigation',
						'container_class' => 'main-navigation-container',
						'items_wrap' => '<ul class=\'main-navigation\'>%3$s</ul>'
					));
				?>
			</nav>
			
			<section class='eleven columns'>