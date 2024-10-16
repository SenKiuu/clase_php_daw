<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> Crea una variable de tipo entero con valor 5 y muéstrala en pantalla indicando su<br>
        tipo. A continuación asigna a la variable el valor 5.5 y vuelve a mostrarla en pantalla<br>
        indicando su tipo, ¿se ha modificado?
    </p>

    <?php 
    is_int($numero = 5);
    $tipo_numero = gettype($numero);
    echo "EL NUMERO ES = $numero y es del TIPO $tipo_numero";
    #asignamos a numero el valor 5.5
    $numero = 5.5;
    $tipo_numero = gettype($numero);  
    echo "EL NUMERO $numero es de tipo $tipo_numero";
    ?>
</body>
</html>