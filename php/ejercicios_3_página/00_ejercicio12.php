<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$nombre = " ";
$apellidos = " ";
$direccion = "  ";
$codigo_postal = ;
$localidad = "";
$provincia = "";


echo "<table border='1'>";
echo "<tr><th>Tipo origen</th><th>tipo destino</th><th>¿posible?</th><th>¿en que casos?</th></tr>";
echo "<tr><td>nombre</td><td>$nombre</td><td>" . gettype($nombre) . "</td></tr>";
echo "<tr><td>apellidos</td><td>$apellidos</td><td>" . gettype($apellidos) . "</td></tr>";
echo "<tr><td>dirección</td><td>$direccion</td><td>" . gettype($direccion) . "</td></tr>";
echo "<tr><td>código postal</td><td>$codigo_postal</td><td>" . gettype($codigo_postal) . "</td></tr>";
echo "<tr><td>localidad</td><td>$localidad</td><td>" . gettype($localidad) . "</td></tr>";
echo "<tr><td>provincia</td><td>$provincia</td><td>" . gettype($provincia) . "</td></tr>";
echo "</table>";
?> 
</body>
</html>