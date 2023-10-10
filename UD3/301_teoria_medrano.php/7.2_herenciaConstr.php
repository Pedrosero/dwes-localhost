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
            public string $codigo;
        
            public function __construct(string $codigo) {
                $this->codigo = $codigo;
            }
        
            public function mostrarResumen() {
                echo "<p>Prod:".$this->codigo."</p>";
            }
        }
        
        class Tv extends Producto {
            public $paginas;
            public $autor;
        
            public function __construct(string $codigo, int $paginas, string $autor) {
                parent::__construct($codigo);
                $this->paginas = $paginas;
                $this->autor = $autor;
            }
        
            public function mostrarResumen() {
                parent::mostrarResumen();
                echo "<p>Libro de ".$this->paginas." escrito por: ".$this->autor."</p>";
            }
        }
    ?>
</body>
</html>