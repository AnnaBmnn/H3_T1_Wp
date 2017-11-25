<?php
get_header(); //appel du template header.php  ?>

<div id="content">
    <h1>LOL</h1>
    <?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>
            <h1><?php the_title(); ?></h1>
            <h2>Posté le <?php the_time('F jS, Y') ?></h2>
            <p><?php the_content(); ?></p>            
    <?php
    }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    }
    ?>
</div> <!-- /content -->
<button class="button">Click me</button>
<div class="pop-up">
    <div class="opacity-in">
        <div class="close">X</div>
        <h2 class="title-artist">William Z. Villain</h2>
        <div class="artist-img">
            <div class="overlay-fade"></div>
            <!-- <img src="img/artist.png" alt=""> -->
        </div>
        <div class="infos">
            <div class="overlay-fade"></div>
            <span class="date">
                Jeu. 9</br>
                Nov.</br>
            </span>
            <p class="sub-infos">Le Manège à Lorient</br>10 Rue Colbert, Cité Allende, 56100 Lorient</br>17€ / 15€ / 12€</p>
            <span class="shop-button">Billeterie</span>
            <p class="description">Sorti de nulle part (le midwest américain profond, tendance Wisconsin), musicien amateur et plutôt local, jusqu'alors globalement passé sous les radars de la reconnaissance, William Z Villain est pourtant l’auteur d’une chanson qui mérite
                d’être sur toutes les lèvres…</p>
        </div>
        <!--<iframe width="560" height="315" src="https://youtu.be/ZPaS0A5Z0VY" frameborder="0" allowfullscreen></iframe>-->
    </div>
</div>
<?php get_footer(); //appel du template footer.php ?>