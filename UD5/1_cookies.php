<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p></>
    <?php
        setcookie("alumno", "Pedro");
        setcookie("software", $_SERVER['SERVER_SOFTWARE'], time()+3600);

        echo "<b>Autor: </b>". $_COOKIE["alumno"];
        echo "<br>Utilizando: ". $_COOKIE["software"];

        $value = "something from software";



        //setcookie("TestCookie", $value);
        setcookie("TestCookie", $value, time()+3600);
        

        echo"<br><b>Test de cookies1: </b>". $_COOKIE["TestCookie"];

        setcookie("TestCookie2", $value, time()+3600);

        echo"<br><b>Test de cookies2: </b>". $_COOKIE["TestCookie2"];   

        print_r($_COOKIE);
        /**
                 * "TestCookie": Es el nombre de la cookie.
                *$value: Es el valor de la cookie.
                *time() - 3600: Es el tiempo de expiración de la cookie. En este caso, se establece en el tiempo actual (time()) menos 3600 segundos, lo que significa que la cookie expirará 3600 segundos (1 hora) antes del momento actual, es decir, se eliminará.
                *"/rasmus/": Es el path o ruta para la cual la cookie está disponible. En este caso, la cookie solo está disponible para páginas bajo el path "/rasmus/" en el servidor.
                *"example.com": Es el dominio para el cual la cookie está disponible. En este caso, la cookie solo está disponible para el dominio "example.com".
                *1: Es un parámetro booleano (verdadero o falso) que indica si la cookie debe ser enviada solo a través de conexiones seguras (HTTPS). En este caso, se establece en 1, lo que significa verdadero. Esto indica que la cookie debe ser segura y solo se enviará a través de conexiones HTTPS.
                */
    ?>
    
</body>
</html>