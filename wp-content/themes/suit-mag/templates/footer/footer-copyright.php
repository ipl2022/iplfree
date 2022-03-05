<?php
/**
 * Theme copyright template
 *
 * @since 1.0.0
 *
 * @package Suit Mag WordPress Theme
 */ ?>
 <div class="col-xs-12 col-sm-6">
    <span id="<?php echo esc_attr( Suit_Mag_Helper::with_prefix( 'copyright' ) ); ?>">
      <?php
        printf( '%1$s <a href="%2$s" target="_blank"> %3$s </a> | %4$s | %5$s <a href="https://wpfellows.com" target="_blank" >%6$s </a>',
        esc_html__( 'Proudly powered by', 'suit-mag' ),
        esc_url( __( 'https://wordpress.org', 'suit-mag') ),
        esc_html__( 'WordPress', 'suit-mag' ),
        esc_html__( 'Theme: Suit Mag', 'suit-mag' ),
        esc_html__( 'By: ', 'suit-mag' ),
        esc_html__( 'WPFellows', 'suit-mag' )
      )
      ?>
    </span>                   
 </div>