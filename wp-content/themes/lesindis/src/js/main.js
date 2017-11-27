var date = document.querySelectorAll('.agenda__day');
var current_day;
for(var i=0; i<date.length; i++){
	date[i].addEventListener('click', function(){
		if (current_day){
			current_day.classList.remove('agenda__day--active');
		}
		this.classList.add('agenda__day--active');
		current_day = this;
	});
}

jQuery(document).ready(function($){
	var current_day;
    $(".agenda__day").on("click", function(e){
        e.preventDefault();
		if (current_day){
			current_day.classList.remove('agenda__day--active');
		}
		this.classList.add('agenda__day--active');
		current_day = this;
		var date = this.dataset.date;
        //var post_ID=$(this).attr("post_ID"); // exemple de récupération de contenu
        var ajax_section =$("#ajax-artiste-by-date"); // zone ou renvoyer le contenu de l'AJAX
        jQuery.post(
            ajaxurl, // url du fichier admin-ajax.php,
            {
                'action': 'artiste_by_date', // nom de l'action à créer
                'date': date // exemple de variable à envoyer.
            },
            function(response){
                ajax_section.html(response);
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
                                    //opa.classList.toggle('opacity-out')
                                    $('.opacity-in').toggleClass('opacity-out')
                                    $('.overlay-fade').toggleClass('slide-img')
                                    $('.title-artist').toggleClass('slide-title')
                                    // over_title.classList.toggle('slide-title')
                                    // over_infos.classList.toggle('slide-infos')
                                    $('.infos').toggleClass('slide-infos')
                                } else {
                                    setTimeout(() => {
                                        //opa.classList.toggle('opacity-out')
                                        $('.opacity-in').toggleClass('opacity-out')

                                        //over_img.classList.toggle('slide-img')
                                        $('.overlay-fade').toggleClass('slide-img')
                                        $('.overlay-fade').toggleClass('slide-img')
                                        $('.title-artist').toggleClass('slide-title')
                                        // over_title.classList.toggle('slide-title')
                                        // over_infos.classList.toggle('slide-infos')
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
            }
        );

    });

});