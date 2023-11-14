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
    ?>
    
</body>
</html>