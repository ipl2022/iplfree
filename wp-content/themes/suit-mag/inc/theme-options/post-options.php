<?php
/**
 * Create options for posts.
 *
 * @since 1.0.0
 *
 * @package Suit Mag WordPress Theme
 */

function suit_mag_post_options(){  
    Suit_Mag_Customizer::set(array(
    	# Theme Options
    	'panel'   => 'panel',
    	# Theme Options > Page Options > Settings
    	'section' => array(
    		'id'    => 'post-options',
    		'title' => esc_html__( 'Post Options','suit-mag' ),
            'priority' => 90
    	),
    	'fields' => array(
            array(
                'id'      => 'post-category',
                'label'   =>  esc_html__( 'Show Categories', 'suit-mag' ),
                'default' => 1,
                'type'    => 'suit-mag-toggle',
            ),
            array(
                'id'      => 'post-date',
                'label'   => esc_html__( 'Show Date', 'suit-mag' ),
                'default' => 1,
                'type'    => 'suit-mag-toggle',
            ),
            array(
                'id'      => 'post-author',
                'label'   =>  esc_html__( 'Show Author', 'suit-mag' ),
                'default' => 1,
                'type'    => 'suit-mag-toggle',
            ),
            array(
                'id'      => 'post-comments',
                'label'   =>  esc_html__( 'Show Comments', 'suit-mag' ),
                'default' => 1,
                'type'    => 'suit-mag-toggle',
            ),
            array(
                'id'      => 'post-readmore',
                'label'   =>  esc_html__( 'Show Read More Button', 'suit-mag' ),
                'default' => 1,
                'type'    => 'suit-mag-toggle',
            ),
            array(
                'id'      => 'excerpt_length',
                'label'   => esc_html__( 'Excerpt Length', 'suit-mag' ),
                'description' => esc_html__( 'Defaults to 10. The respective section has there own excerpt length.', 'suit-mag' ),
                'default' => 10,
                'type'    => 'number',
            ),
            array(
                'id' => 'post-per-row',
                'label' => esc_html__( 'Post Per Row', 'suit-mag' ),
                'type' => 'suit-mag-buttonset',
                'default' => '3',
                'choices' => array(
                    '1' => esc_html__( '1', 'suit-mag' ),
                    '2' => esc_html__( '2', 'suit-mag' ),
                    '3' => esc_html__( '3', 'suit-mag' ),
                    '4' => esc_html__( '4', 'suit-mag' )
                )
            ),
            array(
                'id'      => 'read-more-text',
                'label'   => esc_html__( 'Read More Text', 'suit-mag' ),
                'default' => esc_html__( 'Read More', 'suit-mag' ),
                'type'    => 'text'
            )
     	),
    ) );
}
add_action( 'init', 'suit_mag_post_options' );