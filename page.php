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
		
		<section class="section1">

			<h1 class="titre1">Nos actualités</h1>

			<div class="actus">

				<div class="home">
					<img src="<?php echo get_template_directory_uri(); ?>/img/maison.png" alt="maison" class="maison">
					<p>Notre maison a été pensée pour acceuillir au mieux !</p>
				</div>

				<div class="humans">
					<img src="<?php echo get_template_directory_uri(); ?>/img/humains_heureux.png" alt="Hommes heureux" class="hommesHeureux">
					<p>Maison Chrysalide est aussi un endroit de rencontres et <br> de joie.</p>
				</div>

				<div class="fun">
					<img src="<?php echo get_template_directory_uri(); ?>/img/autistes_youpi.png" alt="Happy" class="Happy">
					<p>Nous sommes à votre écoute et disponibles.</p>
				</div>

			</div>

		</section>


		<section class="section2">

			<h1 class="titre2">Inclusivité</h1>

			<div class="inclusivite">
				<img src="<?php echo get_template_directory_uri(); ?>/img/inclus.png" alt="maison" class="people">

				<p class=inclus>Une maison inclusive, où des personnes handicapées ainsi que des adultes valides vivent en communauté
				et partagent le projet de "vivre ensemble" fondé sur des relations humaines, amicales et fraternelles. <br> <br>
				Un lieu de vie répondant aux attentes et aux besoins des personnes handicapées, où chacin se sent bien et peut déployer
				ses compétences au service de tous, et où l'aidé peut devenir aidant.</p>
			</div>
			


		</section>
		
			

			


	

	</main><!-- #main -->

<?php

get_footer();
