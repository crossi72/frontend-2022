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
        $testo = "ciao mondo!<br>";

        //stampo il contenuto della variabile
        echo $testo;
        /*
        questo commento
        può occupare più righe
        */

        //stampo 10 volte il contenuto della variabile
        for ($i = 0; $i < 10; $i = $i + 1) {
            echo $testo;
        }
    ?>
</body>
</html>