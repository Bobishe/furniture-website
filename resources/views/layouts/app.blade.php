<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">

    <link rel="stylesheet" href={{ asset('assets/css/lib/bootstrap.min.css') }}>
    <link rel="stylesheet" href="{{asset('assets/js/lib/aos-master/dist/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lib/bootstrap-icons/font/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/lib/cropperjs/src/index.css')}}">


    <title>Мебель на заказ</title>

</head>
<body>

<div class="container">
    <header class="d-flex flex-wrap justify-content-center pt-2 pb-2">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <div class="logo_img"></div>
        </a>

        <ul class=" nav nav-pills pt-3" style="justify-content: center!important;">
            <li class=" nav-item"><a href="/works" class="my_a nav-link">Наши работы</a></li>
            <li class=" nav-item"><a href="/catalog" class="my_a nav-link">Каталог</a></li>
            {{--<li class="nav-item"><a href="#" class="my_a nav-link">О нас</a></li>--}}
            <li class="nav-item"><a href="/contact" class="my_a nav-link">Контакты</a></li>
            <li class="nav-item"><a href="/reviews" class="my_a nav-link">Отзывы</a></li>
            <!-- Authentication Links -->
            @guest

            @else
                <li class="nav-item dropdown" style="display: flex">
                    <a class="dropdown-item" href="/admin">Панель управления</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Выйти') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>
            @endguest
        </ul>
    </header>
</div>


@yield('content')


<footer class="d-flex flex-wrap justify-content-center pt-5 pb-2">
    <div class="container">
        <div class="footer_content">
            <a href="/" class=" text-decoration-none">
                <div class="footer_img"></div>
            </a>
        </div>

    </div>
</footer>


<script src="{{ asset('assets/js/lib/cropperjs/src/index.js') }}"></script>
<script src="{{ asset('assets/js/lib/aos-master/dist/aos.js') }}"></script>
<script>
    AOS.init();
</script>

<script src="{{ asset('assets/js/lib/bootstrap.min.js') }}"></script>

</body>
</html>
