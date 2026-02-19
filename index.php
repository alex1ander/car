<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>3D Hero Section</title>
<style>
/* Базовые стили */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body, html {
    width: 100%;
    height: 100%;
    font-family: Arial, sans-serif;
}

/* Hero секция с 3D */
.hero {
    width: 100%;
    height: 100vh;
    perspective: 1000px;
    overflow: hidden;
    position: relative;
}

.hero .container {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    transform-style: preserve-3d;
    transition: transform 0.1s ease-out;
}

/* Слои */
.layer {
    display: flex;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    align-items: center;
    justify-content: center;

}

.image-container {
    width: 200%;
    height: 200%;
}
.image-container img {
    width: 100%;
    height: 100%;
    transform: scale(2);
}
.ring {
    width: 400px;
    height: 400px;
    border: 8px solid lime;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    animation: rotate 12s linear infinite;
}
.ring-text{
    position: absolute;
    bottom: 0;
    height: 50px;
    width: 50px;
    background: White;
    border-radius: 50%;
}



@keyframes rotate {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}


.ball {
    width: 250px;
    height: 250px;
    border-radius: 50%;
    background: yellow;
}

.layer-0{
    transform: translateZ(-500px);
}
.layer-1{
    transform: translateZ(50px) rotateX(70deg);
}
.layer-2{
    transform: translateZ(50px);
}
/* Контент ниже Hero */
.section {
    width: 100%;
    padding: 100px 20px;
    text-align: center;
}

.section h2 {
    font-size: 36px;
    margin-bottom: 20px;
}

.section p {
    font-size: 18px;
    max-width: 800px;
    margin: 0 auto;
    color: #555;
}

/* Цветные блоки */
.section.bg-light {
    background: #f5f5f5;
}

.section.bg-dark {
    background: #333;
    color: #fff;
}
</style>
</head>
<body>

<!-- Hero секция с 3D -->
<div class="hero">
    <div class="container">
        <div class="layer layer-0">
            <div class="image-container">
                <img src="https://images.wallpaperscraft.ru/image/single/kosmos_zvezdy_tumannost_157030_3840x2400.jpg" alt="Space">
            </div>
        </div>
        <div class="layer layer-1">
            <div class="ring">
                <div class="ring-text"></div>
            </div>
        </div>
        <div class="layer layer-2">
            <div class="ball"></div>
        </div>
    </div>
</div>

<!-- Простой контент -->
<div class="section bg-light">
    <h2>About Us</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet facilisis urna. Praesent ultrices nulla ac tincidunt cursus.</p>
</div>

<div class="section bg-dark">
    <h2>Our Services</h2>
    <p>We offer high-quality web development services including design, implementation, and support for your projects. Transform your ideas into reality!</p>
</div>

<script>
document.addEventListener('mousemove', (e) => {
    const x = e.clientX - window.innerWidth / 2;
    const y = e.clientY - window.innerHeight / 2;

    const container = document.querySelector('.hero .container');
    container.style.transform = `rotateX(${y * 0.015}deg) rotateY(${x * 0.015}deg)`;
});
</script>

</body>
</html>
