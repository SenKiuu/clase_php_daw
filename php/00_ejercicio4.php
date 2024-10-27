<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diana</title>
    <style>
   
        .diana-container {
            position: relative;
            width: 220px;
            height: 220px;
            margin: 20px;
        }
        .circulo {
            border-radius: 50%;
            position: absolute;
        }
    </style>
</head>
<body>
    <div class="diana-container">
        <?php
        
        $circulos = 10;

        
        $tamanoMax = 200;
        $tamano = $tamanoMax / $circulos;

        
        for ($i = 0; $i < $circulos; $i++) {
            $tamano_actual = $tamanoMax - ($i * $tamano);
            
            if ($i % 2 == 0) {
                $color = 'red';
            } else {
                $color = 'white';
            }

            echo "<div class='circulo' style='width: {$tamano_actual}px; height: {$tamano_actual}px; background-color: $color; top: 50%; left: 50%; transform: translate(-50%, -50%);'></div>";
        }
        ?>
    </div>
</body>
</html>
