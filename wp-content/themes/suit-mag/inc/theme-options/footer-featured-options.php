<?php
if( !function_exists( 'suit_mag_acb_enable_footer_featured' ) ):
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
	function suit_mag_acb_enable_footer_featured( $control ){
		$value = $control->manager->get_setting( Suit_Mag_Helper::with_prefix( 'enable-footer-featured-news' ) )->value();
		return $value;
	}
endif;

if( !function_exists( 'suit_mag_acb_enable_footer_featured_cat' ) ):
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
	function suit_mag_acb_enable_footer_featured_cat( $control ){
		$top_story = $control->manager->get_setting( Suit_Mag_Helper::with_prefix( 'enable-footer-featured-news' ) )->value();
		$type = $control->manager->get_setting( Suit_Mag_Helper::with_prefix( 'footer-featured-type' ) )->value();
		return $top_story && 'category' == $type;
	}
endif;


/**
* Blog page Footer Features options
*
* @return void
* @since 1.0.0
*
* @package Suit Mag WordPress Theme
*/
function suit_mag_footer_featured_options(){
	Suit_Mag_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > Top Bar
		'section' => array(
		    'id'    => 'footer-featured-news',
		    'title' => esc_html__( 'Footer Featured News', 'suit-mag' ),
		    'priority'    => 120,
		),
		'fields' => array(
			array(
				'id'	=> 'enable-footer-featured-news',
				'label' => esc_html__( 'Enable', 'suit-mag' ),
				'default' => true,
 				'type'  => 'suit-mag-toggle'
			),
			array(
				'id'	=> 'footer-featured-title',
				'label' => esc_html__( 'Title', 'suit-mag' ),
				'default' => esc_html__( 'You May Missed', 'suit-mag' ),
				'active_callback' => array( 'fn_name' => 'suit_mag_acb_enable_footer_featured' ),
 				'type'  => 'text',
 				'partial' =>array(
 					'selector' => '.suitmag-you-missed h2'
 				)
			),
			array(
			    'id'      => 'footer-featured-excerpt-length',
			    'label'   => esc_html__( 'Excerpt Length', 'suit-mag' ),
			    'default' => 20,
			    'active_callback' => array( 'fn_name' => 'suit_mag_acb_enable_footer_featured' ),
			    'type'    => 'number',
			),
			array(
				'id'	=> 'footer-featured-type',
				'label' => esc_html__( 'Featured News Type', 'suit-mag' ),
				'active_callback' => array( 'fn_name' => 'suit_mag_acb_enable_footer_featured' ),
				'type'    => 'suit-mag-buttonset',
				'default' => 'category',
				'choices' => array(
				    'latest' 	=> esc_html__( 'Latest Post', 'suit-mag' ),
				    'category'	=> esc_html__( 'From Category', 'suit-mag' ),
				)
			),
			array(
				'id' => 'footer-featured-cat',
				'label' => esc_html__( 'Select Category', 'suit-mag' ),
				'default' => 0,
				'active_callback' => array( 'fn_name' => 'suit_mag_acb_enable_footer_featured_cat' ),
				'type' => 'suit-mag-category-dropdown'
			)
		)
	));
}
add_action( 'init', 'suit_mag_footer_featured_options' );