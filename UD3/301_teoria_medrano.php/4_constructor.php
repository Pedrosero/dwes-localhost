<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Animal {
            private string $especie;
        
            public function __construct(string $esp) {
                $this->especie = $esp;
            }
            public function imprimir(){
                echo $this->especie;
                echo '<br>';
            }
        }
        $Pantera = new Animal("Panthera pardus"); // creamos un objeto
        $Pantera->imprimir();  
    ?>
</body>
</html>