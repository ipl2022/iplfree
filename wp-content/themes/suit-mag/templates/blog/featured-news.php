<?php
/**
* Blog page Features content
*
* @return void
* @since 1.0.0
*
* @package Suit Mag WordPress Theme
*/?>
<section class="suitmag-featured-news-section">
	<div class="suitmag-feature-news-wrapper">
		<?php 
			$featured_news = Suit_Mag_Theme::get_posts_by_type( suit_mag_get( 'featured-type' ), suit_mag_get( 'featured-cat' ), 5 );
			if( $featured_news ){
				foreach ( $featured_news as $p ) {?>
					<div class="suitmag-feature-news-inner">
						<article style="background-image: url( '<?php echo esc_url( get_the_post_thumbnail_url( $p ) ); ?>') , url('<?php echo esc_url( Suit_Mag_Helper::get_theme_uri( 'assets/img/default-image.jpg' ) ); ?>' )">
								<div class="suit-mag-featured-link">
									<a href="<?php echo esc_url( get_the_permalink( $p ) ); ?>"></a>
								</div>
								<div class="suitmag-feature-news-content">
									<div class="date-n-cat-wrapper">
										<?php

										Suit_Mag_Helper::the_date( $p );			

										Suit_Mag_Helper::the_category( $p );
										?>
									</div>

									<h2 class="suitmag-news-title">
										<a href="<?php the_permalink( $p ); ?>"><?php echo esc_html( get_the_title( $p ) );?></a>
									</h2>
									<p class="feature-news-content"><?php echo suit_mag_excerpt( suit_mag_get( 'featured-excerpt-length' ), false, '...', $p ); ?></p>
								</div>
						</article>
					</div>
				<?php }
			}
		?>
	</div>
</section>