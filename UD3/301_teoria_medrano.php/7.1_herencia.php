<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>   
    <?php
        include"7_herencia.php";
        
        $t = new Libro();
        $t->codigo = 33;
        if ($t instanceof Producto) {
            echo $t->mostrarResumen();
        }  
        $padre = get_parent_class($t);
        echo "<br>La clase padre es: " . $padre;
        $objetoPadre = new $padre;
        echo $objetoPadre->mostrarResumen();     
        if (is_subclass_of($t, 'Producto')) {
            echo "<br>Soy un hijo de Producto";
        }
    ?>
</body>
</html>