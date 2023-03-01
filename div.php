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
        stampa_div("container", "esempio php", "head");
            
        //stampo i div all'interno del ciclo
        for ($i = 0; $i < 30; $i++){
           stampa_div("", $i);
        }
    ?>
</body>
</html>