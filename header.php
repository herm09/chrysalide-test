<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Maison Chrysalide
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Plus+Jakarta+Sans:ital,wght@0,200;1,200&display=swap" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'maison-chrysalide' ); ?></a>

	<header id="masthead" class="site-header">
		
		<div class="site-branding">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo Maison Chrysalide" class="logo">
		</div><!-- Logo de maison chrysalide -->

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'menu-1',
					'menu-class'	 => 'menu-1',
					'menu-container' => 'nav'
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->


	<script src="main.js"></script>


</div>