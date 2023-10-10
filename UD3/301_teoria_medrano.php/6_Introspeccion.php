<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include"5_clasesestaticas.php";
       $p = new ProductoP2("PS5");
       if ($p instanceof ProductoP2) {
           echo "<br/>Es un producto";
           echo "<br/>La clase es ".get_class($p);
       
           class_alias("ProductoP2", "Articulo", true);
           $c = new Articulo("Nintendo Switch");

           echo "<br/>";
       
           print_r(get_class_methods("ProductoP2"));
           echo "<br/>";
           print_r(get_class_vars("ProductoP2"));
           echo "<br/>";
           print_r(get_object_vars($p));
       
           if (method_exists($p, "mostrarResumen")) {
               $p->mostrarResumen();
           }
       }
    ?>
</body>
</html>