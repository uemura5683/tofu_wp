<?php
/**
 * Template Name: Home Page
 *
 * @package Restaurant_and_Cafe
 */


get_header(); 
?>
<div class="thumb-container">
    <div id="primary" class="content-area home-page">
        <main id="main" class="site-main" role="main">  
            <?php 
            while ( have_posts() ) : the_post(); ?> 
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <a class="post-thumbnail">        
                        <?php the_post_thumbnail(); ?>  
                    </a>    
                    <div class="entry-content" itemprop="text">
                        <?php the_content(); ?>
                    </div><!-- .entry-content -->                 
                </article><!-- #post-## -->
            <?php endwhile; ?>
        </main><!-- #main -->
    </div>
</div>
<?php get_footer(); ?>
