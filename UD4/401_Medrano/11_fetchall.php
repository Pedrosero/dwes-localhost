<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         //  ▒▒▒▒▒▒▒▒ consulta con array asociativo ▒▒▒▒▒▒▒▒

         include "config/database.inc.php";


    $sql="SELECT * FROM persona";

    $sentencia = $conexion -> prepare($sql);
    $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
    $sentencia -> execute();

    $personas = $sentencia -> fetchAll();

    foreach($personas as $persona) {
        echo"Id:" . $persona["Id"] . "<br />";
        echo"Nombre:" . $persona["nombre"] . "<br />";
        echo"Apellidos:" . $persona["apellidos"] . "<br />";
        echo"Teléfono:" . $persona["telefono"] . "<br />";

    }
    
    print "<h2>foreach con clave valor</h2>";
        
    
        }catch(PDOException $e) {
            echo $e -> getMessage();
        }
    
        $conexion = null;
    ?>
</body>
</html>