<nav class="navbar" id="navbar">
    <div class="navbar--grid" id="navbar-content">
        <picture class="navbar--logo">
            <img srcset="/images/logo.jpg" width="180px" alt="">
        </picture>
        <div class="navbar--links">
            <div class="links--row row-first">
                <a href="{{ route('news') }}" class="navbar--link {{ request()->is('news*') ? 'navbar--link-active' : '' }}">Наши новости</a>
                <a href="{{ route('about') }}" class="navbar--link {{ request()->is('about') ? 'navbar--link-active' : '' }}">О Школе</a>
                <a href="{{ route('parents') }}" class="navbar--link {{ request()->is('parents') ? 'navbar--link-active' : '' }}">Родителям</a>
                <a href="{{ route('students') }}" class="navbar--link {{ request()->is('students') ? 'navbar--link-active' : '' }}">Ученикам</a>
                <a href="" class="navbar--link">Вопросы и предложения</a>
            </div>
            <div class="links--row row-second">
                <a href="{{ route('news_class', 1) }}" class="navbar--link {{ request()->is('news/1') ? 'navbar--link-active' : '' }}">1 Класс</a>
                <a href="{{ route('news_class', 2) }}" class="navbar--link {{ request()->is('news/2') ? 'navbar--link-active' : '' }}">2 Класс</a>
                <a href="{{ route('news_class', 3) }}" class="navbar--link {{ request()->is('news/3') ? 'navbar--link-active' : '' }}">3 Класс</a>
                <a href="{{ route('news_class', 4) }}" class="navbar--link {{ request()->is('news/4') ? 'navbar--link-active' : '' }}">4 Класс</a>
                <a href="{{ route('news_class', 5) }}" class="navbar--link {{ request()->is('news/5') ? 'navbar--link-active' : '' }}">5 Класс</a>
                <a href="{{ route('news_class', 6) }}" class="navbar--link {{ request()->is('news/6') ? 'navbar--link-active' : '' }}">6 Класс</a>
                <a href="{{ route('news_class', 7) }}" class="navbar--link {{ request()->is('news/7') ? 'navbar--link-active' : '' }}">7 Класс</a>
                <a href="{{ route('news_class', 8) }}" class="navbar--link {{ request()->is('news/8') ? 'navbar--link-active' : '' }}">8 Класс</a>
                <a href="{{ route('news_class', 9) }}" class="navbar--link {{ request()->is('news/9') ? 'navbar--link-active' : '' }}">9 Класс</a>
                <a href="{{ route('news_class', 10) }}" class="navbar--link {{ request()->is('news/10') ? 'navbar--link-active' : '' }}">10 Класс</a>
                <a href="{{ route('news_class', 11) }}" class="navbar--link {{ request()->is('news/11') ? 'navbar--link-active' : '' }}">11 Класс</a>
            </div>
        </div>
        <div class="navbar--info">
            <div class="info--languages">
                <div class="languages--box">
                    <a href="" class="languages--item languages--item-active">
                        ru
                    </a>
                    <div class="languages--divider"></div>
                    <a href="" class="languages--item">
                        eng
                    </a>
                </div>
            </div>
            <div class="info--contacts">
                <div class="contacts--number">
                    +7 812 498-01-35
                </div>
                <div class="contacts--address">
                    пр.добролюбова, 13
                </div>
                <div class="contacts--city">
                    санкт-петербург
                </div>
            </div>
        </div>
    </div>
    <div class="navbar--divider"></div>
</nav>
