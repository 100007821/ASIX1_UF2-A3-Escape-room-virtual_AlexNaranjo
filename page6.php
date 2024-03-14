<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de preguntas</title>
    <link rel="stylesheet" href="css1/stylespag6.css"> <!-- Enlaza tu hoja de estilos CSS -->
</head>
<body>
    <h1>¡Bienvenido al juego de preguntas de MotoGP!</h1>

    <?php
    
    // Array de preguntas y respuestas
    $preguntas = array(
        "¿Qué equipo de MotoGP es este?",
        "¿Qué leyenda de MotoGP es esta persona?",
        "¿Qué circuito es este?",
        "¿En qué país está ubicado el circuito de Le Mans?",
        "¿En qué circuito corrió por última vez Jorge Lorenzo?",
        "¿Quién es el piloto con más títulos mundiales?",
        "¿Quién pilota esta moto?",
        "¿Quién es el actual campeón del mundo?"
    );

    $respuestas = array(
        "Aprilia",
        "Ángel Nieto",
        "Circuito Montmeló",
        "Francia",
        "Valencia",
        "Giacomo Agostini",
        "Jorge Martín",
        "Pecco Bagnaia"
    );

    // Respuestas posibles para cada pregunta
    $respuestas_posibles = array(
        array("Aprilia", "Honda", "Yamaha", "Ducati"),
        array("Marc Márquez", "Jorge Lorenzo", "Giacomo Agostini", "Ángel Nieto"),
        array("Circuito Montmeló", "Circuito de Jerez", "Circuito de Misano", "Circuito de Losail"),
        array("Italia", "España", "Portugal", "Francia"),
        array("Italia", "Qatar", "Malasia", "Valencia"),
        array("Marc Márquez", "Jorge Lorenzo", "Ángel Nieto", "Giacomo Agostini"),
        array("Luca Marini", "Jorge Martín", "Álex Márquez", "Enea Bastianini"),
        array("Pecco Bagnaia", "Jorge Martín", "Marco Bezzecchi", "Pedro Acosta")
    );

    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $aciertos = 0;
        $respuesta_usuario = $_POST['respuesta'];

        // Verificar las respuestas
        for ($i = 0; $i < count($preguntas); $i++) {
            if ($respuesta_usuario[$i] == $respuestas[$i]) {
                $aciertos++;
            }
        }

        // Verificar si todas las respuestas son correctas
        if ($aciertos == count($preguntas)) {
            header("Location: page7.html");
            exit();
        } else {
            echo "<p>Has acertado $aciertos preguntas. Inténtalo de nuevo para responderlas todas correctamente.</p>";
        }
    }
    ?>

    <form method="post">
        <?php
        // Mostrar las preguntas y recoger las respuestas
        for ($i = 0; $i < count($preguntas); $i++) {
            echo "<img src='img2/imagen_$i.jpg' alt='Imagen $i'>"; // Añadiendo la imagen
            echo "<p>{$preguntas[$i]}</p>";
            echo "<select name='respuesta[]' required>";
            foreach ($respuestas_posibles[$i] as $respuesta_posible) {
                echo "<option value='$respuesta_posible'>$respuesta_posible</option>";
            }
            echo "</select><br><br>";
        }
        ?>
        <input type="submit" value="Comprobar respuestas">
    </form>

</body>
</html>
