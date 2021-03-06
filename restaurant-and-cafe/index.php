<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Restaurant_and_Cafe
 */

get_header();
?>

	<div id="primary" class="content-area index-page">
		<main id="main" class="site-main" role="main">

		<div id="mainvisual">
			<?php dynamic_sidebar( 'mainbisual' ); ?>
		</div>
		<div class="main-gallery">
			<div class="main-gallery-inner">
				<div class="autoplay-slider">
				<?php
				for ($i = 1; $i <= 2; $i++) {
					if ( have_posts() ) :
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', get_post_format() );
						endwhile;
						the_posts_pagination( array(
							'mid_size'  => 2,
							'prev_text' => '<span class="fa fa-angle-double-left"></span>',
							'next_text' => '<span class="fa fa-angle-double-right"></span>',
						) ); 
					else :
						get_template_part( 'template-parts/content', 'none' );

					endif;
				}
				?>
				</div>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
