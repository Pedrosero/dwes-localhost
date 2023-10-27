<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion BBDD</title>
</head>
<body>

    <?php
    /*
    Información/título video: 
    Enlace a video:  
    Finalidad ejercicio:  
    Alumno: 
    */

    //Definir las variables de nuestra conexión
        $db_host="localhost";
        $db_nombre="dwes";
        $db_usuario="root";
        $db_contra="";

        //Conecto con la base de datos, usando las variables definidas
        $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
        
        //Creamos una consuta para que nos devuelva las tuplas
        $consulta="SELECT * FROM datospersonales";

        //Obtenemos los resultados usando conexion + query
        $resultados=mysqli_query($conexion, $consulta);
    $fila=mysqli_fetch_row($resultados);

        echo $fila[0] . " ";         //NIF
        echo $fila[1] . " ";         //NOMBRE
        echo $fila[2] . " ";         //APELLIDO
        echo $fila[3] . " ";         //EDAD
    ?>
    
</body>
</html>