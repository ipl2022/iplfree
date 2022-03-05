<?php
/**
 * Inner banner options in customizer
 *
 * @return void
 * @since 1.0.0
 *
 * @package Suit Mag WordPress Theme
 */

function suit_mag_inner_banner_options(){ 
	Suit_Mag_Customizer::set(array(
		# Theme Option > color options
		'section' => array(
		    'id'       => 'header_image',
		    'priority' => 80,
		    'prefix' => false,
		),
		'fields'  => array(
			array(
				'id'	=> 'disable-common-banner',
				'label' => esc_html__( 'Disable Banner', 'suit-mag' ),
				'description' => esc_html__( 'This is common option which control banner in entire site.' , 'suit-mag' ),
				'default' => false,
 				'type'  => 'suit-mag-toggle',
 				'priority'    => 0,
			),
			array(
				'id'      	  => 'ib-blog-title',
				'label'   	  => esc_html__( 'Title' , 'suit-mag' ),
				'description' => esc_html__( 'It is displayed when home page is latest posts.' , 'suit-mag' ),
				'default' 	  => esc_html__( 'Latest Blog' , 'suit-mag' ),
				'type'	  	  => 'text',
				'priority'    => 10,
			),
		    array(
		        'id'	  	  => 'ib-title-size',
		        'label'   	  => esc_html__( 'Font Size', 'suit-mag' ),
		        'description' => esc_html__( 'The value is in px. Defaults to 40px.' , 'suit-mag' ),
		        'default' => array(
		    		'desktop' => 40,
		    		'tablet'  => 32,
		    		'mobile'  => 32,
		    	),
				'input_attrs' =>  array(
		            'min'   => 1,
		            'max'   => 60,
		            'step'  => 1,
		        ),
		        'type' => 'suit-mag-slider',
		        'priority' => 20
		    ),
		    array(
		        'id'      => 'ib-title-color',
		        'label'   => esc_html__( 'Text Color' , 'suit-mag' ),
		        'type'    => 'suit-mag-color-picker',
		        'default' => '#ffffff',
		        'priority' => 30
		    ),
		    array(
		    	'id' 	   => 'ib-background-color',
		    	'label'    => esc_html__( 'Overlay Color', 'suit-mag' ),
		    	'default'  => '',
		    	'type' 	   => 'suit-mag-color-picker',
		    	'priority' => 40,
		    ),
		    array(
		        'id'      => 'ib-text-align',
		        'label'   => esc_html__( 'Alignment' , 'suit-mag' ),
		        'type'    => 'suit-mag-buttonset',
		        'default' => 'banner-content-center',
		        'choices' => array(
		        	'banner-content-left'   => esc_html__( 'Left' , 'suit-mag'   ),
		        	'banner-content-center' => esc_html__( 'Center' , 'suit-mag' ),
		        	'banner-content-right'  => esc_html__( 'Right' , 'suit-mag'  ),
		         ),
		        'priority' => 50
		    ),
			array(
			    'id'      => 'ib-image-attachment', 
			    'label'   => esc_html__( 'Image Attachment' , 'suit-mag' ),
			    'type'    => 'suit-mag-buttonset',
			    'default' => 'banner-background-scroll',
			    'choices' => array(
			    	'banner-background-scroll'           => esc_html__( 'Scroll' , 'suit-mag' ),
			    	'banner-background-attachment-fixed' => esc_html__( 'Fixed' , 'suit-mag' ),
			    ),
		        'priority' => 60
			),
			array(
			    'id'      	=> 'ib-height',
			    'label'   	=> esc_html__( 'Height (px)', 'suit-mag' ),
			    'type'    	=> 'suit-mag-slider',
	            'description' => esc_html__( 'The value is in px. Defaults to 420px.' , 'suit-mag' ),
	            'default' => array(
	        		'desktop' => 300,
	        		'tablet'  => 300,
	        		'mobile'  => 300,
	        	),
	    		'input_attrs' =>  array(
	                'min'   => 1,
	                'max'   => 1000,
	                'step'  => 1,
	            ),
			),
		    'priority' => 70
		),
	) );
}
add_action( 'init', 'suit_mag_inner_banner_options' );