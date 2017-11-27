<?php
get_header(); //appel du template header.php 
?>
    <div class="elements">
        <div class="contenu-affiche">
            <div class="inner">
                <div class="titre">
                    <h1>Les IndisciplinéEs</h1>
                    <h2>2-13 Nov 2017</h2>
                </div>
                <ul class="menu-accueil">
                    <li><a href="#">Programmation</a></li>
                    <li><a href="#">Lieux</a></li>
                    <li><a href="#">Infos Pratiques</a></li>
                    <li><a href="#">Le festival</a></li>
                </ul>
            </div>
        </div>

        <?php
        $compteur = 0;
        $artistes = [];
        $args = array(
            'post_type' => array( 'artiste' ),
            'order' => 'ASC',
            'posts_per_page' => -1
        );
        // The Query
        $the_query = new WP_Query( $args );
        // The Loop
        if ( $the_query->have_posts() ) : ?>
                <?php
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    $artistes[] = get_the_title();
                }
                ?>
            <?php
            /* Restore original Post Data */
            wp_reset_postdata();
        endif;
        ?>


        <div class="couche">
            <img src="<?php echo IMAGES_URL ?>/couches-svg/couche-bleuFonce.svg" alt="" class="rotating">

        </div>
        <div class="couche">
            <img src="<?php echo IMAGES_URL ?>/couches-svg/couche-bleu.svg" alt="" class="rotating">
        </div>
        <div class=" artistes">
            <?php
            for ($i = 0; $i <= 2; $i++) {
                $artiste = $artistes[$i+$compteur];
                if($artiste){?>
                    <div class="artiste"><span class="rotating"><?php echo $artiste; ?></span></div>
                    <?php
                }
                echo $compteur;

                $compteur++;
            }
            ?>
        </div>
        <div class="couche">
            <img src="<?php echo IMAGES_URL ?>/couches-svg/couche-bleuFonce.svg" alt="" class="rotating">
        </div>
        <div class="couche">
            <img src="<?php echo IMAGES_URL ?>/couches-svg/couche-vert.svg" alt="" class="rotating">
        </div>
        <div class="artistes">
            <?php
            for ($i = 0; $i <= 2; $i++) {
                $artiste = $artistes[$i+$compteur];
                if($artiste){?>
                    <div class="artiste"><span class="rotating"><?php echo $artiste; ?></span></div>
                    <?php
                }
                echo $compteur;

                $compteur++;
            }
            ?>
        </div>
        <div class="couche">
            <img src="<?php echo IMAGES_URL ?>/couches-svg/couche-jaune.svg" alt="" class="rotating">
        </div>
        <div class="couche">
            <img src="<?php echo IMAGES_URL ?>/couches-svg/couche-rouge.svg" alt="" class="rotating">
        </div>
        <div class=" artistes">
            <?php
            for ($i = 0; $i <= 2; $i++) {
                $artiste = $artistes[$i+$compteur];
                if($artiste){?>
                    <div class="artiste"><span class="rotating"><?php echo $artiste; ?></span></div>
                    <?php
                }
                $compteur++;
            }
            ?>
        </div>
        <div class="couche">
            <img src="<?php echo IMAGES_URL ?>/couches-svg/couche-bleu.svg" alt="" class="rotating">
        </div>
        <div class="couche">
            <img src="<?php echo IMAGES_URL ?>/couches-svg/couche-jaune.svg" alt="" class="rotating">
        </div>
        <div class=" artistes">
            <?php
            for ($i = 0; $i <= 1; $i++) {
                $artiste = $artistes[$i+$compteur];
                if($artiste){?>
                    <div class="artiste"><span class="rotating"><?php echo $artiste; ?></span></div>
                    <?php
                }
                $compteur++;
            }
            ?>
        </div>
        <div class="couche">
            <img src="<?php echo IMAGES_URL ?>/couches-svg/couche-bleuFonce.svg" alt="" class="rotating">
        </div>
        <div class="artistes">
            <?php
            for ($i = 0; $i <= 1; $i++) {
                $artiste = $artistes[$i+$compteur];
                if($artiste){?>
                    <div class="artiste"><span class="rotating"><?php echo $artiste; ?></span></div>
                    <?php
                }
                $compteur++;
            }
            ?>
        </div>

        <div class="couche">
            <img src="<?php echo IMAGES_URL ?>/couches-svg/couche-vert.svg" alt="" class="rotating">
        </div>
        <div class="couche">
            <img src="<?php echo IMAGES_URL ?>/couches-svg/couche-jaune.svg" alt="" class="rotating">
        </div>
        <div class="artistes">
            <?php
            for ($i = 0; $i <= 2; $i++) {
                $artiste = $artistes[$i+$compteur];
                if($artiste){?>
                    <div class="artiste"><span class="rotating"><?php echo $artiste; ?></span></div>
                    <?php
                }
                $compteur++;
            }
            ?>
        </div>
        <div class="couche">
            <img src="<?php echo IMAGES_URL ?>/couches-svg/couche-bleuFonce.svg" alt="" class="rotating">
        </div>
        <div class="couche">
            <img src="<?php echo IMAGES_URL ?>/couches-svg/couche-vert.svg" alt="" class="rotating">
        </div>
        <div class="artistes">
            <?php
            for ($i = 0; $i <= 1; $i++) {
                $artiste = $artistes[$i+$compteur];
                if($artiste){?>
                    <div class="artiste"><span class="rotating"><?php echo $artiste; ?></span></div>
                    <?php
                }
                $compteur++;
            }
            ?>
        </div>
        <div class="couche">
            <img src="<?php echo IMAGES_URL ?>/couches-svg/couche-jaune.svg" alt="" class="rotating">
        </div>
        <div class="couche">
            <img src="<?php echo IMAGES_URL ?>/couches-svg/couche-rouge.svg" alt="" class="rotating">
        </div>
        <div class="artistes">
            <?php
            for ($i = 0; $i <= 1; $i++) {
                $artiste = $artistes[$i+$compteur];
                if($artiste){?>
                    <div class="artiste"><span class="rotating"><?php echo $artiste; ?></span></div>
                    <?php
                }
                echo $compteur;
                $compteur++;
            }
            ?>
        </div>

        <div class="couche">
            <img src="<?php echo IMAGES_URL ?>/couches-svg/couche-bleuFonce.svg" alt="" class="rotating">
        </div>

        <div id="titre">
            <img src="<?php echo IMAGES_URL ?>/titre-desktop.svg" alt="Les IndisciplinéEs" class="show-desktop">
            <img src="<?php echo IMAGES_URL ?>/titre-mobile.svg" alt="Les IndisciplinéEs" class="hide-desktop">
        </div>

    </div>
<?php get_footer(); //appel du template footer.php ?>