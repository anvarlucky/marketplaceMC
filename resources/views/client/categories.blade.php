@extends('layouts.Main')
@section('content')
    <!-- Carousel Panel -->
    <div class="container px-lg-0">
        <div class="swiper header-swiper rounded mt-4">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{asset('/assets/images/slider.jpg')}}" class="w-100" alt="slider"></div>
                <div class="swiper-slide"><img src="{{asset('/assets/images/slider.jpg')}}" class="w-100" alt="slider"></div>
                <div class="swiper-slide"><img src="{{asset('/assets/images/slider.jpg')}}" class="w-100" alt="slider"></div>
                <div class="swiper-slide"><img src="{{asset('/assets/images/slider.jpg')}}" class="w-100" alt="slider"></div>
                <div class="swiper-slide"><img src="{{asset('/assets/images/slider.jpg')}}" class="w-100" alt="slider"></div>
            </div>
            <div class="swiper-button-next fs-10 end-0 text-white">
                <div class="header-swiper_button-next"></div>
            </div>
            <div class="swiper-button-prev fs-10 start-0 text-white">
                <div class="header-swiper_button-prev"></div>
            </div>
        </div>
    </div>

    <!-- Search Panel -->
    <div class="container">
        <form class="row mt-4">
            <div class="col-lg-4 mb-2 mb-lg-0 d-flex align-items-center rounded-start border-lg border-end-lg-0">
                <input type="text" class="form-control border-lg-0" placeholder="Qidiruv...">
            </div>
            <div class="col-lg-2 mb-2 mb-lg-0 d-flex flex-column py-2 border-lg border-end-lg-0">
                <label class="d-block" for="region">Hudud</label>
                <select id="region" class="form-select fw-600 border-lg-0 p-lg-0">
                    <option>Tanlang</option>
                </select>
            </div>
            <div class="col-lg-2 mb-2 mb-lg-0 d-flex flex-column py-2 border-lg border-end-lg-0">
                <label class="d-block" for="type">Turi</label>
                <select id="type" class="form-select fw-600 border-lg-0 p-lg-0">
                    <option>Tanlang</option>
                </select>
            </div>
            <div class="col-lg-2 mb-2 mb-lg-0 d-flex flex-column py-2 border-lg">
                <label class="d-block" for="type">Marka</label>
                <select id="type" class="form-select fw-600 border-lg-0 p-lg-0">
                    <option>Tanlang</option>
                </select>
            </div>
            <div class="col-lg-2 mb-2 mb-lg-0 d-flex align-items-center justify-content-center rounded-end border-lg border-start-lg-0">
                <button class="btn btn-primary text-white px-xl-4 text-nowrap">
                    E'lonni ko'rsatish
                </button>
            </div>
        </form>
    </div>
    <!-- Category Panel -->
    <div class="container category">
        <div class="row mt-4">
            <nav class="p-lg-0 d-flex align-items-center">
                <a href="" class="nav-navigation">
                    Bosh sahifa
                </a>
                <span class="text-primary fs-20 mx-2">›</span>
                <a href="" class="nav-navigation">
                    Maxsus texnika
                </a>
                <span class="text-primary fs-20 mx-2">›</span>
                <a href="" class="nav-navigation active">
                    Yuk avtomobillari
                </a>
            </nav>

            <p class="dry-title px-lg-0 py-3 mb-0">
                Yuk avtomobillari
            </p>

            <div class="category-item ps-lg-0">
                <a href="#" class="d-block text-center p-3 border rounded">
                    <img src="{{asset('/assets/images/car_1.png')}}" height="160" class="w-100" alt="category">

                    <p class="category-text mt-3 mb-0">Yuk avtomobillari</p>
                </a>
            </div>
            <div class="category-item ps-lg-0">
                <a href="#" class="d-block text-center p-3 border rounded">
                    <img src="{{asset('/assets/images/car_2.png')}}" height="160" class="w-100" alt="category">

                    <p class="category-text mt-3 mb-0">Ekskovatorlar</p>
                </a>
            </div>
            <div class="category-item ps-lg-0">
                <a href="#" class="d-block text-center p-3 border rounded">
                    <img src="{{asset('/assets/images/car_3.png')}}" height="160" class="w-100" alt="category">

                    <p class="category-text mt-3 mb-0">Samosvallar</p>
                </a>
            </div>
            <div class="category-item px-lg-0">
                <a href="#" class="d-block text-center p-3 border rounded">
                    <img src="{{asset('/assets/images/car_4.png')}}" height="160" class="w-100" alt="category">

                    <p class="category-text mt-3 mb-0">Avtomobil kranlari</p>
                </a>
            </div>
            <div class="category-item pe-lg-0">
                <a href="#" class="d-block text-center p-3 border rounded">
                    <img src="{{asset('/assets/images/car_5.png')}}" height="160" class="w-100" alt="category">

                    <p class="category-text mt-3 mb-0">Tayanch yuk mashinalar</p>
                </a>
            </div>
        </div>
    </div>

    <!-- Recommended Panel -->

    <div class="container recommended">
        <div class="row align-items-stretch mt-4">
            <p class="special-title px-lg-0">Tavsiya qilingan</p>

            <div class="recommended-item ps-lg-0">
                <div class="p-3 border rounded">
                    <img src="{{asset('/assets/images/special_1.png')}}" height="160" class="w-100" alt="special">
                    <p class="special-ad">MAZ-KS-45729A-0-01 ko'chma krani</p>

                    <p class="special-price">
                        1 050 000 000 so’m/dona
                    </p>

                    <small class="special-type text-success"><i class="fas fa-check-circle"></i>
                        Arenda</small>
                    <small class="special-delivery mx-1"><i class="fas fa-truck"></i> Yetkazib
                        berish</small>
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary text-white mt-3 px-4">
                            <i class="fas fa-phone-alt"></i>

                            Telefon
                        </button>

                        <div class="special-icons mt-3">
                            <i class="far fa-comments"></i>

                            <i class="far fa-star ms-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommended-item ps-lg-0">
                <div class="p-3 border rounded">
                    <img src="{{asset('/assets/images/special_2.png')}}" height="160" class="w-100" alt="special">
                    <p class="special-ad">MAZ-KS-45729A-0-01 ko'chma krani</p>

                    <p class="special-price">
                        1 050 000 000 so’m/dona
                    </p>

                    <small class="special-type text-success"><i class="fas fa-check-circle"></i>
                        Arenda</small>
                    <small class="special-delivery mx-1"><i class="fas fa-truck"></i> Yetkazib
                        berish</small>
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary text-white mt-3 px-4">
                            <i class="fas fa-phone-alt"></i>

                            Telefon
                        </button>

                        <div class="special-icons mt-3">
                            <i class="far fa-comments"></i>

                            <i class="far fa-star ms-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommended-item ps-lg-0">
                <div class="p-3 border rounded">
                    <img src="{{asset('/assets/images/special_3.png')}}" height="160" class="w-100" alt="special">
                    <p class="special-ad">MAZ-KS-45729A-0-01 ko'chma krani</p>

                    <p class="special-price">
                        1 050 000 000 so’m/dona
                    </p>

                    <small class="special-type text-success"><i class="fas fa-check-circle"></i>
                        Arenda</small>
                    <small class="special-delivery mx-1"><i class="fas fa-truck"></i> Yetkazib
                        berish</small>
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary text-white mt-3 px-4">
                            <i class="fas fa-phone-alt"></i>

                            Telefon
                        </button>

                        <div class="special-icons mt-3">
                            <i class="far fa-comments"></i>

                            <i class="far fa-star ms-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommended-item px-lg-0">
                <div class="p-3 border rounded">
                    <img src="{{asset('/assets/images/special_4.png')}}" height="160" class="w-100" alt="special">
                    <p class="special-ad">MAZ-KS-45729A-0-01 ko'chma krani</p>

                    <p class="special-price">
                        1 050 000 000 so’m/dona
                    </p>

                    <small class="special-type text-success"><i class="fas fa-check-circle"></i>
                        Arenda</small>
                    <small class="special-delivery mx-1"><i class="fas fa-truck"></i> Yetkazib
                        berish</small>
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary text-white mt-3 px-4">
                            <i class="fas fa-phone-alt"></i>

                            Telefon
                        </button>

                        <div class="special-icons mt-3">
                            <i class="far fa-comments"></i>

                            <i class="far fa-star ms-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommended-item pe-lg-0">
                <div class="p-3 border rounded">
                    <img src="{{asset('/assets/images/special_5.png')}}" height="160" class="w-100" alt="special">
                    <p class="special-ad">MAZ-KS-45729A-0-01 ko'chma krani</p>

                    <p class="special-price">
                        1 050 000 000 so’m/dona
                    </p>

                    <small class="special-type text-success"><i class="fas fa-check-circle"></i>
                        Arenda</small>
                    <small class="special-delivery mx-1"><i class="fas fa-truck"></i> Yetkazib
                        berish</small>
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary text-white mt-3 px-4">
                            <i class="fas fa-phone-alt"></i>

                            Telefon
                        </button>

                        <div class="special-icons mt-3">
                            <i class="far fa-comments"></i>

                            <i class="far fa-star ms-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-stretch mt-3">
            <div class="recommended-item ps-lg-0">
                <div class="p-3 border rounded">
                    <img src="{{asset('/assets/images/special_1.png')}}" height="160" class="w-100" alt="special">
                    <p class="special-ad">MAZ-KS-45729A-0-01 ko'chma krani</p>

                    <p class="special-price">
                        1 050 000 000 so’m/dona
                    </p>

                    <small class="special-type text-success"><i class="fas fa-check-circle"></i>
                        Arenda</small>
                    <small class="special-delivery mx-1"><i class="fas fa-truck"></i> Yetkazib
                        berish</small>
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary text-white mt-3 px-4">
                            <i class="fas fa-phone-alt"></i>

                            Telefon
                        </button>

                        <div class="special-icons mt-3">
                            <i class="far fa-comments"></i>

                            <i class="far fa-star ms-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommended-item ps-lg-0">
                <div class="p-3 border rounded">
                    <img src="{{asset('/assets/images/special_2.png')}}" height="160" class="w-100" alt="special">
                    <p class="special-ad">MAZ-KS-45729A-0-01 ko'chma krani</p>

                    <p class="special-price">
                        1 050 000 000 so’m/dona
                    </p>

                    <small class="special-type text-success"><i class="fas fa-check-circle"></i>
                        Arenda</small>
                    <small class="special-delivery mx-1"><i class="fas fa-truck"></i> Yetkazib
                        berish</small>
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary text-white mt-3 px-4">
                            <i class="fas fa-phone-alt"></i>

                            Telefon
                        </button>

                        <div class="special-icons mt-3">
                            <i class="far fa-comments"></i>

                            <i class="far fa-star ms-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommended-item ps-lg-0">
                <div class="p-3 border rounded">
                    <img src="{{asset('/assets/images/special_3.png')}}" height="160" class="w-100" alt="special">
                    <p class="special-ad">MAZ-KS-45729A-0-01 ko'chma krani</p>

                    <p class="special-price">
                        1 050 000 000 so’m/dona
                    </p>

                    <small class="special-type text-success"><i class="fas fa-check-circle"></i>
                        Arenda</small>
                    <small class="special-delivery mx-1"><i class="fas fa-truck"></i> Yetkazib
                        berish</small>
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary text-white mt-3 px-4">
                            <i class="fas fa-phone-alt"></i>

                            Telefon
                        </button>

                        <div class="special-icons mt-3">
                            <i class="far fa-comments"></i>

                            <i class="far fa-star ms-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommended-item px-lg-0">
                <div class="p-3 border rounded">
                    <img src="{{asset('/assets/images/special_4.png')}}" height="160" class="w-100" alt="special">
                    <p class="special-ad">MAZ-KS-45729A-0-01 ko'chma krani</p>

                    <p class="special-price">
                        1 050 000 000 so’m/dona
                    </p>

                    <small class="special-type text-success"><i class="fas fa-check-circle"></i>
                        Arenda</small>
                    <small class="special-delivery mx-1"><i class="fas fa-truck"></i> Yetkazib
                        berish</small>
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary text-white mt-3 px-4">
                            <i class="fas fa-phone-alt"></i>

                            Telefon
                        </button>

                        <div class="special-icons mt-3">
                            <i class="far fa-comments"></i>

                            <i class="far fa-star ms-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommended-item pe-lg-0">
                <div class="p-3 border rounded">
                    <img src="{{asset('/assets/images/special_5.png')}}" height="160" class="w-100" alt="special">
                    <p class="special-ad">MAZ-KS-45729A-0-01 ko'chma krani</p>

                    <p class="special-price">
                        1 050 000 000 so’m/dona
                    </p>

                    <small class="special-type text-success"><i class="fas fa-check-circle"></i>
                        Arenda</small>
                    <small class="special-delivery mx-1"><i class="fas fa-truck"></i> Yetkazib
                        berish</small>
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary text-white mt-3 px-4">
                            <i class="fas fa-phone-alt"></i>

                            Telefon
                        </button>

                        <div class="special-icons mt-3">
                            <i class="far fa-comments"></i>

                            <i class="far fa-star ms-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row align-items-stretch mt-3">
            <div class="recommended-item ps-lg-0">
                <div class="p-3 border rounded">
                    <img src="{{asset('/assets/images/special_1.png')}}" height="160" class="w-100" alt="special">
                    <p class="special-ad">MAZ-KS-45729A-0-01 ko'chma krani</p>

                    <p class="special-price">
                        1 050 000 000 so’m/dona
                    </p>

                    <small class="special-type text-success"><i class="fas fa-check-circle"></i>
                        Arenda</small>
                    <small class="special-delivery mx-1"><i class="fas fa-truck"></i> Yetkazib
                        berish</small>
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary text-white mt-3 px-4">
                            <i class="fas fa-phone-alt"></i>

                            Telefon
                        </button>

                        <div class="special-icons mt-3">
                            <i class="far fa-comments"></i>

                            <i class="far fa-star ms-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommended-item ps-lg-0">
                <div class="p-3 border rounded">
                    <img src="{{asset('/assets/images/special_2.png')}}" height="160" class="w-100" alt="special">
                    <p class="special-ad">MAZ-KS-45729A-0-01 ko'chma krani</p>

                    <p class="special-price">
                        1 050 000 000 so’m/dona
                    </p>

                    <small class="special-type text-success"><i class="fas fa-check-circle"></i>
                        Arenda</small>
                    <small class="special-delivery mx-1"><i class="fas fa-truck"></i> Yetkazib
                        berish</small>
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary text-white mt-3 px-4">
                            <i class="fas fa-phone-alt"></i>

                            Telefon
                        </button>

                        <div class="special-icons mt-3">
                            <i class="far fa-comments"></i>

                            <i class="far fa-star ms-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommended-item ps-lg-0">
                <div class="p-3 border rounded">
                    <img src="{{asset('/assets/images/special_3.png')}}" height="160" class="w-100" alt="special">
                    <p class="special-ad">MAZ-KS-45729A-0-01 ko'chma krani</p>

                    <p class="special-price">
                        1 050 000 000 so’m/dona
                    </p>

                    <small class="special-type text-success"><i class="fas fa-check-circle"></i>
                        Arenda</small>
                    <small class="special-delivery mx-1"><i class="fas fa-truck"></i> Yetkazib
                        berish</small>
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary text-white mt-3 px-4">
                            <i class="fas fa-phone-alt"></i>

                            Telefon
                        </button>

                        <div class="special-icons mt-3">
                            <i class="far fa-comments"></i>

                            <i class="far fa-star ms-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommended-item px-lg-0">
                <div class="p-3 border rounded">
                    <img src="{{asset('/assets/images/special_4.png')}}" height="160" class="w-100" alt="special">
                    <p class="special-ad">MAZ-KS-45729A-0-01 ko'chma krani</p>

                    <p class="special-price">
                        1 050 000 000 so’m/dona
                    </p>

                    <small class="special-type text-success"><i class="fas fa-check-circle"></i>
                        Arenda</small>
                    <small class="special-delivery mx-1"><i class="fas fa-truck"></i> Yetkazib
                        berish</small>
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary text-white mt-3 px-4">
                            <i class="fas fa-phone-alt"></i>

                            Telefon
                        </button>

                        <div class="special-icons mt-3">
                            <i class="far fa-comments"></i>

                            <i class="far fa-star ms-2"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recommended-item pe-lg-0">
                <div class="p-3 border rounded">
                    <img src="{{asset('/assets/images/special_5.png')}}" height="160" class="w-100" alt="special">
                    <p class="special-ad">MAZ-KS-45729A-0-01 ko'chma krani</p>

                    <p class="special-price">
                        1 050 000 000 so’m/dona
                    </p>

                    <small class="special-type text-success"><i class="fas fa-check-circle"></i>
                        Arenda</small>
                    <small class="special-delivery mx-1"><i class="fas fa-truck"></i> Yetkazib
                        berish</small>
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary text-white mt-3 px-4">
                            <i class="fas fa-phone-alt"></i>

                            Telefon
                        </button>

                        <div class="special-icons mt-3">
                            <i class="far fa-comments"></i>

                            <i class="far fa-star ms-2"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <p class="dry-title px-lg-0 py-3 mb-0">
                Maxsus texnika turlari
            </p>

            <div class="col-lg-2 ps-lg-0">
                <ul class="p-0">
                    <li>
                        <a href="">
                            Asfalt yotqizgich
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Assenizator
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Avtobeton nasos
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Avtobetonqorgich
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Avtodrom
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Avtokran
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Avtominora
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Avtominora
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <ul class="p-0">
                    <li>
                        <a href="">Kommunal maxsus-texnikasi</a>
                    </li>
                    <li>
                        <a href="">Manipuklyator-pogruzchik</a>
                    </li>
                    <li>
                        <a href="">O'zi yuklovchi avtobetonqorgich</a>
                    </li>
                    <li>
                        <a href="">Platformali pogruzchik</a>
                    </li>
                    <li>
                        <a href="">Yer tekislaydigan mashina</a>
                    </li>
                    <li>
                        <a href="">Tirklamalar, yarimtirkamlar</a>
                    </li>
                    <li>
                        <a href="">Yoqilg'i zapravshik</a>
                    </li>
                    <li>
                        <a href="">Manipuklyator-pogruzchik</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <ul class="p-0">
                    <li>
                        <a href="">
                            Asfalt yotqizgich
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Assenizator
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Avtobeton nasos
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Avtobetonqorgich
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Avtodrom
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Avtokran
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Avtominora
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Avtominora
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <ul class="p-0">
                    <li>
                        <a href="">
                            Kommunal maxsus-texnikasi
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Manipuklyator-pogruzchik
                        </a>
                    </li>
                    <li>
                        <a href="">
                            O'zi yuklovchi avtobetonqorgich
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Platformali pogruzchik
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Yer tekislaydigan mashina
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Tirklamalar, yarimtirkamlar
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Yoqilg'i zapravshik
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Manipuklyator-pogruzchik
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <ul class="p-0">
                    <li>
                        <a href="">
                            Kommunal maxsus-texnikasi
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Manipuklyator-pogruzchik
                        </a>
                    </li>
                    <li>
                        <a href="">
                            O'zi yuklovchi avtobetonqorgich
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Platformali pogruzchik
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Yer tekislaydigan mashina
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Tirklamalar, yarimtirkamlar
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Yoqilg'i zapravshik
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Manipuklyator-pogruzchik
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 pe-lg-0">
                <ul class="p-0">
                    <li>
                        <a href="">
                            Asfalt yotqizgich
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Assenizator
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Avtobeton nasos
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Avtobetonqorgich
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Avtodrom
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Avtokran
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Avtominora
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Avtominora
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <p class="dry-title px-lg-0 py-3 mb-0">
                Hududlarda maxsus texnika turlari
            </p>

            <div class="col-lg-2 ps-lg-0">
                <ul class="p-0">
                    <li>
                        <a href="">
                            Andijon <span class="text-custom-light_gray">446</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Buxoro <span class="text-custom-light_gray">446</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Chust tumani <span class="text-custom-light_gray">446</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Denov <span class="text-custom-light_gray">446</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <ul class="p-0">
                    <li>
                        <a href="">
                            Farg'ona <span class="text-custom-light_gray">446</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Guliston <span class="text-custom-light_gray">446</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Jizzax <span class="text-custom-light_gray">446</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Kitob tumani <span class="text-custom-light_gray">446</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2">
                <ul class="p-0">
                    <li>
                        <a href="">
                            Samarqand <span class="text-custom-light_gray">446</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Shahrisabz <span class="text-custom-light_gray">446</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Qarshi <span class="text-custom-light_gray">446</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Qo'qon <span class="text-custom-light_gray">446</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 pe-lg-0">
                <ul class="p-0">
                    <li>
                        <a href="">
                            Toshkent <span class="text-custom-light_gray">446</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Urganch <span class="text-custom-light_gray">446</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Xiva tumani <span class="text-custom-light_gray">446</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Yakkabog' tumani <span class="text-custom-light_gray">446</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection