// ===== Настройки =====
const enableAnimation      = false;  // включить анимацию
const enableHoverAnimation = true;  // включить разлёт при ховере
const isStart              = false;  // true = начать со start-позиций, false = начать с end-позиций
const showCoords           = false;

// ===== Конфигурация =====
const CONFIG = {
    block: { width: 2, depth: 2, height: 5 },
    TILT_X: 0,
    material: {
        type: 'MeshPhysicalMaterial',
        metalness: 1,
        roughness: 0.0,
        emmissive: 0x000000,
        clearcoat: 1,
        useTexture: true,
    },
    blocks: [
        { id:'A', start:{x:7,   y:3,  z:7,   rotX:-50, rotY:36,  rotZ:12},  end:{x:1.4,  y:0, z:1.4,  rotX:0, rotY:0, rotZ:0} },
        { id:'B', start:{x:-5,  y:-3, z:1,   rotX:-54, rotY:-33, rotZ:-74}, end:{x:-1.4, y:0, z:1.4,  rotX:0, rotY:0, rotZ:0} },
        { id:'C', start:{x:4,   y:-4, z:3,   rotX:56,  rotY:-43, rotZ:-66}, end:{x:1.4,  y:0, z:-1.4, rotX:0, rotY:0, rotZ:0} },
        { id:'D', start:{x:-4.3,y:5,  z:-1.8,rotX:30,  rotY:78,  rotZ:40},  end:{x:-1.4, y:0, z:-1.4, rotX:0, rotY:0, rotZ:0} },
    ],

    // За сколько секунд блоки проходят полный путь start → end (и обратно с той же скоростью)
    animDuration: 7,

    rotation: {
        rotateDuration:          15,   // секунд на оборот обычно
        hoverRotateDuration:      7,   // секунд на оборот при ховере
        speedTransitionDuration: 0.8,  // за сколько секунд меняется скорость вращения
    },
    camera: {
        fov: 75,
        defaultY: 0,
        defaultZ: 8,
        hoverZ:   8,
        transitionDuration: 0.5,
    },
};

// ===== Canvas и сцена =====
const container = document.querySelector('.hero-container');
const canvas    = document.getElementById('c');
const renderer  = new THREE.WebGLRenderer({ canvas, antialias: true, alpha: true });
renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
renderer.setSize(container.clientWidth, container.clientHeight);

const scene  = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(
  CONFIG.camera.fov,
  container.clientWidth / container.clientHeight,
  0.1,
  400
);
camera.position.set(0, CONFIG.camera.defaultY, CONFIG.camera.defaultZ);

new ResizeObserver(() => {
    camera.aspect = container.clientWidth / container.clientHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(container.clientWidth, container.clientHeight);
}).observe(container);

function deg(d) { return d * Math.PI / 180; }

// ===== Свет =====
const lightGroup = new THREE.Group();
scene.add(lightGroup);
const light = new THREE.DirectionalLight(0xffffff, 0.8);
light.position.set(16, 11, 4);
lightGroup.add(light);
scene.add(new THREE.AmbientLight(0xffffff, 2));

// ===== Группы =====
const outerGroup = new THREE.Group();
outerGroup.rotation.x = deg(CONFIG.TILT_X);
outerGroup.rotation.y = deg(45);
scene.add(outerGroup);
const innerGroup = new THREE.Group();
outerGroup.add(innerGroup);

if (showCoords) innerGroup.add(new THREE.AxesHelper(5));

// ===== Материал =====
function generateGradientTexture(size = 512) {
    const c    = document.createElement('canvas');
    c.width    = c.height = size;
    const ctx  = c.getContext('2d');
    const grad = ctx.createLinearGradient(12, 12, 12, size);
    grad.addColorStop(0, '#63b1ef');
    grad.addColorStop(0.48, '#357ad9');
    grad.addColorStop(1, '#0d2f9a');
    ctx.fillStyle = grad;
    ctx.fillRect(0, 0, size, size);
    return c;
}

function createMaterial() {
    const mc  = CONFIG.material;
    const Cls = {
        MeshStandardMaterial: THREE.MeshStandardMaterial,
        MeshPhysicalMaterial: THREE.MeshPhysicalMaterial,
        MeshPhongMaterial:    THREE.MeshPhongMaterial,
    }[mc.type] || THREE.MeshStandardMaterial;
    const mat = new Cls({ color: mc.color, metalness: 0.8, roughness: 0.4 });
    if (mc.useTexture) mat.map = new THREE.CanvasTexture(generateGradientTexture());
    return mat;
}

// ===== Блоки =====
const PW = CONFIG.block.width, PH = CONFIG.block.height, PD = CONFIG.block.depth;

const panels = CONFIG.blocks.map(cfg => {
    const geo  = new THREE.BoxGeometry(PW, PH, PD);
    const mesh = new THREE.Mesh(geo, createMaterial());
    mesh.add(new THREE.LineSegments(
        new THREE.EdgesGeometry(geo),
        new THREE.LineBasicMaterial({ color: 0xB0B0B0, linewidth: 2 })
    ));
    innerGroup.add(mesh);

    const startPos = new THREE.Vector3(cfg.start.x, cfg.start.y, cfg.start.z);
    const startRot = new THREE.Euler(deg(cfg.start.rotX), deg(cfg.start.rotY), deg(cfg.start.rotZ));
    const endPos   = new THREE.Vector3(cfg.end.x,   cfg.end.y,   cfg.end.z);
    const endRot   = new THREE.Euler(deg(cfg.end.rotX), deg(cfg.end.rotY), deg(cfg.end.rotZ));

    mesh.position.copy(isStart ? startPos : endPos);
    mesh.rotation.copy(isStart ? startRot : endRot);

    return { mesh, startPos, startRot, endPos, endRot };
});

// ===== Helpers =====
function lerp(a, b, t) { return a + (b - a) * t; }

// Применить progress (0 = start, 1 = end) линейно, без easing
function applyProgress(t) {
    panels.forEach(p => {
        p.mesh.position.x = lerp(p.startPos.x, p.endPos.x, t);
        p.mesh.position.y = lerp(p.startPos.y, p.endPos.y, t);
        p.mesh.position.z = lerp(p.startPos.z, p.endPos.z, t);
        p.mesh.rotation.x = lerp(p.startRot.x, p.endRot.x, t);
        p.mesh.rotation.y = lerp(p.startRot.y, p.endRot.y, t);
        p.mesh.rotation.z = lerp(p.startRot.z, p.endRot.z, t);
    });
}

// ===== Запуск =====
if (!enableAnimation) {
    applyProgress(isStart ? 0 : 1);
    renderer.render(scene, camera);
} else {

    let progress = isStart ? 0 : 1;
    const speed  = 1 / CONFIG.animDuration;

    let isHovered       = false;
    let currentRotSpeed = (2 * Math.PI) / CONFIG.rotation.rotateDuration;
    let currentCameraZ  = CONFIG.camera.defaultZ;

    if (enableHoverAnimation) {
        const zone = document.getElementById('hero-right');
        zone.addEventListener('mouseenter', () => { isHovered = true;  });
        zone.addEventListener('mouseleave', () => { isHovered = false; });
        zone.addEventListener('touchstart', () => { isHovered = true;  }, { passive: true });
        zone.addEventListener('touchend',   () => { isHovered = false; }, { passive: true });
    }

    let last = performance.now();

    function animate(now) {
        requestAnimationFrame(animate);
        const dt = Math.min((now - last) / 1000, 0.05);
        last = now;

        // Вращение — плавная смена скорости
        const targetRotSpeed = (2 * Math.PI) / (isHovered
            ? CONFIG.rotation.hoverRotateDuration
            : CONFIG.rotation.rotateDuration);
        currentRotSpeed += (targetRotSpeed - currentRotSpeed)
            * Math.min(dt / CONFIG.rotation.speedTransitionDuration, 1);
        outerGroup.rotation.y += currentRotSpeed * dt;

        // Камера
        const targetZ = isHovered ? CONFIG.camera.hoverZ : CONFIG.camera.defaultZ;
        currentCameraZ += (targetZ - currentCameraZ)
            * Math.min(dt / CONFIG.camera.transitionDuration, 1);
        camera.position.z = currentCameraZ;

        // Прогресс — линейный, одинаковая скорость в обе стороны, без easing
        const direction = (enableHoverAnimation && isHovered) ? -1 : 1;
        progress = Math.max(0, Math.min(1, progress + direction * speed * dt));

        applyProgress(progress);

        renderer.render(scene, camera);
    }

    animate(performance.now());
}