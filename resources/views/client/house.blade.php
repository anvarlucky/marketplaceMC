@extends('layouts.Main')
@section('content')
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
                   Namunaviy loyihalar
                </a>
                <span class="text-primary fs-20 mx-2">›</span>
                <a href="" class="nav-navigation active">
                    Namunaviy loyihalar
                </a>
            </nav>

            <p class="dry-title px-lg-0 py-3 mb-0">
                Namunaviy loyihalar
            </p>
            <div class="category-item pe-lg-0">
                <a href="/detsad" class="d-block text-center p-3 border rounded">
                    <img src="{{asset('/assets/house/Rectangle 12288-5.jpg')}}" height="160" class="w-100" alt="category">

                    <p class="category-text mt-3 mb-0">Maktabgacha ta`lim muassasasi</p>
                </a>
            </div>
            <div class="category-item ps-lg-0">
                <a href="#" class="d-block text-center p-3 border rounded">
                    <img src="{{asset('/assets/house/Rectangle 12288.jpg')}}" height="160" class="w-100" alt="category">

                    <p class="category-text mt-3 mb-0">Ko`p qavatli uylar</p>
                </a>
            </div>
            <div class="category-item ps-lg-0">
                <a href="#" class="d-block text-center p-3 border rounded">
                    <img src="{{asset('/assets/house/Rectangle 12288-1.jpg')}}" height="160" class="w-100" alt="category">

                    <p class="category-text mt-3 mb-0">"Yangi O`zbekiston" uylar</p>
                </a>
            </div>
            <div class="category-item ps-lg-0">
                <a href="#" class="d-block text-center p-3 border rounded">
                    <img src="{{asset('/assets/house/Rectangle 12288-8.jpg')}}" height="160" class="w-100" alt="category">

                    <p class="category-text mt-3 mb-0">Xizmat obyektlari</p>
                </a>
            </div>
            <div class="category-item px-lg-0">
                <a href="#" class="d-block text-center p-3 border rounded">
                    <img src="{{asset('/assets/house/Rectangle 12288-6.jpg')}}" height="160" class="w-100" alt="category">

                    <p class="category-text mt-3 mb-0">Namunaviy maktablar</p>
                </a>
            </div>

        </div>
    </div>

    <!-- Special Panel -->
    <div class="container special mb-5">
        <div class="row align-items-stretch mt-4">
            <p class="special-title px-lg-0">Sotuvchining boshqa takliflari</p>

            <div class="swiper special-swiper rounded mt-4">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="special-item ps-0">
                            <div class="p-3 border border-bottom-0 rounded-top">
                                <a href="/detsad"><img src="{{asset('/assets/house/001.jpg')}}" height="160" class="w-100" alt="special"></a>
                                <p class="special-ad">120 o`rinli bog`cha</p>

                                <p class="special-price">
                                    Bog`cha
                                </p>
                            </div>

                            <div class="border rounded-bottom p-3">
                        <span class="d-flex me-2">
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas fa-star text-custom-light_gray"></i>
                        </span>
                                Izohlar(12)
                                </a>

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
                    <div class="swiper-slide">
                        <div class="special-item ps-0">
                            <div class="p-3 border border-bottom-0 rounded-top">
                                <a href="#"><img src="{{asset('/assets/house/image 29.jpg')}}" height="160" class="w-100" alt="special"></a>
                                <p class="special-ad">7 qavatli turar-joy binosi</p>

                                <p class="special-price">
                                    2900000 so’m
                                </p>
                            </div>

                            <div class="border rounded-bottom p-3">
                        <span class="d-flex me-2">
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas fa-star text-custom-light_gray"></i>
                        </span>
                                    Izohlar(12)
                                </a>

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

                    <div class="swiper-slide">
                        <div class="special-item ps-0">
                            <div class="p-3 border border-bottom-0 rounded-top">
                                <a href="#"><img src="{{asset('/assets/house/image 31.jpg')}}" height="160" class="w-100" alt="special"></a>
                                <p class="special-ad">5 qavatli turar-joy binosi</p>

                                <p class="special-price">
                                    2900000 so’m
                                </p>
                            </div>

                            <div class="border rounded-bottom p-3">
                        <span class="d-flex me-2">
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas fa-star text-custom-light_gray"></i>
                        </span>
                                Izohlar(12)
                                </a>

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
                    <div class="swiper-slide">
                        <div class="special-item ps-0">
                            <div class="p-3 border border-bottom-0 rounded-top">
                                <a href="#"><img src="{{asset('/assets/house/image 32.jpg')}}" height="160" class="w-100" alt="special"></a>
                                <p class="special-ad">ko`p kvartirali turar-joy binosi</p>

                                <p class="special-price">
                                    2900000 so’m
                                </p>
                            </div>

                            <div class="border rounded-bottom p-3">
                        <span class="d-flex me-2">
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas fa-star text-custom-light_gray"></i>
                        </span>
                                Izohlar(12)
                                </a>

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
                    <div class="swiper-slide">
                        <div class="special-item ps-0">
                            <div class="p-3 border border-bottom-0 rounded-top">
                                <a href="#"><img src="{{asset('/assets/house/image 29.jpg')}}" height="160" class="w-100" alt="special"></a>
                                <p class="special-ad">7 qavatli turar-joy binosi</p>

                                <p class="special-price">
                                    2900000 so’m
                                </p>
                            </div>

                            <div class="border rounded-bottom p-3">
                        <span class="d-flex me-2">
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas fa-star text-custom-light_gray"></i>
                        </span>
                                Izohlar(12)
                                </a>

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
                    <div class="swiper-slide">
                        <div class="special-item ps-0">
                            <div class="p-3 border border-bottom-0 rounded-top">
                                <a href="#"><img src="{{asset('/assets/house/image 32.jpg')}}" height="160" class="w-100" alt="special"></a>
                                <p class="special-ad">ko`p kvartirali turar-joy binosi</p>

                                <p class="special-price">
                                    2900000 so’m
                                </p>
                            </div>

                            <div class="border rounded-bottom p-3">
                        <span class="d-flex me-2">
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas fa-star text-custom-light_gray"></i>
                        </span>
                                Izohlar(12)
                                </a>

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
                    <div class="swiper-slide">
                        <div class="special-item ps-0">
                            <div class="p-3 border border-bottom-0 rounded-top">
                                <a href="#"><img src="{{asset('/assets/house/image 29.jpg')}}" height="160" class="w-100" alt="special"></a>
                                <p class="special-ad">7 qavatli turar-joy binosi</p>

                                <p class="special-price">
                                    2900000 so’m
                                </p>
                            </div>

                            <div class="border rounded-bottom p-3">
                        <span class="d-flex me-2">
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas fa-star text-custom-light_gray"></i>
                        </span>
                                Izohlar(12)
                                </a>

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
                <div class="swiper-button-next fs-10 end-0 text-white">
                    <div class="header-swiper_button-next"></div>
                </div>
                <div class="swiper-button-prev fs-10 start-0 text-white">
                    <div class="header-swiper_button-prev"></div>
                </div>
            </div>

        </div>
    </div>

    <!-- Recommended Panel -->

    <div class="container recommended">
        <div class="row align-items-stretch mt-4">
            <p class="special-title px-lg-0">Tavsiya qilingan</p>
            <div class="recommended-item ps-lg-0">
                <div class="p-3 border rounded">
                    <a href="/detsad"> <img src="{{asset('/assets/house/001.jpg')}}" height="160" class="w-100" alt="special"></a>
                    <p class="special-ad">120 o`rinli bog`cha</p>

                    <p class="special-price">
                       Bog`cha
                    </p>
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
                    <a href="#"> <img src="{{asset("/assets/house/image 30.jpg")}}" height="160" class="w-100" alt="special"></a>
                    <p class="special-ad">4 qavatli turar-joy binosi</p>

                    <p class="special-price">
                        2900000 so’m
                    </p>
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
                    <a href="#"> <img src="{{asset("/assets/house/image 31.jpg")}}" height="160" class="w-100" alt="special"></a>
                    <p class="special-ad">5 qavatli turar-joy binosi</p>

                    <p class="special-price">
                        2900000 so’m
                    </p>
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
                    <a href="#"> <img src="{{asset("/assets/house/image 29.jpg")}}" height="160" class="w-100" alt="special"></a>
                    <p class="special-ad">7 qavatli turar-joy binosi</p>

                    <p class="special-price">
                        2900000 so’m
                    </p>
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
                    <a href="#"> <img src="{{asset("/assets/house/image 32.jpg")}}" height="160" class="w-100" alt="special"></a>
                    <p class="special-ad">Ko`p qavatli turar-joy binosi</p>

                    <p class="special-price">
                        2900000 so’m
                    </p>
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
                    <a href="/detsad"> <img src="{{asset('/assets/house/001.jpg')}}" height="160" class="w-100" alt="special"></a>
                    <p class="special-ad">120 o`rinli bog`cha</p>

                    <p class="special-price">
                        Bog`cha
                    </p>
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
                    <a href="#"> <img src="{{asset("/assets/house/image 29.jpg")}}" height="160" class="w-100" alt="special"></a>
                    <p class="special-ad">7 qavatli turar-joy binosi</p>

                    <p class="special-price">
                        2900000 so’m
                    </p>
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
                    <a href="#"> <img src="{{asset("/assets/house/image 31.jpg")}}" height="160" class="w-100" alt="special"></a>
                    <p class="special-ad">5 qavatli turar-joy binosi</p>

                    <p class="special-price">
                        2900000 so’m
                    </p>
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
                    <a href="#"> <img src="{{asset("/assets/house/image 29.jpg")}}" height="160" class="w-100" alt="special"></a>
                    <p class="special-ad">7 qavatli turar-joy binosi</p>

                    <p class="special-price">
                        2900000 so’m
                    </p>
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
                    <a href="#"> <img src="{{asset("/assets/house/image 32.jpg")}}" height="160" class="w-100" alt="special"></a>
                    <p class="special-ad">Ko`p qavatli turar-joy binosi</p>

                    <p class="special-price">
                        2900000 so’m
                    </p>
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
                    <a href="/detsad"> <img src="{{asset('/assets/house/001.jpg')}}" height="160" class="w-100" alt="special"></a>
                    <p class="special-ad">120 o`rinli bog`cha</p>

                    <p class="special-price">
                        Bog`cha
                    </p>
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
                    <a href="#"> <img src="{{asset("/assets/house/image 29.jpg")}}" height="160" class="w-100" alt="special"></a>
                    <p class="special-ad">7 qavatli turar-joy binosi</p>

                    <p class="special-price">
                        2900000 so’m
                    </p>
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
                    <a href="#"> <img src="{{asset("/assets/house/image 31.jpg")}}" height="160" class="w-100" alt="special"></a>
                    <p class="special-ad">5 qavatli turar-joy binosi</p>

                    <p class="special-price">
                        2900000 so’m
                    </p>
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
                    <a href="#"> <img src="{{asset("/assets/house/image 29.jpg")}}" height="160" class="w-100" alt="special"></a>
                    <p class="special-ad">7 qavatli turar-joy binosi</p>

                    <p class="special-price">
                        2900000 so’m
                    </p>
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
                    <a href="#"> <img src="{{asset("/assets/house/image 32.jpg")}}" height="160" class="w-100" alt="special"></a>
                    <p class="special-ad">Ko`p qavatli turar-joy binosi</p>

                    <p class="special-price">
                        2900000 so’m
                    </p>
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


@endsection