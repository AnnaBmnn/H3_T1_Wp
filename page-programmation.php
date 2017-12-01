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
                        <?php bloginfo('description'); ?>
                    </div>
            </div>
        </section>
        <section class="section">
            <h2 class="section__sur-title">
                <?= the_field('sous_section_1'); ?>
            </h2>
             <?php
                $args = array(
                'post_type' => array( 'artiste' ),
                'posts_per_page' => -1

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
                                echo '<li class="section__liste-artisteItem artiste__name" data-artisteID="'.get_the_ID().'">' . get_the_title() . '</li>';
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
        
        <?php $urlimage = get_field('bg_oiseaux'); ?>
        
        <section class="section section-date" style="background-image:url(<?php echo $urlimage; ?>)">
            <h2 class="section__sur-title">
                <?php the_field('sous_section_2'); ?>
            </h2>
            <!-- WARM UP -->
<!--             <div class="section-date__partie section-date__partie--left">
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
            </div> -->
            <!-- CONCERT -->
            <div class="section-date__partie--right section-date__partie">
                <div class="section__title--medium">
                    <?php the_field('sous_section_3'); ?> 
                </div>
                <div class="section__date--medium">
                    <?php echo bloginfo('description'); ?>
                </div>
            </div>
            <div class="agenda">

                <?php
                    $args = array(
                        'post_type' => 'artiste',
                        'order' => 'ASC',
                        'meta_key'   => 'date',
                        'orderby'    => 'meta_value_num',
                        'posts_per_page' => -1
                    );
                    $the_query = new WP_Query( $args ); 
                    if ( $the_query->have_posts() ) : 
                    ?>
                 
                    <!-- pagination here -->
                 
                    <!-- the loop -->
                    <?php $dategroup = 'debut'; ?>
                    <ul>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <?php $postdate = get_field('date'); 
                            ?> 
                            <?php if ( $postdate !== $dategroup ) {
                                //convertit la date du back office au format JOUR DATE (ex Mardi 9)
                                $date = convert_date_to_day_and_number_day($postdate);
                                $delimiter = ' '; 
                                $date_array = explode( $delimiter , $date);
                                echo '<li class="agenda__day" data-date="'. $postdate .'" >';
                                    echo '<div class="agenda__dayText" >' . mb_strimwidth($date_array[0], 0, 4, '.') . '</div>';
                                    echo '<div class="agenda__dayNumber" >' . $date_array[1] . '</div>';
                                echo '</li>'; 
                                $dategroup = $postdate;                              
                                }
                            ?>
                        <?php endwhile; ?>
                    </ul>
                    <!-- end of the loop -->
                 
                    <!-- pagination here -->
                 
                    <!--  -->
                 
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php wp_reset_postdata(); ?>

                    <?php endif; ?>                    

            </div>
            <div id="ajax-artiste-by-date" class="section-date__partie--right section-date__partie">
                <?php
                $date = "11/03/2017"; //
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
                } ?>
            </div>
            <div class="section-date__partie--right section-date__partie">
            </div>
            <div class="clear-both"></div>
        </section>
        <div class="clear-both"></div>
    </div>
    <div class="pop-up">
        <div class="opacity-in" id="popup">
        </div>
    </div> 
</div> <!-- /content -->

<?php get_footer(); //appel du template footer.php ?>