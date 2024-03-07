<?php
$correct_image = 3;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["selected_image"])) {
        $selected_image = $_POST["selected_image"];
        $correct_image = $_POST["correct_image"];
        
        if ($selected_image == $correct_image) {
            header("Location: page6.php");
            exit;
        } else {
            echo "<p>Has fallado, tienes otra oportunidad.</p>";
        }
    }
}
?>
