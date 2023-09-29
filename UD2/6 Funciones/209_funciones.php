<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        print"<h2>FUNCIONES. 209_ARGUMENTOS</h2>";


        //6. Funciones
        /*
        function precio_con_iva(){
            global $precio_movil;

            $precio_iva = $precio_movil *1.21;
            print "<br/> 1-Si el movil sin IVA cuesta un total de " . $precio_movil . "€, el precio con IVA es " . $precio_iva . "€";
        }

        $precio_movil = 350;

        precio_con_iva();
        */

        ///////////////////////////////////////////////////////

        //Funciones condicional
        print "<br/><br/>Funciones condicional";

        $iva = true;
        $precio = 10;

        print "<br/><br/> 1- Llamada antes del condicional condicional";
        //precio_con_iva_condi();

        if($iva){
            function precio_con_iva_condi(){
                global $precio;
                $precio_iva = $precio*1.21;
                print"<br/>El precio con IVA es de de un total de: " . $precio_iva;
            }
        }
        print"<br/> 2- Llamada después del condicional";

        precio_con_iva_condi(); 

        ///////////////////////////////////////////////////////

        //Argumentos
        print"<br/><br/><br/>Argumentos";//Argumentos
        //Argumentos por defecto

        function precio_con_iva($precio_arg){
            return $precio_arg * 1.21;
        }

        $precio=10;

        //OPCION 1: guardandolo en una variable
        $precio_iva=precio_con_iva($precio);
        print"<br/><br/>1- El precio con IVA es " . $precio_iva;

        //OPCION 2: sin almacenar la variable
        print"<br/> 2- El precio con IVA es " . precio_con_iva($precio);

        print"<br/> 3- La variable del programa principal (precio=10) es " . $precio;

        ///////////////////////////////////////////////////////

        //Argumentos por defecto
        print"<br/><br/> <br/> Argumentos por defecto";//Argumentos

        function precio_con_iva_defecto($precio_arg, $iva=0.21){
            return $precio_arg * (1 + $iva);

            
        }
        $precio = 10;

        $precio_iva = precio_con_iva_defecto($precio, 0.30);
        print"<br/><br/>1- El precio con IVA actualizado es " . $precio_iva;

        print"<br/> 2- El precio con IVA es " . precio_con_iva_defecto($precio);

        ///////////////////////////////////////////////////////

        //Argumentos por valor

        print"<br/> <br/> <br/> Argumentos por valor ";
        function precio_iva_referencia(&$precio, $iva=0.18){
            $precio *= (1 + $iva);
            //No es necesario hacer el return
        }

        $precio = 10;

        print "<br/> <br/> 1- Antes de llamar a la función: El precio con IVA es " . $precio;//10

        precio_con_iva($precio);

        print "<br/>2- Despues de llamar a la función: El precio con IVA es " . $precio;//121
    ?>
</body>
</html>