let pop_up = document.querySelector('.pop-up'),
    opa = document.querySelector('.opacity-in'),
    over_img = document.querySelector('.overlay-fade'),
    over_title = document.querySelector('.title-artist'),
    over_infos = document.querySelector('.infos'),
    button = document.querySelector('.button')
console.log('hey')
if(button){
    button.addEventListener('click', (e) => {

        pop_up.classList.toggle('show')


        if (opa.classList.contains('opacity-out')) {
            opa.classList.toggle('opacity-out')
            over_img.classList.toggle('slide-img')
            over_title.classList.toggle('slide-title')
            over_infos.classList.toggle('slide-infos')
        } else {
            setTimeout(() => {
                opa.classList.toggle('opacity-out')
                over_img.classList.toggle('slide-img')
                over_title.classList.toggle('slide-title')
                over_infos.classList.toggle('slide-infos')
            }, 500)
        }


    })

    document.addEventListener('click', (e) => {

        if (e.target != button || pop_up) {
            if (pop_up.classList.contains('show') && opa.classList.contains('opacity-out')) {

                pop_up.classList.toggle('show');
                opa.classList.toggle('opacity-out')
                over_img.classList.toggle('slide-img')
                over_title.classList.toggle('slide-title')
                over_infos.classList.toggle('slide-infos')
            }
        }



    })    
} 
