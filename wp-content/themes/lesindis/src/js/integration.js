let pop_up = document.querySelector('.pop-up'),
    opa = document.querySelector('.opacity-in'),
    over_img = document.querySelector('.overlay-fade'),
    over_title = document.querySelector('.title-artist'),
    over_infos = document.querySelector('.infos'),
    button = document.querySelector('.button')


jQuery(document).ready(function($){
    $('.artiste__name').on('click', function(e){
        console.log('arttt')
        //mettre le bon id sur tous les endroits où on affiche les artiste
        var artiste_id = this.dataset.artisteid;
        console.log(artiste_id);
        var ajax_section =$("#popup"); // zone ou renvoyer le contenu de l'AJAX
            jQuery.post(
                ajaxurl, // url du fichier admin-ajax.php,
                {
                    'action': 'popup_artiste', // nom de l'action à créer
                    'artiste_id': artiste_id // exemple de variable à envoyer.
                },
                function(response){
                    console.log($('.pop-up'));
                    $('.pop-up').html(response);
                    $('.pop-up').toggleClass('show');

                    if ($('.opacity-in').hasClass('opacity-out')) {
                        $('.opacity-in').toggleClass('opacity-out')
                        $('.overlay-fade').toggleClass('slide-img')
                        $('.title-artist').toggleClass('slide-title')
                        $('.infos').toggleClass('slide-infos')
                    } else {
                        setTimeout(() => {
                            $('.opacity-in').toggleClass('opacity-out')
                            $('.overlay-fade').toggleClass('slide-img')
                            $('.overlay-fade').toggleClass('slide-img')
                            $('.title-artist').toggleClass('slide-title')
                        }, 500)
                    }
                }
            );
        });
    if($('.pop-up').length !== 0){
        $(document).on('click',function(e) {
            console.log('oki');
            if (e.target != $('.pop-up') ) {
                if ($('.pop-up').hasClass('show') && $('.opacity-in').hasClass('opacity-out')) {

                    $('.pop-up').toggleClass('show');
                    $('.opacity-in').toggleClass('opacity-out')
                    $('.overlay-fade').toggleClass('slide-img')
                    $('.title-artist').toggleClass('slide-title')
                    
                    $('.infos').toggleClass('slide-infos')
                }
            }
        })    
    }
    // if($('.container--lieu')){
    //     $.localScroll({
    //         duration: 900
    //     });        
    // }

});


