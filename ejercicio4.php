<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <center>
        <h1>SESSIONS</h1>
    </center>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Función</th>
            <th>Valor</th>
        </tr>

        <tr>
            <td>session.use_cookies</td>
            <td>Especifica si PHP usará cookies para propagar las sesiones.</td>
            <td>Por defecto se establece en 1 (true)<br>Caso contrario 0 (false)</td>

        </tr>

        <tr>
            <td>session.use_only_cookies</td>
            <td>Especifica que el identificador sea comunicado a través de URL entre el navegador y el usuario de forma transparente, es decir sin necesidad de incorporar el identificador en cada petición o respuesta.</td>
            <td>Por defecto es 0 (false)<br>Caso contrario 1 (true)</td>


        </tr>

        <tr>
            <td>session.save_handler</td>
            <td>Define el nombre del gestor que se usa para almacenar y recuperar información asociada con una sesión.</td>
            <td>Por defecto es "files"</td>

        </tr>

        <tr>
            <td>session.name</td>
            <td>Especifica el nombre de la sesión que se usa como nombre de cookie.</td>
            <td>Por defecto es PHPSESSID</td>

        </tr>

        <tr>
            <td>session.auto_start</td>
            <td>Especidifa si el módulo de sesión inicia una sesión automáticamente cuando arranque una petición</td>
            <td>Por defecto es 0(deshabilitado)<br> Caso contrario 1 (habilitado)</td>
        </tr>

        <tr>
            <td>session.cookie_lifetime</td>
            <td>Especifica el tiempo de vida en segundos de la cookie que es enviada al navegador</td>
            <td>Por defecto es 0 <br> Caso contraio 1</td>
        </tr>

        <tr>
            <td>session.gc_maxlifetime</td>
            <td>Especifica el número de segundos después de lo cual la información sea vista como 'basura' y potencialmente limpiada.</td>
            <td>La recolección de basura puede suceder durante el inicio de sesiones</td>
        </tr>

    </table>

</body>

</html>