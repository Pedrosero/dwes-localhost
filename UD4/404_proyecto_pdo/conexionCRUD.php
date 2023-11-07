<?php
/*
    Información:  
    Enlace a video:    
    Finalidad ejercicio:  
    Alumno:
*/
?>
<?php
    require ("configCRUD.php");
    class Conexion{
        protected $conexion_db;

        //Constructor por defecto para esta clase llamada conexion.
        public function __construct(){
        //-------------------------------- Con PDO ---------------------------------
        try {
            $this->conexion_db=new PDO (DB_HOST.";".DB_NOMBRE,DB_USUARIO, DB_CONTRA);
            $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexion_db->exec("SET CHARACTER SET utf8");
            return $this->conexion_db;
        } catch (Exception $e) {
            echo "la línea de error es: " . $e->getLine();
        }

        //-------------------------------- con MYSQLI, reutilizado del 57 ---------------------------------

            //Por defecto utiliza la configuracion por defecto para crear la conexion.
            /*$this->conexion_db=new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE );

            //Condicional para que en caso de error nos los indique
            if ($this->conexion_db->connect_errno) {
                echo "Fallo al conectar a MySql: " . $this->conexion_db -> connect_error;
                return;
            }

            //Seteo de los caracteres a utilizar.
            $this->conexion_db->set_charset(DB_CHARSET);*/
        }
    }
?>