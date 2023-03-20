//aggancio la funzione all'evento che segnala il completamento del DOM
document.addEventListener("DOMContentLoaded", js);

//codice da eseguire quando il DOM è pronto
function js(){
    //creo un paragrafo e lo assegno alla variabile nuovo_elemento
    let nuovo_elemento = document.createElement("p");

    //leggo l'elemento con ID "target" e lo assegno alla variabile mio_div
    let mio_div = document.getElementById("target");

    //scrivo all'interno del nuovo paragrafo
    nuovo_elemento.innerText = "ci sono!!!";

    //creo una classe vuota
    let mia_classe = document.createAttribute("class");

    //assegno il valore "bg-evidente" alla classe
    mia_classe.value = "bg-evidente";

    //assegno la classe al nuovo paragrafo
    nuovo_elemento.setAttribute(mia_classe.name, mia_classe.value);

    //aggiungo il paragrafo come figlio dell'elemento mio_div
    mio_div.appendChild(nuovo_elemento);
}