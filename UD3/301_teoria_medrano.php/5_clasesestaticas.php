<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class ProductoP1 {
            const IVA = 0.23;
            public static $numProductos = 0; 
        
            public static function nuevoProducto() {
                self::$numProductos++;
            }
        }

        
        ProductoP1::nuevoProducto();
        $impuesto = ProductoP1::IVA;

        class ProductoP2 {
            const IVA = 0.23;
            public static $numProductos = 0; 
            public $codigo;
        
            public function __construct(string $cod) {
                self::$numProductos++;
                $this->codigo = $cod;
            }
        
            public function mostrarResumen() : string {
                return "El producto ".$this->codigo." es el número ".self::$numProductos;
            }
        }
        
        $prod1 = new ProductoP2("PS5");
        $prod2 = new ProductoP2("XBOX Series X");
        $prod3 = new ProductoP2("Nintendo Switch");
        echo $prod3->mostrarResumen();

        
    ?>

    
</body>
</html>