<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> Crea una variable de tipo doble con valor 5.5 y muéstrala en pantalla indicando su<br>
        tipo. A continuación conviértela a tipo entero y vuelve a mostrarla en pantalla<br>
        indicando su tipo, ¿se ha modificado?
    </p>

        <?php 
            is_double($numero = 5.5);
            $tipo_numero = gettype($numero);
            echo "EL NUMERO ES DE TIPO = $tipo_numero Y EL NUMERO ES $numero";
            
            is_int($$numero);
            echo "EL NUMERO ES DE TIPO = $tipo_numero y el numero es $numero";
            ?>
</body>
</html>