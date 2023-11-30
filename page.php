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


		<section class="valeurs">

			<h1>Notre concept</h1>

			<div class="divValeurs">

				<div class="Inclus">
					<img src="<?php echo get_template_directory_uri(); ?>/img/autistes_youpi.png" alt="Inclusivité" class="valeursInclus">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores molestias corrupti 
						blanditiis deserunt magni ipsa veritatis laborum voluptatum pariatur aperiam aspernatur 
						molestiae neque sit consequuntur, facilis ratione hic ipsum? Tempore.</p>
				</div>
				<div class="Eco">
					<img src="<?php echo get_template_directory_uri(); ?>/img/plantes.png" alt="Ecologie" class="valeursEco">
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid nulla iure pariatur 
						eius delectus ex est illum perspiciatis inventore harum eum rerum architecto quibusdam, 
						sint numquam obcaecati repudiandae iusto esse!</p>
				</div>
				<div class="Techno">
					<img src="<?php echo get_template_directory_uri(); ?>/img/techno.png" alt="Technologie" class="valeursTechno">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore soluta blanditiis porro 
						voluptatum, odit cupiditate, ea quidem libero ratione assumenda expedita, temporibus 
						pariatur inventore sapiente similique. Enim, voluptates ipsum. Beatae!</p>
				</div>

			</div>

		</section>
		

		<section class=soutiens>

			<h2 class="soutiensh2">Nous avons besoin de vous !</h2>
			<h1 class="soutiensh1">Rejoignez nous en devenant adhérant(e).</h1>

			<button class="soutenir">Voir plus</button>

		</section>






		<section class="section2">

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


		<section class="section3">

			<h1 class="titre2">Inclusivité</h1>

			

			<div class="inclusivite">

				<div class="inclusImg">
					<img src="<?php echo get_template_directory_uri(); ?>/img/inclus.png" alt="maison" class="people">
				</div>

				<p class=inclus>Une maison inclusive, où des personnes handicapées ainsi que des adultes valides vivent en communauté
				et partagent le projet de "vivre ensemble" fondé sur des relations humaines, amicales et fraternelles. <br> <br>
				Un lieu de vie répondant aux attentes et aux besoins des personnes handicapées, où chacin se sent bien et peut déployer
				ses compétences au service de tous, et où l'aidé peut devenir aidant.</p>
			</div>
			


		</section>
		
			
		<section class="section4">

			<h1 class="titre3">Technologie</h1>

			<div>

				<div>


				</div>

				<div>


				</div>

				<div>


				</div>

			</div>

		</section>
			


	

	</main><!-- #main -->

<?php

get_footer();
