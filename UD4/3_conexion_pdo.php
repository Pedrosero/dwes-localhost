<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         try{
            $conexion = mysqli_connect("localhost","root","","dwes");
    
        }catch(Exception $e){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
    ?>
</body>
</html>