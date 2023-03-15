//prelevo l'oggetto che ha ID btnRosso
let mio_button = document.getElementById("btnRosso");
//associo il gestore di evento aggiungiRosso al pulsante
mio_button.addEventListener("click", aggiungiRosso);

//prelevo l'oggetto che ha ID btnVerde
mio_button = document.getElementById("btnVerde");
//associo il gestore di evento aggiungiVerde al pulsante
mio_button.addEventListener("click", aggiungiVerde);

function aggiungiRosso(){
    let miei_div = document.getElementsByClassName("div");

    for (i = 0; i < miei_div.length; i++){
        miei_div[i].classList.add("rosso");
        miei_div[i].classList.remove("verde");
    }
}

function aggiungiVerde(){
    let miei_div = document.getElementsByClassName("div");

    for (i = 0; i < miei_div.length; i++){
        miei_div[i].classList.add("verde");
        miei_div[i].classList.remove("rosso");
    }
}