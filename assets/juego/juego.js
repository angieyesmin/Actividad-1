const player = document.getElementById('player');
let playerX = 0;
let playerY = 0;

function movimientoJugador(x, y) {
    playerX += x;
    playerY += y;
    player.style.left = playerX + 'px';
    player.style.top = playerY + 'px';
}

document.addEventListener('keydown', function(event) {
    switch(event.key) {
        case 'ArrowUp':
        case 'w':
            movimientoJugador(0, -10);
            break;
        case 'ArrowDown':
        case 's':
            movimientoJugador(0, 10);
            break;
        case 'ArrowLeft':
        case 'a':
            movimientoJugador(-10, 0);
            break;
        case 'ArrowRight':
        case 'd':
            movimientoJugador(10, 0);
            break;
    }
});

