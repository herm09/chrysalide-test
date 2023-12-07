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
				
				<a href="">Maison Chrysalide</a>
				
				<a href="">Notre concept</a>
				
				<a href="">Nous soutenir</a>
				
				<a href="">Actualités</a>
			</div>

			<div class="Contacter">
				<h2>Nous contacter</h2>

				<!-- fais moi un form pour entrer son mail et un bouton envoyer pour s'abonner -->
				<form action="">
					<input type="email" placeholder="Votre email">
					<input type="submit" value="Envoyer">
				</form>

			</div>

			<div class="Contact">
				<h2>Contact</h2>

				<a>33 rue de tours <br> PARIS 75033, FRANCE</a>
				
				<!-- je veux que tu me fasse une div pour les réseaux sociaux avec facebook, twitter, tiktok et  twitter -->
				<div class="Reseaux">
					<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt="facebook"></a>
					<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/insta.png" alt="instagram"></a>
					<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/tiktok.png" alt="tiktok"></a>
					<a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="twitter"></a>
				</div>

			</div>

		</div>


	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
