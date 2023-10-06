<?php
    Class Compra_vehiculo{
        private $precio_base;
        private static $ayuda=0;
        // método constructor por defecto
        function __construct($gama){
            if($gama=="urbano"){
                $this->precio_base=10000;
            }else if($gama=="compracto"){
                $this->precio_base=20000;
            }else if($gama=="berlina"){
                $this->precio_base=30000;
            }
        }

        static function descuento_gobierno(){
            if(date("Y-m-d")>"2015-01-01"){
                self::$ayuda=4500;
                echo "Se ha creado una ayuda de: " . self::$ayuda;
            }
            else
            echo "<br/> No se ha creado ninguna ayuda, tienes un total de:  " . self::$ayuda;
        }

        function navegador(){
            $this->precio_base+=2500;
        }
        function tapiceria_cuero($color){
            if($color == "blanco"){
                $this->precio_base+=3000;
            }elseif($color == "beige"){
                $this->precio_base+=3500;
            }else{
                $this->precio_base+=5000;
            }
        }
        function precio_final(){
            $valor_final=$this->precio_base-self::$ayuda;
            return $valor_final;
        }
    }
?>