<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @since 1.0.0
 *
 * @package Suit Mag WordPress Theme
 */

if ( is_active_sidebar( 'suitmag_sidebar' ) ) { ?>
	<aside id="secondary" class="widget-area">
		<?php 
			$sidebar = apply_filters( Suit_Mag_Theme::fn_prefix( 'sidebar' ), 'suitmag_sidebar' );
			dynamic_sidebar( $sidebar ); ?>
	</aside><!-- #secondary -->
<?php }else{ ?>
    <aside id="secondary" class="widget-area">	    	
       <?php 
	       Suit_Mag_Theme::the_default_search();
	       Suit_Mag_Theme::the_default_recent_post();
	       Suit_Mag_Theme::the_default_archive();
       ?>
    </aside>
<?php }?>
