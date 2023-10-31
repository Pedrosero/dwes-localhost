<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP MySQL. Actualizando registros en BBDD MySql II. Vídeo 46</title>
    <style>
        table {
            width: 50%;
            border: 1px dotted #FF0000;
            margin: auto;
        }
    </style>
</head>

<body>

   <?php
    //Recuperamos el valor del input enviado en formulario_busqueda por la url con el method get. Con la función global $_GET recuperamos su valor indicandole el nombre del input (name="buscar")
    $busqueda = $_GET["buscar"];
    //Importamos el fichero con los datos de la BBDD.
    require("../datosconexion.php");

    //Esta conexión a la BBDD se hará por el método de Procedimientos con la función mysqli_()

    //Con la función mysqli_connect y pasándole como argumentos los datos anteriores nos creamos la conexión a la base de datos.
    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

    //mysqli_connect_errno() comprueba si la conexión da algún tipo de error.
    //si existe algún error nos salimos de la conexión con exit()
    if (mysqli_connect_errno()) {
        echo "Fallo al conectar con la BBDD";
        exit();
    }

    //Con mysqli_select_db podemos seleccionar el nombre de la BBDD que queramos, si existe algún error, con die() cerramos la conexión e indicamos el error.
    mysqli_select_db($conexion, $db_nombre) or die("No se encuentra la BBDD");
    //Con mysqli_set_charset y pasándole utf8 como formato de codificación de carácteres, podemos ver las tíldes y otro tipo de caracteres.
    mysqli_set_charset($conexion, "utf8");

    /*Guardamos en una variable la sentencia SQL para extraer de la BBDD todos los registros de todos los campos de la tabla datospersonales*/
    //NOTA: * se encarga de recoger todos los campos de la tabla.
    //Con la clausula WHERE podemos hacer un filtrado de los elmentos que tengan como nombre el valor de la varible $busqueda.
    //LIKE se comportaría como el = y con % antes y después de la $busqueda conseguimos que nos encuentre todos los resultados que contengan la palabra $busqueda, sin importar las palabras de delante o detrás.
    $query = "SELECT * FROM clientes WHERE nombre LIKE '%$busqueda%'";

    //Con la función mysqli_query y pasándole como argumentos la conexión y la consulta, generamos una tabla virtual en memoria (recordset o resultset) con todos los campos y registros.
    $results = mysqli_query($conexion, $query);
    
    //Con la función mysqli_fetch_row extraemos una fila del resultset almacenada en la variable results.
    //$row = mysqli_fetch_row($results);

    //Para mostrar todas las filas, podemos utilizar un blucle while y mientras exista otra fila seguirá mostrando más filas de la tabla.
    //Usamos una tabla para enmarcar el contenido
    //NOTA: Utilizamos mysqli_fetch_array y MYSQLI_ASSOC para que la fila que nos devuelva sea un array asocitivo en lugar de uno indexado y así poder accder a los campos por su nombre de la columna de una manera más intuitiva.
    //MYSQLI_NUM se comportaría como una indexado y MYSQLI_BOTH como cualquiera de los dos.
    while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
        //echo "<table><tr><td>";
        //Cabecera del formulario
        echo "<form action='3_editarCliente.php' method='get'>";
        //NOTA. el campo código no debería ser editable, le añadimos readonly.
        echo "<input readonly type='text' name='c_cli' value='". $row['codcliente'] ."'><br>";//No se puede modificar
        echo "<input type='text' name='nom' value='". $row['nombre'] ."'><br>";//Se puede modificar
        echo "<input type='text' name='corr' value='". $row['correo'] ."'><br>";
        echo "<input type='text' name='tlf' value='". $row['telefono'] ."'><br>";
        echo "<input type='text' name='loc' value='". $row['localidad'] ."'><br>";
        echo "<input type='submit' name='enviando' value='Actualizar'>";
        echo "</form>";
       
    }

    //Con mysqli_close cerramos la conexión con la BBDD.
    mysqli_close($conexion);
 
    //NOTA: mysql_connect, mysql_querysinY  mysql_fetch_row sin las i, están deprecadas.
   ?>

</body>

</html>