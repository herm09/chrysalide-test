<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chrysalide_wp_test
 */

get_header();

?>

<main id="primary" class="site-main">

	<?php if (have_posts()): ?>

		<header class="page-header">
		
			<div class="actu_pres">
				<h1 class="lesactualités">Nos actualités</h1>
				<p>Restez à jour avec les dernières nouvelles et événements de notre association. Découvrez nos réalisations, témoignages inspirants, p
					artenariats et opportunités de bénévolat. Rejoignez-nous dans notre quête d'inclusion et d'épanouissement pour tous.
				</p>
			</div>
			
		</header><!--
			 .page-header -->
		<?php 
	?>
		

	<section class="carte-actualites">
		<!-- Ici importer limage avec la vague voir maquette-->
		<?php
		/* Start the Loop */
		while (have_posts()):
			the_post(); ?>
			<div class="actualites-cards<?= $i ?>">

				<div class="actu-align">
					<a class="lien" href="<?php the_permalink(); ?>">

						<?php the_post_thumbnail(); ?>
					</a>
					<div class="revetements_content">

						<h2>
							<?php the_title(); ?>
						</h2>
						<p>
							<?php the_excerpt(); ?>
						</p>

					</div>
				</div>
			</div>

		<?php endwhile; ?>
	</section>
		

	<section id="adherer" class="Adherant">

		<div class="div-adherer">
			<div class="div-besoin">
				<p>Nous avons besoin de vous!</p>
			</div>

			<div class="div-rejoindre">
				<p>Rejoignez nous en devenant donateur.</p>
			</div>

			<div class="butonSoutiens">
				<a href="themes/chrysalide/page-dons.php"">
				<button class="div-bouton">Nous soutenir</button>
				</a>
			</div>

		</div>

	</section>

	<?php else:

		get_template_part('template-parts/content', 'none');

	endif; ?>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
