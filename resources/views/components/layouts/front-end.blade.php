<html lang="zxx" style="">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="google-site-verification" content="Q5aRku2wsSz-AepvwPrdh69Cg_tcA7Hzafa2dgIl0lc" />

    <meta name="twitter:image" content="https://weebix.bg/images/seo.png">
    <meta property="og:image" content="https://weebix.bg/images/seo.png">


    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png?v=<?php echo time(); ?>">
    <!-- Bootstrap Css -->
    <link href="/css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="/css/slicknav.min.css?v=<?php echo time(); ?>" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="/css/swiper-bundle.min.css?v=<?php echo time(); ?>">
    <!-- Font Awesome Icon Css -->
    <link href="/css/all.css?v=<?php echo time(); ?>" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="/css/animate.css?v=<?php echo time(); ?>" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="/css/magnific-popup.css?v=<?php echo time(); ?>">
    <!-- Main Css -->
    <link href="/css/main.css?v=<?php echo time(); ?>" rel="stylesheet" media="screen">
    <!-- Custom Css -->
    <link href="/css/custom.css?v=<?php echo time(); ?>" rel="stylesheet" media="screen">

    <link rel="stylesheet" href="https://unpkg.com/lenis@1.3.23/dist/lenis.css">
    <script src="https://unpkg.com/lenis@1.3.23/dist/lenis.min.js"></script>

    <script>
        const lenis = new Lenis({
            duration: 1,
            smoothWheel: true,
            wheelMultiplier: 0.8,
            touchMultiplier: 0.8,
            lerp: 0.5
        });

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }

        requestAnimationFrame(raf);
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HEZF5VYBVR"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HEZF5VYBVR');
    </script>


    @yield('SEO')

</head>

<body class="tt-magic-cursor" style="">

    {{-- <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="/images/loader.svg" alt=""></div>
        </div>
    </div>
    <!-- Preloader End --> --}}

    <!-- Magic Cursor Start -->
    <div id="magic-cursor" style="opacity: 0; visibility: hidden;">
        <div id="ball"
            style="opacity: 0.5; border-width: 2px; height: 34px; width: 34px; transform: translate(-50%, -50%) translate(896px, 256px);">
        </div>
    </div>
    <!-- Magic Cursor End -->


    <div class="cookies__modal shadow wrapper">
        <img class="cookies" src="/images/cookie.webp" alt="Бисквитки">
        <div>
            <p><strong>W<span class="text-theme">ee</span>bix</strong> използва бисквитки за по-добро и персонализирано
                потребителско изживяване.</p>

            <div class="d-flex gap-4 justify-content-center mt-30">
                <button id="acceptBtn">Добре, разбрах</button>
            </div>
        </div>
    </div>


    @include('components.Frontend.header')


    <main>
        {{ $slot }}
    </main>


    @include('components.Frontend.footer')



</body>

</html>
