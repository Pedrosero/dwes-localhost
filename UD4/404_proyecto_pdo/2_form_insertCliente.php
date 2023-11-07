<!DOCTYPE html>
<html lang="en">
<?php
/*
     Información: PHP/MySql. Insertando registros en BBDD MySql II. Vídeo 43
    Enlace a video: https://www.youtube.com/watch?v=U3gFWe9tWec
    Finalidad ejercicio:
    Alumno: 
*/
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registro de datos</title>
    <style>
    h1 {
        text-align: center;
        color: #00F;
        border-bottom: dotted #0000FF;
        width: 50%;

    }

    table {
        border: 1px solid #F00;
        padding: 20px 50px;
        margin-top: 50px
    }

    body {
        display: flex;
        background-color: #FFC;
        flex-direction: column;
        align-content: center;
        align-items: center;
    }
    </style>

</head>

<body>
    <!-- HTML con estilizada para la inseccion de nuevos productos a la base de datos. Cuenta con todos los campos que componen a un nuevo objeto almacenado. A parte de esto cuenta con dos botones uno para enviar como otro para resetear el formulario. -->
    <h1>Registro de Clientes</h1>
    <form name="form1" method="post" action="2_insertCliente.php">
        <table boder="0" align-items="center">
            <tr>
                <td>Código cliente</td>
                <td><label for="c_cli"></label>
                    <input type="text" name="c_cli" id="c_cli">
                </td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td><label for="nom"></label>
                    <input type="text" name="nom" id="nom">
                </td>
            </tr>
            <tr>
                <td>Correo</td>
                <td><label for="corr"></label>
                    <input type="text" name="corr" id="corr">
                </td>
            </tr>
            <tr>
                <td>Teléfono</td>
                <td><label for="telf"></label>
                    <input type="text" name="telf" id="telf">
                </td>
            </tr>
            <tr>
                <td>Localidad</td>
                <td><label for="loc"></label>
                    <input type="text" name="loc" id="loc">
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><input type="submit" name="enviar" id="enviar" value="Enviar"></td>
                <td><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
            </tr>
        </table>
    </form>

</body>

</html>