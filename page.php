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


		<div class="Home">
			<img src="<?php echo get_template_directory_uri(); ?>/img/carousel1.png" alt="Image 1" class="imgHome"></a>
			<div class="texteSurImage">
				<h2>Maison Chrysalide</h2>
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum facere explicabo sit dolorum delectus 
					cumque eligendi animi quisquam, exercitationem, unde officia quidem. Repellat corrupti commodi odit 
					quaerat, expedita quo dignissimos?</p>
				<button class="Plus">Voir plus</button>
			</div>
		</div>


		<section class="concept">

			<h1>Notre concept.</h1>

			<div class="divConcept">

				<div class="Inclus">
					<img src="<?php echo get_template_directory_uri(); ?>/img/inclu.png" alt="Inclusivité" class="valeursInclus">
					<h3 class="txtInclus">Inclusivité</h3>
					<p><strong>Lorem ipsum</strong> <br> dolor sit amet consectetur adipisicing elit. Maiores molestias corrupti 
						blanditiis deserunt magni.</p>
				</div>

				<div class="Eco">
					<img src="<?php echo get_template_directory_uri(); ?>/img/eco.png" alt="Ecologie" class="valeursEco">
					<h3 class="txtEco">Ecologie</h3>
					<p><strong>Lorem ipsum</strong> <br> dolor, sit amet consectetur adipisicing elit. Aliquid nulla iure pariatur 
						eius delectus ex.</p>
				</div>

				<div class="Techno">
					<img src="<?php echo get_template_directory_uri(); ?>/img/technologie.png" alt="Technologie" class="valeursTechno">
					<h3 class="txtTech">Technologie</h3>
					<p><strong>Lorem ipsum</strong> <br> dolor sit amet, consectetur adipisicing elit. Labore soluta blanditiis porro 
						voluptatum, odit cupiditate.</p>
				</div>

			</div>

		</section>
		

		<section class=soutiens>


			<h2 class="soutiensh2">Nous avons besoin de vous !</h2>
			<br><br>
			<h1 class="soutiensh1">Rejoignez nous en devenant donateur.</h1>
			<br><br>

			<button class="soutenir">Voir plus</button>


		</section>


		<section class="actualites">

			<h1 class="actusTitre">Actualités.</h1>

			<div class="actusContent">

				<div class="actu1">
					<h2>Actu 1</h2>
				</div>

				<div class="actu2">
					<h2>Actu 2</h2>
				</div>

				<div class="actu3">
					<h2>Actu 3</h2>
				</div>

				<div class="actu4">
					<h2>Actu 4</h2>
				</div>

				<div class="actu5">
					<h2>Actu 5</h2>
				</div>

			</div>

		</section>
			


	

	</main><!-- #main -->

<?php

get_footer();
