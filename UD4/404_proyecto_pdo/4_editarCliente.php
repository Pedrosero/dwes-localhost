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
$busqueda_ccli = $_GET["c_cli"];
$busqueda_nombre = $_GET["nom"];
$busqueda_correo = $_GET["corr"];
$busqueda_telefono = $_GET["telf"];
$busqueda_localidad = $_GET["loc"];

try {
    //Metodo /funcion para conectar mediante pdo con la base de datos de mysql imprimiendo si se ha realizado corectamente o ha fallado.
    $base = new PDO('mysql:host=localhost; dbname=dwes', 'root', '');
    $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base -> exec("SET CHARACTER SET utf8");

     $sql = "UPDATE  clientes SET nombre=:nom, correo=:corr, telefono=:telf, localidad=:loc WHERE codcliente=:c_cli"; 

    //El resultado de la sentencia sql lo vinculamos a la variable $resultado.
    $resultado = $base -> prepare($sql);

    $resultado -> execute(array("c_cli"=>$busqueda_ccli,":nom"=>$busqueda_nombre,":corr"=>$busqueda_correo,":telf"=>$busqueda_telefono,":loc"=>$busqueda_localidad));

    echo"Registro editado<br><br>";
        echo"Información de registro : <br><br>";
        echo"<table border=1><tr><td>$busqueda_ccli</td></tr>";
        echo"<tr><td>$busqueda_nombre</td></tr>";
        echo"<tr><td>$busqueda_correo</td></tr>";
        echo"<tr><td>$busqueda_telefono</td></tr>";
        echo"<tr><td>$busqueda_localidad</td></tr>";

    //Se cierra la tabla a la que hemos accedido para ahorra recursos que no se volveran a usar mejorando el rendimiendo de la manquina.
    $resultado->closeCursor();

} catch (Exception $e) {
    die('Error: ' . $e->GetMessage());
    

}finally{

    $base = null;
}

?>
<div>
        <a href="index.html" title="DEL">Volver al index</a>
    </div>
</body>

</html>