<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" type="image/png">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Aboreto&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lexend:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>

<body>
	<!-- Navbar -->
	<div class="header-nav">
		<header class="container">
			<nav class="navbar d-flex" id="navbar">
				<a class="navbar-brand" href="<?php echo home_url('/'); ?>">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/foreheads-logo.png" alt="Logo">
				</a>
				<?php
				wp_nav_menu(array(
					'menu' => "site menu",
					'menu_class' => "navbar-nav d-flex",
					'container_class'	=> "collapse navbar-collapse",
				));
				?>
				<a href="javascript:void(0);" class="icon btn" onclick="toggleNavbar()">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/nav-icon.svg" alt="nav-icon">
				</a>
			</nav>
		</header>
	</div>