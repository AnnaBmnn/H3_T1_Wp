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
    <div class="opacity-in" id="popup">
    </div>
</div>
<?php get_footer(); //appel du template footer.php ?>