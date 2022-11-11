<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
@section('sidebar')
@show
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">BurseCurse</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="{{route('index')}}">Главная</a>
        <a class="p-2 text-dark" href="{{route('currency')}}">Курсы</a>
        <a class="p-2 text-dark" href="{{route('regions')}}">Регионы</a>
        <a class="p-2 text-dark" href="{{route('about')}}">О банках</a>
    </nav>
</div>
@yield('content')

<footer class="page-footer font-small blue pt-4 footer">

    <div class="container-fluid text-center text-md-left">

        <div class="row">

            <div class="col-md-6 mt-md-0 mt-3">

                <h5 class="text-uppercase">Здесь есть быстрая информация</h5>
                <p>Навигационное меню и ссылки на различные источники</p>

            </div>

            <hr class="clearfix w-100 d-md-none pb-3">

            <div class="col-md-3 mb-md-0 mb-3">

                <h5 class="text-uppercase">Меню</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="{{route('index')}}">Главная</a>
                    </li>
                    <li>
                        <a href="{{route('currency')}}">Курсы</a>
                    </li>
                    <li>
                        <a href="{{route('regions')}}">Регионы</a>
                    </li>
                    <li>
                        <a href="{{route('about')}}">О банках</a>
                    </li>
                </ul>

            </div>

            <div class="col-md-3 mb-md-0 mb-3">

                <h5 class="text-uppercase">Ссылки</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Telegram</a>
                    </li>
                    <li>
                        <a href="#!">VK</a>
                    </li>
                    <li>
                        <a href="#!">OK</a>
                    </li>
                    <li>
                        <a href="#!">Mail</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2022 Copyright:
        <a href="/"> BurseCurse</a>
    </div>
</footer>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
