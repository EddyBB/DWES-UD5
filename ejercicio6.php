<!DOCTYPE html>
<?php
    include "ejercicio6BD.php";
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="ejercicio5.css">
        <title>Login</title>
    </head>
    <body>
        <?php
            $nombreUsuario = "";
            $contrasenya = "";
            $usuarioEncontrado = "";
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $nombreUsuario = $_POST["nombreUsuario"];
                $contrasenya = $_POST["contrasenya"];

                //encriptada
                $contrasenya = password_verify($contrasenya,PASSWORD_DEFAULT);

                $getUser = obtenerElemento($nombreUsuario);

                if($getUser){
                    $usuarioEncontrado = "El usuario ya existe";
                };
            }

        ?>

        <form class="form-register" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
            <h2 class="form-titulo">Login al Banco</h2>
            <div class="contenedor-inputs">
                <input type="text" name="nombreUsuario" placeholder="Nombre Usuario" class="input-100" required>
                <input type="password" name="contrasenya" placeholder="Password" class="input-100" required>
                <input type="submit" value="Registrar" class="btn-enviar" name="submit">
                <div id="errores"><?php echo $usuarioEncontrado; ?></div>
            </div>
        </form>
    </body>
</html>