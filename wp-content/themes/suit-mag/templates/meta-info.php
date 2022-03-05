<?php
/**
 * Displays the meta information
 *
 * @since 1.0.0
 *
 * @package Guternbiz WordPress Theme
 */?>

<?php if ( 'post' === get_post_type() ) : ?>
	<?php 
		$category = suit_mag_get( 'post-category' );
		$author   = suit_mag_get( 'post-author' );
		$date     = suit_mag_get( 'post-date' );
	if( $category || $author || $date ) : ?>
		<div class="entry-meta 
			<?php 
				if( is_single() ){
					echo esc_attr( 'single' );
				} 
			?>"
		>
			<?php Suit_Mag_Helper::get_author_image(); ?>
			<?php if( $author || $date ) : ?>
				<div class="author-info">
					<?php
						Suit_Mag_Helper::the_date();			
						Suit_Mag_Helper::posted_by();
					?>
				</div>
			<?php endif; ?>
		</div>
		<?php Suit_Mag_Helper::the_category(); ?>	
	<?php endif; ?>
<?php endif; ?>