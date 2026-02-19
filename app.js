// ===== Настройки анимации =====
const enableAnimation = true;
const isLooping      = true;
const isStart        = true;
const showCoords     = false;

// ===== Конфигурация =====
const CONFIG = {
  block: {
    width: 1.6,
    depth: 1.6,
    height: 5,
  },
  assembleDuration: 7,
  holdDuration: 5,
  disassembleDuration: 7,
  TILT_X: -15,
  space: 1.2,
  material: {
    color: 0xffffff,
    type: 'MeshPhysicalMaterial',
    useTexture: true,
  },
  blocks: [
    { id:'A', start:{x:8,y:4,z:8,rotX:-50,rotY:36,rotZ:12}, end:{x:1.2,y:0,z:1.2,rotX:0,rotY:0,rotZ:0} },
    { id:'B', start:{x:-6,y:-3,z:1,rotX:-54,rotY:-33,rotZ:-74}, end:{x:-1.2,y:0,z:1.2,rotX:0,rotY:0,rotZ:0} },
    { id:'C', start:{x:5,y:-5,z:4,rotX:56,rotY:-43,rotZ:-66}, end:{x:1.2,y:0,z:-1.2,rotX:0,rotY:0,rotZ:0} },
    { id:'D', start:{x:-5,y:6,z:-1.8,rotX:40,rotY:78,rotZ:30}, end:{x:-1.2,y:0,z:-1.2,rotX:0,rotY:0,rotZ:0} },
  ],
  rotation: {
    baseSpeed: (2 * Math.PI) / 15,
    hoverSpeed: (2 * Math.PI) / 15,
    smoothing: 3.0,
  }
};

// ===== Canvas и сцена =====
const container = document.querySelector('.hero-container');
const canvas = document.getElementById('c');
const renderer = new THREE.WebGLRenderer({ canvas, antialias:true, alpha:true });
renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
renderer.setSize(container.clientWidth, container.clientHeight);

const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(42, container.clientWidth / container.clientHeight, 0.1, 300);
camera.position.set(0, 0, 15);

new ResizeObserver(() => {
  camera.aspect = container.clientWidth / container.clientHeight;
  camera.updateProjectionMatrix();
  renderer.setSize(container.clientWidth, container.clientHeight);
}).observe(container);

function deg(d) { return d * Math.PI / 180; }

// ===== Группа света — не вращается, живёт в scene =====
const lightGroup = new THREE.Group();
scene.add(lightGroup);

const light = new THREE.DirectionalLight(0xffffff, 1.2);
light.position.set(16, 16, 4); // справа, чуть сверху, спереди
lightGroup.add(light);

scene.add(new THREE.AmbientLight(0xffffff, 1.5));

// ===== Группы объектов — вращаются =====
const outerGroup = new THREE.Group();
outerGroup.rotation.x = deg(CONFIG.TILT_X);
scene.add(outerGroup);

const innerGroup = new THREE.Group();


// outerGroup.position.x = 3; // сдвиг всех блоков вправо
outerGroup.rotation.y = deg(45);



outerGroup.add(innerGroup);

// ===== Оси родителя innerGroup =====
if (showCoords) {
  const axesHelper = new THREE.AxesHelper(5);
  innerGroup.add(axesHelper);
}

if (showCoords) {
  const axesLight = new THREE.AxesHelper(5);
  lightGroup.add(axesLight);
}

// ===== Материал =====
function generateGradientTexture(colorTop='#5482cc', colorBottom='#266AD5', size=512) {
  const c = document.createElement('canvas');
  c.width = c.height = size;
  const ctx = c.getContext('2d');
  const grad = ctx.createLinearGradient(0, 0, 0, size);
  grad.addColorStop(0, colorTop);
  grad.addColorStop(0.7, colorBottom);
  ctx.fillStyle = grad;
  ctx.fillRect(0, 0, size, size);
  return c;
}

function createMaterial() {
  const matConfig = CONFIG.material;
  const MaterialClass = {
    'MeshStandardMaterial': THREE.MeshStandardMaterial,
    'MeshPhysicalMaterial': THREE.MeshPhysicalMaterial,
    'MeshPhongMaterial': THREE.MeshPhongMaterial,
  }[matConfig.type] || THREE.MeshStandardMaterial;

  const mat = new MaterialClass({ color: matConfig.color, metalness: 0.8, roughness: 0.4 });
  if (matConfig.useTexture) {
    mat.map = new THREE.CanvasTexture(generateGradientTexture());
  }
  return mat;
}

// ===== Создание блоков =====
const PW = CONFIG.block.width, PH = CONFIG.block.height, PD = CONFIG.block.depth;

const panels = CONFIG.blocks.map(cfg => {
  const geo = new THREE.BoxGeometry(PW, PH, PD);
  const mat = createMaterial();
  const mesh = new THREE.Mesh(geo, mat);

  const edgeMat = new THREE.LineBasicMaterial({ color: 0xffffff, linewidth: 2 });
  const edges = new THREE.LineSegments(new THREE.EdgesGeometry(geo), edgeMat);
  mesh.add(edges);

  innerGroup.add(mesh);

  if (isStart) {
    mesh.position.set(cfg.start.x, cfg.start.y, cfg.start.z);
    mesh.rotation.set(deg(cfg.start.rotX), deg(cfg.start.rotY), deg(cfg.start.rotZ));
  } else {
    mesh.position.set(cfg.end.x, cfg.end.y, cfg.end.z);
    mesh.rotation.set(deg(cfg.end.rotX), deg(cfg.end.rotY), deg(cfg.end.rotZ));
  }

  return {
    id: cfg.id,
    mesh,
    startPos: new THREE.Vector3(cfg.start.x, cfg.start.y, cfg.start.z),
    startRot: new THREE.Euler(deg(cfg.start.rotX), deg(cfg.start.rotY), deg(cfg.start.rotZ)),
    endPos: new THREE.Vector3(cfg.end.x, cfg.end.y, cfg.end.z),
    endRot: new THREE.Euler(deg(cfg.end.rotX), deg(cfg.end.rotY), deg(cfg.end.rotZ)),
  };
});

// ===== Helpers =====
function lerp(a, b, t) { return a + (b - a) * t; }
function lerpV(p, a, b, t) { p.x = lerp(a.x, b.x, t); p.y = lerp(a.y, b.y, t); p.z = lerp(a.z, b.z, t); }
function lerpR(r, a, b, t) { r.x = lerp(a.x, b.x, t); r.y = lerp(a.y, b.y, t); r.z = lerp(a.z, b.z, t); }
function easeOut(t) { return 1 - Math.pow(1 - t, 3); }
function easeIn(t) { return t * t * t; }

// ===== Если анимация выключена =====
if (!enableAnimation) {
  renderer.render(scene, camera);
} else {

  let currentRotSpeed = CONFIG.rotation.baseSpeed;
  let isHovered = false;

  canvas.addEventListener('mouseenter', () => { isHovered = true; });
  canvas.addEventListener('mouseleave', () => { isHovered = false; });
  canvas.addEventListener('touchstart', () => { isHovered = true; }, { passive: true });
  canvas.addEventListener('touchend',   () => { isHovered = false; }, { passive: true });

  const PHASE = { ASSEMBLE: 0, HOLD: 1, DISASSEMBLE: 2, PAUSE: 3 };
  let phase     = isStart ? PHASE.ASSEMBLE : PHASE.HOLD;
  let phaseTime = 0;
  let last      = performance.now();
  let animationDone = false;

  function animate(now) {
    if (animationDone) return;
    requestAnimationFrame(animate);

    const dt = Math.min((now - last) / 1000, 0.05);
    last = now;
    phaseTime += dt;

    const targetSpeed = isHovered ? CONFIG.rotation.hoverSpeed : CONFIG.rotation.baseSpeed;
    currentRotSpeed += (targetSpeed - currentRotSpeed) * dt * CONFIG.rotation.smoothing;
    outerGroup.rotation.y += currentRotSpeed * dt;

    if (phase === PHASE.ASSEMBLE) {
      const t = easeOut(Math.min(phaseTime / CONFIG.assembleDuration, 1));
      panels.forEach(p => {
        lerpV(p.mesh.position, p.startPos, p.endPos, t);
        lerpR(p.mesh.rotation, p.startRot, p.endRot, t);
      });
      if (phaseTime >= CONFIG.assembleDuration) {
        phase = PHASE.HOLD;
        phaseTime = 0;
      }

    } else if (phase === PHASE.HOLD) {
      if (phaseTime >= CONFIG.holdDuration) {
        if (!isLooping) {
          animationDone = true;
          renderer.render(scene, camera);
          return;
        }
        phase = PHASE.DISASSEMBLE;
        phaseTime = 0;
      }

    } else if (phase === PHASE.DISASSEMBLE) {
      const t = easeIn(Math.min(phaseTime / CONFIG.disassembleDuration, 1));
      panels.forEach(p => {
        lerpV(p.mesh.position, p.endPos, p.startPos, t);
        lerpR(p.mesh.rotation, p.endRot, p.startRot, t);
      });
      if (phaseTime >= CONFIG.disassembleDuration) {
        phase = PHASE.PAUSE;
        phaseTime = 0;
        panels.forEach(p => {
          p.mesh.position.copy(p.startPos);
          p.mesh.rotation.copy(p.startRot);
        });
      }

    } else if (phase === PHASE.PAUSE) {
      if (phaseTime >= 0.8) {
        phase = PHASE.ASSEMBLE;
        phaseTime = 0;
      }
    }

    renderer.render(scene, camera);
  }

  animate(performance.now());
}