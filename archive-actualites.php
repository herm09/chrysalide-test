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
			<?php
			the_archive_title('<h1 class="page-title">', '</h1>');
			the_archive_description('<div class="archive-description">', '</div>');
			?>
		</header><!-- .page-header -->
		<section class="actualités-concept">
			<div class="div-inclu1">

				<div class="div-actus1">
					<div class="actus-titre">
						<h1>Notre concept</h1>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic odio repellat eum earum corrupti
							harum pariatur voluptatum voluptatem magni! Repellendus, earum atque voluptate culpa eius
							blanditiis. Esse officia earum sequi debitis aspernatur explicabo quam consectetur dolorem,
							quae, maiores assumenda ab!</p>
					</div>

				</div>
		</section>

		<section class="carte-actualites">
			<!-- Ici importer l'image avec la vague voir maquette
			 -->
			<?php
			/* Start the Loop */
			while (have_posts()):
				the_post(); ?>
				<div class="actualites-cards">

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

		<section id="adherer">
            <div class="div-adherer">
                <div class="div-besoin">
                    <p>NOUS AVONS BESOIN DE VOUS !</p>
                </div>
                <div class="div-rejoindre">
                    <p>REJOIGNEZ-NOUS EN DEVENANT DONATEUR.</p>
                </div>
                <div class="div-bouton">
                    <button>Voir plus</button>
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
