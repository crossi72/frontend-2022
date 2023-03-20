//aggancio l'evento che segnala che il DOM è pronto
document.addEventListener("DOMContentLoaded", manager);

function manager(){
    //aggancio la funzione di gestione all'evento click del pulsante
    document.getElementById("trigger").addEventListener("click", gestisci_div);

    /**
     * gestisce la modifica di tutti i div
     */
    function gestisci_div(){
        modifica_div("primo-div", "bg-blu", "primo div");
        modifica_div("secondo-div", "bg-blu", "secondo div");
    }

    /**
     * 
     * @param {string} id id del DIV da modificare
     * @param {string} classe classe da assegnare al DIV
     * @param {string} text testo da inserire nel DIV
     */
    function modifica_div(id, classe, text){
        //quando si attiva la funzione, carico il div
        let mio_div = document.getElementById(id);

        //aggiungo la classe
        mio_div.classList.add(classe);

        //creo e inserisco il testo
        let mio_paragrafo = document.createElement("p");
        mio_paragrafo.innerText = text;

        mio_div.appendChild(mio_paragrafo);
    }
}