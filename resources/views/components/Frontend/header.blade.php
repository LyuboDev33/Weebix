<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <!-- Logo Start -->
                <a class="navbar-brand" href="/">
                    <img src="/images/logo.svg" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            {{-- <li class="nav-item submenu">
                                <a class="nav-link" href="./">начало</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="index.html">Начална секция 1</a></li>
                                    <li class="nav-item"><a class="nav-link" href="index-2.html">Начална секция 2</a></li>
                                    <li class="nav-item"><a class="nav-link" href="index-3.html">Начална секция 3</a></li>
                                </ul>
                            </li> --}}
                            <li class="nav-item"><a class="nav-link" href="/">Начало</a></li>

                            <li class="nav-item"><a class="nav-link" href="about">за нас</a></li>
                            <li class="nav-item submenu">
                                <a class="nav-link" href="/services">Услуги</a>
                                <ul>
                                    <li class="nav-item d-md-none"><a class="nav-link" href="/services">Всички услуги</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/service/web-development">Изработка на уебсайт</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/service/digital-marketing">Дигитален маркетинг</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="/service/design">Графичен дизайн</a>
                                    </li>
                                        <li class="nav-item"><a class="nav-link" href="/service/digital-marketing">AI Видеа и Обработка</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/portfolio">портфолио</a></li>
                            <li class="nav-item"><a class="nav-link" href="/contact">Контакти</a></li>

                            <li class="nav-item highlighted-menu">
                                @include('components.Frontend.calendar')
                            </li>
                        </ul>
                    </div>

                    <!-- Let's Start Button Start -->
                    <div class="header-btn d-inline-flex">
                        @include('components.Frontend.calendar')
                    </div>
                    <!-- Let's Start Button End -->
                </div>
                <!-- Main Menu End -->

                <!-- Mobile toggle target (SlickNav injects the burger here at runtime) -->
                <div class="navbar-toggle"></div>

            </div>
        </nav>

        <!-- Mobile menu target (SlickNav injects the drawer here at runtime) -->
        <div class="responsive-menu"></div>

    </div>
</header>
<!-- Header End -->
