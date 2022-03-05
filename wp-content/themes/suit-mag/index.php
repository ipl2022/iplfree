<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Suit Mag WordPress Theme
 */
get_header();  

?>
<div class="container" id="content">
	<?php do_action( Suit_Mag_Theme::fn_prefix( 'blog_before_main_content' ) ); ?>
	<div class="row">
		<div class="<?php echo esc_attr( Suit_Mag_Theme::is_sidebar_active() ? 'col-md-8 col-lg-8' : 'col-md-12' ); ?> content-order">
			<div id="primary" class="content-area">
				<main id="main" class="site-main ">
				<?php if ( have_posts() ): ?>
					<div class="row" id="load-more">
						<?php
						# Load posts loop.
						while ( have_posts() ) : 
							the_post(); 
						?>
							<div class="<?php Suit_Mag_Theme::the_post_per_row_class(); ?>">
								<?php get_template_part( 'templates/content/content', '' ); ?>
							</div>
						<?php endwhile; ?>
					</div>

					<?php Suit_Mag_Helper::posts_navigation(); ?>
					
				<?php else: ?>
					<?php
						# If no content, include the "No posts found" template.
						get_template_part( 'templates/content/content', 'none' );
					?>
				<?php endif; ?>				
				</main><!-- .site-main -->
			</div><!-- .content-area -->
		</div>
		<?php Suit_Mag_Theme::the_sidebar(); ?>
	</div>
	<?php do_action( Suit_Mag_Theme::fn_prefix( 'blog_after_main_content' ) ); ?>
</div>		
<?php get_footer() ?>