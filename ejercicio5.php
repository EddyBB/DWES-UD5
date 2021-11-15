<!DOCTYPE html>
<?php
    include "ejercicio5BD.php";
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="ejercicio5.css">
        <title>Registro</title>
    </head>
    <body>
        <?php
            $nombreUsuario = "";
            $contrasenya = "";
            $cuenta_bank = "";
            $perfil = "";
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $nombreUsuario = $_POST["nombreUsuario"];
                $contrasenya = $_POST["contrasenya"];
                $cuenta_bank = $_POST["cuenta_bank"];
                $perfil = $_POST["perfil"];

                //encriptada
                $contrasenya = password_hash($contrasenya,PASSWORD_DEFAULT);

                insertaElemento($nombreUsuario,$contrasenya,$cuenta_bank,$perfil);
            }

        ?>

        <form class="form-register" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
            <h2 class="form-titulo">Registro al Banco</h2>
            <div class="contenedor-inputs">
                <input type="text" name="nombreUsuario" placeholder="Nombre Usuario" class="input-100" required>
                <input type="password" name="contrasenya" placeholder="Password" class="input-100" required>
                <input type="text" name="cuenta_bank" placeholder="Cuenta Bancaria" class="input-100" required>
                <input type="text" name="perfil" placeholder="Perfil" class="input-100" required>                
                <input type="submit" value="Registrar" class="btn-enviar" name="submit">
                <div id="errores"></div>
            </div>
        </form>
    </body>
</html>