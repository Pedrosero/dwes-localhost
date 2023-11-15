<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Recuperamos la información de la sesión
        session_start();

        // Y la destruimos
        session_destroy();
        header("Location: index.php");
    ?>
</body>
</html>