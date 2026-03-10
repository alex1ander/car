 <header>
    <div class="container">
        <div class="logo-place">
            <object type="image/svg+xml" data="/assets/images/LOGO.svg"></object>
        </div>
        <div class="glass-menu glass-wrapper desktop-only">
            <ul class="header-menu">
                <li><a href="#">НАШИ РАБОТЫ</a></li>
                <li><a href="#">УслуГИ</a></li>
                <li><a href="#">КОНСТРУКТОР АВТО</a></li>
                <li><a href="#">КОНТАКТЫ</a></li>
                <li><a href="#">РАССЧИТАТЬ</a></li>
                
            </ul>
        </div>
        <div class="glass-contact glass-wrapper desktop-only">
            <ul class="header-menu phone-number">
                <li>
                    <a href="#">+1 080 420 24 21</a>
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
    </div>
</header>
<script>
function initBurgerMenu() {
    const burger = document.querySelector('#burger-menu-button');

    if (!burger) return;

    burger.addEventListener('click', () => {
        burger.classList.toggle('active');
    });
    }

initBurgerMenu();
</script>