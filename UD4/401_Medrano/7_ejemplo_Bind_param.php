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

        try { 
            $numero = 1;
    
            //1. CREAMOS EL OBJETO CON LA CONEXIÓN
            $conexion = new PDO(DSN, USUARIO, CONTRASENA);
            $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            //2. CREAMOS CONSULTA SQL
            $sql = "DELETE FROM persona WHERE id = :id";

            //3. PREPARA:
            $sentencia = $conexion -> prepare($sql);
            $sentencia -> bindParam(":id", $numero);
    
            //4. EJECUTA CON EL VALOR QUE LE DARÁ A ?
            $isOk = $sentencia -> execute();
            $numeroAfectado = $sentencia -> rowCount();
    
            if($isOk)
            echo " Se ha ejecutado bien";
            echo "<br> Cantidad de filas recuperadas: " . $numeroAfectado;
        } catch (PDOException $e) {
            echo $e -> getMessage();
        }
    
        $conexion = null
    ?>
</body>
</html>