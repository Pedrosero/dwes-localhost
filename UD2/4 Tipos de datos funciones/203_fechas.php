<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        print "<h2>Fechas</h2>";

        date_default_timezone_set("Europe/Madrid"); //Aplica la zona horaria de Madrid

        $dia_dos_digitos = date("j");//Muestra el dia con dos dígitos

        $hoy = date("F j, Y, g:i a");//Muestra el día 

        $fecha_actual = date("d-m-Y h:i:s");//Muestra la fecha actual

        $hora_actual = date("h:i:s");//Muestra la hora actual



        print"<br/> El valor del dia del mes con dos dígitos es $dia_dos_digitos";

        print"<br/> El valor del dia del mes $dia_dos_digitos y el año es ". date("Y");

        print"<br/> Hoy es $fecha_actual";

        print"<br/> Son las $hora_actual";

    ?>
    <?php
        print"<br/> <h2> GETDATE ARRAY</h2>";

        $hoy_getdate = getdate();//Recuperamos la fecha actual
        print_r($hoy_getdate);//Mostramos el array
    ?>



</body>
</html>