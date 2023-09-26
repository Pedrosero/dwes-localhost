<html>
    <head>
        <title>UD1- Arquitecturas WEB</title>
    </head>
    <body>
        <?php
            //Ejemplo 2 Tipos de datos
            echo "Tipos de datos en PHP"
        ?>
        <h2>Cadenas</h2>
        <?php
            //Cadenas

            $nombre = "Pedro";
            echo "Tu nombre es $nombre";
        ?>
        <h2>Entero</h2>
        <?php
            //Entero
             $Vehiculos = 3;
            echo "Vehiculos $Vehiculos"
        ?>
            
        <h2>Booleano</h2>
        <?php
            //Booleano
            //1 es true y todo lo demás que no sea 1 es falso
            $mayordeedad = false;
            echo "¿Verdadero o falso? $mayordeedad"
        ?>

        <h2>Float</h2>
        <?php
            //Float
            $saldo = 7.3;
            echo " Tu saldo es de $saldo"
        ?>
            
        <h2>Null</h2>
        <?php
            //Booleano
            $variableNula = null;
           // $variableSinDefinir;
           // echo "Nulos: $variableNula"
           // echo "Nulos:$variableSinDefinir"
        ?>

        <h2>Casting implicito</h2>
        <?php
            //saldo
            $saldoPedro = 230;
            $saldoJuanma = 500.33;

            $totalSaldos = $saldoPedro + $saldoJuanma;

            echo "Saldo: $totalSaldos";
        ?>


        <h2>Casting explícito o conversion</h2>
        <?php
            //saldo
            $saldoPepe = 300;
            $saldoAntonio = 730.50;

            $totalSaldos = $saldoPepe + (int)$saldoAntonio;

            echo "Saldo: $totalSaldos";
        ?>
    </body>
</html>