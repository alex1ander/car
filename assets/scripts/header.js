document.addEventListener('DOMContentLoaded', () => {
    const burger = document.querySelector('.burger');
    const menu = document.querySelector('.mobile-menu');

    if (!burger || !menu) return;

    burger.addEventListener('click', () => {
        burger.classList.toggle('active');
        menu.classList.toggle('active');

        if (menu.classList.contains('active')) {
            menu.style.maxHeight = menu.scrollHeight +  'px';
        } else {
            menu.style.maxHeight = '0px';
        }
    });

    // пересчёт при ресайзе
    window.addEventListener('resize', () => {
        if (menu.classList.contains('active')) {
            menu.style.maxHeight = menu.scrollHeight + 'px';
        }
    });
});