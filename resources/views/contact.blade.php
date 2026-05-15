<x-layouts.front-end>

   @section('SEO')

    <title>
        Контакти | Weebix - Безплатна консултация за уебсайт и дигитални услуги
    </title>

    <meta name="description" content="Свържете се с Weebix за изработка на уебсайт, онлайн магазин, SEO оптимизация или дигитален маркетинг. Запазете безплатна консултация и обсъдете вашия проект с нас.">
    <meta name="keywords" content="контакти Weebix, безплатна консултация, уеб разработка, изработка на сайт, SEO услуги, дигитален маркетинг, онлайн магазин, уеб агенция България">

    <meta name="author" content="Weebix">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:locale" content="bg_BG">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Контакти | Weebix - Безплатна консултация за вашия проект">
    <meta property="og:description" content="Имате идея за уебсайт, онлайн магазин или custom система? Свържете се с Weebix и нека обсъдим най-доброто решение за вашия бизнес.">
    <meta property="og:site_name" content="Weebix">

    {{-- Twitter / X --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Контакти | Weebix">
    <meta name="twitter:description" content="Запазете безплатна консултация с Weebix и обсъдете вашия уеб проект, SEO стратегия или дигитално присъствие.">

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
