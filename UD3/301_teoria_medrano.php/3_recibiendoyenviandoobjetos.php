<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function maymen(array $edades) : ?MayorMenor {
            $a = max($edades);
            $b = min($edades);
        
            $result = new MayorMenor();
            $result->setMayor($a);
            $result->setMenor($b);
        
            return $result;
        }
        
        $resultado =  maymen([1,76,9,41,39,25,97,22]);
        echo "<br>Más edad: ".$resultado->getMayor();
        echo "<br>Menos edad: ".$resultado->getMenor();
    ?>
</body>
</html>