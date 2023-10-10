<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class MayorMenor {
        private int $mayor;
        private int $menor;
    
        public function setMayor(int $may) {
            $this->mayor = $may;
        }
    
        public function setMenor(int $men) {
            $this->menor = $men;
        }
    
        public function getMayor() : int {
            return $this->mayor;
        }
    
        public function getMenor() : int {
            return $this->menor;
        }
    }   
    ?>
</body>
</html>