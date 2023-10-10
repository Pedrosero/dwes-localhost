<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        try {
            if ($divisor == 0) {
                throw new Exception("División por cero.");
            }
            $resultado = $dividendo / $divisor;
        } catch (Exception $e) {
            echo "Se ha producido el siguiente error: ".$e->getMessage();
        }

        class HolaExcepcion extends Exception {}

        //---------------------------------------------------------------------------------------------------------------------------------------------------------------

        class MiExcepcion extends Exception {
            public function __construct($msj, $codigo = 0, Exception $previa = null) {
                // código propio
                parent::__construct($msj, $codigo, $previa);
            }
            public function __toString() {
                return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
            }
            public function miFuncion() {
                echo "Una función personalizada para este tipo de excepción\n";
            }
        //---------------------------------------------------------------------------------------------------------------------------------------------------------------
            namespace \Dwes\Ejemplos;

            class AppExcepcion extends \Exception {}
        }

        //---------------------------------------------------------------------------------------------------------------------------------------------------------------

        $email = "ejemplo@ejemplo.com";
        try {
            // Comprueba si el email es válido
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
                throw new MiExcepcion($email);
            }
            // Comprueba la palabra ejemplo en la dirección email
            if(strpos($email, "ejemplo") !== FALSE) {
                throw new Exception("$email es un email de ejemplo no válido");
            }
        } catch (MiExcepcion $e) {
            echo $e->miFuncion();
        } catch(Exception $e) {
            echo $e->getMessage();
        }

        //---------------------------------------------------------------------------------------------------------------------------------------------------------------


        class MainException extends Exception {}
        class SubException extends MainException {}

        try {
            throw new SubException("Lanzada SubException");
        } catch (MainException | SubException $e ) {
            echo "Capturada Exception " . $e->getMessage();
        }

        //---------------------------------------------------------------------------------------------------------------------------------------------------------------


        try {
            // tu codigo
        } catch (Throwable $e) {
            echo 'Forma de capturar errores y excepciones a la vez';
        }

        //---------------------------------------------------------------------------------------------------------------------------------------------------------------

        
        try {
            // Genera una notificación que no se captura
            echo $variableNoAsignada;
            // Error fatal que se captura
            funcionQueNoExiste();
        } catch (Error $e) {
            echo "Error capturado: " . $e->getMessage();
        }

        //---------------------------------------------------------------------------------------------------------------------------------------------------------------


        class AppException extends Exception {}

        //---------------------------------------------------------------------------------------------------------------------------------------------------------------

        try {
        // Código de negocio que falla
        } catch (Exception $e) {
            throw new AppException("AppException: ".$e->getMessage(), $e->getCode(), $e);
        }

    ?>
</body>
</html>