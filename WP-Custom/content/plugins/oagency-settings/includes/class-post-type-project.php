<?php

class Post_Type_Project
{
    const NAME = 'project';
    
    function __construct() {
        add_action(
            'init',
            [ $this,'register_post_type' ]
        );
    }

    public function register_post_type() {

        register_post_type(
            self::NAME,
            [
                'labels' => [
                    'name'               => 'Projets',
                    'singular_name'      => 'Projet',
                    'add_new_item'       => 'Ajouter un nouveau projet',
                    'edit_item'          => 'Editer le projet',
                    'new_item'           => 'Nouveau projet',
                    'view_item'          => 'Voir le projet',
                    'view_items'         => 'Voir les projets',
                    'search_items'       => 'Rechercher des projets',
                    'not_found'          => 'Aucun projet trouvé',
                    'not_found_in_trash' => 'Aucun projet trouvé dans la corbeille',
                    'all_items'          => 'Tous les projets',
                    'archives'           => 'Archives des projets'
                ],
                'public'        => true,
                'hierarchical'  => false,
                'menu_position' => 4,
                'menu_icon'     => 'dashicons-megaphone',
                'supports'      => [
                    'title',
                    'editor',
                    'author',
                    'thumbnail',
                    'excerpt',
                    'custom-fields',
                    'page-attributes'
                ],
                'has_archive'  => true,
                'can_export'   => true,
                'show_in_rest' => true 
            ]
        );
    }
}
