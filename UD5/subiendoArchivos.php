<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST">
                Archivo: <input name="archivoEnviado" type="file" />
            <br />
                <input type="submit" name="btnSubir" value="Subir" />
        </form>
    <?php
        if (isset($_POST['btnSubir']) && $_POST['btnSubir'] == 'Subir') {
            if (is_uploaded_file($_FILES['archivoEnviado']['tmp_name'])) {
                // subido con éxito
                $nombre = $_FILES['archivoEnviado']['name'];
                move_uploaded_file($_FILES['archivoEnviado']['tmp_name'], "/xampp2/htdocs/dwes-localhost/UD5/subidas{$nombre}");
                echo "<p>Archivo $nombre subido con éxito</p>";
                /**
                 * "TestCookie": Es el nombre de la cookie.
                *$value: Es el valor de la cookie.
                *time() - 3600: Es el tiempo de expiración de la cookie. En este caso, se establece en el tiempo actual (time()) menos 3600 segundos, lo que significa que la cookie expirará 3600 segundos (1 hora) antes del momento actual, es decir, se eliminará.
                *"/rasmus/": Es el path o ruta para la cual la cookie está disponible. En este caso, la cookie solo está disponible para páginas bajo el path "/rasmus/" en el servidor.
                *"example.com": Es el dominio para el cual la cookie está disponible. En este caso, la cookie solo está disponible para el dominio "example.com".
                *1: Es un parámetro booleano (verdadero o falso) que indica si la cookie debe ser enviada solo a través de conexiones seguras (HTTPS). En este caso, se establece en 1, lo que significa verdadero. Esto indica que la cookie debe ser segura y solo se enviará a través de conexiones HTTPS.
                */
            }
        }
    ?>
</body>
</html>