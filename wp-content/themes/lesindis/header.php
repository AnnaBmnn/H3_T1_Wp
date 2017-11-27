<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <!-- Appel du fichier style.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">

        <!--
            Tout le contenu de la partie head de mon site
         -->

        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="header">
            <?php // SYNTAXE : wp_nav_menu( array $args = array() )
                $args=array(
                    'theme_location' => 'header_menu', // nom du slug
                    'menu' => 'header_menu', // nom à donner cette occurence du menu
                    'container' => 'nav',
                    'container_class' => 'menu'
                );
                wp_nav_menu($args);
            ?> 
        </header>