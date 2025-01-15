<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1><strong>DADO</strong></h1>
    <p>Actualiza la página para tirar del dado</p>

    <?php 
    $caras = array('uno', 'dos', 'tres', 'cuatro', 'cinco', 'sies');
    $tirada = rand(1,6);
    echo "Has tirado la cara: ". $caras[$tirada - 1];
    echo "<img src='../dado/cara{$tirada}.webp' alt='cara'>";
    echo "<br>El valor obtenido es: ". $tirada;
    ?>
</body>
</html>