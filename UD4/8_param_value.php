<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "config/database.inc.php";
        $conexion=null;

        // se asignan nombre a los parámetros
        $sql = "DELETE FROM stock WHERE unidades = :cant";
        $sentencia = $conexion -> prepare($sql);

        // bindParam enlaza por referencia
        $cantidad = 0;

        $sentencia -> bindParam(":cant", $cantidad);
        $cantidad = 1;

        // se eliminan con cant = 1
        $isOk = $sentencia -> execute();

        // bindValue enlaza por valor
        $cantidad = 0;

        $sentencia -> bindValue(":cant", $cantidad);
        $cantidad = 1;

        // se eliminan con cant = 0
        $isOk = $sentencia->execute();
        
    ?>
</body>
</html>