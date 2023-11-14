<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         

        session_start();
        
        /*session is started if you don't write this line can't use $_Session  global variable*/
        
        $_SESSION["newsession"]="Mi primera sesion";
        
        echo $_SESSION["newsession"];


        

        /*session is started if you don't write this line can't use $_Session  global variable*/

        
        $value="Hello I am Pedro";
        $_SESSION["sessiontwo"]=$value;

        echo"<br>Antes de borrar: " .$_SESSION["sessiontwo"];
        unset($_SESSION["sessiontwo"]);

        /*session deleted. if you try using this you've got an error*/

        echo"<br>Despues de borrar: ". $_SESSION["sessiontwo"];

        
    ?>
</body>
</html>