<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // for para escribir los dados
    $mensaje1 = "TIRADA DE 6 DADOS <br>";
    $mensaje2 = "<br> DADO A ELIMINAR <br>";
    $mensaje3 = "<br> DADOS RESTANTES <br>";
    $numeroRandomBucle = rand(1, 10);

    echo $mensaje1;

    for ($i = 0; $i < $numeroRandomBucle; $i ++){

        $numeroDados = rand(1, 6);
        $dados [] = $numeroDados;
        echo "<img src = '../dado/cara$numeroDados.webp'>";

    }
    
    // for para sacar un numero aleatorio con el que eliminar un dado 
    echo $mensaje2;

    $dadoEliminador = $dados[array_rand($dados)];

    echo "<br>";
    echo "<img src = '../dado/cara$dadoEliminador.webp'>";
   
    // imprimir todos los dados menos los dados eliminados
    echo $mensaje3;
    $filtro = [];
    //el que tiene el array lo ponemos en el count
    for ($i = 0; $i <count($dados); $i ++){
    //comparadores ternarios
        $dados[$i] != $dadoEliminador ? $filtro[$i] = $dados[$i] : null;
        
    }

    foreach($filtro as $numr){
        echo "<img src = '../dado/cara$numr.webp'>";
    }
    ?>
</body>
</html>