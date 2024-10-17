<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container{
display:flex;
flex-direction:column;
align-items: center;
    }
    .dadi{
        display: inline-block;
        background-color:red;
        padding: 20px;
    }
    .dado{
        display: inline-block;
        background-color:aqua;
        padding: 20px;

    }
    .resul{
        display: inline-block;
    }
</style>
<body>
<div class= "container">
<div class="div1">
    <?php     
    $dado = rand(1, 6);
    $dado1 = rand(1, 6);
    $masAlto = max($dado, $dado1); 
    ?>
    <div class="dadi">
        <p>JUGADOR 1</p>
    <?php 
    echo "<img src = '../dado/cara$dado.webp'>";  
    ?> 
    </div>

    <div class="dado"> 
    <p>JUGADOR 2</p>
    <?php 
    
    echo "<img src = '../dado/cara$dado1.webp'>";     
    ?>
    </div>
   
<br>
    <?php
            if ($dado == $dado1){
                
                echo "empate";

            }else if ($dado1 <= $dado){

                echo  "el dado mas alto es el jugador 1";
                
            }else {
                echo  "el dado mas alto es jugador 2";
            }
    ?>
 
    </div>
</body>
</html>