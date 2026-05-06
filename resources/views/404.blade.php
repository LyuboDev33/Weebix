<x-layouts.front-end>

<div class="error-page">
    <div class="container">
        <div class="row">

            <div class="error-page-image">
                <img src="{{ asset('/images/404-error-img.png') }}" alt="">
            </div>

            <div class="error-page-content">
                <div class="error-page-content-heading">

                    <h2 class="text-anime-style-3">
                        Упсс.... Страницата не е намерена!
                    </h2>

                    <p>
                        Страницата, която се опитвате да достъпите не съществува.
                    </p>

                </div>

                <a class="btn-default" href="{{ url('/') }}">
                    Върнете се към началната страница
                </a>

            </div>

        </div>
    </div>
</div>

</x-layouts.front-end>
