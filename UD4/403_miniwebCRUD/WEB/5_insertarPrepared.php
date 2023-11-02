<?php
    //Se rescata el dato del pais a buscar en la base de datos.Recibido del archivo formulario_busqueda_pais.php
    $codclienteo = $_GET["c_cli"];
    $nombre = $_GET["nom"];
    $nombrearticulo = $_GET["nombrearticulo"];
    $precio = $_GET["precio"];
    $fecha = $_GET["fecha"];
    $importado = $_GET["importado"];
    $paisdeorigen = $_GET["paisdeorigen"];

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

    //Consulta a ejecutar en la BBDD dwes.(Como se puede ver se consultan todas las columnas de la tabla DATOSPERSONALES). En este caso solo devuelve las tuplas que el pais de origen se ESPAÑA. Utiliza el porcentaje para indicar que $busqueda se encuentre dentro del nombre del articulo.
    $sql="INSERT INTO PRODUCTOS (codigoarticulo, seccion, nombrearticulo, precio, fecha,importado, paisdeorigen) VALUES (?,?,?,?,?,?,?)";

    //Función de php para ejecutar la consulta en la BBDD.
    $resultado=mysqli_prepare($conexion, $sql);

    //Unimos parámetros a la sentencia sql. De esto se encarga la funcion mysqli_stmt_bind_param devuelve true o false. Esta función requiere tres parámetros.
    $ok=mysqli_stmt_bind_param($resultado, "sssssss", $codigoarticulo, $seccion, $nombrearticulo, $precio, $fecha, $importado, $paisdeorigen);

    //Ejecuta la consulta con la funcion mysqli_stmt_execute(). Esta función devuelte true o false.
    $ok=mysqli_stmt_execute($resultado);

    //Si la consulta ejecutada y almacenada en $ok no es false mostraremos aquellos productos consultados mediante el pais.
    if ($ok==false) {
        echo "Error al ejecutar la consulta";
    } else {
        //$ok= mysqli_stmt_bind_result($resultado, $codigo, $seccion, $precio, $pais );

        echo "Agregado nuevo Artículo <br><br> ";
        /*while(mysqli_stmt_fetch($resultado)){
            echo $codigo . " " . $seccion . " " . $precio . " " . $pais . "<br>";
        }*/

        //Funcion para cerrar la conexion a la base de datos.
        mysqli_stmt_close($resultado);

    }
    


       
?>