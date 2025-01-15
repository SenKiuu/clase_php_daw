<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // como puedo generar en un array 8 numneros random entre 0 y 1

    $binario = [];

    for ($i = 0; $i < 8; $i ++){
        $binario [] = rand(0, 1);
    }

    echo "NUMERO BINARIO --->  | ";

   echo implode("",$binario);
    
   $gray = [];

   $binario[0] == $gray[0];

   for($i=1; $i<8; $i++){

if($binario[$i] == $binario[$i -1]){

    $gray[$i] = 0;
}else{

$gray[$i] = 1;

}
    
   }
           
   echo "<br> NUMERO    GRAY --->  | ";

   echo implode("",$gray);


    ?>
</body>
</html>