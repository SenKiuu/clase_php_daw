<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="./styles.css">
    <title>cubo_tama&ntildeos</title>
    
    <style>
    div{
        width: 50px;
        height: 50px;
        line-height: 50px;
        text-align: center;
        display: inline-block;

        }
        <?php
        $tamanio =  rand(50, 150);
        ?>
        <?php 
        $tamanio2 = rand(50, 150);
        ?>
        .cubo1{
            background-color: red;
            width: <?php echo $tamanio; ?>px;
            height: <?php echo $tamanio; ?>px;
        }.cubo2{
            background-color: green;
            width: <?php echo $tamanio2; ?>px;
            height: <?php echo $tamanio2; ?>px;
        }.cubo3{
            background-color: blue;
            width: <?php echo $tamanio; ?>px;
            height: <?php echo $tamanio; ?>px;
        }
    </style>
</head>
<body>
      <div class="cubo1">rojo</div>

      <div class="cubo2">verde</div>

      <div class="cubo3">azul</div>  
</body>
</html>
