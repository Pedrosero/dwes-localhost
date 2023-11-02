<?php
/*
    Información:  Curso PHP MySQL. Conexión a BBDD con POO. Vídeo 51
    Enlace a video: https://www.youtube.com/watch?v=I8XYcl9-i5A    
    Finalidad ejercicio:  Crear conexión Mysqli y búsqueda en tabla productos
    Alumno:
*/
?>
<?php

    //1 RECUPERAMOS LA VARIABLE
    $busqueda=$_GET["buscar"];

    //2 IMPORTAMOS LOS DATOS DE CONEXIÓN
    require("../datos_conexion.php");

    //3 COMENTAR Y COMPLETAR
    //Añade comentarios donde copies líneas de cada parte del código en su forma procedimental
    //PROCEDIMENTAL MYSQLI
    //$conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
    $conexion = new mysqli("localhost", "root", "", "dwes");

    //4 Función de php para conectarse a phpMyAdmin aportando los anteriores datos.
    //PROCEDIMENTAL mysqli_connect
    if ($conexion -> connect_errno) {
        echo "Fallo al conectar con la BBDD " . $conexion -> connect_errno;

    }
    
    //5 Función para envío correcto de caracteres de la lengua española
    //mysqli_set_charset
    $conexion -> set_charset("utf8");

    //6 Consulta para para observar todas las columnas de la tabla de productos
    $sql="SELECT * FROM productos";

    //7 Variable que da el resultado de la consulta anterior
    $resultados = $conexion -> query( $sql );

    //8 En caso de que ocurra algun tipo de error con este condicional cerraremos las conexion (OPCIONAL)
    if ($conexion -> errno) {
        die($conexion -> errno);
    }

    //9 COMENTAR Y COMPLETAR
    //while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
        
        while ($fila = $resultados -> fetch_assoc()) {
            
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


    //Otra manera de imprimir estos datos
    //10 COMENTAR Y COMPLETAR
    while($fila=$resultados->fetch_array()){
        
        echo "<table><tr><td>";
        echo $fila['0'] . "</td><td>";       
        echo $fila['1'] . "</td><td>";   
        echo $fila['2'] . "</td><td>";   
        echo $fila['3'] . "</td><td>";       
        echo $fila['4'] . "</td><td>";   
        echo $fila['5'] . "</td><td></tr></table>";        
        echo "<br/>";

    }

    //11 COMENTAR Y COMPLETAR
    $conexion -> close();


       
?>