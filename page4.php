<?php
// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Manejar las respuestas del formulario
    $numero_del_piloto = $_POST['numero_del_piloto'];
    $moto_del_piloto = $_POST['moto_del_piloto'];
    $mundiales_ganados = $_POST['mundiales_ganados'];
    $edad_del_piloto = $_POST['edad_del_piloto'];

    // Verificar las respuestas
    if ($numero_del_piloto == "93" && $moto_del_piloto == "Ducati" && $mundiales_ganados == "8" && $edad_del_piloto == "31") {
        // Todas las respuestas son correctas, redirigir a la siguiente página
        header("Location: page5.html");
        exit();
    } else {
        // Al menos una respuesta es incorrecta, redirigir de nuevo al formulario con mensaje de error
        header("Location: page4.html?error=1");
        exit();
    }
} else {
    // Si el formulario no ha sido enviado, redirigir de nuevo al formulario
    header("Location: page4.html");
    exit();
}
?>
