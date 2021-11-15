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
        session_start();
        if($_SESSION["perfil"] == "usuario"){
            echo "<h1>ERES UN PRINGAO<h1>";
        }else if($_SESSION["perfil"] == "admin"){
            
            header("location: admin.php");
        } else {
            header("location: ejercicio7.php");
        }
    ?>
    <a href="cierraSesion.php" >Cerrar Sesión</a>
</body>
</html>