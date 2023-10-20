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

        try{
            $conexion = new PDO(DSN, USUARIO, CONTRASENA);//Creamos un nuevo objeto PDO para el setAttribute
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Le decimos que nos de los errores que sucedan con todo tipo de detalle
            echo"<h1>Bienvenid@ a MySQL!!</h1>";
        }catch(Exception $e){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        $sql="SELECT * FROM persona";

        $sentencia = $conexion -> prepare($sql);
        $sentencia -> setFetchMode(PDO::FETCH_OBJ);
        $sentencia -> execute();

        while($t = $sentencia -> fetch()){
            echo "Id: ".$t->id."</br>";
            echo "Nombre: ".$t->nombre."</br>";
            echo "Apellidos: ".$t->apellidos."</br>";
            echo "Telefono: ".$t->telefono."</br>";

        }
        $conexion=null;
    ?>
</body>
</html>