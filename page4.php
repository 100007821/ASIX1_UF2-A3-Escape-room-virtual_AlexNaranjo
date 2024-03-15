<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoGP Challenge - Página 4</title>
    <link rel="stylesheet" href="css1/styles.css">
</head>
<body>
    <div class="container">
        <h1>SEGUNDO RETO</h1>
        <p>Tras adivinar el primer reto te propongo unas preguntas sobre el piloto que has acertado anteriormente</p>
        <img src="img3/marc-marquez-gresini.jpeg" alt="" width="80px">
        <form action="respuestaspage4.php" method="post">
            <label for="numero_del_piloto">¿Cuál es el número del piloto?</label><br>
            <input type="text" id="numero_del_piloto" name="numero_del_piloto" required><br>

            <label for="moto_del_piloto">¿Cuál es la moto del piloto?</label><br>
            <input type="text" id="moto_del_piloto" name="moto_del_piloto" required><br>

            <label for="mundiales_ganados">¿Cuántos mundiales ha ganado el piloto?</label><br>
            <input type="text" id="mundiales_ganados" name="mundiales_ganados" required><br>

            <label for="edad_del_piloto">¿Cuál es la edad del piloto?</label><br>
            <input type="text" id="edad_del_piloto" name="edad_del_piloto" required><br>

            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>


