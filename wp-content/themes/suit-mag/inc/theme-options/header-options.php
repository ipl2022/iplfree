<?php
/**
* Register Header Options
*
* @return void
* @since 1.0.0
*
* @package Suit Mag WordPress Theme
*/
function suit_mag_header_options(){
	Suit_Mag_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > Top Bar
		'section' => array(
		    'id'    => 'header',
		    'title' => esc_html__( 'Header Options', 'suit-mag' ),
		    'priority'    => 20,
		),
		'fields' => array(
			array(
				'id'	=> 'header-bg-image',
				'label' => esc_html__( 'Background Image', 'suit-mag' ),
 				'type'  => 'image'
			),
			array(
				'id'	=> 'header-bg-overlay',
				'label' => esc_html__( 'Background Overlay', 'suit-mag' ),
				'default' => 'rgba(0, 0, 0, 0.85)',
 				'type'  => 'suit-mag-color-picker'
			),
			array(
				'id'	=> 'header-advertisement-image',
				'label' => esc_html__( 'Advertisement Image', 'suit-mag' ),
 				'type'  => 'image'
			),
			array(
				'id' => 'header-advertisement-url',
				'label' => esc_html__( 'Advertisement Image Link', 'suit-mag' ),
				'type' => 'url'
			),
			array(
				'id'      => 'primary-menu-item-color',
				'label'   => esc_html__( 'Primary Menu Item color', 'suit-mag' ),
				'default' => '#000000',
				'type'    => 'suit-mag-color-picker',
			),
			array(
			    'id'          => 'primary-menu-font-size',
			    'label'       => esc_html__( 'Primary Menu Font Size', 'suit-mag' ),
			    'description' => esc_html( 'The value is in px. Defaults to 15px.', 'suit-mag' ),
			    'type'        => 'suit-mag-slider',
			    'default' => array(
			        'desktop' => 15,
			        'tablet'  => 15,
			        'mobile'  => 15,
			    ),
			    'input_attrs' =>  array(
			        'min'   => 1,
			        'max'   => 40,
			        'step'  => 1,
			    ),
			),
		)
	));
}
add_action( 'init', 'suit_mag_header_options' );