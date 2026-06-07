<x-layouts.front-end>

@section('SEO')

    <title>
        Уеб разработка, SEO и дигитален маркетинг услуги | Weebix
    </title>

    <meta name="description" content="Weebix предлага професионална уеб разработка, SEO оптимизация, дигитален маркетинг, графичен дизайн и AI видео обработка. Създаваме модерни решения за растежа на вашия бизнес.">
    <meta name="keywords" content="Weebix, уеб разработка, уеб дизайн, SEO оптимизация, дигитален маркетинг, графичен дизайн, AI видеа, изработка на сайт, онлайн магазин, фирмен сайт, България">
    <meta name="author" content="Weebix">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:locale" content="bg_BG">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Уеб разработка, SEO и дигитален маркетинг услуги | Weebix">
    <meta property="og:description"
          content="Изграждаме модерни уебсайтове, SEO стратегии и дигитални решения, които помагат на бизнеса ви да расте онлайн.">
    <meta property="og:site_name" content="Weebix">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    {{-- Twitter / X --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title"content="Уеб разработка, SEO и дигитален маркетинг услуги | Weebix">
    <meta name="twitter:description" content="Професионална уеб разработка, SEO оптимизация, графичен дизайн и дигитален маркетинг за модерния бизнес.">

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


            @include('components.Frontend.calendar')

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
