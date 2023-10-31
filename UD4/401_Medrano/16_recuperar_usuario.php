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


        try{
            $conexion = new PDO(DSN, USUARIO, CONTRASENA);//Creamos un nuevo objeto PDO para el setAttribute
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Le decimos que nos de los errores que sucedan con todo tipo de detalle
            echo"<h1>Bienvenid@ a MySQL!!</h1>";
        }catch(Exception $e){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }


        class User{
        private String $usuario;
        private String $password;


        public function getUsuario() : int {
            return $this -> usuario;
        }

        public function getPassword() : string {
            return $this -> password;
        }
    }



        //  ▒▒▒▒▒▒▒▒ Recuperando usuario y password en BD ▒▒▒▒▒▒▒▒
    
        $usu="Nuevo";
        $contra = "pruebon";   //$_POST["login"] ?? "";
    
        $sql = "select * from usuarios where usuario = ?";
    
        $sentencia = $conexion -> prepare($sql);
        $sentencia -> execute([$usu]);
    
        $usuario = $sentencia -> fetch();


        if($usuario && password_verify($contra, $usuario['password'])) {
            echo"OK!";
        } else {
            echo"KO";
        }
    ?>
</body>
</html>