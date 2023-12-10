<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ping_passion
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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ping-passion' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo Maison Chrysalide" class="logo_chrysalide">
		</div><!-- Logo de maison chrysalide -->

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'header-menu',
					'menu_id'        => 'header-menu',
					'menu-class'	 => 'header-menu',
					'menu-container' => 'nav'
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->