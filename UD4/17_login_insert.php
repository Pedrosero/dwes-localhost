<?php

$conexion = null;

include "../config/database.inc.php";

try {
    // "SERVIDOR", "BASE DE DATOS", "USUARIO", "CONTRASEÑA"
    $conexion = new PDO(DSN, USUARIO, PASSWORD);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '<h1>Bienvenido a MySQL !!</h1>';
} catch (Exception $e) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

echo '<h1>Lo crea</h1>';
$usuario = "Fran";
$password = "fransolo";

$sql = "INSERT INTO usuario(usuario, password) VALUES (:usuario, :password)";

$sentencia = $conexion->prepare($sql);

$isOk = $sentencia->execute([
    "usuario" => $usuario,
    "password" => password_hash($password, PASSWORD_DEFAULT)
]);
if ($isOk) {
    echo 'Creado';
}

$conexion = null;

?>