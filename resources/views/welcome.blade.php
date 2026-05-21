<x-layouts.front-end>

    @section('SEO')
        <title>Уеб дизайн, SEO и дигитален маркетинг за вашия бизнес | Weebix</title>

        <meta name="description"
            content="Изграждаме модерни уебсайтове, оптимизираме за Google и развиваме онлайн присъствието на бизнеса ви. Получете безплатна консултация днес.">
        <meta name="keywords"
            content="уеб дизайн, изработка на сайт, SEO оптимизация, дигитален маркетинг, разработка на уебсайт, мобилни приложения, онлайн магазин, България">
        <meta name="author" content="Weebix">
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="{{ url()->current() }}">

        {{-- Open Graph (Facebook / LinkedIn) --}}
        <meta property="og:type" content="website">
        <meta property="og:locale" content="bg_BG">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="Уеб дизайн, SEO и дигитален маркетинг за вашия бизнес">
        <meta property="og:description"
            content="Изграждаме сайтове, които превръщат посетителите в клиенти. SEO, разработка, мобилни приложения и графичен дизайн – всичко на едно място.">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:site_name" content="Weebix">

        {{-- Twitter / X --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Уеб дизайн, SEO и дигитален маркетинг за вашия бизнес">
        <meta name="twitter:description"
            content="Модерни уебсайтове, SEO оптимизация и дигитален маркетинг, които носят реални резултати.">
    @endsection


    <!-- Hero Section Start -->
    <section
    class="hero container">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 col-xl-7">
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
                            <p class="mb-2">
                                Получавате различни мнения за това как да бъде изграден вашият уебсайт и <strong>не сте
                                    сигурни</strong> кой подход е правилният?
                            </p>
                            <hr class="mt-0 mb-2 text-black">
                            <p>
                                Ние от дигитална агенция <strong>W<span class="text-theme">ee</span>bix</strong> ще ви осигурим ясен
                                процес и експерт, който ви води от идеята до напълно завършен и работещ сайт.
                            </p>

                            <p>
                                <span class="save-consult">Запазете безплатна консултация</span> и разберете как точно
                                да стартирате правилно.
                            </p>
                        </div>
                        <!-- Hero Body End -->

                        <!-- Hero Footer Start -->
                        <div class="hero-footer d-md-flex align-items-center gap-3 w-fit">
                            @include('components.Frontend.calendar')
                            <a href="/portfolio" class="btn-default arrow mt-md-0 mt-3">
                                Портфолио</a>
                        </div>
                        <!-- Hero Footer End -->
                        <hr class="d-md-none">
                    </div>
                    <!-- Hero Content End -->
                </div>

                <div class="col-lg-4 col-xl-5 align-self-start">

                    {{-- <div class="hero-video-image">

                        <div class="hero-slider-image">
                            <img src="/images/group-people.png" alt="Уеб дизайн проект">
                        </div>
                    </div> --}}

                </div>

            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section class="about-us">
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
                            <hr class="mt-0 mb-1 text-white">
                        <p>
                            WordPress, custom решения, онлайн магазини или сложни системи — правилният избор зависи
                            изцяло от вашите цели, а не от универсално “най-добро решение”.
                        </p>
                                      <hr class="mt-0 mb-2 text-white">
                        <p>
                            Ние сме <strong>W<span class="text-theme">ee</span>bix</strong> — дигитална агенция с близо
                            4 години опит в изработка на фирмени сайтове,
                            онлайн магазини и индивидуални уеб системи. Нашата роля е да ви дадем яснота преди да
                            започнете.
                        </p>

                        @include('components.Frontend.calendar')

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- About Section End -->

    <!-- Our Services Section Start -->
    <section class="our-services">
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
                    <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="service-content">
                            <div class="service-content-title">
                                <h2>Графичен дизайн</h2>
                                <a href="/service/design"><img src="/images/arrow.svg" alt="Виж повече"></a>
                            </div>
                            <p>




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
                    <div class="service-item shadow-sm wow fadeInUp" data-wow-delay="0.55s">
                        <div class="service-content">
                            <div class="service-content-title">
                                <h2>Уеб разработка</h2>
                                <a href="/service/web-development"><img src="/images/arrow.svg" alt="Виж повече"></a>
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
                    <div class="service-item shadow-sm wow fadeInUp" data-wow-delay="0.75s">
                        <div class="service-content">
                            <div class="service-content-title">
                                <h2>Дигитален маркетинг</h2>
                                <a href="/service/digital-marketing"><img src="/images/arrow.svg" alt="Виж повече"></a>
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

            @include('components.Frontend.calendar')

        </div>
    </section>
    <!-- Our Services Section End -->



    <section class="why-choose-us">
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
                                    срокове и обхват на проекта. <br> Подписваме договор и започваме реалната работа.
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
    </section>


    <!-- Our Work Section Start -->
    <section class="our-work bg-theme-dark">
        <div class="container">

            <div class="section-title">
                <h2 class="text-anime-style-3 mb-5 text-center">
                    Портфолио - част от нашите успешни истории
                </h2>
            </div>

            <div class="row">
                <div class="col-md-4">
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

                <div class="col-md-4">
                    <!-- Works Item Start -->
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/bestcars.png" alt="БестКарс – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2>Best Cars Rentals </h2>
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

                <div class="col-md-4">
                    <!-- Works Item Start -->
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/mollov-project.png" alt="Д.р Моллов проект – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2> Домашни посещения от д-р Юлиян Моллов</h2>
                            <p>Медицински прегледи и грижа у дома – в
                                удобно за Вас време, изцяло по заявка.</p>
                        </div>
                        <hr>
                        <a target="_blank" href="https://yulianmollov.bg" class="btn-default show-website">
                            Разгледай уебсайта
                        </a>
                    </div>
                    <!-- Works Item End -->
                </div>

                <a target="_blank" href="/portfolio" class="btn-default show-website">
                    Вижте цялото портфолио
                </a>


            </div>

        </div>
    </section>
    <!-- Our Work Section End -->

    <div class="scrolling-ticker">
        <div class="scrolling-ticker-box">
            <div class="scrolling-content">
                <span><i class="fa-solid fa-circle"></i>Изработка на уебсайт</span>
                <span><i class="fa-solid fa-circle"></i>Графичен дизайн</span>
                <span><i class="fa-solid fa-circle"></i>Видео обработка</span>
                <span><i class="fa-solid fa-circle"></i>Дигитален маркетинг</span>
                <span><i class="fa-solid fa-circle"></i>SEO оптимизация</span>
                <span><i class="fa-solid fa-circle"></i>Поддръжка на социални мрежи</span>
            </div>

            <div class="scrolling-content">
                <span><i class="fa-solid fa-circle"></i>Изработка на уебсайт</span>
                <span><i class="fa-solid fa-circle"></i>Графичен дизайн</span>
                <span><i class="fa-solid fa-circle"></i>Видео обработка</span>
                <span><i class="fa-solid fa-circle"></i>Дигитален маркетинг</span>
                <span><i class="fa-solid fa-circle"></i>SEO оптимизация</span>
                <span><i class="fa-solid fa-circle"></i>Поддръжка на социални мрежи</span>
            </div>
        </div>
    </div>


    <!-- Exclusive Partners Section Start -->
    <!-- Clients Testimonials Section Start -->
    {{-- <section class="clients-testimonials about-testimonials">
        <div class="container">

            <div class="row section-row align-items-center">
                <div class="col-lg-8 col-md-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="text-anime-style-3">Отзиви на клиенти.</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-rating">
                                            <img src="/images/icon-star.svg" alt="Рейтинг">
                                        </div>

                                        <div class="testimonial-content">
                                            <p>Екипът свърши страхотна работа по нашия сайт. Комуникацията беше бърза,
                                                сроковете – спазени, а резултатът надмина очакванията ни.</p>
                                        </div>

                                        <div class="testimonial-body">
                                            <figure class="image-anime">
                                                <img src="/images/author-1.jpg" alt="Иван Петров">
                                            </figure>
                                            <div class="testimonial-author-title">
                                                <h2>Иван Петров</h2>
                                                <p>Acme Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-rating">
                                            <img src="/images/icon-star.svg" alt="Рейтинг">
                                        </div>

                                        <div class="testimonial-content">
                                            <p>Изключителен професионализъм и внимание към детайла. Препоръчвам ги
                                                на всеки, който търси качество и реални резултати.</p>
                                        </div>

                                        <div class="testimonial-body">
                                            <figure class="image-anime">
                                                <img src="/images/author-2.jpg" alt="Ариана Банчева">
                                            </figure>
                                            <div class="testimonial-author-title">
                                                <h2>Ариана Банчева</h2>
                                                <p>Delta Innovation</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-rating">
                                            <img src="/images/icon-star.svg" alt="Рейтинг">
                                        </div>

                                        <div class="testimonial-content">
                                            <p>След пускането на новия сайт броят на запитванията ни се удвои за
                                                по-малко
                                                от три месеца. Благодаря за свършената работа!</p>
                                        </div>

                                        <div class="testimonial-body">
                                            <figure class="image-anime">
                                                <img src="/images/author-3.jpg" alt="Борис Стоянов">
                                            </figure>
                                            <div class="testimonial-author-title">
                                                <h2>Борис Стоянов</h2>
                                                <p>Horizon Ventures</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-rating">
                                            <img src="/images/icon-star.svg" alt="Рейтинг">
                                        </div>

                                        <div class="testimonial-content">
                                            <p>Истински партньори, не просто изпълнители. Слушат, предлагат идеи и
                                                винаги намират решение – дори за най-сложните казуси.</p>
                                        </div>

                                        <div class="testimonial-body">
                                            <figure class="image-anime">
                                                <img src="/images/author-2.jpg" alt="Йордан Димитров">
                                            </figure>
                                            <div class="testimonial-author-title">
                                                <h2>Йордан Димитров</h2>
                                                <p>Omega Solutions</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                            </div>
                            @include('components.Frontend.calendar')
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
            </div>

        </div>
    </section> --}}
    <!-- Clients Testimonials Section End -->


</x-layouts.front-end>
