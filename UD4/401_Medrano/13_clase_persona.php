<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //  ▒▒▒▒▒▒▒▒ clase Persona ▒▒▒▒▒▒▒▒
        include "config/database.inc.php";

        class Persona {
            private  int $id;
            private  string $nombre;
            private  string $apellidos;
            private  string $telefono;

    
            public function getId() : int {
                return $this -> id;
            }
    
            public function getNombre() : string {
                return $this -> nombre;
            }
    
            public function getApellidos() : string {
                return $this -> apellidos;
            }

            public function getTelefono() : string {
                return $this -> telefono;
            }
        }
         //  ▒▒▒▒▒▒▒▒ Consultando a través de la clase Persona ▒▒▒▒▒▒▒▒

         try{
            $conexion = new PDO(DSN, USUARIO, CONTRASENA);//Creamos un nuevo objeto PDO para el setAttribute
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Le decimos que nos de los errores que sucedan con todo tipo de detalle
            echo"<h1>Bienvenid@ a MySQL!!</h1>";
        }catch(Exception $e){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        $sql = "SELECT * FROM persona";
        $sentencia = $conexion -> prepare($sql);

        // Aquí 'Persona' es el nombre de nuestra clase
        $sentencia -> setFetchMode(PDO::FETCH_CLASS, "Persona");
        $sentencia -> execute();

        while($t = $sentencia -> fetch()){
            echo "Id: ".$t->getId()."</br>";
            echo "Nombre: ".$t->getNombre()."</br>";
            echo "Apellidos: ".$t->getApellidos()."</br>";
            echo "Teléfono: ".$t->getTelefono()."</br>";

            var_dump($t);
        }
        $conexion=null;
    ?>
</body>
</html>