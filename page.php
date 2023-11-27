<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Ping_passion
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			
		endwhile; // End of the loop.
		?>
		

		<h1>Nos actualités</h1>

		<div class="actus">

			<img src="<?php echo get_template_directory_uri(); ?>/img/maison.png" alt="maison" class="maison">

			<img src="<?php echo get_template_directory_uri(); ?>/img/humains_heureux.png" alt="Hommes heureux" class="hommesHeureux">

			<img src="<?php echo get_template_directory_uri(); ?>/img/autistes.youpi.png" alt="Happy" class="Happy">

		</div>

	</main><!-- #main -->

<?php

get_footer();
