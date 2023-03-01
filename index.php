<?php

include("lib/library.php");

?>

<!DOCTYPE html>
<html lang="en">
<?php
    print_html_header();
?>
<body>
    <?php
        //assegno un valore alla variabile
        $valore = -5;

        echo "il valore assoluto di ". $valore;

        //stampo il risultato della funzione
        $valore = valore_assoluto($valore);
        echo " è " . $valore . "<br>";
    ?>
</body>
</html>
