<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package chrysalide_wp_test
 */

get_header();
?>

	<main id="primary" class="site-main">
	
		<?php
		while ( have_posts() ) :
			the_post();
           
			get_template_part( 'template-parts/content', get_post_type() );
            ?> <div class='plus-actu'>
		   <a class="style" href="http://localhost/IIM-2eme-ann%C3%A9e/Cours-dev-2023-2024/BAP/chrysalide_wp/wordpress/actualites/"> + d'actu ></a>
	   </div>
	   <?php
			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'chrysalide_wp_test' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'chrysalide_wp_test' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// ); 
			

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
    
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
