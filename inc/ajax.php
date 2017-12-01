<?php

add_action( 'wp_ajax_artiste_by_date', 'artiste_by_date' );
add_action( 'wp_ajax_nopriv_artiste_by_date', 'artiste_by_date' );

function artiste_by_date() {
    $date = $_POST['date']; //11/03/2017
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
            echo '<div class="artiste--right artiste">';
                echo '<div class="artiste__name" data-artisteID="'.get_the_ID().'" >' . get_the_title() . '</div>';
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
                if(get_field_object('photo_artiste')){
                    $photo = get_field_object('photo_artiste');

                    echo '<div class="artiste__picture">
                        <img src="'.$photo['value']['url'] .'" alt="">
                        </div>';                    
                }

            echo '</div>';       
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
            echo '<div class="opacity-in">';
            echo '<div class="close">X</div>';
            echo '<h2 class="title-artist">'. get_the_title() . '</h2>';

            echo '<div class="artist-img">';
                echo '<div class="overlay-fade"></div>';
                $photo = get_field_object('photo_artiste');
                echo '<img src="'.$photo['value']['url'].'" alt="">';
            echo '</div>';

            echo '<div class="infos">';
                echo '<div class="overlay-fade"></div>';
                $date = convert_date_to_day_and_number_day(get_field('date'));
                $month = convert_date_to_month(get_field('date'));
                $delimiter = ' '; 
                $date_array = explode( $delimiter , $date);
                echo '<span class="date">'. mb_strimwidth($date_array[0], 0, 4, '.'). ' ' .  $date_array[1] .'
                            </br>'.  $month. '.'.'
                            </br>
                        </span>';
                echo '<div class="sub-infos">';
                    if(get_field('lieu')){
                        $lieu = get_field_object('lieu');
                        echo '<div class="artiste__lieu">'. $lieu['value'][0]->post_title .'</div>';
                        echo '<div class="artiste__adresse">'. $lieu['value'][0]->adresse  .'</div>';
                    }
                echo '</div>';
                echo '<span class="shop-button">Billeterie</span>';
                echo '<p class="description">'. get_the_content() .'</p>';
            echo '</div>'; 
            echo '</div>'; 
            //echo '<iframe width="560" height="315" src="https://youtu.be/ZPaS0A5Z0VY" frameborder="0" allowfullscreen></iframe>';
            //MMETTRE LA BONNE VIDEO      
        }
        /* Restore original Post Data */
        wp_reset_postdata();
    }
    die();
 }