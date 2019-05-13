<?php

function oagency_enqueue_styles() {

    wp_enqueue_style(
        'oagency-style',
        get_theme_file_uri( 'public/css/style.css' ),
        [],
        OAGENCY_THEME_VERSION
    );
}

add_action( 'wp_enqueue_scripts', 'oagency_enqueue_styles' );


function oagency_enqueue_scripts() {

    wp_enqueue_script(
        'oagency-script',
        get_theme_file_uri( 'public/js/app.js' ),
        [],
        OAGENCY_THEME_VERSION,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'oagency_enqueue_scripts' );
