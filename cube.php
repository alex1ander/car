<!DOCTYPE html>
<html lang="uk">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fintek Blocks</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

  html, body {
    width: 100%; height: 100%;
    overflow: hidden;
    font-family: 'Montserrat', sans-serif;
  }

  body {
    background: #040c18;
    background: radial-gradient(ellipse 70% 70% at 65% 50%, #0c2550 0%, #050e1c 55%, #020810 100%);
    color: #e8f0ff;
  }

  /* ===== HERO WRAPPER ===== */
  .hero {
    display: flex;
    align-items: center;
    width: 100%;
    height: 100%;
    position: relative;
    overflow: hidden;
  }

  /* ===== LEFT: TEXT ===== */
  .hero-left {
    flex: 0 0 44%;
    padding: 0 0 0 6vw;
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 0;
    z-index: 10;
  }

  .hero-tag {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-size: 11px;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: #4d9fff;
    margin-bottom: 22px;
    
  }
  .hero-tag::before {
    content: '';
    display: block;
    width: 24px;
    height: 1px;
    background: #4d9fff;
  }

  h1 {
    font-family: 'Bebas Neue', sans-serif;
    font-size: clamp(34px, 3.8vw, 60px);
    line-height: 1.06;
    letter-spacing: 2px;
    color: #e8f0ff;
    margin-bottom: 18px;
    

  }

  h1 em {
    font-style: normal;
    color: #4d9fff;
  }

  .hero-sub {
    font-size: 13px;
    line-height: 1.85;
    color: #7a9cc8;
    max-width: 360px;
    font-weight: 300;
    margin-bottom: 44px;
    
  }

  .hero-buttons {
    display: flex;
    flex-direction: column;
    gap: 14px;
    
  }

  .btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 15px 32px;
    font-family: 'Montserrat', sans-serif;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    border-radius: 3px;
    text-decoration: none;
    cursor: pointer;
    border: none;
    width: fit-content;
    min-width: 240px;
  }

  .btn-primary {
    background: linear-gradient(135deg, #1a6aff, #0d4fc0);
    color: #fff;
    box-shadow: 0 0 24px rgba(26,106,255,0.3);
  }

  .btn-secondary {
    background: transparent;
    border: 1px solid rgba(74,144,226,0.45);
    color: #7a9cc8;
  }
  .btn-secondary:hover {
    border-color: rgba(74,144,226,0.9);
    color: #e8f0ff;
    background: rgba(26,106,255,0.08);
  }

  /* ===== CANVAS — на всю секцию, под текстом ===== */
  .hero-right {
    /* скрыт из flow, canvas сам позиционируется абсолютно */
    display: none;
  }

  .hero-container {
    position: absolute;
    inset: 0;           /* на всю .hero */
    z-index: 0;
    cursor: crosshair;
    pointer-events: auto;
  }

  canvas {
    display: block;
    width: 100%;
    height: 100%;
  }

  /* текст поверх канваса */
  .hero-left {
    position: relative;
    z-index: 10;
  }

  /* ===== MOBILE ===== */
  @media (max-width: 768px) {
    body { overflow: hidden; }

    .hero {
      flex-direction: column;
      height: 100%;
    }

    .hero-left {
      flex: 0 0 auto;
      padding: 20px 20px 0;
      gap: 0;
    }

    h1 { font-size: clamp(28px, 7vw, 40px); margin-bottom: 12px; }
    .hero-sub { display: none; }
    .hero-tag { margin-bottom: 12px; }

    .hero-buttons {
      flex-direction: row;
      gap: 10px;
      flex-wrap: wrap;
      margin-bottom: 0;
    }
    .btn { min-width: 0; flex: 1; padding: 13px 16px; font-size: 10px; }

    .hero-right {
      flex: 1;
      width: 100%;
      min-height: 0;
    }
  }
</style>
</head>
<body>

<section class="hero">

  <!-- CANVAS — на всю секцию, позади текста -->
  <div class="hero-container" id="hero-container">
    <canvas id="c"></canvas>
  </div>

  <!-- LEFT: текст и кнопки -->
  <div class="hero-left">
    <div class="hero-tag">Інвестиційна платформа</div>
    <h1>FINTEK —<br><em>ІНВЕСТИЦІЇ</em><br>В НЕРУХОМІСТЬ<br>ТА БІЗНЕС-АКТИВИ</h1>
    <p class="hero-sub">Ми з'єднуємо власників активів з інвесторами, які шукають надійні вкладення. Прозорість, експертиза та результат.</p>
    <div class="hero-buttons">
      <a href="#" class="btn btn-primary">Запропонувати актив</a>
      <a href="#" class="btn btn-secondary">Обговорити партнерство</a>
    </div>
  </div>

</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="app.js"></script>

</body>
</html>