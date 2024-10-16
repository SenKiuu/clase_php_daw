<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $resultado = 0;
    $tipo = gettype($resultado);
    echo "Resultado vale: $resultado y es de tipo $tipo<br>";

    $resultado2 = (double)$resultado;
    $tipo = gettype($resultado2);
    echo "y Resultado2: $resultado2 y es de tipo $tipo<br>";
    
    $tipo = gettype($resultado);
    echo "mientras Resultado vale: $resultado y es de tipo $tipo<br>";
    ?>
</body>
</html>