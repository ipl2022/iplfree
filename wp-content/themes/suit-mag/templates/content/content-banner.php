<?php
/**
 * Template part for displaying inner banner in pages
 *
 * @since 1.0.0
 * 
 * @package Suit Mag WordPress Theme
 */
?>
<div class="<?php echo esc_attr( Suit_Mag_Helper::get_inner_banner_class() ); ?>" <?php Suit_Mag_Helper::the_header_image(); ?>> 
	<div class="container">
		<?php
			Suit_Mag_Helper::the_inner_banner();
			Suit_Mag_Helper::the_breadcrumb();
		?>
	</div>
</div>
