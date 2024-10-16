<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PI</title>
</head>
<body>
    <P>
        Define PI como constante con 4 decimales y muestra su valor.

        A continuación utiliza la constante para calcular la longitud de una circunferencia y el
        área de un círculo cuyos radios vengan dados por la variable “radio”.
    </P>
    
    <?php
    const PI = 3.1416;
    echo PI; 
    $radio = 5;
    
    echo 'la longitud es: ';

    echo $longitud;

    echo ' tu radio es ';

    $longitud = 2 * PI * $radio;
    
    $area = PI * $radio**2;
    
    
    echo $longitud;
    echo $area;
    echo $radio;

    ?>
</body>
</html>