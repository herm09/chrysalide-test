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
		
		<div class="text">
				<p>
				Bienvenue sur Ping Passion, votre destination en ligne pour tout ce qui concerne le tennis de table ! Que vous 
				soyez un joueur débutant, un amateur passionné ou un professionnel chevronné, notre site est conçu pour vous offrir une 
				expérience riche en informations, ressources et inspiration pour améliorer vos compétences et votre passion pour ce 
				sport dynamique.
				<br>
				<h3>À propos de nous :</h3>
				Ping Passion a été créé par une équipe de passionnés du tennis de table déterminés à promouvoir et à développer ce 
				sport fascinant. Notre objectif est de fournir des ressources de qualité, de stimuler la croissance de la communauté de 
				joueurs et d'inspirer une nouvelle génération de pongistes.
				<br>
				Rejoignez-nous sur Ping Passion et faites partie de cette aventure passionnante du tennis de table. Que vous soyez 
				un joueur en herbe ou un vétéran de la table, nous sommes là pour nourrir votre passion et améliorer vos 
				compétences. Vivez, respirez et jouez au ping-pong avec Ping Passion !
				<br><br>
				Visitez notre site dès maintenant : www.pingpassion.com
				<br><br>
				Suivez-nous sur les réseaux sociaux : Facebook, Twitter, Instagram.
				</p>
			</div>

	</main><!-- #main -->

<?php

get_footer();
