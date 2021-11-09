<?php
    session_start();

    echo $_SESSION["Nombre"] . " tiene " . $_SESSION["Edad"] . " años.";
    echo "<br>";

    unset($_SESSION["Nombre"]);
    print_r($_SESSION);
    echo "<br>";
    session_unset();
    print_r($_SESSION);
    echo "<br>";
    session_unset();
    print_r($_SESSION);
    echo "<br>";
?>