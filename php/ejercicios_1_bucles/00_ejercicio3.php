<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .dadi {
            display: inline-block;
            background-color: red;
            padding: 20px;
        }
        .dado {
            display: inline-block;
            background-color: aqua;
            padding: 20px;
        }
        .resul {
            display: inline-block;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="div1">
        <?php     
        $dado = rand(1, 6);
        $dado1 = rand(1, 6);
        $dado3 = rand(1, 6);
        $dado4 = rand(1, 6);
        $masAlto = max($dado, $dado1); 
        $j1suma = $dado + $dado1; 
        $j2suma = $dado3 + $dado4;
        ?>
<!-- ------------------------------- jugador 1 --------------------------- -->
        <div class="dadi">
            <p>JUGADOR 1</p>
            <?php 
            echo "<img src='../dado/cara$dado.webp'>";  
            echo "<img src='../dado/cara$dado1.webp'>";  
            ?> 
        </div>
        
   
<!-- ------------------------------- jugador 2 --------------------------- -->

        <div class="dado"> 
            <p>JUGADOR 2</p>
            <?php 
            echo "<img src='../dado/cara$dado3.webp'>";  
            echo "<img src='../dado/cara$dado4.webp'>";  
            ?>
        </div>

    </div>
<!-- ------------------------------- operación --------------------------- -->
        <div>
        <?php 
        if ($j1suma == $j2suma){
            echo "hay empate";
        }else if($j1suma > $j1suma){
            echo "JUGADOR 1 GANA";
        }else{
            echo "JUGADOR 2 GANA";
        }
        
        ?>
        </div>
</div>
</body>
</html>
