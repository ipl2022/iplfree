<?php
/**
 * Resets all the value of customizer
 *
 * @since 1.0.0
 *
 * @package Suit Mag WordPress Theme
 */

if( !function_exists( 'suit_mag_get_setting_id' ) ):
	add_action( 
		Suit_Mag_Helper::fn_prefix( 'customize_register_start' ), 
		'suit_mag_get_setting_id', 30, 2 );
	/**
	* Get all the setting id to reset the data.
	*
	* @return array
	* @since 1.0.0
	*
	* @package Suit Mag WordPress Theme
	*/
	function suit_mag_get_setting_id( $instance, $wp_customize ) {
		
		Suit_Mag_Customizer::set(array(
			# Theme option
			'panel' => 'panel',
			# Theme Option > Reset options
			'section' => array(
			    'id'    => 'reset-section',
			    'title' => esc_html__( 'Reset Options' ,'suit-mag' ),
			    'priority' => 140
			),
			'fields' => array(
				array(
				    'id' 	      => 'reset-options',
				    'type'        => 'suit-mag-reset',
				    'settings'    => array_keys( $instance::$settings ),
				    'label'       => esc_html__( 'Reset', 'suit-mag' ),
				    'description' => esc_html__( 'Reseting will delete all the data. Once reset, you will not be able to get back those data.', 'suit-mag' ),
				),
			),
		) );
	}
endif;
