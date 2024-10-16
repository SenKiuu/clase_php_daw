<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><?php 
$resultado = 0.00;
$tipo = gettype($resultado);
echo "Resultado vale: $resultado y es de tipo $tipo<br>";

$resultado = "Cero";
$tipo = gettype($resultado);
echo "y ahora vale: $resultado y es de tipo $tipo<br>"

?>
</body>
</html>