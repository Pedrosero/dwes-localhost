<?php
/*
    Información: Curso PHP MySQL. Inyección SQL I. Vídeo 47
    Enlace a video:  https://www.youtube.com/watch?v=3Qw3QQg1xYU
    Finalidad ejercicio: Probar Inyección SQL
    Alumno:
*/
?>
<?php
    //Se rescata el dato del nombre a buscar en la base de datos.Recibido del archivo formulario_busqueda.php
    


    //Importacion de los datos para crear la conexion, que se encuentran en un archivo externo.
    require("../datos_conexion.php");

    //Función de php para conectarse a phpMyadmin aportado los anteriores datos.
    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

    //Almacena en las variables sus datos  evitando 
    $usuario=mysqli_real_escape_string($conexion, $_GET["usu"]);
    $contra=mysqli_real_escape_string($conexion, $_GET["con"]);
    
    //Si algun dato no es correcto y se imprime Fallo al conectar cuando se produce un error al intentar conectarse.
    if (mysqli_connect_errno ()) {

        echo "Fallo al conectar con la BBDD";

        exit();
    }

    //Control de errores en el cual Imprime una frase en caso de encontrar la BBDD que se indica con la variable $db_nombre
    mysqli_select_db ($conexion, $db_nombre) or die ("No se encuentra la BBDD");

    //Función para envio correcto de caracteres de la lengua española con son la ñ o las tildes.
    mysqli_set_charset ($conexion, "utf8");

    //Consulta a ejecutar en la BBDD dwes.
    $consulta="SELECT * FROM usuarios_pildoras WHERE USUARIO = '$usuario' AND CONTRA = '$contra'";
    //$consulta="DELETE FROM usuarios_pildoras WHERE USUARIO = '$usuario' AND CONTRA = '$contra'";

    //Sentencia sql para comprobar la inyeccion de sql en campos de texto.
   // $consulta="DELETE FROM usuarios_pildoras WHERE USUARIO = '$usuario' AND CONTRA = '$contra'";

    echo "CONSULTA: $consulta <br><br>";

        //Función de php para ejecutar la consulta en la BBDD.
        $resultados=mysqli_query($conexion, $consulta);

   //Metodo para recorrer todas las tuplas que se han consultado a la tabla anteriormente.
   while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
        
    echo "<table><tr><td>";

    echo $fila['usuario'] . "</td><td>";       
    echo $fila['contra'] . "</td><td>";   
    echo $fila['tfno'] . "</td><td>";       
    echo $fila['direccion'] . "</td><td></tr></table>";        

    echo "<br/>";

}




    /*
        //imprime la instruccion sql
            echo "$query <br><br>";

            $results=mysqli_query($conexion,$query);//realizamos la consulta
            
          
           //Bucle para cuando no conocemos el tamaño de la tabla
           
           while(($fila=mysqli_fetch_array($results, MYSQLI_ASSOC))){
            //recorre el while mientras encuentra informacion, en cuanto no consiga informacion se cierra el bucle
           //%-->substituye a una cadena de caracteres
           //_ --> substituye a un unico caracter
         
            echo "<table ><tr><td>";//sentencia usando style
            echo"-->". $fila["nombre"]."</td><td>".$fila["apellidos"]."</td><td> ".$fila["clave"]."</td><td><tr></table>"; //mostramos la tabla
 
             }

    
    */

    //Función para cerrar la conexión creada anteriormente con phpMyadmin
    mysqli_close($conexion);


       
?>