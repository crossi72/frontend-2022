<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        //stampo i div all'interno del ciclo
        for ($i = 0; $i < 30; $i++){
            echo "<div>" . $i . "</div>";
        }
    ?>
</body>
</html>