<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @since 1.0.0
 *
 * @package Suit Mag WordPress Theme
 */
?>
	<?php do_action( Suit_Mag_Helper::fn_prefix( 'before_footer' ) ); ?>

	<section class="site-footer footer-area">

		<?php do_action( Suit_Mag_Helper::fn_prefix( 'footer' ) ); ?>

	    <!-- footer divider line -->
	    <div class="footer-divider w-100"></div>
    	<?php if( suit_mag_get( 'footer-copyright-text' ) || suit_mag_get( 'footer-social-menu' ) ): ?>
		    <footer <?php Suit_Mag_Helper::schema_body( 'footer' ); ?> class="footer-bottom-section py-3">
		        <div class="container-fluid">
		             <!-- footer bottom section -->
		             <div class="row justify-content-between">
		             	<?php do_action( Suit_Mag_Helper::fn_prefix( 'copyright' ) ); ?>
		            </div> <!-- footer-bottom -->
		        </div><!-- container -->
		    </footer><!-- footer- copyright -->
		<?php endif; ?>
	</section><!-- section -->
	
	<?php do_action( Suit_Mag_Helper::fn_prefix( 'after_footer' ) ); ?>
 	<?php wp_footer(); ?>
 </body>
 </html>