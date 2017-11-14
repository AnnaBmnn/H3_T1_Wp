var date = document.querySelectorAll('.agenda__day');
var current_day;
console.log(date);
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
		var dateTermId = this.dataset.term;
		console.log(dateTermId);
        //var post_ID=$(this).attr("post_ID"); // exemple de récupération de contenu
        var ajax_section =$("#ajax-artiste-by-date"); // zone ou renvoyer le contenu de l'AJAX
        jQuery.post(
            ajaxurl, // url du fichier admin-ajax.php,
            {
                'action': 'taxonomy_date', // nom de l'action à créer
                'taxonomy_term_id': dateTermId // exemple de variable à envoyer.
            },
            function(response){
                ajax_section.html(response);
            }
        );
    });

});