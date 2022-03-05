<?php
/**
* Register sidebar Options
*
* @return void
* @since 1.0.0
*
* @package Suit Mag WordPress Theme
*/
function suit_mag_sidebar_options(){
	Suit_Mag_Customizer::set(array(
		# Theme Options
		'panel'   => 'panel',
		# Theme Options >Sidebar Layout > Settings
		'section' => array(
			'id'     => 'sidebar-options',
			'title'  => esc_html__( 'Sidebar Options','suit-mag' ),
			'priority' => 100
		),
		'fields' => array(
			# sb - Sidebar
			array(
			    'id'      => 'sidebar-position',
			    'label'   => esc_html__( 'Sidebar Position' , 'suit-mag' ),
			    'type'    => 'suit-mag-buttonset',
			    'default' => 'right-sidebar',
			    'choices' => array(
			        'left-sidebar'  => esc_html__( 'Left' , 'suit-mag' ),
			        'right-sidebar' => esc_html__( 'Right' , 'suit-mag' ),
			        'no-sidebar'    => esc_html__( 'None', 'suit-mag' ),
			     )
			),
		),
	) );
}
add_action( 'init', 'suit_mag_sidebar_options' );