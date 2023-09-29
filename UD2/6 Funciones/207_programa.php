<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>207 Include</title>
</head>
<body>
    <?php
        //include '207_definiciones.php';
        //require '207_definiciones2.php';
        require_once '207_definiciones.php';
        
        print "<br/><br/>El grupo $grupo está definido en el archivo 207_definiciones";
        print "En su dia sacó el disco $disco";
    ?>
</body>
</html>