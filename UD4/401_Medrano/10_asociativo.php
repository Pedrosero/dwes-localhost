<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        //  ▒▒▒▒▒▒▒▒ consulta con array asociativo.php ▒▒▒▒▒▒▒▒
    
        include "config/database.inc.php";
    
        $conexion = null;
    
        try{
            $conexion = new PDO(DSN, USUARIO, CONTRASENA);
            $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            $sql = "select * from persona";
    
            $sentencia = $conexion -> prepare($sql);
            $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
            $sentencia -> execute();
    
            while($fila = $sentencia -> fetch()){
                echo "id:" . $fila["id"] . "<br />";
                echo "Nombre:" . $fila["nombre"] . "<br />";
                echo "Apellidos:" . $fila["apellidos"] . "<br />";
                echo "Teléfono:" . $fila["telefono"] . "<br />";
            }
    
        }catch(PDOException $e) {
            echo $e -> getMessage();
        }
    
        $conexion = null;
    ?>
</body>
</html>