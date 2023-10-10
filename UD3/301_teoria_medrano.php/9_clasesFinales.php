<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Producto {
            private $codigo;
        
            public function getCodigo() : string {
                return $this->codigo;
            }
        
            final public function mostrarResumen() : string {
                return "Producto ".$this->codigo;
            }
        }  
        // No podremos heredar de Microondas
        final class Botella extends Producto {
            private $litros;
        
            public function getLitros() : int {
                return $this->litros;
            }
            // No podemos implementar mostrarResumen()
        }
    ?>
</body>
</html>