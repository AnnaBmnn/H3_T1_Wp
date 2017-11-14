<?php
$taxonomy = "date";
$object_type = array( "artiste");
$args = array(
          'label' => __( 'Date' ),
          'rewrite' => array( 'slug' => 'date' ),
          'hierarchical' => false,
      );
register_taxonomy( $taxonomy, $object_type, $args ); 
