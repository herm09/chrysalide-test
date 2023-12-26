<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package chrysalide
 */

?>

	<footer id="colophon" class="site-footer">
		
		<div class="footer">

			<div class="Propos">
				<h2>A propos</h2>
				
				<ul>
					<li><a href="<?= get_permalink(2) ?>">Maison Chrysalide</a></li>
					<li><a href="<?= get_permalink(17) ?>">Notre concept</a></li>
					<li><a href="<?= get_permalink(341) ?>">Nous soutenir</a></li>
					<li><a href="<?= get_post_type_archive_link("actualites") ?>">Actualités</a></li>
					<li><a href="<?= get_permalink(596) ?>">Mentions légales</a></li>
				</ul>
				

			</div>
			

			<div class="Contacter">
				<h2>Nous contacter</h2>
				<!-- fais moi un form pour entrer son mail et un bouton envoyer pour s'abonner -->
				<form action="">
					<input type="email" placeholder="Entrez votre Email" class="mail">
					<br>
					<input type="submit" value="Envoyer" class="abonner">
				</form>

			</div>

			<div class="Contact">
				<h2>Contact</h2>

				<a>34 Quai de Dion Bouton <br> Puteaux 92800, FRANCE</a>
				
				<!-- je veux que tu me fasse une div pour les réseaux sociaux avec facebook, twitter, tiktok et  twitter -->
				<div class="Reseaux">
					<a href="https://www.facebook.com/people/Association-Maison-Chrysalide/100067052560553/"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="facebook"></a>
					<a href="https://www.instagram.com/association_maison_chrysalide/"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt="instagram" class="insta"></a>
					<a href="https://www.linkedin.com/in/maison-chrysalide-5727532a5/"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png" alt="linkedin" class="linkedin"></a>
					<a href="https://www.youtube.com/channel/UChbTajcxnSMQcE2Yr5yaWZw"><img src="<?php echo get_template_directory_uri(); ?>/img/youtube.png" alt="youtube" class="youtube"></a>
				</div>

			</div>

		</div>


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
