<html>
    <head>
        <title>UD1- Arquitecturas WEB</title>
    </head>
    <body>
        <h1>Ambitos de las variables</h1>
        <?php
            //Ejemplo 3 ámbitos de las variables

            //$variable="Esto es una variable";
            global $variableGlobal;
            //Creamos la función ámbito
            function ambito(){
                $variableLocal=78;
                //Mostramos una variable del programa principal
                //echo $variable;
            }

              //Creamos la función ámbito
              function ambito2(){
                //Con la etiqueta global si puedo usar variables del entorno principal
                global $variable;
                $variableLocal=78;
                //Mostramos una variable del programa principal
                echo $variable;
            }

            //Creamos la función ámbito
            function estatica(){
                static $variableEstatica=5;
                $variableEstatica++;
                //Mostramos una variable del programa principal
                echo $variableEstatica;
            }

            //Llamamos a la función
            //ambito();
            //ambito2();
            estatica();
            estatica();
            estatica();
            estatica();

            


            //Nos dará error porque es una variable que pertenece a la función
            //echo $variableLocal;
        ?>
    </body>
</html>