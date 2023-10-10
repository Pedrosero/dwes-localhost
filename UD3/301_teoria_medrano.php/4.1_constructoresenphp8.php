<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Punto {
            protected float $x;
            protected float $y;
            protected float $z;
        
            public function __construct(
                float $x = 0.0,
                float $y = 0.0,
                float $z = 0.0
            ) {
                $this->x = $x;
                $this->y = $y;
                $this->z = $z;
            }
        }

        class PuntoCons {
            public function __construct(
                protected float $x = 0.0,
                protected float $y = 0.0,
                protected float $z = 0.0,
            ) {}
        }
    ?>
</body>
</html>