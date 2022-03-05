<?php
/**
 * Content for header
 *
 * @since 1.0.0
 *
 * @package Suit Mag WordPress Theme
 */ 
?>
<div class="<?php echo esc_attr( Suit_Mag_Helper::with_prefix( 'bottom-header-wrapper' ) ); ?>" <?php Suit_Mag_Theme::the_header_bg_img(); ?> >
	<div class="container">
		<section class="<?php echo esc_attr( Suit_Mag_Helper::with_prefix( 'bottom-header' ) ); ?>">			
			<div class="site-branding">
				<div>
					<?php the_custom_logo(); ?>
					<div>
						<?php if ( is_front_page() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo esc_html( $description ); /* WPCS: xss ok. */ ?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<?php if( '' != suit_mag_get( 'header-advertisement-image' ) ): ?>
				<div>
					<a href=" <?php echo esc_url( suit_mag_get( 'header-advertisement-url' ) ); ?>">					
						<img src="<?php echo esc_url( suit_mag_get( 'header-advertisement-image' ) ); ?>">
					</a>
				</div>				
			<?php endif; ?>
		 
		</section>

	</div>
</div>
<div class="suitmag-main-menu-wrapper">
	<div class="container">				
		<div class="<?php echo Suit_Mag_Helper::with_prefix( 'navigation-n-options' ); ?>">

			<?php Suit_Mag_Helper::get_menu( 'primary', true ); ?>
			
			<?php do_action( Suit_Mag_Helper::fn_prefix( 'after_primary_menu' ) ); ?>
			<div class="suitmag-menu-search">
				<?php get_search_form(); ?>
			</div>	
		</div>	
	</div>		
</div>
<!-- nav bar section end -->