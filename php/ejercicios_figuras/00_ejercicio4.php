<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"> 

    <?php 
    $color = 'rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).')'; 
    ?>
    <?php 
    $color1 = 'rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).')'; 
    ?> <?php 
    $color2 = 'rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).')'; 
    ?>
    <style>
    .dot {
    height: 100px;
    width: 100px;
    
    <?php 
     echo "background-color: $color;";
    ?>
    border-radius: 100%;
    display: inline-block;
    }

    .dot1 {
    height: 100px;
    width: 100px;

    <?php 
     echo "background-color: $color1;";
    ?>
    border-radius: 100%;
    display: inline-block;
    }

    .dot2 {
    height: 100px;
    width: 100px;
    margin-left:48px;
    margin: left 48px;
    <?php 
     echo "background-color: $color2;";
    ?>
    border-radius: 100%;
    display: inline-block;
    }
  

    </style>
</head>
<body>
    <div class='bordecaja'>
    <svg width="85" height="100"><circle cx="50" cy="50" r ="40" fill="blue"> </circle></svg>
    <svg width="110" height="110"><circle cx="50" cy="50" r ="40" fill="green"> </circle></svg>
    <svg width="110" height="110"><circle cx="50" cy="50" r ="40" fill="red"> </circle></svg>
    </div>

    <?php
    echo  "Circulo de color al azar";
    echo "<br>";
    echo "<span class='dot'></span>";
    echo "<span class='dot1'></span>";
    echo "<span class='dot2'></span>";
    ?>
</body>
</html>