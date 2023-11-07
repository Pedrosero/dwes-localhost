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
    require "DevuelveProductos.php";

    //Redigirimos al formulario en el caso de que no esté establecido
    if(!isset($_GET["buscar"]))
        header('Location: Formulario_Busqueda_paises.php');

    $pais = $_GET["buscar"];
    //creamos un objeto de la clase importada en el paso anterior.
    $productos = new DevuelveProductos();
    //Se hace uso de la funcion que nos devuelve toda la lista de productos.
    $array_productos = $productos->get_productos($pais);
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
        foreach($array_productos as $elemento) { 
               
            echo "<table><tr><td>";
            echo $elemento['codigoarticulo'] . "</td><td>";       
            echo $elemento['nombrearticulo'] . "</td><td>";   
            echo $elemento['seccion'] . "</td><td>";   
            echo $elemento['importado'] . "</td><td>";       
            echo $elemento['precio'] . "</td><td>";   
            echo $elemento['paisdeorigen'] . "</td><td></tr></table>";        
            echo "<br/>";
        }
    ?>
</body>
</html>