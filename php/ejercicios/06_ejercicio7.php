<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>ejercicio6</title>
        <?php 
        $color = 'rgb('.rand(0,255).', '.rand(0,255).', '.rand(0,255).')'; 
        ?>

        <style>
        body {
            <?php
           print "background-color:$color";
            ?>
        }
        </style>
</head>
<body>
    <h1> cambiar el color del fondo de la web</h1>

    <div>
    <?php 
        $mensaje = "refresca la pagina para sacar un color aleatorio nuevo en el fondo de pantalla";
        echo $mensaje;
        
        echo $color
        ?>  
    </div>
</body>
</html>
  n