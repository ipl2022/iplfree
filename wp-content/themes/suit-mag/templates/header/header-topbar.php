<?php
/**
 * Top bar for header
 *
 * @since 1.0.0
 *
 * @package Suit Mag WordPress Theme
 */ ?>

 <div class="suitmag-topbar-wrapper">
 	<div class="container">
 		<div class="row">
	 		<div class="col-12 col-sm-6 time-wrapper">
			 	<time datetime="<?php echo esc_attr( date( DATE_W3C ) ); ?>"> <i class="fa fa-calendar"></i> <?php echo esc_html( date( get_option( 'date_format' ) ) ); ?></time>
			 	<div class="suitmag-digital-clock-wrapper"><i class="fa fa-clock-o"></i><div id="suitmag-digital-clock"></div></div>
			</div>
			<div class="col-12 col-sm-6 suitmag-social-menu suitmag-topbar-socialmenu">
			 	<?php Suit_Mag_Helper::get_menu( 'social-menu-topbar', true ); ?>
			</div>
		</div>
	 </div>
 </div>

