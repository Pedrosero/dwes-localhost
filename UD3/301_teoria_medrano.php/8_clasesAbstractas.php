<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Clase abstracta
        abstract class Producto {
        private $codigo;
        public function getCodigo() : string {
            return $this->codigo;
    }
        // Método abstracto
        abstract public function mostrarResumen();
    }

    class Libro extends Producto {
        public $paginas;
        public $autor;

        public function __construct
    
        public function mostrarResumen() { //obligado a implementarlo
            echo "<p>Código ".$this->getCodigo()."</p>";
            echo "<p>Libro de ".$this->paginas." escrito por: ".$this->autor."</p>";
        }
    }
    $l = new Libro();
    echo $l->getCodigo();
    ?>

    
</body>
</html>