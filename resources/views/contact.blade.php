<x-layouts.front-end>

    @section('SEO')
        <title>За нас | Weebix - Изработка на уебсайтове, онлайн магазини и дигитални решения</title>

        <meta name="description"
            content="Weebix разработва модерни фирмени сайтове, онлайн магазини и индивидуални уеб решения с фокус върху дизайн, функционалност и реални бизнес резултати.">

        <meta name="keywords"
            content="Weebix, изработка на сайт, фирмен сайт, онлайн магазин, уеб дизайн, SEO оптимизация, дигитална агенция, Laravel, WordPress, България">

        <meta name="author" content="Weebix">
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="{{ url()->current() }}">

        {{-- Open Graph --}}
        <meta property="og:type" content="website">
        <meta property="og:locale" content="bg_BG">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="Weebix - Изработка на уебсайтове, онлайн магазини и дигитални решения">

        <meta property="og:description"
            content="Създаваме модерни уеб решения, които комбинират страхотен дизайн, добра структура и функционалност с реални резултати за бизнеса.">

        <meta property="og:image" content="{{ asset('images/og-cover.jpg') }}">
        <meta property="og:site_name" content="Weebix">

        {{-- Twitter --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Weebix - Изработка на уебсайтове и онлайн магазини">

        <meta name="twitter:description"
            content="Модерни фирмени сайтове, онлайн магазини и дигитални решения за бизнеси, които искат професионално онлайн присъствие.">

        <meta name="twitter:image" content="{{ asset('images/og-cover.jpg') }}">
    @endsection


    <!-- Contact Us Section Start -->
    <section class="contact-us">
        <div class="container">

            <div class="row align-items-center">

                <!-- Left Content -->
                <div class="col-lg-6 align-self-start">

                    <div class="contact-details">

                        <!-- Section Title -->
                        <div class="section-title">

                            <h3>
                                Свържете се с нас
                            </h3>

                            <h3 class="text-anime-style-3">
                                Нека обсъдим вашия проект
                            </h3>

                        </div>

                        <!-- Contact Content -->
                        <div class="contact-detail-body">

                            <p>
                                Независимо дали имате идея за уебсайт, онлайн магазин
                                или custom система, ние ще ви помогнем да намерите
                                правилното решение за вашия бизнес.
                            </p>

                            <p>
                                Свържете се с нас за безплатна консултация и ще обсъдим
                                как можем да реализираме проекта ви професионално и ефективно.
                            </p>


                            <p>
                                Запишете си час от бутона "Запази Безплатна Консултация" и разгледайте свободните часове.
                            </p>


                            {{-- <ul class="social-icons">
                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa-brands fa-tiktok"></i>
                                    </a>
                                </li>
                            </ul> --}}

                        </div>

                    </div>

                </div>

                <!-- Contact Form -->
                <div class="col-lg-6">

                    <div class="contact-form-box">
                        @include('components.Frontend.calendar')
                        <img
                        class="mt-3"
                        src="/images/scheduler.jpg"
                        alt="Scheduler">

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Contact Us Section End -->


</x-layouts.front-end>
