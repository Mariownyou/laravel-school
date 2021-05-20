<nav class="navbar" id="navbar">
    <div class="navbar--grid page-grid" id="navbar-content">
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
