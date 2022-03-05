<?php
/**
 * Register font size and choice to display logo or title.
 *
 * @since 1.0.0
 *
 * @package Suit Mag WordPress Theme
 */

/**
* Register Site Identity Options
*
* @return void
* @since 1.0.0
*
* @package Suit Mag WordPress Theme
*/
function suit_mag_site_identity(){
	Suit_Mag_Customizer::set(array(
		# Site Identity > title size || title or logo
		'section' => array(
			'id' => 'title_tagline',
			'prefix' => false,
		),
		'fields'  => array(
			array(
			    'id'          => 'site-info-font',
			    'label'       => esc_html__( 'Site Identity Font Family', 'suit-mag' ),
			    'description' => esc_html__( 'Font family for site title and tagline. Defaults to Muli', 'suit-mag' ),
			    'default'     => 'font-12',
			    'type'        => 'select',
			    'choices'     => Suit_Mag_Theme::get_font_family(),
			),
		    array(
		        'id'	  	  => 'title-size',
		        'label'   	  => esc_html__( 'Title Size', 'suit-mag' ),
		        'description' => esc_html__( 'The value is in px.' , 'suit-mag' ),
		        'default' => array(
		    		'desktop' => 42,
		    		'tablet'  => 42,
		    		'mobile'  => 42,
		    	),
				'input_attrs' =>  array(
		            'min'   => 1,
		            'max'   => 60,
		            'step'  => 1,
		        ),
		        'type'    => 'suit-mag-slider',
		    ),
	        array(
	            'id'	  	  => 'tagline-size',
	            'label'   	  => esc_html__( 'Tagline Size', 'suit-mag' ),
	            'description' => esc_html__( 'The value is in px.' , 'suit-mag' ),
	            'default' => array(
	        		'desktop' => 14,
	        		'tablet'  => 14,
	        		'mobile'  => 14,
	        	),
	    		'input_attrs' =>  array(
	                'min'   => 1,
	                'max'   => 35,
	                'step'  => 1,
	            ),
	            'type'    => 'suit-mag-slider',
	        ),
		)	
	));
}
add_action( 'init', 'suit_mag_site_identity' );