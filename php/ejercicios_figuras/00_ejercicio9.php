<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>cubo_tama&ntildeos</title>
</head>
<body>

<?php
    $radio1 = rand(50, 150); 
    $radio2 = rand(50, 150); 
    $radio3 = rand(50, 150); 
?>

<svg width="<?php echo $radio1 * 2?>" height="<?php echo $radio1 * 2?>">
  <circle cx="<?php echo $radio1?>" cy="<?php echo $radio1?>" r="<?php echo $radio1?>" stroke="black" stroke-width="1" fill="red" />
</svg>
<svg width="<?php echo $radio2 * 2?>" height="<?php echo $radio2 * 2?>">
  <circle cx="<?php echo $radio2?>" cy="<?php echo $radio2?>" r="<?php echo $radio2?>" stroke="black" stroke-width="1" fill="green" />
</svg>
<svg width="<?php echo $radio3 * 2?>" height="<?php echo $radio3 * 2?>">
  <circle cx="<?php echo $radio3?>" cy="<?php echo $radio3?>" r="<?php echo $radio3?>" stroke="black" stroke-width="1" fill="blue" />
</svg>

</body>
</html>
