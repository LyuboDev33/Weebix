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
                                <a href="/service/graphic-design"><img src="/images/arrow.svg" alt="Виж повече"></a>
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
                        <a href="/service/graphic-design" class="btn-default show-website">
                            Научи повече
                        </a>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item shadow-sm wow fadeInUp" data-wow-delay="0.25s">
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
                        <a href="/service/web-development" class="btn-default show-website">
                            Научи повече
                        </a>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item shadow-sm wow fadeInUp" data-wow-delay="0.5s">
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
                        <a href="/service/digital-marketing" class="btn-default show-website">
                            Научи повече
                        </a>
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item shadow-sm wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-content">
                            <div class="service-content-title">
                                <h2>AI Видеа и обработка</h2>
                                <a href="/service/digital-marketing"><img src="/images/arrow.svg" alt="Виж повече"></a>
                            </div>

                            <p>
                                Добавяме професионални субтитри, визуални ефекти и обработка на видео съдържание,
                                за да направим вашите клипове по-ангажиращи, модерни и подходящи за социални мрежи.
                            </p>
                        </div>
                        <div class="service-image">
                            <figure class="image-anime">
                                <img src="/images/service-img-2.jpg" alt="Дигитален маркетинг">
                            </figure>
                        </div>
                        <a href="/service/digital-marketing" class="btn-default show-website">
                            Научи повече
                        </a>
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




    <!-- Overview Company Section Start -->
    <section class="overview-company">
        <div class="container">

            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="text-anime-style-3">Малко повече за нашата работа</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Counter Box Start -->
                    <div class="counter-box">
                        <h3>Пълна прозрачност и ясни условия при стартиране на проект</h3>
                    </div>
                    <!-- Counter Box End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Counter Box Start -->
                    <div class="counter-box">
                        <h3><span class="counter">20</span><em>+</em></h3>
                        <p>завършение проекта</p>
                    </div>
                    <!-- Counter Box End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Counter Box Start -->
                    <div class="counter-box">
                        <h3><span class="counter">4</span><em>+</em> години</h3>
                        <p>опит в разработката</p>
                    </div>
                    <!-- Counter Box End -->
                </div>

            </div>

        </div>
    </section>



</x-layouts.front-end>
