<?php
/*
Template Name: edito
*/
get_header(); //appel du template header.php 

if (have_posts()) :

  while ( have_posts() ) : the_post(); ?>
	<section class="edito">
	    <div class="edito__description">
	        <h2 class="edito__title"><?php the_title(); ?></h2> 
	        <div class="edito__text">
	            <?php the_content() ;?>
	        </div>
	    </div>
	    <?php 
		$affiche = get_field('affiche', 'options');
		$size = 'large';
		    
		if($affiche) : ?>
	    <div class="edito__background">
	        <?php echo wp_get_attachment_image( $affiche, $size ); ?>
	    </div>
	    <?php endif; ?>
	</section>
	<?php
	endwhile;
else : 	
	get_template_part('content-none');
endif; ?>


<?php get_footer(); //appel du template footer.php ?>