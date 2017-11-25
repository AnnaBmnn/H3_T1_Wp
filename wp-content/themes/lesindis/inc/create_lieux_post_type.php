<?php
function ajout_custom_type_lieu() {

	$post_type = "lieu";
	$labels = array(
	        'name'               => 'lieu',
	        'singular_name'      => 'lieu',
	        'all_items'          => 'Tous les lieux',
	        'add_new'            => 'Ajouter un lieu',
	        'add_new_item'       => 'Ajouter un nouveau lieu',
	        'edit_item'          => "Modifier le lieu",
	        'new_item'           => 'Nouveau lieu',
	        'view_item'          => "Voir le lieu",
	        'search_items'       => 'Chercher un lieu',
	        'not_found'          => 'No result',
	        'not_found_in_trash' => 'No result',
	        'parent_item_colon'  => 'lieu parent ::',
	        'menu_name'          => 'lieux',
	    );

	    $args = array(
	        'labels'              => $labels,
	        'hierarchical'        => false,
	        'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'revisions' ),
	        'public'              => true,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'menu_position'       => 5,
	        'menu_icon'           => 'dashicons-admin-users',
	        'show_in_nav_menus'   => true,
	        'publicly_queryable'  => true,
	        'exclude_from_search' => false,
	        'has_archive'         => true,
	        'archive_slug'        => $post_type,
	        'query_var'           => true,
	        'can_export'          => true,
	        'rewrite'             => array( 'slug' => $post_type )
	    );

	    register_post_type($post_type, $args );

}

add_action('init', 'ajout_custom_type_lieu');