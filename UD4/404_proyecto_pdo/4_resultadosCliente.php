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
$busqueda = $_POST["buscar"];


try {
    //Metodo /funcion para conectar mediante pdo con la base de datos de mysql imprimiendo si se ha realizado corectamente o ha fallado.
    $base = new PDO('mysql:host=localhost; dbname=dwes', 'root', '');
    $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base -> exec("SET CHARACTER SET utf8");

     $sql = "SELECT * FROM clientes WHERE nombre LIKE :buscar"; 

    //El resultado de la sentencia sql lo vinculamos a la variable $resultado.
    $resultado = $base -> prepare($sql);

    $resultado -> execute(array(":buscar"=>$busqueda));

while($row = $resultado -> fetch(PDO::FETCH_ASSOC)) {
    echo "<form action='4_editarCliente.php' method='get'>";
    //NOTA. el campo código no debería ser editable, le añadimos readonly.
    echo "<input readonly type='text' name='c_cli' value=". $row['codcliente']."><br>";//No se puede modificar
    echo "<input type='text' name='nom' value='".$row['nombre']. "'><br>";//Se puede modificar
    echo "<input type='text' name='corr' value='".$row['correo']. "'><br>";
    echo "<input type='text' name='tlf' value='".$row['telefono']. "'><br>";
    echo "<input type='text' name='loc' value='". $row['localidad']. "'><br>";
    echo "<input type='submit' name='enviando' value='Actualizar'>";
    echo "</form>";
}
   
       
    
    //Se cierra la tabla a la que hemos accedido para ahorra recursos que no se volveran a usar mejorando el rendimiendo de la manquina.
    $resultado->closeCursor();

} catch (Exception $e) {
    die('Error: ' . $e->GetMessage());
    

}finally{

    $base = null;
}

?>
</body>

</html>