<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        <?php
        interface Nombreable {
        // declaración de funciones
        }
        class NombreClase implements NombreInterfaz {
        // código de la clase

        interface Mostrable {
            public function mostrarResumen() : string;
        }
        
        interface MostrableTodo extends Mostrable {
            public function mostrarTodo() : string;
        }
        
        interface Facturable {
            public function generarFactura() : string;
        }
        
        class Producto implements MostrableTodo, Facturable {
            // Implementaciones de los métodos
            // Obligatoriamente deberá implementar public function mostrarResumen, mostrarTodo y generarFactura
        }
    }
    ?>
</body>
</html>