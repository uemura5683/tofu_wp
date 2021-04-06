<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Restaurant_and_Cafe
 */

    $ed_section = restaurant_and_cafe_get_sections();

    if( is_home() || ! $ed_section || ! ( is_front_page()  || is_page_template( 'template-home.php' ) ) ){ ?>
        		</div>
        	</div><!-- #content -->
        </div>
    <?php } ?>

    <?php if( ( is_home() || is_page_template( 'template-home.php' ) ) && function_exists( 'has_custom_logo' ) && has_custom_logo() ): ?>
        <div id="animaton_bg">
        <?php the_custom_logo();?>
        </div>
    <?php endif; ?>

	<footer id="colophon" class="site-footer" role="contentinfo" itemscope itemtype="https://schema.org/WPFooter">
      		<div class="widget-area">
				<div class="container">
					<div class="footer-t">
                        <div class="row">
					   <?php 
                            echo '<div class= "col-3">';
                                if( is_active_sidebar( 'footer-widget-one') ) dynamic_sidebar( 'footer-widget-one' ); 
                            echo '</div>';
                        ?>
                        <?php 
                            echo '<div class= "col-3">';
                                if( is_active_sidebar( 'footer-widget-two') ) dynamic_sidebar( 'footer-widget-two' ); 
                            echo '</div>';
                        ?>
                        <?php 
                            echo '<div class= "col-3">';
                                if( is_active_sidebar( 'footer-widget-three') ) dynamic_sidebar( 'footer-widget-three' ); 
                            echo '</div>';
                        ?>
                    </div>
				</div>
			</div>	
		</div>
        <?php do_action( 'restaurant_and_cafe_footer' ); ?>
		
	</footer><!-- #colophon -->
    <div class="overlay"></div>

</div><!-- #acc-content -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
