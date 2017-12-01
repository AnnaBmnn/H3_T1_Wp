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

// function burger menu
function burger () {
	var burger_menu = jQuery(".navbar__burger");
	var navbar = jQuery(".navbar");
	burger_menu.on("click", function(e){
	  	e.preventDefault();
	  	navbar.toggleClass('navbar--active');
  	});
    
}


jQuery(document).ready(function($){
	burger();
		
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
                    //mettre le bon id sur tous les endroits où on affiche les artiste
                    var artiste_id = this.dataset.artisteid;
                    var ajax_section =$("#popup"); // zone ou renvoyer le contenu de l'AJAX
                        jQuery.post(
                            ajaxurl, // url du fichier admin-ajax.php,
                            {
                                'action': 'popup_artiste', // nom de l'action à créer
                                'artiste_id': artiste_id // exemple de variable à envoyer.
                            },
                            function(response){
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
			                            $('.infos').toggleClass('slide-infos')
			                            $('.title-artist').toggleClass('slide-title')
			                        }, 500)
			                    }
                            }
                        );
                    });
                if($('.pop-up').length !== 0){
                    $(document).on('click',function(e) {
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