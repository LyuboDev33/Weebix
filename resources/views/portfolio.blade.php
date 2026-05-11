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



    <!-- Our Work Section Start -->
    <section class="our-work bg-theme-dark">
        <div class="container">

            <div class="section-title">
                <h2 class="text-anime-style-3 mb-5 text-center">
                    Портфолио уебсайтове – част от нашите успешни истории
                </h2>
            </div>

            <div class="row">

                <div class="col-md-4">
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/rabotazamen.png" alt="РаботаЗаМен – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2>Портал за работа – Rabotazamen</h2>
                            <p>Една платформа. Безброй възможности. Цялостни решения за кариерно развитие и бизнес
                                софтуер.</p>
                        </div>
                        <hr>
                        <a target="_blank" href="https://rabotazamen.bg" class="btn-default show-website">Разгледай
                            уебсайта</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/sofiapilates-p.png" alt="Sofia Pilates – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2>Пилатес клуб – Sofia Pilates</h2>
                            <p>Модерен уебсайт за пилатес студио с онлайн график и резервации – функционалност и стил на
                                едно място.</p>
                        </div>
                        <hr>
                        <a target="_blank" href="https://sofiapilates.com" class="btn-default show-website">Разгледай
                            уебсайта</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/bestcars.png" alt="Best Cars Rentals – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2>Bestcars – Луксозни автомобили под наем</h2>
                            <p>Резервирайте своя луксозен трансфер с Best Cars Rentals и се насладете на стилно и
                                комфортно пътуване.</p>
                        </div>
                        <hr>
                        <a target="_blank" href="https://bestcars-rentals.com"
                            class="btn-default show-website">Разгледай уебсайта</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/evita-project.png" alt="Салон Evita – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2>Салон за красота Evita</h2>
                            <p>Елегантен сайт за салон за красота с онлайн запазване на час и портфолио от услуги.</p>
                        </div>
                        <hr>
                        <a target="_blank" href="https://evitapancharevo.com" class="btn-default show-website">Разгледай
                            уебсайта</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/relaxa-project.png" alt="Релакса – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2>Релакса – Език в движение</h2>
                            <p>Онлайн библиотека и магазин с интегрирани плащания.</p>
                        </div>
                        <hr>
                        <a target="_blank" href="https://relaxa.bg" class="btn-default show-website">Разгледай
                            уебсайта</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/nanko-project.png" alt="Нанко БГ – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2>Нанко БГ</h2>
                            <p>Мостът между семейства и детегледачки.</p>
                        </div>
                        <hr>
                        <a target="_blank" href="https://nanko.bg" class="btn-default show-website">Разгледай
                            уебсайта</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/sfashion-project.png" alt="S-Fashion – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2>Онлайн магазин S-Fashion</h2>
                            <p>Модерен e-commerce сайт зa висококачествени продукти за нокти.</p>
                        </div>
                        <hr>
                        <a target="_blank" href="https://sfashion-shop.bg" class="btn-default show-website">Разгледай
                            уебсайта</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/infinity21-project.png" alt="Infinity 21 – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2>LR Health & Beauty – Екип Infinity 21</h2>
                            <p>Корпоративен сайт за бизнес мрежа с богато съдържание и форми за контакт.</p>
                        </div>
                        <hr>
                        <a target="_blank" href="https://infinity21.org" class="btn-default show-website">Разгледай
                            уебсайта</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/lunara.png" alt="Lunara Kids – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2>Магазин за бебешки дрехи – Lunara</h2>
                            <p>Уютен онлайн магазин за бебешка мода с приятен интерфейс и удобна каталогизация.</p>
                        </div>
                        <hr>
                        <a target="_blank" href="https://lunarakids.com" class="btn-default show-website">Разгледай
                            уебсайта</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/profix-project.png" alt="Профикс БГ – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2>Профикс БГ</h2>
                            <p>Проектираме и изграждаме автоматизирани поливни системи, водни помпи и хидрофори,
                                градинска и горска техника и пиротехника.</p>
                        </div>
                        <hr>
                        <a target="_blank" href="https://profix.bg" class="btn-default show-website">Разгледай
                            уебсайта</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/mollov-project.png" alt="Фондация д-р Моллов – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2>Фондация д-р Юлиан Моллов</h2>
                            <p>Медицински прегледи, инфузии, катетри, тестове, хирургични процедури и грижа у дома – в
                                удобно за вас време, изцяло по заявка.</p>
                        </div>
                        <hr>
                        <a target="_blank" href="https://yulianmollov.bg" class="btn-default show-website">Разгледай
                            уебсайта</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/tsarevets-project.png" alt="ПК Царевец – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2>Плувен Клуб „Царевец"</h2>
                            <p>Сайт за плувен клуб с информация за тренировки, треньори и записване на нови членове.</p>
                        </div>
                        <hr>
                        <a target="_blank" href="https://tsarevetsswimclub.bg"
                            class="btn-default show-website">Разгледай уебсайта</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/skyline-project.png" alt="Skyline Construct – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2>Skyline Construct</h2>
                            <p>Корпоративен сайт за строителна компания с портфолио от реализирани обекти и проекти.</p>
                        </div>
                        <hr>
                        <a target="_blank" href="https://skylineconstruct.eu"
                            class="btn-default show-website">Разгледай уебсайта</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/softex-project.png" alt="SOFTEX BG – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2>SOFTEX BG</h2>
                            <p>Академия за курсове по програмиране.</p>
                        </div>
                        <hr>
                        <a target="_blank" href="https://softex.bg" class="btn-default show-website">Разгледай
                            уебсайта</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/mineralnabanya-project.png"
                                    alt="Минерална баня – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2>Минерална баня</h2>
                            <p>Туристически сайт с информация за района, забележителностите и възможностите за почивка.
                            </p>
                        </div>
                        <hr>
                        <a target="_blank" href="https://mineralnabanya.com"
                            class="btn-default show-website">Разгледай уебсайта</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/prikluchenci-project.png"
                                    alt="Детска ясла Приключенци – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2>Детска ясла „Приключенци"</h2>
                            <p>Топъл и приветлив сайт за детска ясла с галерия.</p>
                        </div>
                        <hr>
                        <a target="_blank" href="https://prikluchenci.bg" class="btn-default show-website">Разгледай
                            уебсайта</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/vremezasun-project.png" alt="Време е за сън – проект">
                            </figure>
                        </div>
                        <div class="works-content">
                            <h2>„Време е за сън"</h2>
                            <p>Консултации по детски сън.</p>
                        </div>
                        <hr>
                        <a target="_blank" href="https://vremezasun.com" class="btn-default show-website">Разгледай
                            уебсайта</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Our Work Section End -->

    <section class="our-work">
        <div class="container">

            <div class="section-title">
                <h2 class="text-anime-style-3 mb-5 text-center text-black">
                    Портфолио - Видеа
                </h2>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <!-- Works Item Start -->
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/girl-reaction.gif" alt="Портфолио видео">
                            </figure>
                        </div>



                    </div>
                    <!-- Works Item End -->
                </div>

                <div class="col-md-4">
                    <!-- Works Item Start -->
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/girl2-cup.gif" alt="Портфолио видео">
                            </figure>
                        </div>
                    </div>
                    <!-- Works Item End -->
                </div>

                <div class="col-md-4">
                    <!-- Works Item Start -->
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/product-1.gif" alt="Портфолио видео">
                            </figure>
                        </div>
                    </div>
                    <!-- Works Item End -->
                </div>

            </div>

        </div>
    </section>

        <section class="our-work">
        <div class="container">

            <div class="section-title">
                <h2 class="text-anime-style-3 mb-5 text-center text-black">
                    Портфолио - Дизайн
                </h2>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <!-- Works Item Start -->
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/img-port1.jpeg" alt="Портфолио снимки">
                            </figure>
                        </div>



                    </div>
                    <!-- Works Item End -->
                </div>

                <div class="col-md-3">
                    <!-- Works Item Start -->
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/img-port2.jpeg" alt="Портфолио снимки">
                            </figure>
                        </div>
                    </div>
                    <!-- Works Item End -->
                </div>

                <div class="col-md-3">
                    <!-- Works Item Start -->
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/img-port3.jpeg" alt="Портфолио снимки">
                            </figure>
                        </div>
                    </div>
                    <!-- Works Item End -->
                </div>


                <div class="col-md-3">
                    <!-- Works Item Start -->
                    <div class="works-item">
                        <div class="works-image">
                            <figure class="image-anime">
                                <img src="/images/testimonials/img-port4.jpeg" alt="Портфолио снимки">
                            </figure>
                        </div>
                    </div>
                    <!-- Works Item End -->
                </div>


            </div>

        </div>
    </section>

</x-layouts.front-end>
