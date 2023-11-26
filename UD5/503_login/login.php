<?php
session_start();

// Verificar si el usuario ya está logueado
if (isset($_SESSION['usuario'])) {
    header("Location: perfil.php");  // Si el usuario ya está logueado, redirigir a la página de perfil
    exit();
}

$usuarios_permitidos = array(
    'usuario1' => 'contrasena1',
    'usuario2' => 'contrasena2',
    'admin' => 'admin'
);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Verificar si las credenciales son válidas
    if (array_key_exists($usuario, $usuarios_permitidos) && $usuarios_permitidos[$usuario] == $contrasena) {
        // Establecer 5 cookies diferentes con información específica

        // Cookie 1: Almacena el nombre de usuario
        setcookie("usuario", $usuario, time() + 3600, "/");

        // Cookie 2: Almacena el rol del usuario (en este caso, se establece como "admin" de manera estática)
        setcookie("rol", "admin", time() + 3600, "/");

        // Cookie 3: Almacena la fecha y hora de la última visita
        setcookie("ultima_visita", date('Y-m-d H:i:s'), time() + 3600, "/");

        // Cookie 4: Almacena las preferencias de color del usuario (en este caso, se establece como "azul" de manera estática)
        setcookie("preferencias_color", "azul", time() + 3600, "/");

        // Cookie 5: Indica si la sesión está iniciada (en este caso, se establece como "true" de manera estática)
        setcookie("sesion_iniciada", "true", time() + 3600, "/");

        // Iniciar sesión y redirigir al perfil
        $_SESSION['usuario'] = $usuario;  // Establecer la variable de sesión 'usuario'
        header("Location: perfil.php");  // Redirigir al usuario a la página de perfil
        exit();
    } else {
        $mensaje_error = "Usuario o contraseña incorrectos";  // Mensaje de error si las credenciales no son válidas
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
</head>
<body>

<!-- Mostrar mensaje de error si existe -->
<?php if (isset($mensaje_error)) : ?>
    <p style="color: red;"><?php echo $mensaje_error; ?></p>  
<?php endif; ?>

<form method="post" action="login.php">
    <label for="usuario">Usuario:</label>
    <input type="text" name="usuario" required>
    <br>
    <label for="contrasena">Contraseña:</label>
    <input type="password" name="contrasena" required>
    <br>
    <input type="submit" name="login" value="Iniciar sesión">
</form>

<br>
<a href="registro.php">Registrarse</a>  

</body>
</html>
