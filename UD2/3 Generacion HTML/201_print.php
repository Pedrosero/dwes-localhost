<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Probando print

        $ciclo="DAW";
        $modulo="DWES";
        $test1=65;
        $test2=1276.50;
        $test3="Empanadilla";
        $test4=24;
        $test5=-21;
        $test6=false;

        echo " Probando mi php";

        print "<br/> <br/>Probando mi $ciclo   $modulo";

        
        printf("<br/> Test1: %d ", $test1); //numero entero
        printf("<br/> Test2: %.2f ", $test2); //numero con 2 decimales, dependiendo del número varían los decimales
        printf("<br/> Test3: %s ", $test3); //cadena
        printf("<br/> Test4: %b ", $test4); //binario
        printf("<br/> Test4: %x ", $test4); //hexadecimal
        printf("<br/> Test5: %u ", $test6); //boolean
        printf("<br/> Test6: %d ", $test6); //


        printf("<br/><br/> SPRINTF");

        $formateada = sprintf("<br/> Test2: %.4f ", $test2); //numero con 4 decimales

        echo $formateada;

        printf("<br/><br/> COMILLAS SIMPLES <br/>");

        echo '<br/> Probando  $ciclo $modulo \\';

        echo '<br/> Probando el ciclo ' .  $ciclo . "Y el módulo " . $modulo;



    ?>
    
</body>
</html>