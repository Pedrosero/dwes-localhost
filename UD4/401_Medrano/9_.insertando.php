<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include"config/database.inc.php";

    $conexion = null;

    try{
        $conexion = new PDO(DSN, USUARIO, CONTRASENA);//Ya no le pasamos variables definidas en nuestro archivo, si no valores de otro archivo config
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Le decimos que nos de los errores que sucedan con todo tipo de detalle
        echo"<h1>Bienvenid@ a MySQL!!</h1>";
    }catch(Exception $e){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

        $nombre ="Antonio"; 
        $apellidos="Marín";        //$_GET["nombre"] ?? "SUCURSAL X";
        $telefono ="123456";                 //$_GET["telefono"] ?? "636123456";
    
        $sql="INSERT INTO persona(nombre,apellidos, telefono) VALUES (:nombre, :apellidos, :telefono)";//SQL PARA INSERTAR
    

        //SELECCIONAMOS LOS PARÁMETROS DE NUESTRA PREPARED STATEMENT
        $sentencia = $conexion -> prepare($sql);
        $sentencia -> bindParam(":nombre", $nombre);
        $sentencia -> bindParam(":apellidos", $apellidos);
        $sentencia -> bindParam(":telefono", $telefono);

    
        $isOk = $sentencia -> execute();
        $idGenerado = $conexion -> lastInsertId();
    
        echo $idGenerado;
    ?>
</body>
</html>