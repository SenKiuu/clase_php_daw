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
    </style>
</head>
<body>
    <?php
    echo  "Circulo de color al azar";
    echo "<br>";
    echo "<span class='dot'></span>";
    ?>
</body>
</html>