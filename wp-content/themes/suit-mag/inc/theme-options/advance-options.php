<?php
if( !function_exists( 'suit_mag_acb_custom_header_one' ) ):
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
	function suit_mag_acb_custom_header_one( $control ){
		$value = $control->manager->get_setting( Suit_Mag_Helper::with_prefix( 'container-width' ) )->value();
		return 'default' == $value;
	}
endif;

/**
* Register Advanced Options
*
* @return void
* @since 1.0.0
*
* @package Suit Mag WordPress Theme
*/
function suit_mag_advanced_options(){

	Suit_Mag_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > Header
		'section' => array(
		    'id'    => 'advance-options',
		    'title' => esc_html__( 'Advanced Options', 'suit-mag' ),
		    'priority' => 110
		),
		# Theme Option > Header > settings
		'fields' => array(
			array(
				'id'	=> 'pre-loader',
				'label' => esc_html__( 'Show Preloader', 'suit-mag' ),
				'default' => true,
				'type'  => 'suit-mag-toggle',
			),
			array(
			    'id'      => 'assets-version',
			    'label'   => esc_html__( 'Assets Version', 'suit-mag' ),
			    'type'    => 'suit-mag-buttonset',
			    'default' => 'development',
			    'choices' => array(
			        'development' => esc_html__( 'Development', 'suit-mag' ),
			        'production'  => esc_html__( 'Production', 'suit-mag' ),
			    )
			),
			array(
			    'id'      =>  'container-width',
			    'label'   => esc_html__( 'Site Layout', 'suit-mag' ),
			    'type'    => 'suit-mag-buttonset',
			    'default' => 'default',
			    'choices' => array(
			        'default' => esc_html__( 'Default', 'suit-mag' ),
			        'box'	  => esc_html__( 'Boxed', 'suit-mag' ),
			    )
			),
		    array(
		        'id'          	  => 'container-custom-width',
		        'label'   	  	  => esc_html__( 'Container Width', 'suit-mag' ),
		        'active_callback' => array(
		        	'fn_name' => 'suit_mag_acb_custom_header_one'
		        ),
		        'type'        	  => 'suit-mag-range',
		        'default'     	  => 1400,
	    		'input_attrs' 	  =>  array(
	                'min'   => 400,
	                'max'   => 2000,
	                'step'  => 5,
	            ), 
		    ),
		)
	));
}
add_action( 'init', 'suit_mag_advanced_options' );