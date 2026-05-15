<x-layouts.front-end>

   @section('SEO')

    <title>
        За нас | Weebix - Уеб разработка, онлайн магазини и custom решения
    </title>

    <meta name="description" content="Научете повече за Weebix – екип за уеб разработка, онлайн магазини и custom системи. Създаваме модерни и бързи уеб решения с фокус върху качество, SEO и реални бизнес резултати.">
    <meta name="keywords" content="Weebix, за нас, уеб разработка, фирмени сайтове, онлайн магазини, custom системи, SEO оптимизация, дигитална агенция, България">
    <meta name="author" content="Weebix">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:locale" content="bg_BG">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="За нас | Weebix - Уеб разработка и дигитални решения">
    <meta property="og:description" content="Създаваме модерни уебсайтове, онлайн магазини и custom решения с внимание към детайла, стабилността и дългосрочната поддръжка.">
    <meta property="og:site_name" content="Weebix">

    {{-- Twitter / X --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="За нас | Weebix">
    <meta name="twitter:description" content="Weebix разработва модерни уеб решения, които комбинират добра визия, функционалност и реални резултати за бизнеса.">

@endsection


    <!-- Hero Section Start -->
    <section class="about-us">
        <div class="container">

            <div class="row align-items-center">

                <div>

                    <div class="about-content">

                        <div class="section-title">

                            <h1 class="text-anime-style-3 text-white">
                                Ние сме <strong>W<span class="text-theme">ee</span>bix</strong>
                            </h1>

                            <p>
                                Разработваме модерни уеб решения, които комбинират
                                впечатляващ дизайн, стабилна функционалност и отлично
                                потребителско изживяване.
                            </p>

                            <p>
                                Създаваме фирмени сайтове, онлайн магазини и
                                индивидуални системи, които не просто изглеждат добре,
                                а помагат на бизнеса да расте и да превръща трафика
                                в реални клиенти.
                            </p>

                            <p>
                                За нас добрият уебсайт не е просто визия.
                                Той трябва да бъде бърз, лесен за използване,
                                оптимизиран за Google и създаден така,
                                че да работи безпроблемно в дългосрочен план.
                            </p>



                            <div class="d-flex gap-3">
                                <a href="#contact" class="btn-default">
                                    Безплатна консултация
                                </a>
                                <a href="/portfolio" class="btn-default">
                                    Разгледайте портфолиото
                                </a>
                            </div>

                        </div>

                    </div>

                </div>


            </div>

        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Start -->
    <section class="services-section mb-5 mt-5">
        <div class="container">

            <!-- Section Title -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <h2 class="text-anime-style-3 text-center">
                            Какво разработваме?
                        </h2>
                    </div>
                </div>
            </div>

            <!-- Services Row -->
            <div class="row g-4 mt-2">

                <!-- Service Item -->
                <div class="col-lg-3 col-md-6">
                    <div class="why-choose-us-item about-us shadow">
                        <div class="d-flex flex-column text-start">

                            <div class="icon-box">
                                <img src="/images/icons8-website-100.png" alt="Фирмени уебсайтове">
                            </div>

                            <div>
                                <h3>Фирмени уебсайтове</h3>

                                <p class="text-center">
                                    Представяме бизнеса ви по професионален начин
                                    чрез модерна визия, добра структура
                                    и оптимизация за мобилни устройства.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Service Item -->
                <div class="col-lg-3 col-md-6">
                    <div class="why-choose-us-item about-us shadow">
                        <div class="d-flex flex-column text-start">

                            <div class="icon-box">
                                <img src="/images/icons8-online-store-100.png" alt="Онлайн магазини">
                            </div>

                            <div>
                                <h3>Онлайн магазини</h3>

                                <p class="text-center">
                                    Разработваме eCommerce решения,
                                    които улесняват процеса на продажба
                                    и осигуряват добро потребителско изживяване.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Service Item -->
                <div class="col-lg-3 col-md-6">
                    <div class="why-choose-us-item about-us shadow">
                        <div class="d-flex flex-column text-start">

                            <div class="icon-box">
                                <img src="/images/icons8-api-96.png" alt="Индивидуални системи">
                            </div>

                            <div>
                                <h3>Custom Решения</h3>

                                <p class="text-center">
                                    Когато готовите платформи не са достатъчни,
                                    изграждаме custom решения,
                                    съобразени изцяло с нуждите на бизнеса.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="why-choose-us-item about-us shadow">
                        <div class="d-flex flex-column text-start">

                            <div class="icon-box">
                                <img src="/images/icons8-computer-support-100.png" alt="Индивидуални системи">
                            </div>

                            <div>
                                <h3>Поддръжка</h3>

                                <p class="text-center">
                                    Осигуряваме техническа поддръжка, обновления и бърза реакция при нужда,
                                    за да работи вашият уебсайт сигурно, стабилно и без прекъсвания.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>

                @include('components.Frontend.calendar')

            </div>

        </div>
    </section>
    <!-- Services Section End -->


    <!-- Philosophy Section Start -->
    <section class="about-us">
        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6 align-self-start">

                    <div class="about-image">
                        <div class="about-img">
                            <figure class="image-anime">
                                <img src="/images/about-us-2.jpg" alt="Работен процес">
                            </figure>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 align-self-start">

                    <div class="about-content">

                        <div class="section-title">

                            <h3 class="text-anime-style-3 text-white">
                                Нашият подход към клиентите
                            </h3>

                            <p>
                                В IT сферата често се случва клиенти да бъдат
                                обърквани с прекалено сложни термини,
                                ненужни функционалности или нереалистични обещания.
                            </p>
                            <hr>
                            <p>
                                Ние вярваме, че комуникацията трябва да бъде ясна,
                                честна и разбираема.
                                Обясняваме какво правим, защо го правим
                                и как това ще помогне на бизнеса ви.
                            </p>
                            <hr>
                            <p>
                                Работим с внимание към детайла,
                                добра организация и фокус върху качеството,
                                защото сайтът трябва не просто да бъде красив,
                                а да работи надеждно всеки ден.
                            </p>


                            <a href="#contact" class="btn-default">
                                Запишете си Безплатна консултация
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- Philosophy Section End -->




    <!-- Support Section Start -->
    <section class="support-section dark-section bg-white p-5">
        <div class="container">

            <div class="row">

                <div class="col-lg-12 text-center">

                    <div class="section-title">

                        <h2 class="text-anime-style-3 mb-2">
                            Поддръжка и дългосрочна работа
                        </h2>

                        <p>
                            След завършването на проекта оставаме на разположение
                            за техническа поддръжка и съдействие.
                        </p>

                        <p>
                            Всеки уебсайт трябва да функционира стабилно,
                            бързо и сигурно. <br>
                            Именно затова всички технически проблеми,
                            свързани с първоначалната разработка,
                            се отстраняват напълно безплатно.
                        </p>

                        <p>
                            Допълнителните функционалности и бъдещи разширения
                            се обсъждат предварително с ясни срокове и прозрачни цени.
                        </p>


                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- Support Section End -->


</x-layouts.front-end>
