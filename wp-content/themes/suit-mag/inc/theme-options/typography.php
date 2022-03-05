<?php
/**
* Register typography Options
*
* @return void
* @since 1.0.0
*
* @package Suit Mag WordPress Theme
*/
function suit_mag_typography_options(){ 

    $message = esc_html__( 'The value is in px.', 'suit-mag' );
    Suit_Mag_Customizer::set(array(
        # Theme option
        'panel' => array(
            'id'       => 'panel',
            'title'    => esc_html__( 'Suit Mag Options', 'suit-mag' ),
            'priority' => 10,
        ),
        # Theme Option > Header
        'section' => array(
            'id'    => 'typography',
            'title' => esc_html__( 'Typography','suit-mag' ),
            'priority' => 50
        ),
        # Theme Option > Header > settings
        'fields' => array(
            array(
                'id'      => 'body-font',
                'label'   =>  esc_html__( 'Body Font Family.', 'suit-mag' ),
                'description' => esc_html__( 'Defaults to Muli.', 'suit-mag' ),
                'default' => 'font-12',
                'type'    => 'select',
                'choices' => Suit_Mag_Theme::get_font_family(),
            ),
            array(
                'id'          => 'heading-font',
                'label'       =>  esc_html__( 'Headings Font Family.', 'suit-mag' ),
                'description' =>  esc_html__( 'h1 to h6. Defaults to Muli.', 'suit-mag' ),
                'default'     => 'font-12',
                'type'        => 'select',
                'choices'     => Suit_Mag_Theme::get_font_family(),
            ),
            array(
                'id'          => 'body-font-size',
                'label'       => esc_html__( 'Body Font Size.', 'suit-mag' ),
                'description' => $message . ' ' . esc_html__( 'Defaults to 15px.', 'suit-mag' ),
                'type'        => 'suit-mag-slider',
                'default' => array(
                    'desktop' => 14,
                    'tablet'  => 14,
                    'mobile'  => 14,
                ),
                'input_attrs' =>  array(
                    'min'   => 1,
                    'max'   => 40,
                    'step'  => 1,
                ),
            ),
            array(
                'id'          => 'post-title-size',
                'label'       => esc_html__( 'Post Title Font Size', 'suit-mag' ),
                'description' => $message . ' ' . esc_html__( 'Defaults to 21px.' , 'suit-mag' ),
                'default' => array(
                    'desktop' => 17,
                    'tablet'  => 17,
                    'mobile'  => 17,
                ),
                'input_attrs' =>  array(
                    'min'   => 1,
                    'max'   => 60,
                    'step'  => 1,
                ),
                'type' => 'suit-mag-slider',
            ),
            array(
                'id'          => 'widget-title-font-size',
                'label'       => esc_html__( 'Widget Title Font Size', 'suit-mag' ),
                'description' => $message . ' ' . esc_html( 'Defaults to 18px.', 'suit-mag' ),
                'type'        => 'suit-mag-slider',
                'default' => array(
                    'desktop' => 18,
                    'tablet'  => 18,
                    'mobile'  => 18,
                ),
                'input_attrs' =>  array(
                    'min'   => 1,
                    'max'   => 60,
                    'step'  => 1,
                ),
            ),
            array(
                'id'          => 'widget-content-font-size',
                'label'       => esc_html__( 'Widget Content Font Size', 'suit-mag' ),
                'description' => $message . ' ' . esc_html( 'Defaults to 16px.', 'suit-mag' ),
                'type'        => 'suit-mag-slider',
                'default' => array(
                    'desktop' => 16,
                    'tablet'  => 16,
                    'mobile'  => 16,
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
add_action( 'init', 'suit_mag_typography_options' );