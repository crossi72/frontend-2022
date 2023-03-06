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

    function crea_div($text, $divs, $class){
        //ciclo per stampare i DIV $divs volte
        for($i = 0; $i < $divs; $i++){
            //stampo il DIV corrente
            stampa_div($class, $text);
        }
    }
?>