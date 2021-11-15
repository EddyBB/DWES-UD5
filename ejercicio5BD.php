<?php
    $servidor = "localhost";
    $baseDatos = "usuarios";
    $usuario = "developer";
    $pass = "developer";
    function insertaElemento($nombreUsuario,$contrasenya,$cuentaBank,$perfil){
            try {
                $conexion = new PDO("mysql:host=$GLOBALS[servidor];dbname=$GLOBALS[baseDatos]", $GLOBALS["usuario"], $GLOBALS["pass"]);
            
                $sql = $conexion->prepare("INSERT INTO users (nombreUsuario, contrasenya, cuenta_bank, perfil) VALUES (:nombreUsuario,:contrasenya,:cuenta_bank,:perfil)");
                
                $sql->bindParam(":nombreUsuario", $nombreUsuario);
                $sql->bindParam(":contrasenya", $contrasenya);
                $sql->bindParam(":cuenta_bank", $cuentaBank);
                $sql->bindParam(":perfil", $perfil);
                $sql->execute();
                $last_id = $conexion->lastInsertId(); //return no me devuelve el id
                return $last_id;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
            $conexion=null;
    }
?>