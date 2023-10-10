<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
        $resultado = $dividendo / $divisor;
        
        error_reporting(E_ALL & ~E_NOTICE);
        set_error_handler("miManejadorErrores");
        $resultado = $dividendo / $divisor;
        restore_error_handler(); // vuelve al anterior
        
        function miManejadorErrores($nivel, $mensaje) {
            switch($nivel) {
                case E_WARNING:
                    echo "<strong>Warning</strong>: $mensaje.<br/>";
                    break;
                default:
                    echo "Error de tipo no especificado: $mensaje.<br/>";
            }
        }
    ?>
</body>
</html>