<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $radio = rand(50, 150);
    ?>
     
     <svg width="100000" height="100000">
    <circle cx="150" cy="200" r="<?php echo $radio?>" stroke="black" stroke-width="1" fill="red" />
    <circle cx="<?php echo 150 + $radio * 2 ?>" cy="200" r="<?php echo $radio?>" stroke="black" stroke-width="1" fill="blue" />
    <circle cx="<?php echo 150 + $radio * 4 ?>" cy="200" r="<?php echo $radio?>" stroke="black" stroke-width="1" fill="green" />
    <circle cx="<?php echo 150 + $radio * 6 ?>" cy="200" r="<?php echo $radio?>" stroke="black" stroke-width="1" fill="yellow" />
  </svg>
</body>
</html>
