<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>2D Disintegration</title>
<style>
body {
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    overflow: hidden;
}
canvas {
    cursor: pointer;
}
</style>
</head>
<body>

<canvas id="canvas"></canvas>

<script>
const canvas = document.getElementById("canvas");
const ctx = canvas.getContext("2d");

const img = new Image();
img.crossOrigin = "anonymous";
img.src = "./hero.png";


let particles = [];
let exploded = false;

img.onload = () => {
    canvas.width = img.width;
    canvas.height = img.height;
    ctx.drawImage(img, 0, 0);
};

canvas.addEventListener("click", () => {
    if (!exploded) {
        createParticles();
        exploded = true;
        animate();
    }
});

function createParticles() {
    const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
    const data = imageData.data;

    const density = 4; // меньше = больше частиц

    for (let y = 0; y < canvas.height; y += density) {
        for (let x = 0; x < canvas.width; x += density) {

            const index = (y * canvas.width + x) * 4;

            const r = data[index];
            const g = data[index + 1];
            const b = data[index + 2];
            const a = data[index + 3];

            if (a > 128) {
                particles.push({
                    x: x,
                    y: y,
                    size: density,
                    color: `rgba(${r},${g},${b},${a/255})`,
                    vx: (Math.random() - 0.5) * 6,
                    vy: (Math.random() - 0.5) * 6,
                    gravity: 0.15,
                    alpha: 1
                });
            }
        }
    }
}
function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    particles.forEach(p => {

        p.vy += p.gravity;
        p.x += p.vx;
        p.y += p.vy;
        p.alpha -= 0.01;

        ctx.fillStyle = `rgba(255, 50, 50, ${p.alpha})`;
        
        // Ромб
        ctx.beginPath();
        ctx.moveTo(p.x, p.y - p.size);
        ctx.lineTo(p.x + p.size, p.y);
        ctx.lineTo(p.x, p.y + p.size);
        ctx.lineTo(p.x - p.size, p.y);
        ctx.closePath();
        ctx.fill();
    });

    particles = particles.filter(p => p.alpha > 0);

    if (particles.length > 0) {
        requestAnimationFrame(animate);
    }
}

</script>

</body>
</html>
