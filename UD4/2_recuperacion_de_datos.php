<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // ▒▒▒▒▒▒▒▒ pruebas.php ▒▒▒▒▒▒▒▒

    
    $conexion = mysqli_connect("localhost","root","","dwes");

    // COMPROBAMOS LA CONEXIÓN
    try{
        $conexion = mysqli_connect("localhost","root","","dwes");

    }catch(Exception $e){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    // CONSULTA A LA BASE DE DATOS
    $consulta = "SELECT * FROM `persona`";
    $listaUsuarios = mysqli_query($conexion, $consulta);

    // COMPROBAMOS SI EL SERVIDOR NOS HA DEVUELTO RESULTADOS
    if($listaUsuarios) {

        // RECORREMOS CADA RESULTADO QUE NOS DEVUELVE EL SERVIDOR
        foreach ($listaUsuarios as $usuario) {
            echo "
                $usuario[id]
                $usuario[nombre]
                $usuario[apellidos]
                $usuario[telefono]
                <br>
            ";
        }
    }
    ?>
</body>
</html>