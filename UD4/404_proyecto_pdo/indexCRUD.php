<?php
/*
    Información:  
    Enlace a video:    
    Finalidad ejercicio:  
    Alumno:
*/
?>
<?php
    //Se importa la clase con la cual tenemso una funcion que devuelve una lista con todos los productos.
    require "buscarCRUD_nombre.php";

    //Redigirimos al formulario en el caso de que no esté establecido
    if(!isset($_GET["buscar"]))
        header('Location: Formulario_Busqueda_paises.php');

    $nombre = $_GET["buscar"];
    //creamos un objeto de la clase importada en el paso anterior.
    $clientes = new DevuelveClientes();
    //Se hace uso de la funcion que nos devuelve toda la lista de productos.
    $array_clientes = $clientes->get_clientes($nombre);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Bucle para imprimir todo los productos obtenidos de la BBDD.
        foreach($array_clientes as $elemento) { 
               
            echo "<table><tr><td>";
            echo $elemento['codcliente'] . "</td><td>";       
            echo $elemento['nombre'] . "</td><td>";   
            echo $elemento['correo'] . "</td><td>";   
            echo $elemento['telefono'] . "</td><td>";       
            echo $elemento['localidad'] . "</td><td>";   
            echo "<br/>";
        }
    ?>
</body>
</html>