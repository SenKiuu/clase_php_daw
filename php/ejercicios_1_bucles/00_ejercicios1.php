<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            $dado = rand(1, 6);
            $dado1 = rand(1, 6);
            // echo  $dado;
            // echo  $dado1;
            echo "<img src = '../dado/cara$dado.webp'>";
            echo "<img src = '../dado/cara$dado1.webp'>";

            if ($dado == $dado1){
                echo "<br>!! los dados son iguales ¡¡";
                
            }else {
                echo "<br>han sido iguales diferentes refresca y tira de nuevo";
            }

            $masAlto = max($dado, $dado1);
            echo " <br> el valor mas alto es $masAlto";
        ?>
       
</body>
</html>