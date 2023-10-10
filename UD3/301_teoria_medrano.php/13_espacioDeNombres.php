<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        namespace Dwes\Ejemplos;

        const IVA = 0.21;
        
        class Producto {
            public $nombre;
              
            public function muestra() : void {
                echo"<p>Prod:" . $this->nombre . "</p>";
            }
        }
    ?>
</body>
</html>