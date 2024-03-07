<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rompecabezas</title>
<style>
    #puzzle_container {
        width: 762px; /* 254 * 3 */
        height: 508px; /* 254 * 2 */
        border: 2px solid black;
        position: relative;
        overflow: hidden;
    }

    .piece {
        width: 254px;
        height: 254px;
        border: 1px solid black;
        position: absolute;
        cursor: pointer;
        user-select: none;
        touch-action: none;
    }
    
    #checkButton {
        margin-top: 20px;
        padding: 10px 20px;
        font-size: 18px;
        cursor: pointer;
    }
</style>
</head>
<body>

<h1>Rompecabezas</h1>

<div id="puzzle_container">
    <div class="piece" id="piece1" style="background-image: url('img1/piece1.jpg'); top: 0px; left: 0px;"></div>
    <div class="piece" id="piece2" style="background-image: url('img1/piece2.jpg'); top: 0px; left: 254px;"></div>
    <div class="piece" id="piece3" style="background-image: url('img1/piece3.jpg'); top: 0px; left: 508px;"></div>
    <div class="piece" id="piece4" style="background-image: url('img1/piece4.jpg'); top: 254px; left: 0px;"></div>
    <div class="piece" id="piece5" style="background-image: url('img1/piece5.jpg'); top: 254px; left: 254px;"></div>
    <div class="piece" id="piece6" style="background-image: url('img1/piece6.jpg'); top: 254px; left: 508px;"></div>
</div>

<button id="checkButton">Verificar</button>

<script>
    let pieces = document.querySelectorAll('.piece');
    let correctPositions = {
        piece6: { top: 0, left: 0 },
        piece5: { top: 0, left: 254 },
        piece4: { top: 0, left: 508 },
        piece1: { top: 254, left: 0 },
        piece2: { top: 254, left: 254 },
        piece3: { top: 254, left: 508 }
    };

    function checkPuzzle() {
        let allInPlace = true;
        pieces.forEach(piece => {
            const id = piece.id;
            const rect = piece.getBoundingClientRect();
            const expectedTop = correctPositions[id].top;
            const expectedLeft = correctPositions[id].left;
            if (Math.abs(rect.top - expectedTop) > 5 || Math.abs(rect.left - expectedLeft) > 5) {
                allInPlace = false;
            }
        });
        if (allInPlace) {
            document.getElementById('checkButton').innerText = "¡Completado! Ir a otra página";
            document.getElementById('checkButton').onclick = function() {
                window.location.href = 'otra_pagina.html'; // Cambia 'otra_pagina.html' a la URL de tu otra página
            };
        }
    }

    pieces.forEach(piece => {
        piece.addEventListener('mousedown', function(e) {
            let offsetX = e.clientX - piece.getBoundingClientRect().left;
            let offsetY = e.clientY - piece.getBoundingClientRect().top;
            piece.style.zIndex = 1000;

            function movePiece(e) {
                let x = e.clientX - offsetX;
                let y = e.clientY - offsetY;

                if (x < 0) x = 0;
                if (y < 0) y = 0;
                if (x + piece.offsetWidth > document.getElementById('puzzle_container').offsetWidth) {
                    x = document.getElementById('puzzle_container').offsetWidth - piece.offsetWidth;
                }
                if (y + piece.offsetHeight > document.getElementById('puzzle_container').offsetHeight) {
                    y = document.getElementById('puzzle_container').offsetHeight - piece.offsetHeight;
                }

                piece.style.left = x + 'px';
                piece.style.top = y + 'px';
            }

            document.addEventListener('mousemove', movePiece);

            document.addEventListener('mouseup', function() {
                piece.style.zIndex = 'auto';
                document.removeEventListener('mousemove', movePiece);
                checkPuzzle();
            });
        });
    });
</script>

</body>
</html>
