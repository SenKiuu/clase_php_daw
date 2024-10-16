<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>ejercicio6</title>
</head>
<body>
    <h1> DADO ALEATORIAMENTEALEATORIO</h1>
    <div>
        <?php 
        $mensaje = "refresca la pagina para sacar u numero aleatorio nuevo";
        ?>
        <div class="dacocubo">
        <?php
            $dado = rand(1, 6);
            
            if ($dado == 1){
                echo '<img src ="dado/cara1.webp">';
            } 
            if ($dado == 2){
                echo '<img src ="dado/cara2.png">';
            } 
            if ($dado == 3){
                echo '<img src ="dado/cara3.webp">';
            } 
            if($dado == 4){
                echo '<img src ="dado/cara4.webp">';
            } 
            if($dado == 5){
                echo '<img src ="dado/cara5.webp">';
            }
            if ($dado == 6){
                echo '<img src ="dado/cara6.webp">';
            }
        ?>
        </div>
        <br>

        <?php
         echo "$mensaje";
         ?>
            <br>
        <?php
        echo  "$dado";
         ?>

    </div>
</body>
</html>