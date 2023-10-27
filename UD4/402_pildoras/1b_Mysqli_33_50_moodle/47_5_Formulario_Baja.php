<!DOCTYPE html>
<html lang="en">
<?php
/*
    Información: Curso PHP MySQL. Inyección SQL I. Vídeo 47
    Enlace a video:  https://www.youtube.com/watch?v=3Qw3QQg1xYU
    Finalidad ejercicio: Probar Inyección SQL
    Alumno:
*/
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Login BBDD</title>
</head>
<body>
    <!-- Creación de formulario para login de usuarios registrados en la BBDD -->
    <!-- Cuenta con dos input para introducir el usuario y la contraseña del usuario. -->
    <form action="47_6_pagina_Baja.php" method="get">

        <label>Usuario: <input type="text" name="usu"></label>
        <label>Contraseña: <input type="text" name="con"></label>
        <input type="submit" namespace="enviando" value="Login">
        
    </form>
    
</body>
</html>