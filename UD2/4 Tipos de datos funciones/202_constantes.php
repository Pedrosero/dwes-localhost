<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        printf("<h1>Constantes</h1>");

        //Podemos definir constantes en php de la siguiente forma:
        printf("<h2><br/>Constantes definidas</h2>");

        define("Pi", 3.1416);//Defino el número 3,1416 para "Pi"
        define("edadMayor", 18);//Defino el numero 18 para "edadMayor"
        define("Capital", 'Madrid');//Defino 'Madrid' para "Capital"
        define("Carnet", 'Caducado');//Defino 'caducado' para "Carnet

        //Mostramos por pantalla el resultado de las variables definidas
        print"<br/>El valor de Pi es ". Pi;
        print"<br/><br/>Eres mayor de edad a partir de los ". edadMayor ." años";
        print"<br/><br/>La capital de españa es ". Capital;

        //Con los "is" se comprueba el tipo de dato
        print"<br/><br/>¿El valor de carnet es un string?(1 SI, nada NO) " . is_string(Carnet);//is_string comprueba que el dato sea un String
        print"<br/><br/>¿El valor de carnet es un float?(1 SI, nada NO) " . is_float(Carnet);//is_float comprueba que el dato sea un float

        //Php muestra un gran número de constantes predefinidas para que le podamos dar uso como por ejemplo:
        printf("<h2><br/><br/>Constantes predefinidas</h2>");

        define("Ruta",__FILE__);//Enseña la ruta del fichero
        define("Linea",__LINE__);//Muestra el número de línea donde se usa

        print"<br/>La ruta del ficherto es: ". Ruta;
        print"<br/><br/>La linea del define es la: ". Linea;



    ?>
</body>
</html>