<?php
/*
Plugin Name: oAgency Settings
Author: Vince-Dcs
Author URI: https://github.com/O-clock-Orion/WP-Eval-oAgency-Vince-Dcs
Version: 1.0.0
Description: Le plugin de configuration du site oAgency qui crée les CPT (Custom Post Type)
*/

if ( ! defined( 'WPINC' ) ) {
    http_response_code( 404 );
    exit;
}

$plugin_dir_path = plugin_dir_path( __FILE__ );

require $plugin_dir_path . 'includes/class-post-type-project.php';

$post_type_project = new Post_Type_Project;

register_activation_hook(
    __FILE__,
    function() use ( $post_type_project ) {
        $post_type_project->register_post_type();

        flush_rewrite_rules( false );
    }
);

register_deactivation_hook(
    __FILE__,
    'oagency_settings__deactivation'
);

function oagency_settings__deactivation() {
    unregister_post_type( Post_Type_Project::NAME );

    flush_rewrite_rules( false );
}