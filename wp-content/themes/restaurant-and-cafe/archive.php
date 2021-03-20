<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Restaurant_and_Cafe
 */

$cat_code = null; $contents_name = null;

if( is_category() ) {
    $cat_code = $wp_query->get_queried_object()->category_nicename;
}
if($cat_code == 'tofulist') {
    $contents_name = 'tofuCategory';
} else {
    $contents_name = 'infoCategory';
}
get_header();

?>

<?php if( isset($contents_name) ): ?>
  <div id="mainvisual" class="categories">
    <?php dynamic_sidebar( $contents_name ); ?>
  </div>
<?php endif; ?>

<div class="thumb-container">
	<div id="primary" class="content-area archive-page">

		<main id="main" class="site-main" role="main">
		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
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

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>