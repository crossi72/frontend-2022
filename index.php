<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //assegno un valore alla variabile
        $valore = -5;

        echo "il valore assoluto di ". $valore;

        //stampo il risultato della funzione
        $valore = valore_assoluto($valore);
        echo " è " . $valore . "<br>";

        //assegno un valore alla variabile
        $nuovo_valore = -7;

        //stampo il risultato della funzione
        $valore = valore_assoluto($nuovo_valore);
        echo " è " . $valore;

    ?>
</body>
</html>

<?php

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

?>