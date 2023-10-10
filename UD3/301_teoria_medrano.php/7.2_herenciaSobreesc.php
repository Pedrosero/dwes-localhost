<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
include"7_herencia.php";
        class Libro extends Producto {
            public $paginas;
            public $autor;
         
            public function mostrarResumen() {
               parent::mostrarResumen();
               echo "<p>Libro de ".$this->paginas." escrito por: ".$this->autor."</p>";
            }
         }
    ?>
</body>
</html>