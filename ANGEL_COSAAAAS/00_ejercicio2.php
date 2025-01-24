<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario - Página 2</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php
    //con el get coges el "name" de la anterior página
    echo "<p>El nombre introducido es: <strong>" . ($_GET['nombre'] !== '' ? $_GET['nombre'] : 'no hay nombre') . "</strong></p>";
    ?>
    <br>
    <a href="./00_ejercicio1.php">Volver a la página anterior</a>
</body>
</html>