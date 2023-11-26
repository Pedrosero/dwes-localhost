<?php
session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
</head>
<body>

<h2>Bienvenido a tu perfil</h2>

<p>Usuario: <?php echo $_SESSION['usuario']; ?></p>

<p>Esta información se almacena en una sesión con índice 'usuario'.</p>

<a href="logout.php">Salir</a>

</body>
</html>
