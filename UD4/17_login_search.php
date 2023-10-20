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

echo '<h1>Lo muestra</h1>';
$usuarioX = "Fran";

$sql = "SELECT * FROM usuario WHERE usuario = ?";

$sentencia = $conexion->prepare($sql);
$sentencia->execute([$usuarioX]);

$usuario = $sentencia->fetch();

echo "TEST: " . $usuarioX . " " . $usuario['usuario'] . " " . $usuario['password'];
echo ($usuario && password_verify($usuarioX, $usuario['password'])) ? "OK" : "NO";
if ($usuario && password_verify($usuarioX, $usuario['password'])) {
    echo "OK!";
    echo 'Mostrado';
} else {
    echo "KO";
}
$conexion = null;

?>