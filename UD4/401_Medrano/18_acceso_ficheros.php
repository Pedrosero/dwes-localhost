<?php
echo"<h2>Comprobando que el fichero existe y que se abra</h2>";


if (!$fp = fopen("miarchivo.txt", "r")){
    echo "No se ha podido abrir el archivo";
}else{
    echo "Fichero abierto";
}

echo"<h2>Abriendo y leyendo el contenido</h2>";

//  ▒▒▒▒▒▒▒▒ Abriendo un archivo y leyendo su contenido ▒▒▒▒▒▒▒▒


$file = "miarchivo.txt";
$fp = fopen($file, "r");

// filesize() nos devuelve el tamaño del archivo en cuestión
$contents = fread($fp, filesize($file));
echo "".$contents;
// Cerramos la conexión con el archivo
fclose($fp);

//------------------------------------------------------------------------------------------------------------------------------

//  ▒▒▒▒▒▒▒▒ Escribiendo en un archivo ▒▒▒▒▒▒▒▒

echo"<h2>Escribiendo en el archivo</h2>";

$file = "miarchivo.txt";
$texto = "Hola que tal";

$fp = fopen($file, "a");

fwrite($fp, $texto);

$fp = fopen($file, "r");
// filesize() nos devuelve el tamaño del archivo en cuestión
$contents = fread($fp, filesize($file));
echo "".$contents;
fclose($fp);

?>