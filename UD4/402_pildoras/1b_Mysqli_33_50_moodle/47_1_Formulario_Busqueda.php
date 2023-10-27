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
    <title>Formulario BBDD</title>
</head>
<body>
    <!-- Creación de formulario para busqueda de articulos en BBDD -->
    <!-- Cuenta con un input para introducir el nombre del articulo y un boton para enviar el nombre y mostrar todas las coincidencias posibles. -->
    <form action="47_2_pagina_busqueda.php" method="get">

        <label>Buscar: <input type="text" name="buscar"></label>

        <input type="submit" namespace="enviando" value="Dale!">
        
    </form>
    
</body>
</html>