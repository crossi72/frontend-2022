<?php
    require_once("lib/library.php");
?>

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
        $primo_array = ["ciao", "mondo", "ora", "so", "usare", "gli", "array"];
        $classi = ["cl1", "cl2", "cl3", "cl4", "cl5", "cl6", "cl7"];

        // echo "l'array contiene " . count($primo_array) . " elementi<br>";
        // echo "il primo elemento è " . $primo_array[0] . "<br>";
        // echo "il secondo elemento è " . $primo_array[1] . "<br>";
        // echo "il terzo elemento è " . $primo_array[2] . "<br>";
        // echo "posso stamparli tutti di fila " . $primo_array[0] . $primo_array[1] . $primo_array[2] . "<br>";
        // //ciclo sugli elementi dell'array e li stampo tutti
        // for ($i = 0; $i < count($primo_array); $i++){
        //     echo $primo_array[$i] . " ";
        // }

        stampa_array($primo_array);
        stampa_doppio_array($classi, $primo_array);
    ?>
</body>
</html>