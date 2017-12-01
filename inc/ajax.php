<?php

add_action( 'wp_ajax_artiste_by_date', 'artiste_by_date' );
add_action( 'wp_ajax_nopriv_artiste_by_date', 'artiste_by_date' );

function artiste_by_date() {
    $date = $_POST['date'];
    //$today = date('m/d/Y');
    //$date = date('m/d/Y', $date);
    //var_dump($date);
    $date_obj = date_create_from_format('m/d/Y', $date);
    $date_lol = $date_obj->format('Ymd');

    $args = array(
        'post_type' => 'artiste',
        'order' => 'ASC',
        'meta_key'   => 'heure',
        'orderby'    => 'meta_value_num',
        'posts_per_page' => -1,
        'meta_query'    => array(
            'relation'      => 'AND',
            array(
                'key'       => 'date',
                'value'     => $date_lol ,
                'compare'   => '<=',
            ),
            array(
                'key'       => 'date',
                'value'     => $date_lol ,
                'compare'   => '>=',
            ),
        ),
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            get_template_part('template-parts/artiste-bydate');   
        }
        /* Restore original Post Data */
        wp_reset_postdata();
    }
    die();
 }

 add_action( 'wp_ajax_popup_artiste', 'popup_artiste' );
add_action( 'wp_ajax_nopriv_popup_artiste', 'popup_artiste' );

function popup_artiste() {
    $artiste_id = $_POST['artiste_id'];
    $args = array (
        'post_type' => 'artiste',
        'p'         => $artiste_id ,
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            get_template_part('template-parts/popup');
            //echo '<iframe width="560" height="315" src="https://youtu.be/ZPaS0A5Z0VY" frameborder="0" allowfullscreen></iframe>';
            //MMETTRE LA BONNE VIDEO      
        }
        /* Restore original Post Data */
        wp_reset_postdata();
    }
    die();
 }