<?php
/**
* Register Go to pro button
*
* @since 1.0.5
*
* @package Suit Mag WordPress Theme
*/
function suit_mag_go_to_pro(){
	Suit_Mag_Customizer::set(array(
		'section' => array(
			'id'       => 'go-to-pro', 
			'type'     => 'suit-mag-anchor',
			'title'    => esc_html__( 'Suit Mag Pro - Unlock Features', 'suit-mag' ),
			'url'      => esc_url( 'http://wpactivethemes.com/downloads/suit-mag-pro' ),
			'priority' => 0
		)
	));
}
add_action( 'init', 'suit_mag_go_to_pro' );