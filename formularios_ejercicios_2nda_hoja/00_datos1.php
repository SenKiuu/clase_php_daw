<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos-Personales</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <form action="./00_mostrar1.php" method="POST">
        
        <label><strong>Nombre: </strong></label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label><strong>Apellidos: </strong></label>
        <input type="text" id="apellidos" name="apellidos">
        
        <label><strong>Edad: </strong></label>
        <input type="number" id="edad" name="edad">
        
        <label><strong>Peso: </strong></label>
        <input type="number" id="peso" name="peso">
        
        <label><strong>Sexo: </strong></label>
        <input type="radio" id="hombre" name="sexo" value="hombre">
        <label for="hombre">Hombre</label>
        <input type="radio" id="mujer" name="sexo" value="mujer">
        <label for="mujer">Mujer</label>
      
        <label><strong>Estado Civil: </strong></label>
        <input type="radio" id="soltero" name="estado_civil" value="soltero">
        <label for="soltero">Soltero</label>
        <input type="radio" id="casado" name="estado_civil" value="casado">
        <label for="casado">Casado</label>
        <input type="radio" id="otro" name="estado_civil" value="otro">
        <label for="otro">Otro</label>

        <label><strong>Aficiones: </strong></label>
        <input type="checkbox" id="cine" name="aficiones[]" value="Cine">
        <label for="cine">Cine</label>
        <input type="checkbox" id="deporte" name="aficiones[]" value="Deporte">
        <label for="deporte">Deporte</label>
        <input type="checkbox" id="musica" name="aficiones[]" value="Musica">
        <label for="musica">Música</label>
        <input type="checkbox" id="literatura" name="aficiones[]" value="Literatura">
        <label for="literatura">Literatura</label>
        <input type="checkbox" id="tebeos" name="aficiones[]" value="Tebeos">
        <label for="tebeos">Tebeos</label>
        <input type="checkbox" id="tv" name="aficiones[]" value="Television">
        <label for="tv">Televisión</label>

        <button type="submit">Enviar</button>
        <button type="reset">Borrar</button>
    </form>
</body>
</html>
