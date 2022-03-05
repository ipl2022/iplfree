<?php
if( !function_exists( 'suit_mag_acb_top_stories' ) ):
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
	function suit_mag_acb_top_stories( $control ){
		$value = $control->manager->get_setting( Suit_Mag_Helper::with_prefix( 'top-stories-status' ) )->value();
		return $value;
	}
endif;

if( !function_exists( 'suit_mag_acb_top_stories_type' ) ):
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
	function suit_mag_acb_top_stories_type( $control ){
		$top_story = $control->manager->get_setting( Suit_Mag_Helper::with_prefix( 'top-stories-status' ) )->value();
		$type = $control->manager->get_setting( Suit_Mag_Helper::with_prefix( 'top-stories-type' ) )->value();
		return $top_story && 'category' == $type;
	}
endif;

/**
* Header top stories
*
* @return void
* @since 1.0.0
*
* @package Suit Mag WordPress Theme
*/
function suit_mag_top_stories_options(){
	Suit_Mag_Customizer::set(array(
		# Theme option
		'panel' => 'panel',
		# Theme Option > Top Bar
		'section' => array(
		    'id'    => 'top-stories',
		    'title' => esc_html__( 'Top Stories', 'suit-mag' ),
		    'priority'    => 30,
		),
		'fields' => array(
			array(
				'id'	=> 'top-stories-status',
				'label' => esc_html__( 'Enable', 'suit-mag' ),
				'default' => true,
 				'type'  => 'suit-mag-toggle'
			),
			array(
				'id'	=> 'top-stories-title',
				'label' => esc_html__( 'Title', 'suit-mag' ),
				'default' => esc_html__( 'Top Stories', 'suit-mag' ),
				'active_callback' => array( 'fn_name' => 'suit_mag_acb_top_stories' ),
 				'type'  => 'text',
			    'partial' =>	array(
			    	'selector'	=>	'span.top-stories'
				)
			),
			array(
				'id'	=> 'top-stories-no-post',
				'label' => esc_html__( 'Number Of Posts To Display', 'suit-mag' ),
				'default' => 4,
				'active_callback' => array( 'fn_name' => 'suit_mag_acb_top_stories' ),
 				'type'  => 'number'
			),
			array(
				'id'	=> 'top-stories-type',
				'label' => esc_html__( 'Stories Type', 'suit-mag' ),
				'active_callback' => array( 'fn_name' => 'suit_mag_acb_top_stories' ),
				'type'    => 'suit-mag-buttonset',
				'default' => 'latest',
				'choices' => array(
				    'latest' 	=> esc_html__( 'Latest Post', 'suit-mag' ),
				    'category'	=> esc_html__( 'From Category', 'suit-mag' ),
				)
			),
			array(
				'id' => 'top-stories-cat',
				'label' => esc_html__( 'Select Category', 'suit-mag' ),
				'default' => 0,
				'active_callback' => array( 'fn_name' => 'suit_mag_acb_top_stories_type' ),
				'type' => 'suit-mag-category-dropdown'
			),
		)
	));
}
add_action( 'init', 'suit_mag_top_stories_options' );