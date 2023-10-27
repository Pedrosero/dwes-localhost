
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>37 - Conexion BBDD</title>
</head>
<body>

    <?php 
     /*
    Información/título video: 
    Enlace a video:  
    Finalidad ejercicio:  
    Alumno: 

    FUNCIONES QUE FALTAN PARA COMPLETAR:
    
        mysqli_connect_errno
        mysqli_close
        mysqli_set_charset
        mysqli_query
        mysqli_select_db
    */

        $db_host="localhost";
        $db_nombre="dwes";
        $db_usuario="root";
        $db_contra="";

        //Nos conectamos a la base de datos
        $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
        
        //Comprobamos la conexión
        if (mysqli_connect_errno()) {

            echo "Fallo al conectar con la BBDD";

            exit();
        }
        //Seleccionamos la BBDD
        mysqli_select_db ($conexion, $db_nombre) or die ("No se encuentra la BBDD");
        //Definimos el charset
        mysqli_set_charset ($conexion, "utf8");
        //Realizamos la consulta
        $consulta="SELECT * FROM datospersonales";
        //Vemos los resultados
        $resultados=mysqli_query($conexion, $consulta);
        //Metodo para recorrer todas las tuplas que se han consultado a la tabla anteriormente.
        while($fila=mysqli_fetch_row($resultados)){
            echo $fila[0] . " ";         //NIF
            echo $fila[1] . " ";         //NOMBRE
            echo $fila[2] . " ";         //APELLIDO
            echo $fila[3] . " ";         //EDAD
            echo "<br/>";

        } 
        //Cerramos la conexión
        mysqli_close($conexion);
    ?>
    
</body>
</html>