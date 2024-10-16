<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $sum1 = "7";
    echo "<br>".gettype($sum1)."\n".$sum1."<br>";
    $sum2 = 5;
    echo "<br>".$sum2."<br>";
    $result = intval($sum1) / $sum2 ;
    echo "<br>".$result."<br>";
    ?>
    <p>**************************************************</p>
    <?php
    $sum1 = "lote: ";
    echo "<br>".$sum1."<br>";
    $sum2 = 724;
    echo "<br>".$sum2."<br>";
    $result = $sum1. $sum2 ;
    echo "<br>".$result;
    ?>
</body>
</html>