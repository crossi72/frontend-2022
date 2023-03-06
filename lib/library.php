<!-- questo è un commento html -->
<?php
    //questo è un commento php: non finisce nel flusso html

    function stampa_div($classe, $contenuto, $id = ""){
        echo "<div class='" . $classe . "'";
        if ($id != ""){
            echo " id = '" . $id . "'";
        }
        echo ">";
        echo $contenuto;
        echo "</div>";
    }

    function valore_assoluto($numero){
        //se il valore è negativo, lo moltiplico per -1
        //altrimenti lo restituisco senza modificarlo
        if ($numero < 0){
            $risultato = $numero * -1;
        } else {
            $risultato = $numero;
        }

        return $risultato;
    }

    function print_html_header(){
        ?>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <?php
    }

    function ripeti($numero, $testo){
        //apro il paragrafo
        echo "<p>";
        //ciclo per stampare $numero volte il contenuto di $testo
        for ($i = 0; $i < $numero; $i++){
            echo $testo . "<br>";
        }
        //chiudo il paragrafo
        echo "</p>";
    }

    function crea_div($text, $divs, $class, $class2){
        //ciclo per stampare i DIV $divs volte
        for($i = 0; $i < $divs; $i++){
            //se l'indice del ciclo è pari, stampo DIV con $class
            //altrimenti stampo DIV con $class2
            if($i % 2 == 0){
                //pari
                stampa_div($class, $text);
            } else {
                //dispari
                stampa_div($class2, $text);
            }
        }
    }

    function stampa_array($valori){
        //ciclo sugli elementi dell'array e creo un DIV per ogni elemento
        for($i = 0; $i < count($valori); $i++){
            //apro il div
            echo "<div>";
            //stampo il valore corrente
            echo $valori[$i];
            //chiudo il div
            echo "</div>";
        }
    }
?>