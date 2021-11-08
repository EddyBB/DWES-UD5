<?php
    $nombre = "Eddy";
    $edad = 28;
    session_start();
    $_SESSION["Nombre"] = $nombre;
    $_SESSION["Edad"] = $edad;
    
?>