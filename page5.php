<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Página 5</title>
<link rel="stylesheet" href="css1/stylespage5.css">
</head>
<body>

<h2>¿Cual es el circuito de Jerez de la Frontera?</h2>

<form method="post" action="respuestaspage5.php">
    <input type="hidden" name="correct_image" value="3">
    <label for="image1"><img src="img3/Montmelo.jpeg" alt="Imagen 1" width="200"></label>
    <input type="radio" id="image1" name="selected_image" value="1"><br>
    <label for="image2"><img src="img3/Misano.jpeg" alt="Imagen 2" width="200"></label>
    <input type="radio" id="image2" name="selected_image" value="2"><br>
    <label for="image3"><img src="img3/Jerez.jpeg" alt="Imagen 3" width="200"></label>
    <input type="radio" id="image3" name="selected_image" value="3"><br>
    <label for="image4"><img src="img3/America.jpeg" alt="Imagen 4" width="200"></label>
    <input type="radio" id="image4" name="selected_image" value="4"><br>
    <button type="submit">Comprobar</button>
</form>

</body>
</html>
