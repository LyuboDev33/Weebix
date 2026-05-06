<x-layouts.front-end>

    @section('SEO')
        <title>Уеб дизайн, SEO и дигитален маркетинг за вашия бизнес | [Име на компанията]</title>

        <meta name="description"
            content="Изграждаме модерни уебсайтове, оптимизираме за Google и развиваме онлайн присъствието на бизнеса ви. 100+ доволни партньори. Получете безплатна консултация днес.">
        <meta name="keywords"
            content="уеб дизайн, изработка на сайт, SEO оптимизация, дигитален маркетинг, разработка на уебсайт, мобилни приложения, онлайн магазин, България">
        <meta name="author" content="[Име на компанията]">
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="{{ url()->current() }}">

        {{-- Open Graph (Facebook / LinkedIn) --}}
        <meta property="og:type" content="website">
        <meta property="og:locale" content="bg_BG">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="Уеб дизайн, SEO и дигитален маркетинг за вашия бизнес">
        <meta property="og:description"
            content="Изграждаме сайтове, които превръщат посетителите в клиенти. SEO, разработка, мобилни приложения и графичен дизайн – всичко на едно място.">
        <meta property="og:image" content="{{ asset('images/og-cover.jpg') }}">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:site_name" content="[Име на компанията]">

        {{-- Twitter / X --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Уеб дизайн, SEO и дигитален маркетинг за вашия бизнес">
        <meta name="twitter:description"
            content="Модерни уебсайтове, SEO оптимизация и дигитален маркетинг, които носят реални резултати.">
        <meta name="twitter:image" content="{{ asset('images/og-cover.jpg') }}">
    @endsection


    <!-- Hero Section Start -->
    <div class="hero">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-8 col-xl-6">
                    <!-- Hero Content Start -->
                    <div class="hero-content">

                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h1 class="text-anime-style-3">
                                Искате уебсайт, но процесът ви изглежда <br>
                                <span>твърде сложен и неясен?</span>
                            </h1>
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Body Start -->
                        <div class="hero-body">
                            <p>
                                Получавате различни мнения за това как да бъде изграден вашият уебсайт и <strong>не сте
                                    сигурни</strong> кой подход е правилният?
                            </p>

                            <p>
                                Ние от <strong>W<span class="text-theme">ee</span>bix</strong> ще ви осигурим ясен
                                процес и експерт, който ви води от идеята до напълно завършен и работещ сайт.
                            </p>

                            <p>
                                <span class="save-consult">Запазете безплатна консултация</span> и разберете как точно
                                да стартирате правилно.
                            </p>
                        </div>
                        <!-- Hero Body End -->

                        <!-- Hero Footer Start -->
                        <div class="hero-footer d-md-flex gap-3">
                            <a href="#" class="btn-default mb-3">безплатна консултация</a>
                            <a href="#" class="btn-default mb-3">вижте
                                портфолиото</a>
                        </div>
                        <!-- Hero Footer End -->
                        <hr class="d-md-none">
                    </div>
                    <!-- Hero Content End -->
                </div>

                <div class="col-lg-4 col-xl-6 align-self-start">

                    <div class="hero-video-image">

                        <div class="hero-slider-image">
                            <img src="/images/group-people.png" alt="Уеб дизайн проект">
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <div class="about-us">
        <div class="container">

            <div class="d-block text-center mb-5">
                <h1 class="text-anime-style-3 text-white">
                    Какъв обикновено е проблемът при започването на уебсайт?
                </h1>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6 align-self-start">
                    <!-- About Us Image Start -->
                    <div class="about-image">
                        <div class="about-img">
                            <figure class="image-anime">
                                <img src="/images/service-img-2.jpg" alt="Екипът ни в работен процес">
                            </figure>
                        </div>

                    </div>
                    <!-- About Us Image End -->
                </div>

                <div class="col-lg-6">
                    <div class="about-content">

                        <p>
                            Много бизнеси и хора попадат в ситуация, в която изборът на уебсайт се превръща в
                            <strong>объркващ процес</strong> —
                            различни мнения, различни готови платформи и липса на ясна посока.
                        </p>

                        <p>
                            WordPress, custom решения, онлайн магазини или сложни системи — правилният избор зависи
                            изцяло от вашите цели, а не от универсално “най-добро решение”.
                        </p>

                        <p>
                            Ние сме <strong>W<span class="text-theme">ee</span>bix</strong> — дигитална агенция с близо
                            4 години опит в изработка на фирмени сайтове,
                            онлайн магазини и индивидуални уеб системи. Нашата роля е да ви дадем яснота преди да
                            започнете.
                        </p>

                        <a href="#" class="btn-default wow fadeInUp" data-wow-delay="1.5s">
                            запази безплатна консултация
                        </a>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- About Section End -->

    <!-- Our Services Section Start -->
    <div class="our-services">
        <div class="container">

            <div class="row section-row align-items-center">
                <div class="col-12">
                    <h3 class="text-theme text-center">Нашите услуги</h3>
                    <h2 class="text-anime-style-3 text-center">
                        Какво можем да преложим и какъв е процеса?
                    </h2>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="service-content">
                            <div class="service-content-title">
                                <h2>Графичен дизайн</h2>
                                <a href="#"><img src="/images/arrow.svg" alt="Виж повече"></a>
                            </div>
                            <p>
                                Ще изберем подходяща цветова гама и ще създадем уникален визуален стил,
                                който отразява вашия бранд и изгражда доверие у клиентите ви.
                            </p>
                        </div>
                        <div class="service-image">
                            <figure class="image-anime">
                                <img src="/images/service-img-6.jpg" alt="Графичен дизайн">
                            </figure>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item shadow-sm wow fadeInUp" data-wow-delay="0.25s">
                        <div class="service-content">
                            <div class="service-content-title">
                                <h2>Уеб разработка</h2>
                                <a href="#"><img src="/images/arrow.svg" alt="Виж повече"></a>
                            </div>
                            <p>Ще изберем най-подходящите технологии спрямо изискванията и ще създадем лесен за
                                управление уебсайт, който лесно се надгражда. </p>
                        </div>
                        <div class="service-image">
                            <figure class="image-anime">
                                <img src="/images/service-img-1.jpg" alt="Уеб разработка">
                            </figure>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item shadow-sm wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-content">
                            <div class="service-content-title">
                                <h2>Дигитален маркетинг</h2>
                                <a href="#"><img src="/images/arrow.svg" alt="Виж повече"></a>
                            </div>
                            <p>
                                SEO, Google Ads и кампании в социалните мрежи, които привличат точните клиенти и носят
                                реални резултати.
                            </p>
                        </div>
                        <div class="service-image">
                            <figure class="image-anime">
                                <img src="/images/service-img-2.jpg" alt="Дигитален маркетинг">
                            </figure>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>

            </div>


            <a href="#" class="btn-default m-0-auto w-fit d-block wow fadeInUp" data-wow-delay="0.5s">
                запази безплатна консултация
            </a>

        </div>
    </div>
    <!-- Our Services Section End -->



    <div class="why-choose-us">
        <div class="container">

            <div class="row section-row align-items-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h2 class="text-anime-style-3 text-center">Как протича процесът на работа? </h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- STEP 1 -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="why-choose-us-item shadow">
                        <div class="d-flex flex-column flex-md-row text-md-start text-center align-items-start gap-3">

                            <div class="icon-box">
                                <img src="/images/icon-whyus-1.svg" alt="Стъпка 1">
                            </div>

                            <div>
                                <h3><span class="text-theme">1.</span> Консултация</h3>
                                <p>
                                    Процесът започва със записване на среща чрез нашия календар.
                                    По време на консултацията обсъждаме вашите цели, идеи и изисквания,
                                    както и възможните решения спрямо вашия бизнес.
                                </p>
                                <p>
                                    Ще получите ясна представа какво ви е необходимо и как да избегнете
                                    често срещаните грешки още в началото.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- STEP 2 -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="why-choose-us-item shadow">
                        <div class="d-flex flex-column flex-md-row text-md-start text-center align-items-start gap-3">

                            <div class="icon-box">
                                <img src="/images/icon-whyus-2.svg" alt="Старт на проекта">
                            </div>

                            <div>
                                <h3><span class="text-theme">2.</span> Старт на проекта</h3>
                                <p>
                                    След като уточним всички детайли, изготвяме ясен план за работа,
                                    срокове и обхват на проекта. Подписваме договор и започваме реалната работа.
                                </p>
                                <p>
                                    Това гарантира прозрачност и сигурност за двете страни още от самото начало.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- STEP 3 -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="why-choose-us-item shadow">
                        <div class="d-flex flex-column flex-md-row text-md-start text-center align-items-start gap-3">

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
                                    След одобрение преминаваме към разработка, където изграждаме всички
                                    функционалности, интеграции и административна част.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- STEP 4 -->
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="why-choose-us-item shadow">
                        <div class="d-flex flex-column flex-md-row text-md-start text-center align-items-start gap-3">

                            <div class="icon-box">
                                <img src="/images/task-completed-96.png" alt="Резултат">
                            </div>

                            <div>
                                <h3><span class="text-theme">4.</span> Завършване и резултат</h3>
                                <p>
                                    По време на целия процес поддържаме активна комуникация и ви информираме
                                    за напредъка на проекта.
                                </p>
                                <p>
                                    В крайния етап получавате напълно завършен, тестван и работещ уебсайт,
                                    готов да привлича клиенти и да развива бизнеса ви.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <!-- Our Work Section Start -->
    <div class="our-work bg-theme-dark">
        <div class="container">

            <div class="section-title">
                <h2 class="text-anime-style-3 mb-5 text-center">
                    Портфолио - някои от нашите успешни истории
                </h2>
            </div>



            <div class="row">
                <div class="col-md-6">
                    <!-- Works Item Start -->
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/rabotazamen.png" alt="РаботаЗаМен – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2>РаботаЗаМен - Job Board</h2>
                            <p>Една платформа. Безброй възможности. Цялостни решения за кариерно развитие и бизнес
                                софтуер.</p>
                        </div>
                        <hr>

                        <a target="_blank" href="https://rabotazamen.bg" class="btn-default show-website">
                            Разгледай уебсайта
                        </a>
                    </div>
                    <!-- Works Item End -->


                </div>

                <div class="col-md-6">
                    <!-- Works Item Start -->
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/bestcars.png" alt="БестКарс – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2>Best Cars Rentals - </h2>
                            <p>Резервирайте своя луксозен трансфер с Best Cars
                                Rentals и се насладете на стилно и комфортно
                                пътуване.</p>
                        </div>
                        
                        <hr>

                        <a target="_blank" href="https://bestcars-rentals.com" class="btn-default show-website">
                            Разгледай уебсайта
                        </a>
                    </div>
                    <!-- Works Item End -->
                </div>

                <div class="col-md-6">
                    <!-- Works Item Start -->
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/mollov-project.png" alt="Д.р Моллов проект – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2>Професионални домашни посещения от д-р Юлиян Моллов</h2>
                            <p>Медицински прегледи, инфузии, катетри, тестове, хирургични процедури и грижа у дома – в
                                удобно за Вас време, изцяло по заявка.</p>
                        </div>
                        <hr>
                        <a target="_blank" href="https://yulianmollov.bg" class="btn-default show-website">
                            Разгледай уебсайта
                        </a>
                    </div>
                    <!-- Works Item End -->
                </div>

                <div class="col-md-6">
                    <!-- Works Item Start -->
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/relaxa-project.png" alt="Релакса – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2>Онлайн Библиотека РЕЛАКСА</h2>
                            <p>Онлайн магазин с интегрирани плащания, който утрои продажбите на клиента за 6 месеца.</p>
                        </div>
                        <hr>
                        <a target="_blank" href="https://relaxa.bg" class="btn-default show-website">
                            Разгледай уебсайта
                        </a>
                    </div>
                    <!-- Works Item End -->
                </div>
            </div>

        </div>
    </div>
    <!-- Our Work Section End -->



    <!-- Exclusive Partners Section Start -->
    <div class="exclusive-partners">
        <div class="container">

            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">наши партньори</h3>
                        <h2 class="text-anime-style-3">100+ партньори и поддръжници</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="partners-logo wow fadeInUp" data-wow-delay="0.2s">
                        <img src="/images/icon-partners-1.svg" alt="Партньор">
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="partners-logo wow fadeInUp" data-wow-delay="0.4s">
                        <img src="/images/icon-partners-2.svg" alt="Партньор">
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="partners-logo wow fadeInUp" data-wow-delay="0.6s">
                        <img src="/images/icon-partners-3.svg" alt="Партньор">
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="partners-logo wow fadeInUp" data-wow-delay="0.8s">
                        <img src="/images/icon-partners-4.svg" alt="Партньор">
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="partners-logo wow fadeInUp" data-wow-delay="1s">
                        <img src="/images/icon-partners-3.svg" alt="Партньор">
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="partners-logo wow fadeInUp" data-wow-delay="1.2s">
                        <img src="/images/icon-partners-4.svg" alt="Партньор">
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="partners-logo wow fadeInUp" data-wow-delay="1.4s">
                        <img src="/images/icon-partners-1.svg" alt="Партньор">
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="partners-logo wow fadeInUp" data-wow-delay="1.6s">
                        <img src="/images/icon-partners-2.svg" alt="Партньор">
                    </div>
                </div>
            </div>

        </div>
    </div>


</x-layouts.front-end>
