<!DOCTYPE html>
<html <?php language_attributes();?>>
	<script src='http://code.jquery.com/jquery-1.11.3.min.js'></script>
	<script src="functions.js"></script>
	<link rel="stylesheet" href="CSS/Atrian.css"/>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class();?>>
	<!-- site header-->
		<header id="The_Header">
			<h1><a href="<?php echo home_url(); ?>"> The <?php bloginfo('name'); ?></a> </h1>
			<nav class="Top_Menu">
				<?php 
					$args = array(
						'theme_location' => 'primary'
					);
					wp_nav_menu( $args ); 
				?>
			</nav>
		</header>