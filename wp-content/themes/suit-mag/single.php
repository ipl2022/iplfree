<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @since 1.0.0
 *
 * @package Suit Mag WordPress Theme
 */
get_header();
?>
<div id="content" class="container">
	<div class="row">
		<div class="<?php echo esc_attr( Suit_Mag_Theme::is_sidebar_active() ? 'col-lg-8' : 'col-lg-12' ); ?> content-order">
			<div id="primary" class="content-area">	
				<main id="main" class="post-main-content" role="main">
					<?php
						# Loop Start
						while( have_posts() ): 
							the_post(); 
					?>
							<article <?php Suit_Mag_Helper::schema_body( 'article' ); ?> 
								id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
								<div class="entry-content">								
									<?php 
										if( has_post_thumbnail() ){
											the_post_thumbnail( 'full' );
										}
										the_content();

										Suit_Mag_Helper::post_content_navigation();

										get_template_part( 'templates/meta', 'info' );
										
										# If comments are open or we have at least one comment, load up the comment template.
										if ( comments_open() || get_comments_number() ) {
											comments_template();
										}

										# Navigate the post. Next post and Previou post.
										Suit_Mag_Helper::single_post_navigation();
									?>
								</div><!-- .entry-content -->
							</article><!-- #post-<?php the_ID(); ?> -->
						<?php endwhile; ?>
				</main>
			</div>
		</div>
		<?php Suit_Mag_Theme::the_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>