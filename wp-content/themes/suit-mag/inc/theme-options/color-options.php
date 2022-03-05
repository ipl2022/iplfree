<?php
/**
* Register breadcrumb Options
*
* @return void
* @since 1.0.0
*
* @package Suit Mag WordPress Theme
*/
function suit_mag_color_options(){	
	Suit_Mag_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > color options
		'section' => array(
		    'id'       => 'color-section',
		    'title'    => esc_html__( 'Color Options' ,'suit-mag' ),
		    'priority' => 60
		),
		'fields'  =>array(
			array(
				'id'      => 'primary-color',
				'label'   => esc_html__( 'Primary Color', 'suit-mag' ),
				'default' => '#c10000',
				'type'    => 'suit-mag-color-picker',
			),
			array(
				'id'      => 'body-paragraph-color',
				'label'   => esc_html__( 'Body Text Color', 'suit-mag' ),
				'default' => '#747474',
				'type'    => 'suit-mag-color-picker',
			),
			array(
				'id'      => 'link-color',
				'label'   => esc_html__( 'Link Color', 'suit-mag' ),
				'default' => '#145fa0',
				'type'    => 'suit-mag-color-picker',
			),
			array(
				'id'      => 'link-hover-color',
				'label'   => esc_html__( 'Link Hover Color', 'suit-mag' ),
				'default' => '#737373',
				'type'    => 'suit-mag-color-picker',
			),
			array(
				'id'   => 'line-2',
				'type' => 'suit-mag-hz-line',
			),
			array(
				'id'      => 'sb-widget-title-color',
				'label'   => esc_html__( 'Sidebar Widget Title Color', 'suit-mag' ),
				'default' => '#000000',
				'type'    => 'suit-mag-color-picker',
			),
			array(
				'id'      => 'sb-widget-content-color',
				'label'   => esc_html__( 'Sidebar Widget Content Color', 'suit-mag' ),
				'default' => '#282835',
				'type'    => 'suit-mag-color-picker',
			),
			array(
				'id'   => 'line-3',
				'type' => 'suit-mag-hz-line',
			),
			array(
				'id'      => 'footer-title-color',
				'label'   => esc_html__( 'Footer Widget Title Color', 'suit-mag' ),
				'default' => '#fff',
				'type'    => 'suit-mag-color-picker',
			),
			array(
				'id'      => 'footer-content-color',
				'label'   => esc_html__( 'Footer Widget Content Color', 'suit-mag' ),
				'default' => '#a8a8a8',
				'type'    => 'suit-mag-color-picker',
			),
			array(
				'id'   => 'line-4',
				'type' => 'suit-mag-hz-line',
			),
			array(
				'id'      => 'footer-top-background-color',
				'label'   => esc_html__( 'Footer Background Color', 'suit-mag' ),
				'default' => '#28292a',
				'type'    => 'suit-mag-color-picker',
			),
			array(
				'id'      => 'footer-copyright-background-color',
				'label'   => esc_html__( 'Footer Copyright Background Color', 'suit-mag' ),
				'default' => '#0c0808',
				'type'    => 'suit-mag-color-picker',
			),
			array(
				'id'      => 'footer-copyright-text-color',
				'label'   => esc_html__( 'Footer Copyright Text Color', 'suit-mag' ),
				'default' => '#ffffff',
				'type'    => 'suit-mag-color-picker',
			),
		),			
	));
}
add_action( 'init', 'suit_mag_color_options' );