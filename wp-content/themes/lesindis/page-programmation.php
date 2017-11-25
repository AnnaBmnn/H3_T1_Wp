<?php
/*
Template Name: programmation
*/
get_header(); //appel du template header.php 
?>

<?php
?>
<div id="content" class="content-programmation">
    <div class="container">
        <section class="section section-top-progra">
            <div class="section__title--big">
                <?php the_field('titre_display'); ?>            
                    <div class="section__date--big">
                        <?php the_field('duree_festival'); ?>
                    </div>
            </div>
        </section>
        <section class="section">
            <h2 class="section__sur-title">
                <?= the_field('sous_section_1'); ?>
            </h2>
             <?php
                $args = array(
                'post_type' => array( 'artiste' )
                );
                // The Query
                $the_query = new WP_Query( $args );
                // The Loop
                if ( $the_query->have_posts() ) : ?>
                    <div class="section__liste-artiste">
                        <ul>
                        <?php 
                            while ( $the_query->have_posts() ) {
                                $the_query->the_post();
                                echo '<li class="section__liste-artisteItem" >' . get_the_title() . '</li>';
                            }
                        ?>
                        </ul>
                    </div>
            <?php
                /* Restore original Post Data */
                wp_reset_postdata();
                endif;
            ?>
        </section>
        <!-- SECTION DATE -->
        <section class="section section-date">
            <h2 class="section__sur-title">
                Date
            </h2>
            <!-- WARM UP -->
            <div class="section-date__partie section-date__partie--left">
                <div class="section__title--medium">
                    Warm up
                </div>
                <div class="section__date--medium">2 & 4 Oct.</div>
                <div class="artiste--left artiste">
                    <div class="artiste__name">Malik Djoui</div>
                    <div class="artiste__infos">
                        <div class="artiste__lieu">Le manège</div>
                        <div class="artiste__adresse">13 rue de la pompe à Lorient</div>
                    </div>
                    <div class="artiste__date">Mar. 3 Oct.</div>
                </div>
                <div class="artiste--left artiste">
                    <div class="artiste__name">Swans + Le secret DJ set</div>
                    <div class="artiste__infos">
                        <div class="artiste__lieu">Le manège</div>
                        <div class="artiste__adresse">13 rue de la pompe à Lorient</div>
                    </div>
                    <div class="artiste__date">Mer. 4 Ooct</div>
                </div>
            </div>
            <!-- CONCERT -->
            <div class="section-date__partie--right section-date__partie">
                <div class="section__title--medium">
                    Concert
                </div>
                <div class="section__date--medium">
                    Du 4 au 12 nov.
                </div>
            </div>
            <div class="agenda">
                <?php
                    $terms = get_terms( 'date', 'orderby=name&hide_empty=0' );
                    if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                        echo '<ul>';
                        foreach ( $terms as $term ) {
                            //convertit la date du back office au format JOUR DATE (ex Mardi 9)
                            $date = convert_date_to_day_and_number_day($term->name);
                            $delimiter = ' '; 
                            $date_array = explode( $delimiter , $date);
                            echo '<li class="agenda__day" data-term="'. $term->term_id .'" >';
                                echo '<div class="agenda__dayText" >' . mb_strimwidth($date_array[0], 0, 4, '.') . '</div>';
                                echo '<div class="agenda__dayNumber" >' . $date_array[1] . '</div>';
                            echo '</li>';
                        }
                        echo '</ul>';
                    }
                    /* Restore original Post Data */
                    wp_reset_postdata();
                ?>
            </div>
            <div id="ajax-artiste-by-date" class="section-date__partie--right section-date__partie">   
                
            </div>
            <div class="section-date__partie--right section-date__partie">
                <div class="artiste__picture">
                    <img src="https://img.20mn.fr/4XYkpJZNQyCzRK4bGFs_6A/1200x768_chat-illustration" alt="">

                </div>
            </div>
            <div class="clear-both"></div>
        </section>
        <div class="clear-both"></div>
    </div>
</div> <!-- /content -->

<?php get_footer(); //appel du template footer.php ?>