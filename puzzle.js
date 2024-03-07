document.addEventListener('DOMContentLoaded', function() {
    const pieces = document.querySelectorAll('.piece');
    let selectedPiece = null;

    pieces.forEach(piece => {
        piece.addEventListener('mousedown', function(event) {
            selectedPiece = event.target;
            selectedPiece.style.zIndex = 1000;
            selectedPiece.style.cursor = 'grabbing';
        });

        piece.addEventListener('mousemove', function(event) {
            if (selectedPiece) {
                const puzzleContainerRect = document.getElementById('puzzle_container').getBoundingClientRect();
                const newX = event.clientX - puzzleContainerRect.left - selectedPiece.offsetWidth / 2;
                const newY = event.clientY - puzzleContainerRect.top - selectedPiece.offsetHeight / 2;

                selectedPiece.style.left = newX + 'px';
                selectedPiece.style.top = newY + 'px';
            }
        });

        piece.addEventListener('mouseup', function() {
            if (selectedPiece) {
                selectedPiece.style.zIndex = 'auto';
                selectedPiece.style.cursor = 'grab';
                selectedPiece = null;
            }
        });
    });
});
