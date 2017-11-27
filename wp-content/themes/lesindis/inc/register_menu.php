<?php
//SYNTAXE register_nav_menu( 'slug', 'Titre à afficher dans le BO' )

add_action( 'after_setup_theme', 'menus_du_themes' );
function menus_du_themes() {
    register_nav_menu( 'accueil', 'Menu accueil' );
    register_nav_menu( 'header_menu', 'Menu header' );
    register_nav_menu( 'lieu_menu', 'Menu Lieu' );
}
?>