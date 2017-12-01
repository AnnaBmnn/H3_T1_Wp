<?php if ( !is_front_page() ) : ?>
        <footer>
            <span class="footer__title">Les indisciplinées</span>
            
            <div class="footer__container">
	            <?php
				// 'Sidebar Footer' = Sidebar name or id
				if ( is_active_sidebar( 'footer-text' ) ) { ?>
                	<?php dynamic_sidebar( 'footer-text' ); ?>
				<?php } ?>
				<?php if ( is_active_sidebar( 'footer-links' ) ) { ?>
                	<?php dynamic_sidebar( 'footer-links' ); ?>
				<?php } ?>
                <div class="footer__subParts footer__subParts--social">
	                <?php if(get_field('facebook', 'options')) : ?>
                    <div>
                        <a href="<?php echo get_field('facebook', 'options'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/facebook.png" alt=""></a>
                    </div>
                    <?php endif; ?>
                    <?php if(get_field('twitter', 'options')) : ?>
                    <div>
                        <a href="<?php echo get_field('twitter', 'options'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/twitter.png" alt=""> </a>               
                    </div>
                    <?php endif; ?>
                    <?php if(get_field('instagram', 'options')) : ?>
                    <div>
                        <a href="<?php echo get_field('instagram', 'options'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/instagram.png" alt=""></a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="mentions">
                <div>
                    <span><a href="<?php home_url(); ?>/mentions-legales">Mentions légales</a></span>
                    <span>|</span>
                    <span><a href="https://billetterie.mapl.fr/sites/billetterie.mapl.fr/files/la_billetterie/cgv/MAPL%20CGV%202017.pdf">CGV</a></span>
                </div>
                <span>©2017 Les indisciplinées - Tous droits réservés</span>            
            </div>
        </footer>
<?php endif; ?>

        <!-- Execution de la fonction wp_footer() obligatoire ! -->
        <?php wp_footer();  ?>
    </body>
</html>