<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Producto {
            public $codigo;
            public $nombre;
            public $nombreCorto;
            public $PVP;
        
            public function mostrarResumen() {
                echo "<p>Prod:".$this->codigo."</p>";
            }
        }  
        class Libro extends Producto {
            public $paginas;
            public $autor;
        }
    ?>
</body>
</html>