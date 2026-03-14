 <header>
    <div class="container">
        <div class="logo-place">
            <object type="image/svg+xml" data="./assets/images/LOGO.svg"></object>
        </div>
        <div class="glass-menu glass-wrapper desktop-only">
            <ul class="header-menu">
                <li><a href="#">НАШИ РАБОТЫ</a></li>
                <li class="has-sub-menu">
                    <a href="#">УслуГИ</a>

                    <ul class="sub-menu-desktop glass-wrapper">
                        <li><a href="#">Бронирование</a></li>
                        <li><a href="#">Оклейка</a></li>
                        <li><a href="#">Детейлинг</a></li>
                    </ul>
                </li>
                <li><a href="#">КОНСТРУКТОР АВТО</a></li>
                <li><a href="#">КОНТАКТЫ</a></li>
                <li><a href="#">РАССЧИТАТЬ</a></li>
                
            </ul>
        </div>

        <div class="glass-contact glass-wrapper desktop-only">
            <ul class="header-menu">
                <li>
                    <a href="#" class="phone-number">+1 080 420 24 21</a>
                </li>
            </ul>
        </div>



        
        <div id="burger-menu-button" class="glass-burger-wrapper glass-wrapper mobile-only">
            <div class="burger-block close">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="burger-block open">
                <span></span>
                <span></span>
            </div>
        </div>
        <nav id="mobile-menu" class="main-nav">
            <div class="container">
            <ul class="mobile-menu glass-wrapper">


                <li class="menu-item">
                    <a href="#our-works" class="menu-link" >
                        <div class="void"></div>
                        Наши работы
                    </a>
                </li>

                <li class="menu-item menu-item-has-children">
                    <div class="menu-link" onclick="toggleMenu(0)">
                        <svg width="24" height="24" class="arrow-left">
                            <use href="#chevron-right"></use>
                        </svg>
                        Услуги
                        <svg width="24" height="24" class="arrow-right">
                            <use href="#chevron-right"></use>
                        </svg>
                    </div>

                    <div class="sub-menu-container">
                        <ul class="sub-menu">
                     
                            <li class="menu-item">
                                <a href="/#" class="sub-menu-link" >
                                    <span class="sub-menu-title">Бронирование</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="/#" class="sub-menu-link" >
                                    <span class="sub-menu-title">Оклейка</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="/#" class="sub-menu-link" >
                                    <span class="sub-menu-title">Детейлинг</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-item">
                    <a href="#advantages" class="menu-link" >
                        <div class="void"></div>
                        КОНСТРУКТОР АВТО
                    </a>
                </li>

                <li class="menu-item">
                    <a href="#price" class="menu-link" >
                        <div class="void"></div>
                        Контакты
                    </a>
                </li>

                <li class="menu-item">
                    <a href="#price" class="menu-link" >
                        <div class="void"></div>
                        Рассчитать
                    </a>
                </li>

            </ul>
            </div>
        </nav>

        <script>
            let opened = null;

            function toggleMenu(i) {
                const items = document.querySelectorAll('.menu-item-has-children');
                
                if (opened === i) {
                    items[i].classList.remove('active');
                    opened = null;
                } else {
                    if (opened !== null) {
                        items[opened].classList.remove('active');
                    }
                    items[i].classList.add('active');
                    opened = i;
                }
            }
        </script>



    </div>
</header>
<script>


function initBurgerMenu() {
    const burger = document.querySelector('#burger-menu-button');
    const mobileMenu = document.querySelector('#mobile-menu');

    if (!burger) return;

    // Открытие/закрытие меню при клике на бургер
    burger.addEventListener('click', (e) => {
        e.stopPropagation(); // чтобы клик на бургер не срабатывал на документ
        burger.classList.toggle('active');
        mobileMenu.classList.toggle('active');
    });

    // Закрытие меню при клике вне него
    document.addEventListener('click', (e) => {
        if (
            mobileMenu.classList.contains('active') &&
            !mobileMenu.contains(e.target) &&
            !burger.contains(e.target)
        ) {
            mobileMenu.classList.remove('active');
            burger.classList.remove('active');
        }
    });
}

initBurgerMenu();
</script>