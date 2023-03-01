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
        //stampo una stringa più volte
        ripeti(5, "ciao mondo!");
        ripeti(10, "testo di prova");
        ripeti(3, "testo di chiusura");
    ?>
</body>
</html>
