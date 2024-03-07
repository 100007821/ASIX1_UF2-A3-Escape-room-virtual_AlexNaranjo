<?php
// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Manejar las respuestas del formulario
    $pregunta1 = $_POST['93'];
    $pregunta2 = $_POST['Ducati'];
    $pregunta3 = $_POST['8'];
    $pregunta4 = $_POST['31'];

    // Redirigir a page.php
    header("Location: page5.html");
    exit();
} else {
    // Si el formulario no ha sido enviado, redirigir de nuevo a form.html
    header("Location: page4.html");
    exit();
}
?>

