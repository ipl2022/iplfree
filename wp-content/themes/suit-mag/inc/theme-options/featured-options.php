<?php
if( !function_exists( 'suit_mag_acb_enable_featured' ) ):
	/**
	* Active callback function of top stories post
	*
	* @static
	* @access public
	* @return boolen
	* @since 1.0.0
	*
	* @package Suit Mag WordPress Theme
	*/
	function suit_mag_acb_enable_featured( $control ){
		$value = $control->manager->get_setting( Suit_Mag_Helper::with_prefix( 'enable-featured-news' ) )->value();
		return $value;
	}
endif;

if( !function_exists( 'suit_mag_acb_enable_featured_cat' ) ):
	/**
	* Active callback function of top stories type
	*
	* @static
	* @access public
	* @return boolen
	* @since 1.0.0
	*
	* @package Suit Mag WordPress Theme
	*/
	function suit_mag_acb_enable_featured_cat( $control ){
		$top_story = $control->manager->get_setting( Suit_Mag_Helper::with_prefix( 'enable-featured-news' ) )->value();
		$type = $control->manager->get_setting( Suit_Mag_Helper::with_prefix( 'featured-type' ) )->value();
		return $top_story && 'category' == $type;
	}
endif;


/**
* Blog page Features options
*
* @return void
* @since 1.0.0
*
* @package Suit Mag WordPress Theme
*/
function suit_mag_featured_options(){
	Suit_Mag_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > Top Bar
		'section' => array(
		    'id'    => 'featured-news',
		    'title' => esc_html__( 'Featured News', 'suit-mag' ),
		    'priority'    => 40,
		),
		'fields' => array(
			array(
				'id'	=> 'enable-featured-news',
				'label' => esc_html__( 'Enable', 'suit-mag' ),
				'default' => true,
 				'type'  => 'suit-mag-toggle'
			),
			array(
			    'id'      => 'featured-excerpt-length',
			    'label'   => esc_html__( 'Excerpt Length', 'suit-mag' ),
			    'default' => 20,
			    'active_callback' => array( 'fn_name' => 'suit_mag_acb_enable_featured' ),
			    'type'    => 'number',
			),
			array(
				'id'	=> 'featured-type',
				'label' => esc_html__( 'Featured News Type', 'suit-mag' ),
				'active_callback' => array( 'fn_name' => 'suit_mag_acb_enable_featured' ),
				'type'    => 'suit-mag-buttonset',
				'default' => 'category',
				'choices' => array(
				    'latest' 	=> esc_html__( 'Latest Post', 'suit-mag' ),
				    'category'	=> esc_html__( 'From Category', 'suit-mag' ),
				)
			),
			array(
				'id' => 'featured-cat',
				'label' => esc_html__( 'Select Category', 'suit-mag' ),
				'default' => 0,
				'active_callback' => array( 'fn_name' => 'suit_mag_acb_enable_featured_cat' ),
				'type' => 'suit-mag-category-dropdown'
			),

			array(
			    'id'    => 'featured-gradiant-color-one',
			    'label' => esc_html__( 'Featured Image Gradiant First Color', 'suit-mag' ),
			    'default' => 'rgba(255, 255, 255, 0)',
			    'active_callback' => array( 'fn_name' => 'suit_mag_acb_enable_featured' ),
			    'type'  => 'suit-mag-color-picker'
			),
			array(
			    'id'    => 'featured-gradiant-color-two',
			    'label' => esc_html__( 'Featured Image Gradiant Second Color', 'suit-mag' ),
			    'default' => '#000000',
			    'active_callback' => array( 'fn_name' => 'suit_mag_acb_enable_featured' ),
			    'type'  => 'suit-mag-color-picker'
			),
		)
	));
}
add_action( 'init', 'suit_mag_featured_options' );