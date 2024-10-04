<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
    <script>
    alert("Por favor debes iniciar sesión");
    window.location = "/Ejercicios/LoginRegister/login.php";
    </script>
    ';
    session_destroy();
    die();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developers</title>
    <style>
        #player {
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: black;
        }

        body {
            background-color: skyblue;

        }
    </style>
</head>

<body>
    <h1>Bienvenido</h1>
    <a href="/Ejercicios/LoginRegister/php/cerrar_sesion.php">Cerrar Sesión</a>
    <p>Utiliza las teclas para moverte.</p>
    <div id="player"></div>

    <script src="juego.js"></script>
</body>

</html>