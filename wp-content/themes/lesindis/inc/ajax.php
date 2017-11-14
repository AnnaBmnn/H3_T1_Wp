<?php

add_action( 'wp_ajax_taxonomy_date', 'taxonomy_date' );
add_action( 'wp_ajax_nopriv_taxonomy_date', 'taxonomy_date' );

function taxonomy_date() {
    $taxonomy_term_id = $_POST['taxonomy_term_id'];
    $args = array (
        'post_type' => 'artiste',
        'tax_query' => array(
            array(
                'taxonomy'  => 'date',
                'field'     => 'term_id',
                'terms'     => $taxonomy_term_id,
            )
        ),
    );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            echo '<div class="artiste--right artiste">';
                echo '<div class="artiste__name" >' . get_the_title() . '</div>';
                echo '<div class="artiste__infos">';
                    if(get_field('lieu')){
                        $lieu = get_field_object('lieu');
                        echo '<div class="artiste__lieu">'. $lieu['value'][0]->post_title .'</div>';
                        echo '<div class="artiste__adresse">'. $lieu['value'][0]->adresse  .'</div>';
                    }
                echo '</div>';

                if(get_field('heure')){
                    echo '<div class="artiste__date">'. get_field('heure') .'</div>';
                }
            echo '</div>';       
        }
        /* Restore original Post Data */
        wp_reset_postdata();
    }
    die();


 }