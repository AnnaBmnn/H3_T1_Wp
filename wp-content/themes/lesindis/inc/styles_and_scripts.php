<?php

function ajout_scripts() {

//bootstrap js
wp_register_script('bootstrap_script', JS_URL . '/bootstrap.min.js', array('jquery'),'1.1', true);
wp_enqueue_script('bootstrap_script');

//main js
wp_register_script('main_script', JS_URL . '/main.js', array('jquery'),'1.1', true);
wp_enqueue_script('main_script');

https://fonts.googleapis.com/css?family=Istok+Web:400,400i,700,700i|Rubik+Mono+One
//bootstrap css
wp_register_style( 'font_style', 'https://fonts.googleapis.com/css?family=Istok+Web:400,400i,700,700i|Rubik+Mono+One' );
wp_enqueue_style( 'font_style' );

//bootstrap css
wp_register_style( 'bootstrap_style', CSS_URL . '/bootstrap.min.css' );
wp_enqueue_style( 'bootstrap_style' );

//main css
wp_register_style( 'main_style', CSS_URL . '/main.css' );
wp_enqueue_style( 'main_style' );

}

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );
