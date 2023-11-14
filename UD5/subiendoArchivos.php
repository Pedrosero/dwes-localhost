<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!--enctype="multipart/form-data" para permitir la carga de archivos. 
    La acción del formulario (action) está establecida en $_SERVER['PHP_SELF'], que hace referencia al script PHP actual.-->
        <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST">
                Archivo: <input name="archivoEnviado" type="file" />
            <br />
                <input type="submit" name="btnSubir" value="Subir" />
        </form>
    <?php
        /*
            Utiliza is_uploaded_file para verificar si se ha enviado un archivo. 
            $_FILES['archivoEnviado']['tmp_name'] es el nombre temporal del archivo en el servidor.
        */

        if (isset($_POST['btnSubir']) && $_POST['btnSubir'] == 'Subir') {
            if (is_uploaded_file($_FILES['archivoEnviado']['tmp_name'])) {
                // subido con éxito
                $nombre = $_FILES['archivoEnviado']['name'];
                /*
                    Si el archivo se ha cargado con éxito, se obtiene el nombre original del archivo ($nombre) y se 
                    utiliza move_uploaded_file para mover el archivo a una ubicación específica en el servidor.
                */
                move_uploaded_file($_FILES['archivoEnviado']['tmp_name'], "/xampp2/htdocs/dwes-localhost/UD5/subidas{$nombre}");
                echo "<p>Archivo $nombre subido con éxito</p>";
                
            }
        }
    ?>
</body>
</html>