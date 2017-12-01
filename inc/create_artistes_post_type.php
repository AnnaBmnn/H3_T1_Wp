<?php
function indis_ajout_custom_type_artiste() {

	$post_type = "artiste";
	$labels = array(
	        'name'               => 'Artistes',
	        'singular_name'      => 'Artiste',
	        'all_items'          => 'Tous les artistes',
	        'add_new'            => 'Ajouter un artiste',
	        'add_new_item'       => 'Ajouter un nouveau artiste',
	        'edit_item'          => "Modifier le artiste",
	        'new_item'           => 'Nouveau artiste',
	        'view_item'          => "Voir le artiste",
	        'search_items'       => 'Chercher un artiste',
	        'not_found'          => 'No result',
	        'not_found_in_trash' => 'No result',
	        'parent_item_colon'  => 'artiste parent ::',
	        'menu_name'          => 'Artistes',
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
	        'has_archive'         => false,
	        'query_var'           => true,
	        'can_export'          => true,
	        'rewrite'             => array( 'slug' => $post_type )
	    );

	    register_post_type($post_type, $args );

	    $taxonomy = "genre";
	    $object_type = array("artiste");
	    $args = array(
          'label' => __( 'Genre' ),
          'rewrite' => array( 'slug' => 'genre' ),
          'hierarchical' => true,
      	);

}

add_action('init', 'indis_ajout_custom_type_artiste');