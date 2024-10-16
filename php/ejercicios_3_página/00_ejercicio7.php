<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>
    Escribe un programa que permita obtener el siguiente resultado utilizando el<br>
    operador necesario en cada caso:<br>
    valor1: 8<br>
    valor2: 3<br>
    suma: 11<br>
    resta: 5<br>
    producto: 24<br>
    cociente: 2,66666667
    <br>    resto de la división: 2
    <br>incremento de valor1: 9
    <br>decremento de valor2: 2
    </p> 

    <?php
    $V1 = 8;
    
    $V2 = 3;

    $suma = $V1 + $V2;
    echo "suma = ".$suma. "\n";
    
    $resta = $V1 - $V2;
    echo "resta = ".$resta ."\n";

    $producto = $v1 * $V2;
    echo "multiplicación = ". $producto ."\n";

    $cociente = $V1 / $V2;
    echo "cociente = ". $cociente ."\n";

    $resto = $V1 % $V2;
    echo "resto division = ".$resto . "\n";

    $incremento = ++$V1;
    echo "incremento = " . $incremento. "\n";

    $decremento = --$V2;
    echo "decrechendo " .$decremento . "\n";
    ?>
    
</body>
</html>