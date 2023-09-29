<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        print"<h2>Estructura básica de control</h2>";

        $a=5;
        $b=0;

        if($a<$b)
            print"a es mmenor que b";
        elseif($a>$b)
            print"a es mayor que b";
        else
            print"a y b valen lo mismo";

        //Operadores ternariosy sus tipos
        print"<br/><br/><h2>Operador ternario</h2><br/>";

        $edad=20;
        echo($edad>=20 ? 'Pasa':'Fuera');

        print"<br/><br/><h2>Operador ternario resumido (elvis)</h2><br/>";
        $val = $_GET['user'] ?: 'default';//true
        $user= $_GET['user'] ?? 'nobody';//isset

        $nombre_ejercicio=$_SERVER['PHP_SELF'] ?? 'Fichero sin definir';

        

        echo"<br/> El fichero es= $nombre_ejercicio";

        //1 Definir una variable
        $verdad=true;
        $mentira=false;

        //2 Recoger la salida con los operadores ternarios
        $valor1=$mentira ?: 'No es TRUE';//true
        $valor2=$verdad ?: 'No es true';//true
        $valor3=$inventada/*variable que no se ha definido*/ ?? 'variable sin definir';//isset
        

        //3 Mostrar las variables de salida
        echo"<br/><br/>VALOR 1= $valor1";
        echo"<br/>VALOR 2= $valor2";
        echo"<br/>VALOR 3= $valor3";
        
        
        echo"<br/> La variable val tiene $val";
        echo"<br/> La variable user tiene $user";


        $trabajo_realizado=true;
        $calificado = $trabajo_realizado ?: 'No has hecho el trabajo';
        print $calificado;


        //Probando el switch
        print"<br/><br/><h2>Probando condicional switch</h2><br/>";

        switch($a){
            case 0:
                print"a vale 0";
                break;
            case 1:
                print"a vale 1";
                break;
            default:
                print"a no vale ni 0 ni 1";
                break;
            }

        print"<br/><br/><h2>Bucle while</h2><br/>";

        //WHILE
        while ($a<100){
            $a += 2;
            print "<br/> $a";
        }

        //For
        print"<br/><br/><h2>Bucle for</h2><br/>";
        
        for($i = 0; $i<10; $i++)
            print"<br/>El valor de nuestro contador es : $i";
        
        //DO WHILE
        print"<br/><br/><h2>Bucle do while</h2><br/>";

        do{
            print"<br/>" . $variable++;
        } while($variable <= 10);
        
    
    ?>
    
</body>
</html>