<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoGP Challenge - Página 2</title>
    <link rel="stylesheet" href="css1/stylepag2.css">
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <h1>MotoGP Challenge</h1>
        <p>MotoGP Challenge es un juego de preguntas que desafía el conocimiento de los aficionados al Campeonato del Mundo de Motociclismo. Con cuestiones sobre pilotos legendarios, circuitos emblemáticos, récords y curiosidades, ofrece una experiencia divertida y educativa para los amantes de las carreras de motos. ¡Demuestra tu expertise en MotoGP y compite con amigos para ver quién sabe más!</p>
        <form id="name-form" action="page3.php" method="post">
            <label for="nombre">Ingresa tu nombre:</label>
            <input type="text" id="nombre" name="nombre">
            <input type="submit" value="Continuar">
        </form>

        <div class="progress-bar-container">
            <div class="progress-bar">
                <div class="progress" id="progress"></div>
            </div>
        </div>

        <p class="rules" id="rules" style="display:none;"><strong>Normas del Juego:</strong> Deberas solucionar unos cuantos retos que te propongo a continuacion para poder llegar al final y ser un experto en MotoGP</p>
    </div>

    <script>
        document.getElementById("name-form").addEventListener("submit", function(event) {
            event.preventDefault(); // Evitar que el formulario se envíe normalmente
            startProgress(); // Iniciar la barra de progreso
            showRules(); // Mostrar las normas del juego
        });

        function startProgress() {
            var progressBar = document.getElementById("progress");
            var width = 0;
            var interval = setInterval(frame, 50);

            function frame() {
                if (width >= 100) {
                    clearInterval(interval);
                    window.location.href = 'page3.php'; // Redirige a otra página una vez que la barra de progreso alcanza el 100%
                } else {
                    width++;
                    progressBar.style.width = width + "%";
                }
            }
        }

        function showRules() {
            document.getElementById("rules").style.display = "block"; // Mostrar las normas del juego
        }
        
    </script>
</body>
</html>
