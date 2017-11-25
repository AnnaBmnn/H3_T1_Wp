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
            <nav class="menu">
                <ul>
                    <li><a href="#">Programmation</a></li>
                    <li><a href="#">Lieux</a></li>
                    <li><a href="#">Les indisciplinées</a></li>
                    <li><a href="#">Infos pratique</a></li>
                    <li><a href="#"></a>Le festival</li>
                </ul>
            </nav>
        </header>