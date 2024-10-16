<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ejercicio5</title>
</head>
<body>
    <h1> DADO ALEATORIAMENTEALEATORIO</h1>
    <div class="cajita_azul">

        <?php 
        $mensaje = "refresca la pagina para sacar u numero aleatorio nuevo";
        ?>
        <div class="dado">
        <?php
            $dado = rand(1, 6);
            echo  "$dado";
        ?>
        </div>
        <br>

        <?php
         echo "$mensaje";
         ?>

    </div>
</body>
</html>