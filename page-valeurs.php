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
 * @package chrysalide
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

    <!-- SECTION CAROUSEL -->

    <!-- <section id="carrousel">
        
    </section> -->

    <!-- SECTION CONCEPT -->

    <!-- <section id="concept">
        <h2>Notre concept</h2>
        <div class="div-concept">
            <div class="div-inclu">
                <img src="inclu.jpg" alt="Inclusivité" class="img-inclu">
                <h3>Inclusivité</h3>
                <p>Description de l'inclusivité...</p>
            </div>
            <div class="div-eco">
                <img src="eco.jpg" alt="Ecologie" class="img-eco">
                <h3>Ecologie</h3>
                <p>Description de l'écologie...</p>
            </div>
            <div class="div-techno">
                <img src="techno.jpg" alt="Technologie" class="img-techno">
                <h3>Technologie</h3>
                <p>Description de la technologie...</p>
            </div>
        </div>
    </section> -->

	<!-- <section id="adherer">
        <div class="div-adherer">
            <div class="div-besoin">
                <p>NOUS AVONS BESOIN DE VOUS</p>
            </div>
            <div class="div-rejoindre">
                <p>REJOIGNEZ-NOUS EN DEVENANT ADHERENT.</p>
            </div>
            <div class="div-bouton">
                <button>Voir plus</button>
            </div>
        </div>
    </section> -->

	<!-- SECTION ACTUALITES -->

	<!-- <section id="actualites">
        <h2>Actualités</h2>
        <div class="div-actu1">
            <h3>Actu 1</h3>
            <img src="image_actu1.jpg" alt="Image Actualité 1">
            <p>Contenu de l'actualité 1...</p>
        </div>
        <div class="div-actu2">
            <h3>Actu 2</h3>
            <img src="image_actu2.jpg" alt="Image Actualité 2">
            <p>Contenu de l'actualité 2...</p>
        </div>
        <div class="div-actu3">
            <h3>Actu 3</h3>
            <img src="image_actu3.jpg" alt="Image Actualité 3">
            <p>Contenu de l'actualité 3...</p>
        </div>
        <div class="div-actu4">
            <h3>Actu 4</h3>
            <img src="url_de_l_image_actu4.jpg" alt="Image Actualité 4">
            <p>Contenu de l'actualité 4...</p>
        </div>
        <div class="div-actu5">
            <h3>Actu 5</h3>
            <img src="image_actu5.jpg" alt="Image Actualité 5">
            <p>Contenu de l'actualité 5...</p>
        </div>
    </section> -->


<!-- </body>
</html> -->

	</main><!-- #main -->

<?php

// get_sidebar();
get_footer();
