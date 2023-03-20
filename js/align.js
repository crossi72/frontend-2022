//aggancio la funzione di gestione al completamento del DOM
document.addEventListener("DOMContentLoaded", manager);

function manager(){
    //aggancio le funzioni agli eventi dei DIV di controllo
    document.getElementById("left").addEventListener("mouseover", left_align);
    document.getElementById("middle").addEventListener("mouseover", center_align);
    document.getElementById("right").addEventListener("mouseover", right_align);

    function left_align(){
        add_class("left");
    }

    function center_align(){
        add_class("center");
    }

    function right_align(){
        add_class("right");
    }

    function add_class(my_class){
        let miei_div = document.getElementsByClassName("content");

        remove_classes();
        for (i = 0; i < miei_div.length; i++){
            miei_div[i].classList.add(my_class);
        }
    }

    function remove_classes(){
        let miei_div = document.getElementsByClassName("content");

        for (i = 0; i < miei_div.length; i++){
            miei_div[i].classList.remove("left");
            miei_div[i].classList.remove("center");
            miei_div[i].classList.remove("right");
        }
    }
}