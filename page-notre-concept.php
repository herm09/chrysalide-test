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


		<header>
            <div class="Head">
                <img src="<?php echo get_template_directory_uri(); ?>/img/header2.png" alt="Header 2" class="imgHead"></a>
                <div class="texteSurImage">
                    <h2>Notre histoire</h2></h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum facere explicabo sit dolorum delectus 
                        cumque eligendi animi quisquam, exercitationem, unde officia quidem. Repellat corrupti commodi odit 
                        quaerat, expedita quo dignissimos?</p>
                    <button class="Plus">Voir plus</button>
                </div>
            </div>
        </header>
			

        <section class="Concept">

            <div class="imgConcept">
                <img src="<?php echo get_template_directory_uri(); ?>/img/papillon.png" alt="Papillon" class="imgPapillon"></a>
                <h2>Le concept</h2>
            </div>
            

            <div class="txtGrid">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                    commodo consequat. veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                    consequat.Ut enim ad minim veniam, quis nostrud exercitation. minim veniam, quis nostrud exercitation 
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud 
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, 
                    quis nostrud exercitation. Ut enim ad minim veniam, quis nost.
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat. veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                    consequat.Ut enim ad minim veniam, quis nostrud exercitation. minim veniam, quis nostrud exercitation 
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minim veniam, quis nostrud 
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Ut enim ad minim veniam, quis nostrud 
                    exercitation.
                </p>
            </div>

        </section>


        <section>

            <img src="<?php echo get_template_directory_uri(); ?>/img/concept_desc.png" alt="Description" class="imgDesc"></a>

        </section>


        <section class="Soutenir">

            <h2 class="titre2">Nous avons besoin de vous !</h2>
			<br><br>
			<h1 class="titre1">Rejoignez nous en devenant donateur.</h1>
			<br><br>

			<button class="btnSoutiens">Voir plus</button>

        </section>

	

	</main><!-- #main -->

<?php

get_footer();
