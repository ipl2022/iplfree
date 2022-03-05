<?php
if( !function_exists( 'suit_mag_acb_topbar' ) ):
	/**
	* Active callback function of header top bar
	*
	* @static
	* @access public
	* @return boolen
	* @since 1.0.0
	*
	* @package Suit Mag WordPress Theme
	*/
	function suit_mag_acb_topbar( $control ){
		$value = $control->manager->get_setting( Suit_Mag_Helper::with_prefix( 'show-top-bar' ) )->value();
		return $value;
	}
endif;

/**
* Register Top bar Options
*
* @return void
* @since 1.0.0
*
* @package Suit Mag WordPress Theme
*/
function suit_mag_topbar_options(){
	Suit_Mag_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > Top Bar
		'section' => array(
		    'id'    => 'top-bar',
		    'title' => esc_html__( 'Top Bar', 'suit-mag' ),
		    'priority'    => 10,
		),
		'fields' => array(
			array(
				'id'	=> 'show-top-bar',
				'label' => esc_html__( 'Enable', 'suit-mag' ),
				'default' => true,
 				'type'  => 'suit-mag-toggle'
			),
			array(
				'id'	=> 'topbar-bg-color',
				'label' => esc_html__( 'Background Color', 'suit-mag' ),
				'active_callback' => array( 'fn_name' => 'suit_mag_acb_topbar' ),
				'default' => '#c10000',
 				'type'  => 'suit-mag-color-picker'
			),
			array(
				'id'	=> 'topbar-text-color',
				'label' => esc_html__( 'Text Color', 'suit-mag' ),
				'active_callback' => array( 'fn_name' => 'suit_mag_acb_topbar' ),
				'default' => '#ffffff',
 				'type'  => 'suit-mag-color-picker'
			)
		)
	));
}
add_action( 'init', 'suit_mag_topbar_options' );