<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario - Página 1</title>
</head>
<body>
    <h1>Formulario de recogida de datos</h1>
    <form action="./03_ejercicio2.php" method="get">
        <label>cereza </label>
        <input type="radio" name="fruta" value="cereza">
        <br><br>
        <label>Fresa </label>
        <input type="radio" name="fruta" value="fresa">
        <br><br>
        <label>limon </label>
        <input type="radio" name="fruta" value="limon">
        <br><br>
        <label>manzana </label>
        <input type="radio" name="fruta" value="manzana">
        <br><br>
        <label>naranja </label>
        <input type="radio" name="fruta" value="naranja">
        <br><br>
        <label>pera </label>
        <input type="radio" name="fruta" value="pera">
        <br><br>
        <button type="submit">Enviar</button>
        <button type="reset">Borrar</button>
    </form>
</body>
</html>