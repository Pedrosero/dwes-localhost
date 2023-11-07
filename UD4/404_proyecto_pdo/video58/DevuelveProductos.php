<?php
/*
    Información:  
    Enlace a video:    
    Finalidad ejercicio:  
    Alumno:
*/
?>
<?php
    require ("Conexion.php");

    class DevuelveProductos extends Conexion{
        //Funcion heredada de su clase padre la cual es Conexion
        public function __construct(){
            parent::__construct();
        }

       
        //Funcion a parte para obtener todos las tuplas de la tabla productos introducciendo el pais de origen que deseemos obtener.
        public function get_productos($dato){
            $sql = "SELECT * FROM PRODUCTOS WHERE paisdeorigen=:DATO";

            //Las dos siguientes lineas prepara la consulta y la ejecuta con la funcion execute.
            $sentencia = $this->conexion_db->prepare($sql);
            $sentencia->execute(array(":DATO"=>$dato));

            //Este valor nos devuelve todos los datos del array. Usando un array asociativo.
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);

            //Por ultimo cerrariamos la conexion y devolveremos los datos con return y borrando la memoria de conexion_db
            $sentencia->closeCursor();
            return $resultado;
        }
    }
?>