<?php

function ajout_scripts() {

//main js
wp_register_script('main_script', JS_URL . '/main.js', array('jquery'),'1.1', true);
wp_enqueue_script('main_script');

wp_register_script('integration_script', JS_URL . '/integration.js', array('jquery'),'1.1', true);
wp_enqueue_script('integration_script');


wp_register_script('homeScroll_script', JS_URL . '/homeScroll.js', array('jquery'),'1.1', true);
wp_enqueue_script('homeScroll_script');

// pass Ajax Url to script.js
wp_localize_script('main_script', 'ajaxurl', admin_url( 'admin-ajax.php' ) );


wp_register_style( 'font_style', 'https://fonts.googleapis.com/css?family=Istok+Web:400,400i,700,700i|Rubik+Mono+One' );
wp_enqueue_style( 'font_style' );

//main css
wp_register_style( 'main_style', CSS_URL . '/main.css' );
wp_enqueue_style( 'main_style' );

}

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );

