<!DOCTYPE html>
<html lang="en">
    
<?php
/*
    Información: Curso PHP MySQL. Actualizando registros en BBDD MySql II. Vídeo 46
    Enlace a video:  https://www.youtube.com/watch?v=0cbEpbe-cgY
    Finalidad ejercicio:
    Alumno:
*/
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP MySQL. Actualizando registros en BBDD MySql II. Vídeo 46</title>
</head>
<body>
<?php
    //1 Recuperamos el valor con el GET
    $codigo = $_GET["c_art"];
    $seccion = $_GET["s_art"];
    $nombre= $_GET["n_art"];
    $precio = $_GET["p_art"];

    //2 Importamos el fichero con los datos de la BBDD.
    require("../datos_conexion.php");

    //3 Esta conexión a la BBDD se hará por el método de Procedimientos con la función mysqli_()
    //Con la función mysqli_connect y pasándole como argumentos los datos anteriores nos creamos la conexión a la base de datos.
    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

    //4 mysqli_connect_errno() comprueba si la conexión da algún tipo de error.
    //si existe algún error nos salimos de la conexión con exit()
    if (mysqli_connect_errno()) {
        echo "Fallo al conectar con la BBDD";
        exit();
    }

    //5 Con mysqli_select_db podemos seleccionar el nombre de la BBDD que queramos, si existe algún error, con die() cerramos la conexión e indicamos el error.
    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
    //6 Con mysqli_set_charset y pasándole utf8 como formato de codificación de carácteres, podemos ver las tíldes y otro tipo de caracteres.
    mysqli_set_charset($conexion, "utf8");

    //7 Escribimos la consulta que queremos hacer
    $query = "UPDATE productos SET seccion='$seccion', nombrearticulo='$nombre', precio='$precio' WHERE codigoarticulo='$codigo'";

    //8   Ejecutamos la consulta
    $results = mysqli_query($conexion, $query);

    /// 9 Comprobamos que la consulta se hace correctamente
    if ($results == false) {
        echo "Error en la consulta";
    }
    else {
        /* COMPLETAR CON EL REGISTRO QUE SE HA EDITADO*/
        echo"Registro editado<br><br>";
        echo"Información de registro : <br><br>";
        echo"<table border=1><tr><td>$codigo</td></tr>";
        echo"<tr><td>$seccion</td></tr>";
        echo"<tr><td>$nombre</td></tr>";
        echo"<tr><td>$precio</td></tr>";

    }

    //10 Con mysqli_close cerramos la conexión con la BBDD.
    mysqli_close($conexion);

    ?>
</body>
</html>