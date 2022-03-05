<?php
/**
 * Breadcrumb options in customizer 
 *
 * @since 1.0.0
 *
 * @package Suit Mag WordPress Theme
 */

if( !function_exists( 'suit_mag_acb_breadcrumb' ) ):
	/**
	* Active callback function for breadcrumb action.
	*
	* @return boolen
	* @since 1.0.0
	*
	* @package Suit Mag WordPress Theme
	*/
	function suit_mag_acb_breadcrumb( $control ) {
		$value = $control->manager->get_setting( Suit_Mag_Helper::with_prefix( 'show-breadcrumb' ) )->value();
		return $value == 1 ? true : false;
	}
endif;

/**
* Register breadcrumb Options
*
* @return void
* @since 1.0.0
*
* @package Suit Mag WordPress Theme
*/
function suit_mag_breadcrumb_options(){	
	Suit_Mag_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > color options
		'section' => array(
		    'id'       => 'breadcrumb-section',
		    'title'    => esc_html__( 'Breadcrumb Options' ,'suit-mag' ),
		    'priority' => 70
		),
		'fields'  => array(
			array(
			    'id'	  => 'show-breadcrumb',
			    'label'   => esc_html__( 'Show Breadcrumb', 'suit-mag' ),
			    'default' => true,
			    'type'    => 'suit-mag-toggle',
			),
			#bc - breadcrumb
			array(
			    'id'      		  => 'bc-separator',
			    'label'   		  => esc_html__( 'Separator', 'suit-mag' ),
			    'type'    		  => 'suit-mag-icon',
			    'active_callback' => array(
			    	'fn_name' => 'suit_mag_acb_breadcrumb'
			    ),
			    'default' 		  => 'f105',
			    'choices' 	=> array(
			        'f105' => 'fa fa-angle-right',
			        '002f' => 'fa-slash',
			        'f061' => 'fa fa-arrow-right',
			        'f178' => 'fa fa-long-arrow-right',
			        'f101' => 'fa fa-angle-double-right',
			     )
			),
		    array(
		        'id'	  	  => 'bc-size',
		        'label'   	  => esc_html__( 'Font Size', 'suit-mag' ),
		        'description' => esc_html__( 'The value is in px.  Defaults to 16px.' , 'suit-mag' ),
		        'active_callback' => array(
		        	'fn_name' => 'suit_mag_acb_breadcrumb'
		        ),
		        'default' => array(
		    		'desktop' => 16,
		    		'tablet'  => 16,
		    		'mobile'  => 16,
		    	),
				'input_attrs' =>  array(
		            'min'   => 1,
		            'max'   => 60,
		            'step'  => 1,
		        ),
		        'type' => 'suit-mag-slider'
		    ),
		),			
	));
}
add_action( 'init', 'suit_mag_breadcrumb_options' );
