<?php
add_action( 'after_setup_theme', 'indis_thumbnails_theme_support' );

function indis_thumbnails_theme_support(){
    add_theme_support( 'post-thumbnails');
}
add_action('after_setup_theme', 'indis_create_image_size');

function indis_create_image_size(){
	add_image_size('artiste-carre','300','300',true);
}