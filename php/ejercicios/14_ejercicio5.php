<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Definición de variables
$nombre = "Juan";
$apellidos = "Pérez González";
$direccion = "Calle Falsa 123";
$codigo_postal = 28001;
$localidad = "Madrid";
$provincia = "Madrid";

// Mostrar en una tabla
echo "<table border='1'>";
echo "<tr><th>Variable</th><th>Valor</th><th>Tipo</th></tr>";
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