//aggancio i gestori di evento ai pulsanti
document.getElementById("btnConta").addEventListener("click", conta);
document.getElementById("btnColora").addEventListener("click", colora);

function conta(){
    //prelevo i div
    let miei_div = document.getElementsByTagName("div");
    //prelevo l'oggetto nel quale scrivere il risultato
    let output = document.getElementById("testo");
    //scrivo nell'oggetto
    output.textContent = "ci sono " + miei_div.length + " div";
}

function colora(){
    //prelevo i div
    let miei_div = document.getElementsByTagName("div");

    //ciclo sui div per aggiungere la classe opportuna
    for (i = 0; i < miei_div.length; i++){
        miei_div[i].classList.add("rosso");
    }
}