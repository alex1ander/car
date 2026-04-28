const el  = document.getElementById('preloader');
const pct = document.getElementById('pre-pct');

let cur = 0;
let target = 0;
let loaded = false;
let running = true;

const clamp = (n, min, max) => Math.min(max, Math.max(min, n));

// попытка измерять загрузку ресурсов
const getProgress = () => {
  const entries = performance.getEntriesByType('resource');
  if (!entries.length) return 0;

  const done = entries.filter(e => e.responseEnd > 0).length;
  return (done / entries.length) * 100;
};

const tick = () => {
  if (!running) return;

  if (!loaded) {
    target = clamp(getProgress(), 0, 95);
  } else {
    target = 100;
  }

  cur += (target - cur) * 0.06;

  pct.textContent = Math.round(cur) + '%';

  // 🔥 стоп логики
  if (loaded && cur >= 99.9) {
    cur = 100;
    pct.textContent = '100%';

    running = false; // ОСТАНОВКА
    el.classList.add('loaded');

    // разблокируем скролл
    document.body.style.overflow = '';

    return;
  }

  requestAnimationFrame(tick);
};

tick();

const finish = async () => {
  loaded = true;

  // маленькая пауза для "премиум ощущения"
  await new Promise(r => setTimeout(r, 500));

  // доводим до 100 плавно
  const interval = setInterval(() => {
    if (cur >= 99.5) {
      clearInterval(interval);
    }
  }, 30);
};

window.addEventListener('load', finish);