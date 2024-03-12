<?php
$correct_image = 3; // Imagen correcta (debes cambiar esto según tu lógica)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["selected_image"])) {
        $selected_image = $_POST["selected_image"];
        $correct_image = $_POST["correct_image"];
        
        if ($selected_image == $correct_image) {
            header("Location: page6.php"); // Redirigir a la página 6 si la opción seleccionada es correcta
            exit;
        } else {

            echo "<script>window.location.href = 'page5.html';</script>";
            exit;
        }
    }
}
?>
