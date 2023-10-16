<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $p1 = new Libro();
        $p1->setNombre("La casa de Bernarda Alba");
        $p1->setAutor("Federico García Lorca");
        echo $p1"</br>";
        
        // Method chaining
        $p2 = new Libro();
        $p2->setNombre("Niebla")->setAutor("Miguel de Unamuno");
        echo $p2"</br>";

        class Libro {
            private string $nombre;
            private string $autor;
        
            public function getNombre() : string {
                return $this->nombre;
            }
            public function setNombre(string $nombre) : Libro { 
                $this->nombre = $nombre;
                return $this;
            }
        
            public function getAutor() : string {
                return $this->autor;
            }
            public function setAutor(string $autor) : Libro {
                $this->autor = $autor;
                return $this;
            }
        
            public function __toString() : string {
                return $this->nombre." de ".$this->autor;
            }
        }


        //ALGUNOS MÉTODOS MÁGICOS
        echo "<h2>Métodos mágicos</h2>";
        echo"<h3>To String: </br></h3>
    ?>
</body>
</html>