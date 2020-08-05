<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="Budd Research Group">
	<title>Budd Research Group</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>

<body>
	
	<div class="container">

		<header class="flexCentered">
			<?php the_custom_logo(); ?>
			

		</header>

		<nav>
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">☰</button>
		
				
				<!--THIS IS HOW WE DO A MENU!-->
				<?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>

			


		</nav>
