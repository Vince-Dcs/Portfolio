<?php

function oagency_register_nav_menus() {
    register_nav_menus([
        'header-menu' => 'Header Menu',
        'footer-menu' => 'Footer Menu',
    ]);

}

add_action( 'init', 'oagency_register_nav_menus' );

function oagency_register_sidebars() {
    register_sidebar(
        array(
            'name'          => 'Primary Sidebar' ,
            'id'            => 'primary',
            'description'   => 'The footer for widgets ',
            'class'   => 'footer__widgets-class',
            'before_widget' => '<li class="footer__widgets-class">',
            'after_widget'  => "</li>\n",
        )
    );
}
add_action( 'widgets_init', 'oagency_register_sidebars' );