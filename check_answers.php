<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Array de respuestas correctas
    $respuestas_correctas = array(
        "a", // Respuesta correcta para la pregunta 1
        // Agrega las respuestas correctas para las siguientes preguntas
    );

    // Array de respuestas enviadas por el usuario
    $respuestas_usuario = array(
        $_POST["question1"],
        // Agrega las respuestas del usuario para las siguientes preguntas
    );

    // Verifica las respuestas
    $respuestas_incorrectas = array();
    for ($i = 0; $i < count($respuestas_correctas); $i++) {
        if ($respuestas_usuario[$i] != $respuestas_correctas[$i]) {
            array_push($respuestas_incorrectas, $i + 1);
        }
    }

    // Si todas las respuestas son correctas, redirige a la siguiente página
    if (empty($respuestas_incorrectas)) {
        header("Location: page7.php");
        exit();
    } else {
        // Si hay respuestas incorrectas, muestra un mensaje con las preguntas incorrectas
        echo "Respuestas incorrectas en las siguientes preguntas: " . implode(", ", $respuestas_incorrectas);
    }
}
?>


