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
    $busqueda=$_GET["buscar"];

    //Importacion de los datos para crear la conexion, que se encuentran en un archivo externo.
    require("../datos_conexion.php");

    //Función de php para conectarse a phpMyadmin aportado los anteriores datos.
    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
    
    //Si algun dato no es correcto y se imprime Fallo al conectar cuando se produce un error al intentar conectarse.
    if (mysqli_connect_errno ()) {

        echo "Fallo al conectar con la BBDD";

        exit();
    }

    //Control de errores en el cual Imprime una frase en caso de encontrar la BBDD que se indica con la variable $db_nombre
    mysqli_select_db ($conexion, $db_nombre) or die ("No se encuentra la BBDD");

    //Función para envio correcto de caracteres de la lengua española con son la ñ o las tildes.
    mysqli_set_charset ($conexion, "utf8");

    //Consulta a ejecutar en la BBDD dwes.(Como se puede ver se consultan todas las columnas de la tabla DATOSPERSONALES). 
    //En este caso solo devuelve las tuplas que el pais de origen se ESPAÑA. Utiliza el porcentaje para indicar que $busqueda se 
    //encuentre dentro del nombre del articulo.
    //$consulta="SELECT * FROM productos WHERE nombrearticulo LIKE '%$busqueda%'"; QUITO COMODINES POR FACILIDAD
    $consulta="SELECT * FROM productos WHERE nombrearticulo LIKE '$busqueda'";

    //Muestro la consulta para testearlo
    echo "<br><br>$consulta <br><br>";

    //Función de php para ejecutar la consulta en la BBDD.
    $resultados=mysqli_query($conexion, $consulta);

    //Metodo para recorrer todas las tuplas que se han consultado a la tabla anteriormente.
    while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
        
        echo "<table><tr><td>";
        echo $fila['codigoarticulo'] . "</td><td>";       
        echo $fila['nombrearticulo'] . "</td><td>";   
        echo $fila['codigoarticulo'] . "</td><td>";       
        echo $fila['seccion'] . "</td><td>";    
        echo $fila['importado'] . "</td><td>";       
        echo $fila['precio'] . "</td><td>";   
        echo $fila['paisdeorigen'] . "</td><td></tr></table>";        
        echo "<br/>";

    }


    //Función para cerrar la conexión creada anteriormente con phpMyadmin
    mysqli_close($conexion);


       
?>