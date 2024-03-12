<?php

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Manejar las respuestas del formulario
    $nombre_piloto = $_POST['nombre_piloto'];

    // Verificar si el nombre del piloto es correcto
    $nombre_correcto = "Marc Marquez"; // Nombre del piloto correcto

    if ($nombre_piloto == $nombre_correcto) {
        // Redirigir a la siguiente página
        header("Location: page4.html");
        exit();
    } else {
        // Redirigir de nuevo a la página del formulario con un mensaje de error
        header("Location: page3.html?error=1");
        exit();
    }
} else {
    // Si el formulario no ha sido enviado, redirigir de nuevo a la página del formulario
    header("Location: page3.html");
    exit();
}
?>
