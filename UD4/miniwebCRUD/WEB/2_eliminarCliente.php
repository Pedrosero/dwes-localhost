<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Un Articulo en BBDD</title>
</head>
<body>

<?php
/*
    Información: PHP/MySql. Insertando registros en BBDD MySql II. Vídeo 43
    Enlace a video: https://www.youtube.com/watch?v=U3gFWe9tWec
    Finalidad ejercicio:
    Alumno: 

    FALTACOMPLETAR:    FUNCIONES/ELEMENTOS QUE FALTAN POR COMPLETAR EN EL CÓDIGO:  

["c_art"]
["importado"]
('$cod', '$sec', '$nom', '$pre', '$fec', '$imp', '$por')
false
INSERT INTO 

*/
?>

<?php

    //1 Comentar y completar
    $cod=$_GET ["c_cli"];
   
   
    /*ESTA PARTE YA NO HACE FALTA PORQUE PARA BORRAR ARTÍCULOS SOLO CON PONER EL CÓDIGO
    SE ELIMINA

    $sec=$_GET["seccion"];
    $nom=$_GET["n_art"];
    $pre=$_GET["precio"];
    $fec=$_GET["fecha"];
    $imp=$_GET ["importado"];
    $por=$_GET["p_orig"];
    */


    //2 Importacion de los datos para crear la conexion, que se encuentran en un archivo externo.
    require("../datosconexion.php");

    //3 Función de php para conectarse a phpMyadmin aportado los anteriores datos.
    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
    
    //4 Comprobación de la conexión
    if (mysqli_connect_errno ()) {

        echo "Fallo al conectar con la BBDD";

        exit();
    }

    //5 Control de errores en el cual Imprime una frase en caso de encontrar la BBDD que se indica con la variable $db_nombre
    mysqli_select_db ($conexion, $db_nombre) or die ("No se encuentra la BBDD");

    //6 Función para envio correcto de caracteres de la lengua española con son la ñ o las tildes.
    mysqli_set_charset ($conexion, "utf8");

    //7 Consulta para eliminar un árticulo según el cod de artículo 
    $consulta="DELETE FROM clientes WHERE codcliente='$cod'"; 

    //8 Ejecución de la BBDD
    $resultados=mysqli_query($conexion, $consulta);

    //9 Comentar y completar
    if ($resultados==false) {
        echo "Error en la consulta";
    }else if(mysqli_affected_rows($conexion)==0){
        echo "No hay registros que eliminar en ese criterio. ";

    }else{
        echo "Se han eliminado ".mysqli_affected_rows($conexion)." registro/s.";
    }
    //Función para cerrar la conexión creada anteriormente con phpMyadmin
    mysqli_close($conexion);
?>   
</body>
</html>