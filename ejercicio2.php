<?php
    $nombre = "Eddy";
    $edad = 28;
    session_start();
    $_SESSION["Nombre"] = $nombre;
    $_SESSION["Edad"] = $edad;
    

    
    echo $_SESSION["Nombre"] . " tiene " . $_SESSION["Edad"] . " años.";
    echo "<br>";
    echo "El id de la sesión es: " . session_id();

?>