<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso_Pildoras</title>
</head>
<body>
    <?php
        include 'vehiculos.php';
        error_reporting(0);

        $renault=new Coche();
        $mazda=new Coche();
        $seat=new Coche();

        $mazda->girar();
        echo $mazda->ruedas;

        $volvo=new Camion();

        $volvo->girar();

        echo "El mazda tiene ".$mazda->ruedas. " ruedas <br/>";
        echo "El volvo tiene ".$volvo->ruedas. " ruedas <br/>";
        $volvo->arrancar();
        $volvo->establecec_color("red","prueba");

        echo "El mazda tiene ".$mazda->get_ruedas(). " ruedas <br/>";
        echo "El volvo tiene ".$volvo->get_ruedas(). " ruedas <br/>";


    ?>
</body>
</html>