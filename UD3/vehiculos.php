<?php
    class Coche{
        public $ruedas;
        public $color;
        public $motor;

        function __construct(){
            $this->motor = 1600;
            $this->color ="";
            $this->ruedas = 4;
        }

        function get_ruedas(){
            return $this->ruedas;
        }
        function get_color(){
            return $this->color;
        }
        function get_motor(){
            return $this->motor;
        }

        function arrancar(){
            echo "Estoy arrancando <br/>";
        }
        function girar(){
            echo "Estoy girarando <br/>";
        }
        function frenar(){
            echo "Estoy frenando <br/>";
        }

        function establecec_color($color_coche, $modelo_coche) {
            $this->color = $color_coche;
            echo "El color de ".$modelo_coche." es: ".$this->color."<br/>";
        }
    }

    class Camion extends Coche{

        function __construct(){
            $this->motor = 2600;
            $this->color ="Gris";
            $this->ruedas = 8;
        }
        function establecec_color($color_camion, $modelo_camion) {
            $this->color=$color_camion;
            echo "El color de ".$modelo_camion." es: ".$this->color."<br/>";
        }
        function arrancar(){
            parent::arrancar();
            echo "Camion arrancando <br/>";
        }

    }
?>