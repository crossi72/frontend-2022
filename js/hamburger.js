document.getElementById('hamburger').addEventListener('click', manage_menu);

function manage_menu(){
    //prelevo l'oggetto menu
    let menu = document.getElementById('apriMenu');
    //verifico se l'oggetto menu contiene la classe "hide"
    if (menu.classList.contains("hide")){
        //l'oggetto menu contiene la classe "hide", la rimuovo
        menu.classList.remove("hide");
    } else {
        //l'oggetto menu non contiene la classe "hide", la aggiungo
        menu.classList.add("hide");
    }
}
