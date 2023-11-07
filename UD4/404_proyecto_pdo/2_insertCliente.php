<!DOCTYPE html>
<html lang="en">
<?php
/*
    Información:  PDO Insertar y eliminar registros en BBDD. Vídeo 56
    Enlace a video:    https://www.youtube.com/watch?v=rKUbNFgjI8Y
    Finalidad ejercicio:  
    Alumno:
*/
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php

//Todos los atributos de la base de datos con los cuales buscaremos coincidencias.
$busqueda_ccli = $_POST["c_cli"];
$busqueda_nombre = $_POST["nom"];
$busqueda_correo = $_POST["corr"];
$busqueda_telefono = $_POST["telf"];
$busqueda_localidad = $_POST["loc"];


echo $busqueda_ccli . "<br>";
echo $busqueda_nombre . "<br>";
echo $busqueda_correo . "<br>";
echo $busqueda_telefono . "<br>";
echo $busqueda_localidad . "<br>";

try {
    //COMPLETAR
    $base = new PDO('mysql:host=localhost; dbname=dwes', 'root', '');
    $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base -> exec("SET CHARACTER SET utf8");

    $sql = "INSERT INTO CLIENTES (codcliente, nombre, correo, telefono, localidad) VALUES (:c_cli,:nom,:corr,:telf,:loc)";

   
 
    $resultado = $base -> prepare($sql);

    
    $resultado -> execute(array(":c_cli"=>$busqueda_ccli, ":nom"=>$busqueda_nombre, ":corr"=>$busqueda_correo,":telf"=>$busqueda_telefono, ":loc"=>$busqueda_localidad));

    
    echo "Registro Insertado";

    
    $resultado->closeCursor();

} catch (Exception $e) {

    die('Error: ' . $e->GetMessage());

}finally{

    $base = null;
}

?>
</body>
</html>