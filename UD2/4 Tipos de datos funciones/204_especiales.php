<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        print "<h2>Especiales</h2>";



        print"<br/><br/>SERVER SOFTWARE<br/>";
        print_r($_SERVER['SERVER_SOFTWARE']);

        print"<br/><br/>REQUEST_TIME_FLOAT<br/>";
        print_r($_SERVER['REQUEST_TIME_FLOAT']);

        print"<br/><br/>HTTPS<br/>";
        print_r($_SERVER['HTTPS']);

        print"<br/><br/>REMOTE_PORT<br/>";
        print_r($_SERVER['REMOTE_PORT']);

        print"<br/><br/>REDIRECT_REMOTE_USER<br/>";
        print_r($_SERVER['REDIRECT_REMOTE_USER']);

        print"<br/><br/>SERVER ADOR<br/>";
        print_r($_SERVER['SERVER_ADDR']);

        print"<br/><br/>PHP_SELF<br/>";
        print_r($_SERVER['PHP_SELF']);

        print"<br/><br/>SCRIPT_FILENAME<br/>";
        print_r($_SERVER['SCRIPT_FILENAME']);
        
        print"<br/><br/>SCRIPT_NAME<br/>";
        print_r($_SERVER['SCRIPT_NAME']);

        print"<br/><br/>REQUEST_TIME<br/>";
        print_r($_SERVER['REQUEST_TIME']);

        print"<br/><br/>REQUEST_TIME<br/>";
        print_r($_SERVER['REQUEST_TIME']);

    ?>
</body>
</html>