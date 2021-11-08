<!DOCTYPE html>
<?php
    include "ejercicio1.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Imprime una cookie individual
        echo $_COOKIE["Nombre"] . " tiene " . $_COOKIE["Edad"] . " años";
        echo "<br>";

        // Otra forma de depurar/prueba es ver todas las cookies
        //print_r($_COOKIE);
    ?>
</body>
</html>