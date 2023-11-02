<!DOCTYPE html>
<html lang="en">
<?php
/*
    Información:  Curso PHP MySQL. PDO Consultas preparadas. Vídeo 53
    Enlace a video:  https://www.youtube.com/watch?v=r-TibX-mxtM   
    Finalidad ejercicio:  Consultas preparadas
    Alumno: Pedro Ángel Serrano Rodrigues
    SOLUCIÓN está en las diapositivas.
*/
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>53 Consultas preparadas PDO</title>
</head>
<body>
    
<?php
$busqueda = $_GET["buscar"];
try {
    //1 Creamos un objeto PDO llamado base
    $base = new PDO('mysql:host=localhost'; 'dbname=dwes', 'root', '');

    //2 Añadimos los atributos con los cuales controlamos las excepciones lanzadas por neustro codigo
    $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //3 Función para establecer el tipo de caracteres que queremos utilizar
    $base -> exec("SET CHARACTER SET utf8");

    //4 Consulta que muestra el nombre, la seccion, precio y pais de origen del artículo de la 
    //tabla productos con el nombre que tu le pongas
    $sql = "SELECT nombrearticulo, seccion, precio, paisdeorigen FROM productos WHERE nombrearticulo = ?";

    //5 El resultado de la consulta que hemos hecho en el punto anterior
    $resultado = $base -> prepare($sql);

    //6 COMPLETAR Y COMENTAR
    $resultado -> execute(array($busqueda));

    //7 Búsqueda fila por fila con el método fetch asociativo
    while($registro = $resultado ->fetch(PDO::fetch_assoc)){
        echo "Nombre Artículo: ". $registro['nombrearticulo'] .
        " seccion: ". $registro['seccion'] ." precio: ". $registro['precio'] .
        " Pais de origen: ". $registro['paisdeorigen'] ." <br>";
    }

    //8 Se cierra la tabla a la que hemos accedido para ahorrar recursos R
    $resultado closeCursor();

} catch (Exception $e) {
    //9 COMPLETAR Y COMENTAR
    die('Error: ' . $e->GetMessage());
    
}finally{
    $base = null;
}

?>
</body>
</html>