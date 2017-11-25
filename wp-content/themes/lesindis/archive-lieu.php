<?php
get_header(); //appel du template header.php  ?>
<!-- <?php
    echo 'TA MEREEEEEE';
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>
            <h1><?php the_title(); ?></h1>

            <p><?php get_field('adresse'); ?></p>
    <?php
    }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    }
?> -->
<div class="nav-lieu">
    <ul>
        <li class="active">LKoukouieu</li>
        <li>Lieu</li>
        <li>Echonova</li>
        <li>Lieu</li>
        <li>Flop</li>
        <li>Le manege</li>
        <li>Lieu</li>
        <li>Youkey</li>
    </ul>
</div>
<div class="container--lieu">
    <div class="section section-lieu">
        <h2 class="section__title--medium">
            La manège
        </h2>
        <div class="lieu">
            <div class="lieu__img">
                <img src="https://img.20mn.fr/4XYkpJZNQyCzRK4bGFs_6A/1200x768_chat-illustration" alt="">
            </div>
            <div class="lieu__infos">
                <h3 class="lieu__infosTitre">Le manège</h3>
                <span class="lieu__infosAdresse">10 rue colbert</span>
                <span class="lieu__infosAdresse">56100 Lorient</span>
                <a href="#" class="lieu__infosLink">Voir sur google</a>
            </div>
            <div class="lieu__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus facilis necessitatibus reprehenderit, debitis, dolores magni officiis. Minus dolor facere nisi. Architecto sit provident eum quae maxime laboriosam eius, aut blanditiis.
            </div>
        </div>
        <div class="lieu__artistes">
            <div class="artiste__journees">
                <div class="artiste__date">
                        3 decembre
                </div>
                <div class="artiste__memeJournee">
                    <div class="artiste">
                        <div class="artiste__name">HeyHeyHeyHeyHey</div>
                    </div>
                    <div class="artiste">
                        <div class="artiste__name">YOOULOU</div>
                    </div>
                    <div class="artiste">
                        <div class="artiste__name">Blop</div>
                    </div>
                </div>
            </div>
            <div class="artiste__journee">
                <div class="artiste__date">
                        3 decembre
                </div>
                <div class="artiste__memeJournee">
                    <div class="artiste">
                        <div class="artiste__name">Koiujj</div>
                    </div>
                    <div class="artiste">
                        <div class="artiste__name">lorednndndn</div>
                    </div>
                    <div class="artiste">
                        <div class="artiste__name">Hey</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-lieu">
        <h2 class="section__title--medium">
            La manège
        </h2>
        <div class="lieu">
            <div class="lieu__img">
                <img src="https://img.20mn.fr/4XYkpJZNQyCzRK4bGFs_6A/1200x768_chat-illustration" alt="">
            </div>
            <div class="lieu__infos">
                <h3 class="lieu__infosTitre">Le manège</h3>
                <span class="lieu__infosAdresse">10 rue colbert</span>
                <span class="lieu__infosAdresse">56100 Lorient</span>
                <a href="#" class="lieu__infosLink">Voir sur google</a>
            </div>
            <div class="lieu__description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus facilis necessitatibus reprehenderit, debitis, dolores magni officiis. Minus dolor facere nisi. Architecto sit provident eum quae maxime laboriosam eius, aut blanditiis.
            </div>
        </div>
        <div class="lieu__artistes">
            <div class="artiste__journees">
                <div class="artiste__date">
                        3 decembre
                </div>
                <div class="artiste__memeJournee">
                    <div class="artiste">
                        <div class="artiste__name">HeyHeyHeyHeyHey</div>
                    </div>
                    <div class="artiste">
                        <div class="artiste__name">YOOULOU</div>
                    </div>
                    <div class="artiste">
                        <div class="artiste__name">Blop</div>
                    </div>
                </div>
            </div>
            <div class="artiste__journee">
                <div class="artiste__date">
                        3 decembre
                </div>
                <div class="artiste__memeJournee">
                    <div class="artiste">
                        <div class="artiste__name">Koiujj</div>
                    </div>
                    <div class="artiste">
                        <div class="artiste__name">lorednndndn</div>
                    </div>
                    <div class="artiste">
                        <div class="artiste__name">Hey</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); //appel du template footer.php ?>