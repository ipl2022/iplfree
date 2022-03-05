<?php
/**
* Blog page Features content
*
* @return void
* @since 1.0.0
*
* @package Suit Mag WordPress Theme
*/?>
<section class="suitmag-you-missed">
	<?php $ftr_featured_news = Suit_Mag_Theme::get_posts_by_type( suit_mag_get( 'footer-featured-type' ), suit_mag_get( 'footer-featured-cat' ), 6 );
	if( $ftr_featured_news ){ ?>
		<h2><?php echo esc_html( suit_mag_get( 'footer-featured-title' ) ); ?></h2>
		<div class="you-may-miss-slider-init">
		<?php foreach ( $ftr_featured_news as $p ) {?>
			<div class="suitmag-feature-news-inner">
				<article >
					<div class="suitmag-missed-image-wrap" style="background-image: url( '<?php echo esc_url( get_the_post_thumbnail_url( $p ) ); ?>') , url('<?php echo esc_url( Suit_Mag_Helper::get_theme_uri( 'assets/img/default-image.jpg' ) ); ?>' )">
						<div class="suit-mag-footer-featured-link">
							<a href="<?php echo esc_url( get_the_permalink( $p ) ); ?>"></a>
						</div>
						<?php Suit_Mag_Helper::the_category( $p ); ?>
					</div>
					<div class="suitmag-feature-news-content">
						<div class="date-n-cat-wrapper">
							<?php Suit_Mag_Helper::the_date( $p ); ?>							
						</div>
						<h3 class="suitmag-news-title">
							<a href="<?php the_permalink( $p ); ?>"><?php echo esc_html( get_the_title( $p ) );?></a>
						</h3>
						<p class="feature-news-content"><?php echo suit_mag_excerpt( suit_mag_get( 'footer-featured-excerpt-length' ), false, '...', $p ); ?></p>
					</div>
				</article>
			</div>
		<?php } ?>
		</div>
	<?php }
	?>
</section>