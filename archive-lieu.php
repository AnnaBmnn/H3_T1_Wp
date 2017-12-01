<?php
get_header(); //appel du template header.php  ?>
<?php // SYNTAXE : wp_nav_menu( array $args = array() )
    $args=array(
        'theme_location' => 'lieu_menu', // nom du slug
        'menu' => 'lieu_menu', // nom à donner cette occurence du menu
        'container' => 'div',
        'container_class' => 'nav-lieu',
    );
    wp_nav_menu($args);
?> 
<div class="container--lieu">

<?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
            the_post();
            $post = get_post();
            $lieu_ID = $post->ID;
    ?>
    <div id="<?php echo $post->post_name; ?>" class="section section-lieu">
        <h2 class="section__title--medium">
            <?php the_title(); ?>
        </h2>
        <div class="lieu">
            <?php if( get_field('photo') ): ?>
                <div class="lieu__img">
                    <img src="<?php $photo = get_field('photo'); 
                            echo $photo['url']; 
                    ?>" alt="">
                </div>
            <?php endif; ?>        

            <div class="lieu__infos">
                <h3 class="lieu__infosTitre"><?php the_title(); ?></h3>
                <?php if( get_field('adresse') ): ?>
                    <span class="lieu__infosAdresse"><?php the_field('adresse'); ?></span>
                <?php endif; ?>
                <?php if( get_field('ville') ): ?>
                    <span class="lieu__infosAdresse"><?php the_field('ville'); ?></span>
                <?php endif; ?>
                <?php if( get_field('ville') ): ?>
                    <a href="<?php the_field('site'); ?>" class="lieu__infosLink">Voir le site</a>
                <?php endif; ?>
                <div class="lieu__description">
                    <?php the_content(); ?>
                </div>  
            </div>

        </div>
        <div class="lieu__artistes">
            <?php
                $args = array(
                    'post_type' => 'artiste',
                    'order' => 'ASC',
                    'meta_key'   => 'date',
                    'orderby'    => 'meta_value_num',
                    'meta_query'    => array(
                        'relation'      => 'AND',
                        array(
                            'key'       => 'lieu',
                            'value'     => '"'. get_the_ID(). '"',
                            'compare'   => 'LIKE',
                        ),
                    )
                );
                // the query
                $the_query = new WP_Query( $args ); ?>

                <?php if ( $the_query->have_posts() ) : ?>
                 
                    <!-- pagination here -->
                 
                    <!-- the loop -->
                    <?php $dategroup = 'debut'; ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <?php $postdate = get_field('date'); ?> 
                        <?php if ( $postdate !== $dategroup ) {
                            if($dategroup == 'debut'){

                            }else {
                                    echo '</div>';
                                echo '</div>';                                
                            }
                            $dategroup = $postdate;
                            echo '<div class="artiste__journee">';
                                echo '<div class="artiste__date">';
                                    echo $postdate;
                                echo '</div>';
                                echo '<div class="artiste__memeJournee">';
                        }
                                    echo '<div class="artiste">';
                                        echo '<div class="artiste__name" data-artisteID="'.get_the_ID().'">';
                                        the_title();
                                        echo '</div>';
                                    echo '</div>';
                        ?>
<!--                         <?php $lieu = get_field_object('lieu'); ?> 
                        <?php var_dump($lieu['value'][0]->post_title); ?>  -->
                    <?php endwhile; ?>
                    </div>
                    </div>
                    <!-- end of the loop -->
                 
                    <!-- pagination here -->
                 
                    <!--  -->
                 
                <?php else : ?>
            <?php wp_reset_postdata(); ?>

            <?php endif; ?>
        </div>
    </div>
    <div class="pop-up">
        <div class="opacity-in" id="popup">
        </div>
    </div>   
<?php
    }
    }
    else {
    ?>
    </div>
    
    <?php
    }
?>
<?php get_footer(); //appel du template footer.php ?>