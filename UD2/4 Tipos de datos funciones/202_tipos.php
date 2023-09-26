<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Funciones y tipos de datos

        printf("<br/><br/> Funciones y tipos de datos <br/>");

        $a = $b = 3.141516;

        echo "<br/>El tipo de a es " . gettype($a);
        echo "<br/>El tipo de b es " . gettype($b);

        //boolean, integer, float, string, array, object, null

        settype($a, "float");

        error_reporting(0);//Evitar los mensajes de error por si hacemos algún testeo

        echo "<br/><br/>El tipo de a es ". gettype($a);
        echo "<br/>El tipo de b es ". gettype($b);

        //isset, usset

        //isset($c);//Podemos usar isset en los condicionales
        unset($b);//destruye la variable que se le pasa como parámetro

        echo "<br/><br/>El tipo de b es " . gettype($b); //nos da error porque ya está destruido
        //echo "<br/>El tipo de c es ". gettype($c);

        if(isset($c)){
            echo "<br/><br/> C está definida";
        }else{
            echo "<br/><br/> C no está definida";//muestra este al NO estar definida
        }


        printf("Diferencia entre isset y empty");

        $d = null;

        error_reporting(0);//Evitar los mensajes de error por si hacemos algún testeo

        echo"<br/><br/> El tipo de d es " . gettype($d);
        if(empty($d)){
            echo "<br/><br/> D está definida";
        }else{
            echo "<br/><br/> D no está definida";//muestra este al NO estar definida
        }

    ?>
</body>
</html>