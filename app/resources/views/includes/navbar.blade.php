<header class="header">
    <div class="container">
        <div class="row hidden-xs hidden-sm">
            <div class="col15-sm-6">
                <div class="top left special">
                    <div onclick="location.href='/specialview.php'">Версия для
                        <br>слабовидящих</div>
                </div>
                <div class="menu left">
                    <ul>
                        <li data-menu="school-menu"><a href="/about/"><span>Наша школа</span></a></li>
                        <li><a href="{{ route('news') }}"><span>Наши Новости</span></a></li>
                        <!-- <li><a href="/education/"><span>Образование</span></a></li> -->
                        <li class="helper"></li>
                    </ul>
                </div>
            </div>
            <div class="col15-sm-3 logo"><a href="/"><img src="/images/logo.jpg" class="lg" alt=""><img src="/images/logo-sm.png" class="sm" alt=""></a></div>
            <div class="col15-sm-6">
                <div class="top right">
                    <ul>
                        <li class="langs"><span class="curr">RU</span> / <a href="/english/">ENG</a> / <a href="/hebrew/">עברית</a></li>
                        <li>
                            <div class="phone">+7 812 498-01-35</div>
                            <div class="address">пр. Добролюбова, 13</div>
                            <div class="spb">Санкт–Петербург</div>
                        </li>
                        <!-- <li id="search-form" style="display:none;"><input type="text" class="f_orm-control" id="search-input" /></li> -->
                        <!-- <li><img src="/images/search.png" width="20" /></li> -->
                    </ul>
                </div>
                <div class="menu right">
                    <ul>
                        <li data-menu="consumers-menu"><a href="{{ route('info') }}"><span>Родителям и ученикам</span></a></li>
                        <li><a href="/admission/"><span>Пожелания</span></a></li>
                        <li><a href="/contacts/"><span>Контакты</span></a></li>
                        <li class="helper"></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row hidden-md hidden-lg">
            <div class="col15-xs-5 sm-logo">
                <a href="/"><img src="/images/logo.jpg" width="130" alt="" class="img-responsive"></a>
            </div>
            <div class="col15-xs-7 sm-addr">
                <span>+7 812 498-01-35</span><br>
                пр. Добролюбова, 13
            </div>
            <div class="col15-xs-3 sm-btn">
                <button class="button"><i class="fa fa-bars"></i></button>
            </div>
        </div>
        <div class="sm-menu">
            <ul class="">
                <li data-menu="school-menu">Наша школа</li>
                <li><a href="/organization/">Сведения об организации</a></li>
                <li><a href="/education/">Образование</a></li>
                <li><a href="/admission/">Условия приема</a></li>
                <li data-menu="consumers-menu">Родителям и ученикам</li>
                <li><a href="/contacts/">Контакты</a></li>
            </ul>
        </div>
    </div>
    <div class="line" hidden=""></div>
    <div class="container-fluid submenu-line" id="school-menu-sub" style="display:none;">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 col-xs-5 col-xs-offset-6"><ul><li><a href="/about/">О школе</a></li>
                    <li><a href="/news/">Новости</a></li>
                    <li><a href="/advantages/">Преимущества</a></li>
                    <li><a href="/benefits/">Достижения</a></li>
                    <li><a href="/testimonials/">Отзывы</a></li>
                    <li><a href="/teachers/">Наши учителя</a></li>
                    <li><a href="/gallery/">Галерея</a></li>
                    <li><a href="/principal/">Слово директора</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- 	<div class="container-fluid submenu-line" id="admission-menu-sub" style="display:none;">
            <div class="row">
                <div class="col-md-12"></div>
            </div>
        </div> -->
    <div class="container-fluid submenu-line" id="consumers-menu-sub" style="display:none;">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 col-xs-5 col-xs-offset-6"><ul><li><a href="/events/">Мероприятия</a></li>
                    <li><a href="/projects/">Наши проекты</a></li>
                    <li><a href="/olympics/">Олимпиады</a></li>
                    <li><a href="/jewish-links/">Сайты еврейских организаций</a></li>
                    <li><a href="/links/">Полезные ссылки</a></li>
                    <li><a href="/gia/">ЕГЭ/ГИА</a></li>
                    <li><a href="/timetable/">Учебный график</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
