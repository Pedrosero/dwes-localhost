<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dsn = 'mysql:dbname=dwes;host=127.0.0.1';
        $usuario = 'root';
        $contrasena = '';

        try{
            $mbd = new PDO($dsn, $usuario, $contrasena);//Creamos un nuevo objeto PDO para el setAttribute
            $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Le decimos que nos de los errores que sucedan con todo tipo de detalle
            echo"<h1>Bienvenid@ a MySQL!!</h1>";
        }catch(Exception $e){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
    ?>
</body>
</html>