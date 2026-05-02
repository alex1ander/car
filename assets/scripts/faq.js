document.querySelectorAll('.accordion').forEach((accordion) => {
  const intro = accordion.querySelector('.accordion__intro');
  const content = accordion.querySelector('.accordion__content');

  intro.addEventListener('click', () => {
    const isOpen = accordion.classList.contains('accordion__active');

    // закрываем все
    document.querySelectorAll('.accordion').forEach((item) => {
      const c = item.querySelector('.accordion__content');

      c.style.height = c.scrollHeight + 'px'; // фиксируем
      requestAnimationFrame(() => {
        c.style.height = '0px';
      });

      item.classList.remove('accordion__active');
    });

    // открываем если нужно
    if (!isOpen) {
      accordion.classList.add('accordion__active');

      content.style.height = '0px';

      requestAnimationFrame(() => {
        content.style.height = content.scrollHeight + 'px';
      });
    }
  });
});