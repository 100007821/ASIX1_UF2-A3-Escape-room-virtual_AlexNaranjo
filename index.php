
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge de Moto Gp</title>
    <link rel="stylesheet" href="css1/styleindex.css">
    <link rel="shortcut icon" href="img3/logo.png" type="image/x-icon">
    
</head>
<body>
    <div class="container">
        <h1>¿ACEPTAS EL RETO DE MOTO GP?</h1>
        <img src="img3/Portada.jpeg" alt="">
        <div class="button-container">
            <button onclick="startProgress()">Sí</button>
            <button onclick="redirectNo()">No</button>
        </div>
        <div class="progress-bar">
            <div class="progress" id="progress"></div>
        </div>
    </div>
    
    <script>
        function startProgress() {
            var progressBar = document.getElementById("progress");
            var width = 0;
            var interval = setInterval(frame, 50);

            function frame() {
                if (width >= 100) {
                    clearInterval(interval);
                    window.location.href = 'page2.php'; // Redirige a la siguiente página cuando la barra llega al 100%
                } else {
                    width++;
                    progressBar.style.width = width + "%";
                }
            }
        }

        function redirectNo() {
            window.location.href = 'indexfinal.html'; // Redirige a indexfinal.php cuando se hace clic en "No"
        }
    </script>
</body>
</html>
