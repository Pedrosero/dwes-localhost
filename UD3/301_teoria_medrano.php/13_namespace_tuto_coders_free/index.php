<?php
    use carpeta1\Humano as Humano1;
    use carpeta2\Humano as Humano2;

    require_once("carpeta1/Humano.php");
    require_once("carpeta2/Humano.php");
    echo"index del tutorial coders free";

    $humano1 = new carpeta1\Humano();
    $humano1 -> saludar();

    
    $humano2 = new Humano();
    $humano1 = new Humano();
    

    $humano2 = new Humano2();
    $humano2->saludar();

?>