//let max_mes = localStorage.getItem('max_mes')


ten_cards();

function ten_cards() {

    for(let i = 1; i <= 10; i++)
        if(document.querySelector(`.hidden_card`))
            document.querySelector(`.hidden_card`).classList.remove('hidden_card');

        if(!(document.querySelector(`.hidden_card`)))
            document.querySelector('.show_more').classList.add('hidden');
}

document.querySelector('.show_more').addEventListener('click', function(event) {
    ten_cards();
});