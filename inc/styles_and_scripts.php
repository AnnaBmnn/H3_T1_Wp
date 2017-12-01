<?php

function indis_ajout_scripts() {

//main js
wp_register_script('main_script', JS_URL . '/main.min.js', array('jquery'),'1.1', true);
wp_enqueue_script('main_script');

// pass Ajax Url to script.js
wp_localize_script('main_script', 'ajaxurl', admin_url( 'admin-ajax.php' ) );


wp_register_style( 'font_style', 'https://fonts.googleapis.com/css?family=Istok+Web:400,400i,700,700i|Rubik+Mono+One' );
wp_enqueue_style( 'font_style' );

//main css
wp_register_style( 'main_style', CSS_URL . '/main.css', '', '1' );
wp_enqueue_style( 'main_style' );

}

add_action( 'wp_enqueue_scripts', 'indis_ajout_scripts' );

