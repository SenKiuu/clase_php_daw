<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>animalitos</title>
</head>
<body>
    <?php 
    //3.1. Con dos matrices de una dimensión:
    //Cree dos matrices, una con los nombres de los ficheros ("ballena.png",
    //"caballito-mar.png", etc.) y otra con los nombres de los animales ("Ballena",
    //"Caballito de mar", etc.), en el mismo orden. Elija un valor del índice al azar para
    //mostrar tanto el dibujo como el texto.
    $animalicos = array('suricato.jpeg', 'maltipoo.jpeg');
    $animalitos = array('suricato', 'maltipoo');
    $aniRandom = rand(1,2);
    echo "has sacado este animalito: ". $animalicos[$aniRandom - 1];
    echo "<img src='./animales/animal{$aniRandom}.jpeg' alt='animales'>";
    echo "<br>este es el animal que has spawneado: ". $animalitos[$aniRandom - 1];
    ?>
</body>
</html>