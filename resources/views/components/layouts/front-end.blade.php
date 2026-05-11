<html lang="zxx" style="">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.png?v=<?php echo time(); ?>">
    <!-- Google Fonts Css-->

    <!-- Bootstrap Css -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="/css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css-->
    <link href="/css/all.css" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="/css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <!-- Main Css -->
    <link href="/css/main.css" rel="stylesheet" media="screen">
    <!-- Custom Css -->
    <link href="/css/custom.css" rel="stylesheet" media="screen">

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
            <p><strong>W<span class="text-theme">ee</span>bix</strong> използва бисквитки за по-добро и персонализирано потребителско изживяване.</p>

            <div class="d-flex gap-4 justify-content-center mt-30">
                <button id="acceptBtn">Добре, разбрах</button>
                <button id="declineBtn">Отхвърли</button>
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
