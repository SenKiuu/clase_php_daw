<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos-Personales</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
    // funcion para mostrar los datos del formulario
        function mostrarDatos($postData) {
            // creamos un array con los datos y dentro del array hacemos funciones de flecha
            // para mostrar los datos, ademas el !empty lo ponemos para que si no se rellena 
            // ese formulario con ningun dato, que se muestre el mensaje de No ha escrito ...
            $datos = [
                "Nombre" => !empty($postData['nombre']) ? $postData['nombre'] : '<span style="color: red;">No ha escrito su nombre</span>',
                "Apellidos" => !empty($postData['apellidos']) ? $postData['apellidos'] : '<span style="color: red;">No ha escrito sus Apellidos</span>',
                "Edad" => !empty($postData['edad']) ? $postData['edad'] : '<span style="color: red;">No ha escrito su edad</span>',
                "Peso" => !empty($postData['peso']) ? $postData['peso'] : '<span style="color: red;">No ha escrito su peso</span>',
                "Sexo" => !empty($postData['sexo']) ? $postData['sexo'] : '<span style="color: red;">No ha indicado su sexo</span>',
                "Estado Civil" => !empty($postData['estado_civil']) ? $postData['estado_civil'] : '<span style="color: red;">No ha indicado su estado civil</span>',
                /**
                 *se usa para convertir un array en una cadena de texto, uniendo sus elementos con un separador específico. 
                 *
                 * por ejemplo:
                 * $aficiones = ["Cine", "Deporte", "Música"];
                 * echo implode(", ", $aficiones);
                 * 
                 * la salida sería : Cine, Deporte, Musica
                 */
                "Aficiones" => !empty($postData['aficiones']) ? implode(", ", $postData['aficiones']) : '<span style="color: red;">No ha seleccionado ninguna afición</span>'
            ];

            echo "<h2>Datos Recibidos</h2>";
            // Este bucle foreach recorre el array $datos y muestra cada clave y su valor en un párrafo <p> dentro de la página web.
            foreach ($datos as $clave => $valor) {
                echo "<p><strong>$clave:</strong> $valor</p>";
            }
        }

        // Llamar a la función si la solicitud es POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            mostrarDatos($_POST);
        } else {
            echo "<p>Error: No se enviaron datos.</p>";
        }
    ?>
    <a href="./00_datos1.php"> volver al formulario</a>
</body>
</html>