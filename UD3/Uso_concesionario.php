<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uso_concesionario</title>
</head>
<body>
    <?php
        include 'concesionario.php';

        // modificacion de la variable estática $ayuda
        Compra_vehiculo::descuento_gobierno();

    ?>
</body>
</html>