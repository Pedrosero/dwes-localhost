<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        print"<h2> UD2.7 ARRAYS </h2>";//ARRAYS
/*
        print  ($_SERVER["PHP_SELF"]);
        print "<br/>" . $_SERVER["PHP_SELF"];
        //print_r($_SERVER);
*/

        //array numérico
        print"<br/>ARRAY NUMÉRICO";
        $modulos1 = array(0=> "Programación", 1=> "Base de datos", 2=> "Desarrollo web entorno servidor");
        $alumnos = array("Jose Maria", "Juanma", "Pedro", "Rafa");

        print"<br/><br/> ALUMNOS: ";
        print_r($alumnos);
        print"<br/> El alumno 2 es " . $alumnos[2];

        //array asociativo
        print"<br/><br/><br/><br/>ARRAY ASOCIATIVO";
        $modulos2 = array("PR" => "Programación", "BD" => "Base de datos", "DWES" => "Desarrollo en entorno web servidor");

        print"<br/><br/> MÓDULOS 2: ";
        print_r($modulos2);
        print"<br/>Array modulos 1: " . $modulos1[0];

        //array bidimensional
        $ciclos = array(
            "DAW" => array ("PR" => "Programación", "BD" => "Base de datos", "DWES" => "Desarrollo web entorno servidor"),
            "DAM" => array ("PR" => "Programación", "BD" => "Base de datos", "PMDM" => "Programación multimedia")
        );
        
        print "<br/><br/><br/><br/>ARRAY BIDIMENSIONAL CICLOS";

        print "<br/><br/>Muestra la hora de base de datos en el ciclo de DAW: " . $ciclos["DAW"]["BD"] . "<br/>";

        //array multimensional numérico
        //No le digo la clave, la establece de forma implícita
        print"<br/><br/><br/>ARRAY MULTIDIMENSIONAL";

        
        $horario = array(
            array("Programación", "Base de datos", "Desarrollo web en entorno servidor", "DWES"),
            array("DWES", "Base de datos", "Programación multimedia"),
            array("DWIS", "Base de datos", "Desarrollo web en entorno servidor", "DWES"),
            array("Progrmación", "DIW", "Desarrollo web en entorno servidor", "DWES"),
            array("DWES", "Base de datos", "Desarrollo web en entorno servidor"),

        );

        print"<br/> Horario Lunes a segunda (Base de datos): ";
        print $horario[0][1];
    
        //Arrays sin especificar tamaño

        print "<br/><br/><br/><br/>ARRAYS SIN ESPECIFICAR EL TAMAÑO";

        $cena_navidad[]="Pedro";

        print"<br/> 1- "; print_r($cena_navidad);

        $cena_navidad[]="Rafa";
        print"<br/> 2- "; print_r($cena_navidad);

        $cena_navidad[]="Juarma";
        print"<br/> 3- "; print_r($cena_navidad);

        $cena_navidad[2]="Juanma";
        print"<br/> 3- "; print_r($cena_navidad);//Corrijo el 2 que pone Juarma

        //7.1 Recorrer arrays
        //cadena de texto
        print "<br/><br/><br/><br/>FOREACH";
        foreach($modulos2 as $valor){
            print"<br/><br/>   Modulo : " . $valor ."</br>";
        }

        print"<br/><br/><br/> FOREACH CON CLAVE VALOR";
        foreach($modulos2 as $clave => $valor){
            print" <br/> <br/>El codigo del módulo " . $clave . " es " . "<br/>";
        }

        print"<br/> <br/>FOREACH CON CLAVE VALOR";

        foreach($cena_navidad as $clave => $valor){
            print " <br/> <br/>El código de la cena " . $clave . " es " . $valor . "<br/>";
        }


        

    ?>
</body>
</html>