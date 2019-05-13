<?php

function oagency_customize_register( $wp_customize )
{
    $wp_customize->add_panel(
        'oagency_theme_configuration',
        [
            'title'    => 'Configuration du thème oAgency',
            'priority' => 1
        ]
    );

    $wp_customize->add_section(
        'oagency_header',
        [
            'panel' => 'oagency_theme_configuration',
            'title' => 'Header'
        ]
        
    );

    $wp_customize->add_section(
        'oagency_main',
        [
            'panel' => 'oagency_theme_configuration',
            'title' => 'Main'
        ]
        
    );

    $wp_customize->add_section(
        'oagency_footer',
        [
            'panel' => 'oagency_theme_configuration',
            'title' => 'Footer'
        ]
    );

    $wp_customize->add_setting( 'oagency_header_active' );
    $wp_customize->add_setting( 'oagency_main_active' );
    $wp_customize->add_setting( 'oagency_footer_active' );

    $wp_customize->add_control(
        'oagency_header_active', 
        [
            'section' => 'oagency_header',
            'type'    => 'checkbox',
            'label'   => 'Activer le header'
        ]
    );

    $wp_customize->add_control(
        'oagency_main_active', 
        [
            'section' => 'oagency_main',
            'type'    => 'checkbox',
            'label'   => 'Activer le main'
        ]
    );

    $wp_customize->add_control(
        'oagency_footer_active', 
        [
            'section' => 'oagency_footer',
            'type'    => 'checkbox',
            'label'   => 'Activer le footer'
        ]
    );

    $wp_customize->add_panel(
        'oagency_main_configuration',
        [
            'title'    => 'Configuration du nombre de posts',
            'priority' => 2
        ]
    );

    $wp_customize->add_section(
        'oagency_homepage',
        [
            'panel' => 'oagency_main_configuration',
            'title' => 'Page d\'accueil'
        ]
    );

    $wp_customize->add_setting(
        'oagency_homepage_last_posts_count',
        [
            'default' => 6
        ]
    );

    $wp_customize->add_control(
        'oagency_homepage_last_posts_count',
        [
            'section' => 'oagency_homepage',
            'label'   => 'Nombre d\'articles de blog',
            'type'    => 'number',
            'input_attrs' => [
                'min'  => 1,
                'max'  => 12,
                'step' => 1
            ]
        ]
    );
}
add_action( 'customize_register', 'oagency_customize_register' );

