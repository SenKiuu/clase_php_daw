<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario - Página 1</title>
</head>
<body>
    <h1>Formulario de recogida de datos</h1>
    <form action="./02_ejercicio2.php" method="get">
        <label>Escriba el Tamaño del CUBO: </label>
        <input type="number" name="tamano">
        <br><br>
        <label>Escriba el grosor del BORDE: </label>
        <input type="number" name="grosor">
        <br><br>
        <button type="submit">Enviar</button>
        <button type="reset">Borrar</button>
    </form>
</body>
</html>