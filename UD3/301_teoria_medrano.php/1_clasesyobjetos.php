<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        class Coche {
        // propiedades
        // y métodos
        } 
        $ob = new Coche();


        class Animal {
            private string $especie;
        
            public function setNombre(string $esp) {
                $this->especie=$esp;
            }
        
            public function imprimir(){
                echo $this->especie;
                echo '<br>';
            }
        }
        
        $Pantera = new Animal(); // creamos un objeto
        $Pantera->setNombre("Panthera pardus");
        $Pantera->imprimir();  


    ?>
</body>
</html>