<?php
    // bundle
function indis_ajaxJs()
{
     // Envoyer l'url de admin-ajax.php au fichier main.js via la variable ajaxurl
     wp_localize_script('main', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
}
add_action('wp_enqueue_scripts', 'indis_ajaxJs');
