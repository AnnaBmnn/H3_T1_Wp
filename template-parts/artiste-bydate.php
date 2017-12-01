<div class="artiste--right artiste">
    <div class="artiste__name" data-artisteID="<?php echo get_the_ID(); ?>" ><?php echo get_the_title(); ?></div>
    <div class="artiste__infos">
    <?php if(get_field('lieu')){
        $lieu = get_field_object('lieu');
        echo '<div class="artiste__lieu">'. $lieu['value'][0]->post_title .'</div>';
        echo '<div class="artiste__adresse">'. $lieu['value'][0]->adresse  .'</div>';
    } ?>
    </div>

    <?php if(get_field('heure')){
        echo '<div class="artiste__date">'. get_field('heure') .'</div>';
    } ?>
    <?php if ( has_post_thumbnail() ) : ?>
		<div class="artiste__picture">
        	<?php the_post_thumbnail('artiste-carre'); ?>
        </div>
	<?php endif; ?>

                                        

</div>
