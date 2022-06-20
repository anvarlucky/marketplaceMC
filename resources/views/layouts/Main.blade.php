<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/swiper.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/main.css')}}">
    <title>Maxsus texnika</title>
</head>
<body>
<div class="main-body">

    <!-- Header Panel -->
    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <select class="form-select-white fw-600 bg-transparent border-0 w-auto">
                        <option>UZ/so'm</option>
                        <option>RU/сум</option>
                        <option>EN/sum</option>
                    </select>


                    <div class="d-flex w-auto">
                        <p class="mb-0 me-4">Saralanganlar</p>

                        <div class="d-flex">
                            <a class="text-white" href="#">Kirish</a> <span class="mx-2">/</span> <a
                                    class="text-white" href="#">Ro'yhatdan o'tish</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="navigation">
                    <div class="logo">
                        <img src="{{asset('/assets/images/logo.svg')}}" alt="logo">
                    </div>

                    <nav class="navbar my-lg-0 my-3 mx-auto">
                        <a href="/" class="nav-link me-2 active">
                            Maxsus texnika
                        </a>
                        <a href="#" class="nav-link me-2">
                            Qurilish materiallari
                        </a>
                        <a href="/cluster" class="nav-link">
                            Korxona va klasterlar
                        </a>
                    </nav>

                    <div class="d-flex justify-content-between w-lg-auto w-100">
                        <button class="btn text-white me-3 focus-none">
                            <i class="fal fa-search"></i>
                        </button>
                        <button class="btn btn-primary text-white focus-none">
                            <i class="fal fa-plus"></i>
                            E'lon berish
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="row footer-row py-3 font-roboto">
                <div class="col-lg-3 ps-lg-0">
                    <p href="#" class="footer-title">Sayt haqida ma’lumot</p>
                    <a href="#" class="footer-link">Foydalanuvchi shartnomasi</a>
                </div>
                <div class="col-lg-3">
                    <a href="#" class="footer-title">Shaxsiy kabinet</a>
                    <a href="#" class="footer-link">Ro’yhatdan o’tish</a>

                </div>
                <div class="col-lg-2">
                    <p href="" class="footer-title">
                        E’lon berish
                    </p>
                    <a href="" class="footer-link">
                        Saralanganlar
                    </a>
                </div>
                <div class="col-lg-2">
                    <p class="footer-title">Aloqa</p>
                    <a href="" class="footer-link">+998(71) 123 45 67</a>
                </div>
                <div class="col-lg-2">
                    <p class="footer-title">Ijtimoiy tarmoqlar</p>

                    <a href="" class="text-white fs-22 me-3">
                        <i class="fab fa-facebook-square"></i>
                    </a>

                    <a href="" class="text-white fs-22">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <div class="row mt-3">
                <p class="footer-text px-lg-0">O‘zbekiston Respublikasi Qurilish vazirligi © 2020</p>
            </div>
        </div>
    </footer>
</div>

<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/assets/js/popper.js')}}"></script>
<script src="{{asset('/assets/js/swiper.js')}}"></script>
<script>
    var swiper = new Swiper(".header-swiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    var swiper_2 = new Swiper(".special-swiper", {
        slidesPerView: 1.3,
        spaceBetween: 20,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2.4,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 12,
            },
        },
    });
</script>
</body>
</html>