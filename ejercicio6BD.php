<?php
    $servidor = "localhost";
    $baseDatos = "usuarios";
    $usuario = "developer";
    $pass = "developer";
    function obtenerElemento($nombreUsuario){
        
        try {
            $conexion = new PDO("mysql:host=$GLOBALS[servidor];dbname=$GLOBALS[baseDatos]", $GLOBALS["usuario"], $GLOBALS["pass"]);
            $sql = $conexion->prepare("SELECT * FROM users WHERE nombreUsuario=:nombreUsuario");
            $sql->bindParam(":nombreUsuario",$nombreUsuario);
            $sql->execute();
            
            return $sql->fetch();
            
        } catch (PDOException $e) {
            return $e->getMessage();
        }
        $conexion=null;
    }
?>