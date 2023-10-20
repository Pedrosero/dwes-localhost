<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

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

        try{
            $conexion = new PDO(DSN, USUARIO, CONTRASENA);//Creamos un nuevo objeto PDO para el setAttribute
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Le decimos que nos de los errores que sucedan con todo tipo de detalle
            echo"<h1>Bienvenid@ a MySQL!!</h1>";
        }catch(Exception $e){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        //  ▒▒▒▒▒▒▒▒ Utilizando comodines :: LIKE ▒▒▒▒▒▒▒▒

    $sql = "SELECT * FROM persona where nombre like :nombre or apellidos like :apellidos or telefono like :telefono";

    $busqueda="onio";

    $sentencia = $conexion -> prepare($sql);
    $sentencia -> setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Persona::class);

    $cadBuscar = "%" . $busqueda . "%";

    $sentencia -> execute(["nombre" => $cadBuscar,"apellidos" => $cadBuscar,"telefono"=> $cadBuscar]);

    //$result = $sentencia -> fetchAll();
    //  $result = $sentencia -> fetchAll();


//DISTINTAS MANERAS DE COMPROBAR LA BÚSQUEDA

    //echo "Resultados: ".  print_r($result);
    print"<h2>foreach Personas as persona</h2>";
    while($t = $sentencia -> fetch()){
        echo "Id: ".$t->getId()."</br>";
        echo "Nombre: ".$t->getNombre()."</br>";
        echo "Apellidos: ".$t->getApellidos()."</br>";
        echo "Teléfono: ".$t->getTelefono()."</br>";

        //var_dump($t);
    }
    ?>
</body>
</html>