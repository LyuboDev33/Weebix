<x-layouts.front-end>

    @section('SEO')
        <title>Изработка на уеб сайтове | Weebix - Професионална уеб разработка</title>

        <meta name="description"
            content="Професионална изработка на уеб сайтове от Weebix - модерен дизайн, бърза скорост, SEO оптимизация и удобен админ панел. Фирмени сайтове, онлайн магазини и индивидуални решения.">

        <meta name="keywords"
            content="изработка на сайт, уеб разработка, изработка на уебсайт, фирмен сайт, онлайн магазин, уеб дизайн, SEO оптимизация, Laravel, WordPress, responsive дизайн, Weebix, България">

        <meta name="author" content="Weebix">
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="{{ url()->current() }}">

        {{-- Open Graph --}}
        <meta property="og:type" content="website">
        <meta property="og:locale" content="bg_BG">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="Изработка на уеб сайтове | Weebix - Професионална уеб разработка">

        <meta property="og:description"
            content="Изграждаме модерни, бързи и SEO-ориентирани уеб сайтове, които превръщат посетителите в клиенти. Индивидуален дизайн, чист код и реални бизнес резултати.">

        <meta property="og:image" content="{{ asset('/images/og-cover.jpg') }}">
        <meta property="og:site_name" content="Weebix">

        {{-- Twitter --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Изработка на уеб сайтове | Weebix">

        <meta name="twitter:description"
            content="Професионална уеб разработка - фирмени сайтове, онлайн магазини и индивидуални решения с фокус върху дизайн, скорост и SEO.">

        <meta name="twitter:image" content="{{ asset('images/og-cover.jpg') }}">
    @endsection

    {{-- Service Single Section Start --}}
    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    {{-- Service Content Start --}}
                    <div class="service-single-content">

                        {{-- Service Featured Image Start --}}
                        <div class="service-featured-image">
                            <figure class="image-anime">
                                <img class="web-development" src="/images/services/service-feature-img.jpg"
                                    alt="Изработка на уеб сайтове от Weebix">
                            </figure>
                        </div>
                        {{-- Service Featured Image End --}}

                        {{-- Service Entry Content Start --}}
                        <div class="service-entry">


                            <h3>Какво целим със създаването на вашия уебсайт?</h3>

                            <p class="mb-2 mt-2">
                                За нас добрият уебсайт не е просто красива визия, а инструмент, който работи
                                за вашия бизнес. Още в началото определяме каква ще бъде основната цел на сайта
                                – <strong>повече запитвания, продажби, резервации или изграждане на доверие към
                                    бранда</strong>.

                            </p>
                            <p>
                                След това изграждаме структура и функционалности, които насочват посетителите
                                към точното действие.
                            </p>

                            <p>
                                Стремим се да създаваме уебсайтове, които могат лесно да се надграждат
                                във времето и да бъдат максимално лесни за самостоятелно управление.
                                Така бизнесът ви не зависи постоянно от програмист за всяка малка промяна.
                            </p>

                            <h3>Какво включва нашата услуга и какъв е процеса на работа?</h3>

                            <div class="mt-2">
                                <p>От първоначалната концепция до финалното пускане в експлоатация - поемаме целия
                                    процес.
                                    Това включва създаване на интуитивен дизайн като ще предложим множество опции на базата на вашите изисквания.</p>
                                <p>Разработване на необходимите функционалности.</p>
                                <p>Интеграция с външни системи (CRM, ERP, платежни системи), миграция на съдържание, SEO
                                    оптимизация на сайта. Създаване на администраторски панел и обучение за работа
                                    с него.</p>
                                <p>След стартиране на проекта, остава с вас и нашата поддръжка, за да сме
                                    сигурни, че сайтът работи стабилно и без прекъсвания.</p>
                            </div>
                        </div>

                        <hr>
                        <div class="row section-row align-items-center">
                            <div class="col-12 text-center">
                                <div class="section-title">
                                    <h2 class="text-anime-style-3 text-center">Как протича процесът на работа?
                                    </h2>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <!-- STEP 1 -->
                            <div class="col-lg-12 col-md-12 mb-4">
                                <div class="why-choose-us-item shadow">
                                    <div
                                        class="d-flex flex-column flex-md-row text-md-start text-center align-items-start gap-3">

                                        <div class="icon-box">
                                            <img src="/images/icon-whyus-1.svg" alt="Стъпка 1">
                                        </div>

                                        <div>
                                            <h3><span class="text-theme">1.</span> Консултация</h3>
                                            <p>
                                                Процесът започва със записване на среща чрез нашия календар.
                                                По време на консултацията обсъждаме вашите цели, идеи и
                                                изисквания,
                                                както и възможните решения спрямо вашия бизнес.
                                            </p>
                                            <p>
                                                Ще получите ясна представа какво ви е необходимо и как да
                                                избегнете
                                                често срещаните грешки още в началото.
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- STEP 2 -->
                            <div class="col-lg-12 col-md-12 mb-4">
                                <div class="why-choose-us-item shadow">
                                    <div
                                        class="d-flex flex-column flex-md-row text-md-start text-center align-items-start gap-3">

                                        <div class="icon-box">
                                            <img src="/images/icon-whyus-2.svg" alt="Старт на проекта">
                                        </div>

                                        <div>
                                            <h3><span class="text-theme">2.</span> Старт на проекта</h3>
                                            <p>
                                                След като уточним всички детайли, изготвяме ясен план за работа,
                                                срокове и обхват на проекта. <br> Подписваме договор и започваме
                                                реалната работа.
                                            </p>
                                            <p>
                                                Това гарантира прозрачност и сигурност за двете страни още от
                                                самото начало.
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- STEP 3 -->
                            <div class="col-lg-12 col-md-12 mb-4">
                                <div class="why-choose-us-item shadow">
                                    <div
                                        class="d-flex flex-column flex-md-row text-md-start text-center align-items-start gap-3">

                                        <div class="icon-box">
                                            <img src="/images/icon-whyus-4.svg" alt="Диизайн и разработка">
                                        </div>

                                        <div>
                                            <h3><span class="text-theme">3.</span> Дизайн и разработка</h3>
                                            <p>
                                                Започваме с изграждане на визуалната концепция на сайта,
                                                съобразена с вашия бранд и целева аудитория.
                                            </p>
                                            <p>
                                                След одобрение преминаваме към разработка, където изграждаме
                                                всички
                                                функционалности, интеграции и административна част.
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- STEP 4 -->
                            <div class="col-lg-12 col-md-12 mb-4">
                                <div class="why-choose-us-item shadow">
                                    <div
                                        class="d-flex flex-column flex-md-row text-md-start text-center align-items-start gap-3">

                                        <div class="icon-box">
                                            <img src="/images/task-completed-96.png" alt="Резултат">
                                        </div>

                                        <div>
                                            <h3><span class="text-theme">4.</span> Завършване и резултат</h3>
                                            <p>
                                                По време на целия процес поддържаме активна комуникация и ви
                                                информираме
                                                за напредъка на проекта.
                                            </p>
                                            <p>
                                                В крайния етап получавате напълно завършен, тестван и работещ
                                                уебсайт,
                                                готов да привлича клиенти и да развива бизнеса ви.
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    {{-- Service Content End --}}
                </div>

                <div class="col-lg-4">
                    <div class="service-sidebar">

                        <!-- Service List Box Start -->
                        <div class="services-list-box">

                            <div class="text-center">
                                <img class="mb-2" src="{{ asset('images/icon-service-list.svg') }}"
                                    alt="Уеб разработка">
                            </div>

                            <h3 class="text-center">уеб разработка</h3>

                            <ul class="service-trust-list">
                                <li>Ясни условия и лесна комуникация</li>
                                <li>Сайтове, които могат лесно да се надграждат</li>
                                <li>Удобен админ панел за лесно управление</li>
                                <li>Бързо зареждане и мобилна оптимизация</li>
                                <li>SEO структура и маркетинг насоки</li>
                                <li>Сигурност и модерни технологии</li>
                                <li>Поддръжка и съдействие след старта</li>
                            </ul>

                            @include('components.Frontend.calendar')

                        </div>
                        <!-- Service List Box End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Service Single Section End --}}

</x-layouts.front-end>
