<?php
/* Template Name: infos */
get_header(); //appel du template header.php 

    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>
    <div class="background__bird" style="background-image: url('<?php echo get_field('background')['url'] ?>');">;
        
    </div>
    <h2 class="title"><?php the_title()?></h2>
    <div class="practical">
        <div class="practical__sub">
            <div class="practical__categories">
                <?php $billeterie =  get_field('billeterie') ?>
                <h3 class="practical__subtitle"><?php  echo $billeterie['titre_billeterie']; ?></h3>
                <?php  echo $billeterie['contenu_billeterie']; ?>
                              
            </div>
            <div class="practical__categories">
                <?php $tarif =  get_field('tarif') ?>
                <h3 class="practical__subtitle"><?php  echo $tarif['titre_tarif']; ?></h3>
                <?php  echo $tarif['contenu_tarif']; ?>            
            </div>
            <div class="practical__categories">
                <?php $benevolat =  get_field('benevolat') ?>
                <h3 class="practical__subtitle"><?php  echo $benevolat['titre_benevolat']; ?></h3>
                <?php  echo $benevolat['contenu_benevolat']; ?>            
            </div>
            <div class="practical__categories">
                <?php $contact =  get_field('contact') ?>

                <h3 class="practical__subtitle"><?php  echo $contact['titre_contact']; ?></h3>
                <!--  METTRE LES RESEAUX SOCIAUX  -->
                <div class="social__media">
                    <?php
                        //var_dump($contact['reseaux_sociaux']);
                        foreach ($contact['reseaux_sociaux'] as $img) {
                            echo '<div>';
                                echo '<img src="'. $img["reseaux"]  .'" alt="">';
                            echo '</div>';
                           
                        }

                    ?>                   
                </div>
                <?php  echo $contact['contenu_contact']; ?>  
            </div>
        </div>
        <div class="practical__sub">
            <div class="practical__categories">
                <?php $acces =  get_field('acces') ?>
                <h3 class="practical__subtitle"><?php  echo $acces['titre_acces']; ?></h3>
                <?php  echo $acces['contenu_acces']; ?>  
            </div>
            <div class="practical__categories practical__categories--security">
                <?php $securite =  get_field('securite') ?>
                <h3 class="practical__subtitle"><?php  echo $securite['titre_securite']; ?></h3>
                <?php  echo $securite['contenu_securite']; ?>                  
            </div>
        </div>
    </div>
    <div class="map">
        <img src="img/map.png" alt="">
    </div>
    <div class="separator"></div>
    <section class="parteners">
        <h3 class="parteners__subtitle"><?php the_field('titre_partenaires'); ?></h3>
        <?php $partenaires_array = get_field('partenaires') ;
            $length = sizeof($partenaires_array);
            for($i=0; $i< $length; $i++){
                if($i % 7== 0){
                    if($i!==0){
                       echo '</div>'; 
                    }
                    echo '<div class="parteners__row">';
                }
                echo '<div>';
                    echo '<img src="'. $partenaires_array[$i]['partenaire']['url'] .'" alt="">';
                echo '</div>';
            }
        ?>
    </section>
    <div class="separator"></div>
    <?php } ?>
    <?php wp_reset_postdata(); ?>

<?php } ?>
<?php get_footer(); //appel du template footer.php ?>