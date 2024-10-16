<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 20%;
        }
    </style>
</head>
<body>
    <div>
        <?php 
        echo "POKER THE GAME: ";
        echo "<br>";
        echo "Actualice la pagina para mostrar de nuevo un trio de cartas";
        echo "<br>";
        $carta = rand(1,10);
        $carta1 = rand(1,10);
        $carta2 = rand(1,10);   
        $carta3 = rand(1,10);
        $carta4 = rand(1,10);
        echo "CARTAS DEL DEALER<BR>";
        echo "---------------------------------------------------<br>";
        echo '  <img src ="cartas_poker/carta'.$carta.'.jpeg">';
        echo '  <img src ="cartas_poker/carta'.$carta1.'.jpeg">';
        echo '  <img src ="cartas_poker/carta'.$carta2.'.jpeg">';
        echo "<br>";
        
        echo "---------------------------------------------------<br>";
        echo "TUS CARTAS <BR>";
        echo '  <img src ="cartas_poker/carta'.$carta3.'.jpeg">';
        echo '  <img src ="cartas_poker/carta'.$carta4.'.jpeg">';
        // echo '<img src ="./carta'$carta'.webp">';
        echo $carta;
        ?>

  
    </div>
</body>
</html>