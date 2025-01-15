<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio5</title>
</head>
<body>
    <?php 
    $aBinario = [];
    $bBinario = [];
    $cBinario = [];  

    // escribo array
    for ($i = 0; $i < 10; $i ++){
        $aBinario [] = rand(0,1);
        $bBinario [] = rand(0,1);
        $cBinario [] = rand(0,1);
    }
    echo "A : ";
    echo implode(" " , $aBinario);

    echo "<br>B : ";
    echo implode(" " , $bBinario);

    echo "<br>C : ";
    echo implode(" " , $cBinario);

    $dBinario = [];

    // recorro los arrays
    for ($i = 0; $i < 10; $i ++){
    
            $contador0 = ($aBinario[$i] === 0 ? 1 : 0) + ($bBinario[$i] === 0 ? 1 : 0)+ ($cBinario[$i] === 0 ? 1 : 0);
            $contador1 = 3 -$contador0;
            $dBinario [] = $contador0 > $contador1 ? 0 : 1;
    }
    echo "<br>D : ";
    echo implode(" " , $dBinario);




    

    ?>
</body>
</html>