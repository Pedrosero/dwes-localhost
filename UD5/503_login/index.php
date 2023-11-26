<head>
<meta charset="utf-8">
<title>Auth_No_bbdd</title>
</head>

<body>

<h2> Autenticacion sin bbdd</h2>
<p>En esta práctica todo se controla con cookies y sesiones, sin conexión a bbdd</p>  
<p>Una sesión establece una relación anónima con un usuario particular, de manera que podemos saber si es el mismo usuario entre dos peticiones distintas. Si preparamos un sistema de login, podremos saber quien utiliza nuestra aplicación.</p> 
<p>Para ello, preparemos un sencillo sistema de autenticación:</p> 
<p>1 Mostrar el formulario login/password</p> 
<p>2 Comprobar los datos enviados</p> 
<p>3 Añadir el login a la sesión</p> 
<p>4 Comprobar el login en la sesión para realizar tareas específicas del usuario</p> 
<p>5 Eliminar el login de la sesión cuando el usuario la cierra. </p>   
<p>usuario/admin admin </p>   

<p>En la actualidad la autenticación de usuario no se realiza gestionando la sesión direcamente, sino que se realiza mediante algún framekwork que abstrae todo el proceso o la integración de mecanismos de autenticación tipo OAuth, como Laravel.
</p>  

<?php
session_start();

// Verificar si el usuario ya está logueado
if (isset($_SESSION['usuario'])) {
    header("Location: perfil.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de sesión</title>
</head>
<body>

<h2>Bienvenido</h2>

<?php if (isset($_SESSION['mensaje_registro'])) : ?>
    <p style="color: green;"><?php echo $_SESSION['mensaje_registro']; ?></p>
    <?php unset($_SESSION['mensaje_registro']); ?>
<?php endif; ?>

<a href="login.php">Iniciar sesión</a><br>
<a href="registro.php">Registrarse</a>

</body>
</html>



 
 

</body>
</html>




