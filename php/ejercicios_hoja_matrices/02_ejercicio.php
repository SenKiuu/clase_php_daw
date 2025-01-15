<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicios</title>
</head>
<body>
<?php
// Definimos la matriz de animales
$animals = array(
    array('animal' => 'Ballena', 'fichero' => 'animal1.jpeg'),
    array('animal' => 'Caballito de mar', 'fichero' => 'animal2.jpeg'),
);

// Elegimos un índice al azar
$randomIndex = rand(1, count($animals));

// Obtenemos el animal seleccionado
$selectedAnimal = $animals[$randomIndex -1];    

// Mostramos el resultado
echo "<img src='./animales/animal{$randomIndex}.jpeg' alt='animales'>";
echo "<br>este es el animal que has spawneado: ". $animalitos[$aniRandom - 1];
?>

</body>
</html>