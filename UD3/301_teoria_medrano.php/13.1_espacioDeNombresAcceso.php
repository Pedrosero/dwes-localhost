<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        namespace Dwes\Ejemplos;

        include_once("7_herencia.php");
        
        echo IVA; // sin cualificar
        echo Utilidades\IVA; // acceso cualificado. Daría error, no existe \Dwes\Ejemplos\Utilidades\IVA
        echo \Dwes\Ejemplos\IVA; // totalmente cualificado
        
        $p1 = new Producto(); // lo busca en el mismo namespace y encuentra \Dwes\Ejemplos\Producto
        $p2 = new Model\Producto(); // daría error, no existe el namespace Model. Está buscando \Dwes\Ejemplos\Model\Producto
        $p3 = new \Dwes\Ejemplos\Producto(); // \Dwes\Ejemplos\Producto
        
        include_once("Dwes\Ejemplo\Producto.php");

        use const Dwes\Ejemplos\IVA;
        use \Dwes\Ejemplos\Producto;

        echo IVA;
        $p1 = new Producto();
    ?>
</body>
</html>