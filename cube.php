<!DOCTYPE html>
<html lang="uk">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fintek Blocks</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="hero-container">
    <canvas id="c"></canvas>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.160.0/examples/js/lines/Line2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.160.0/examples/js/lines/LineSegments2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.160.0/examples/js/lines/LineMaterial.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.160.0/examples/js/lines/LineGeometry.js"></script>
<script src="app.js"></script>

</body>
</html>


<style>
  * { margin: 0; padding: 0; box-sizing: border-box; }
html, body {
  width: 100%; height: 100%;
  background: #040c18;
  overflow: hidden;
}
body {
  background: radial-gradient(ellipse 70% 70% at 50% 50%, #0c2550 0%, #050e1c 55%, #020810 100%);
}
.hero-container {
  position: relative;
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
canvas {
  display: block;
  width: 100%;
  height: 100%;
}

</style>

