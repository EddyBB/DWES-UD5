<?php
    $nombre = "Carmen";
    $edad = 25;
    session_start();
    $_SESSION["Nombre"] = $nombre;
    $_SESSION["Edad"] = $edad;


?>