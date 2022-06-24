@extends('layouts.Main')
@section('content')
    <!-- Details Panel -->
    <div class="container details">
        <div class="row mt-4">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6 pt-2 ps-lg-0">
                        <div class="details-image p-0">
                            <div class="column-img">
                                <img src="{{asset('/assets/image_qur_material/taxta2.jpg')}}" class="w-100 mb-3" alt="details">

                                <img src="{{asset('/assets/image_qur_material/taxta3.jpg')}}" class="w-100 mb-3" alt="details">

                                <img src="{{asset('/assets/image_qur_material/taxta4.jpg')}}" class="w-100 mb-3" alt="details">

                                <img src="{{asset('/assets/image_qur_material/taxta5.jpg')}}" class="w-100" alt="details">
                            </div>

                            <img src="{{asset('/assets/image_qur_material/taxta.jpg')}}" class="rounded w-80" alt="details">
                        </div>
                    </div>

                    <div class="col-lg-6 pt-2">Taxta </p>

                        <a href="#" class="special-comment mt-2">
                        <span class="d-flex me-2">
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas fa-star text-custom-light_gray"></i>
                        </span>
                            Baho (4)
                        </a>

                        <p class="details-price mt-4">
                            150000 so’m/1 dona
                        </p>

                        <small class="special-type text-success"><i class="fas fa-check-circle"></i>
                            Arenda</small>
                        <small class="special-delivery mx-2"><i class="fas fa-truck"></i> Yetkazib
                            berish</small>
                        <small class="special-store"><i class="fas fa-store-alt"></i> Olib ketish</small>

                        <button class="btn btn-outline-primary mt-4 px-4">
                            <i class="fas fa-phone-alt"></i>

                            Kontaktlarni ko‘rsatish
                        </button>

                        <div class="d-flex align-items-center justify-content-between mt-5 fs-14">
                            <div class="details-share">
                                Ulashish:

                                <div>
                                    <i class="fas ms-3 me-1 fa-paper-plane"></i>
                                    <i class="fab me-1 fa-vk"></i>
                                    <i class="fab me-1 fa-twitter"></i>
                                    <i class="fab me-1 fa-facebook-f"></i>
                                    <i class="fab me-1 fa-odnoklassniki"></i>
                                </div>
                            </div>

                            <p class="mb-0">Artikul: P-0111290</p>
                        </div>
                    </div>

                    <div class="col-12 px-lg-0 mt-5">
                        <input type="radio" hidden name="example" checked id="first">
                        <input type="radio" hidden name="example" id="second">
                        <input type="radio" hidden name="example" id="third">

                        <div class="d-flex border-bottom">
                            <label class="fs-18 fw-500 me-3 check-active_first" for="first">Tavsif</label>
                            <label class="fs-18 fw-500 me-3 check-active_second" for="second">Umumiy</label>
                            <label class="fs-18 fw-500 me-3 check-active_third" for="third">Fikr-mulohaza</label>
                        </div>

                        <div class="check_first">
                            <p class="mt-4">
                                1.Taxta toifasidagi kompaniyalar haqidagi maʼlumotlar har bir kompaniya Prom.uz veb-saytiga
                                kiritilgan vaqtda tasdiqlangan va ishonchli boʻlgan. Ayni paytda ba'zi etkazib beruvchilar
                                haqidagi ma'lumotlar (manzil, telefon, joylashuv yoki tovarlar va xizmatlar ro'yxati) o'zgargan
                                bo'lishi mumkin. Kompaniyalar ro'yxati doimiy ravishda yangilanadi va kengaytiriladi.
                                Ularning aloqa ma'lumotlari va boshqa ma'lumotlar ham muntazam ravishda yangilanadi.


                                <br>
                                <br>

                                Pishiq g'isht afzalliklari
                                <br>
                                <br>
                                Pishiq g'isht turlari
                                <br>
                                <br>
                                2. Pishiq g'isht М 75 (250х120х65mm)
                            </p>
                        </div>

                        <div class="check_second">
                            <p class="mt-4">
                                2Taxta toifasidagi kompaniyalar haqidagi maʼlumotlar har bir kompaniya Prom.uz veb-saytiga
                                kiritilgan vaqtda tasdiqlangan va ishonchli boʻlgan. Ayni paytda ba'zi etkazib beruvchilar
                                haqidagi ma'lumotlar (manzil, telefon, joylashuv yoki tovarlar va xizmatlar ro'yxati) o'zgargan
                                bo'lishi mumkin. Kompaniyalar ro'yxati doimiy ravishda yangilanadi va kengaytiriladi.
                                Ularning aloqa ma'lumotlari va boshqa ma'lumotlar ham muntazam ravishda yangilanadi.

                                <br>
                                <br>

                                Pishiq g'isht afzalliklari
                                <br>
                                <br>
                                Pishiq g'isht turlari
                                <br>
                                <br>
                                2. Pishiq g'isht М 75 (250х120х65mm)
                            </p>
                        </div>

                        <div class="check_third">
                            <p class="mt-4">
                                3.Taxta toifasidagi kompaniyalar haqidagi maʼlumotlar har bir kompaniya Prom.uz veb-saytiga
                                kiritilgan vaqtda tasdiqlangan va ishonchli boʻlgan. Ayni paytda ba'zi etkazib beruvchilar
                                haqidagi ma'lumotlar (manzil, telefon, joylashuv yoki tovarlar va xizmatlar ro'yxati) o'zgargan
                                bo'lishi mumkin. Kompaniyalar ro'yxati doimiy ravishda yangilanadi va kengaytiriladi.
                                Ularning aloqa ma'lumotlari va boshqa ma'lumotlar ham muntazam ravishda yangilanadi.


                                <br>
                                <br>
                                Pishiq g'isht afzalliklari
                                <br>
                                <br>
                                Pishiq g'isht turlari
                                <br>
                                <br>
                                2. Pishiq g'isht М 75 (250х120х65mm)
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 border-start">
                <div class="row">
                    <p class="dry-title">
                        Sotuvchi
                    </p>

                    <p class="text-primary fw-500 mb-0">
                        ООО "ARUSDGUR Trade"
                    </p>

                    <a href="#" class="special-comment mt-2">
                        <span class="d-flex me-2">
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas me-1 fa-star text-yellow"></i>
                            <i class="fas fa-star text-custom-light_gray"></i>
                        </span>
                        Izohlar(12)
                    </a>

                    <ul class="details-info">
                        <li class="d-flex align-items-start">
                            <i class="fas fa-map-marker-alt me-2 mt-1"></i>

                            <p class="details-info_text">
                                г. Ташкент, Юнусабадский р-н, Малая кольцевая дорога, ул. И. Ахмада 12
                            </p>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="fas fa-globe me-2 mt-1"></i>

                            <p class="details-info_text">
                                isuzu-imagine.gl.uz
                            </p>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="fas fa-phone-alt me-2 mt-1"></i>

                            <p class="details-info_text">
                                +998(raqamni ko‘rish)
                            </p>
                        </li>
                        <li class="d-flex align-items-start">
                            <i class="fas fa-envelope me-2 mt-1"></i>

                            <p class="details-info_text">
                                Xabar yuborish
                            </p>
                        </li>
                    </ul>

                    <div>
                        <button class="btn btn-primary w-auto text-white mt-3 px-4">
                            <i class="fas fa-phone-alt"></i>
                            Kontaktlarni ko‘rsatish
                        </button>
                    </div>
                </div>
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
                                <img src="{{asset('/assets/image_qur_material/taxta.jpg')}}" height="160" class="w-100" alt="special">
                                <p class="special-ad">Taxta</p>

                                <p class="special-price">
                                    150000 so’m/1 dona
                                </p>

                                <!-- <small class="special-type text-success"><i class="fas fa-check-circle"></i>
                                    Arenda</small> -->
                                <small class="special-delivery mx-1"><i class="fas fa-truck"></i> Yetkazib
                                    berish</small>
                                <small class="special-store"><i class="fas fa-store-alt"></i> Olib ketish</small>
                            </div>

                            <div class="border rounded-bottom p-3">
                                <a href="#" class="special-service">"OOO «ARUSDGUR TradeT»»"</a>

                                <a href="#" class="special-comment mt-2">
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
                                <img src="{{asset('/assets/image_qur_material/taxta5.jpg')}}" height="160" class="w-100" alt="special">
                                <p class="special-ad">Taxta</p>

                                <p class="special-price">
                                    150000 so’m/1 dona
                                </p>

                                <!-- <small class="special-type text-success"><i class="fas fa-check-circle"></i>
                                    Arenda</small> -->
                                <small class="special-delivery mx-1"><i class="fas fa-truck"></i> Yetkazib
                                    berish</small>
                                <small class="special-store"><i class="fas fa-store-alt"></i> Olib ketish</small>
                            </div>

                            <div class="border rounded-bottom p-3">
                                <a href="#" class="special-service">"OOO «ARUSDGUR Trade»"</a>

                                <a href="#" class="special-comment mt-2">
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
                                <img src="{{asset('/assets/image_qur_material/taxta4.jpg')}}" height="160" class="w-100" alt="special">
                                <p class="special-ad">Taxta</p>

                                <p class="special-price">
                                    150000 so’m/1 dona
                                </p>

                                <!--  <small class="special-type text-success"><i class="fas fa-check-circle"></i>
                                     Arenda</small> -->
                                <small class="special-delivery mx-1"><i class="fas fa-truck"></i> Yetkazib
                                    berish</small>
                                <small class="special-store"><i class="fas fa-store-alt"></i> Olib ketish</small>
                            </div>

                            <div class="border rounded-bottom p-3">
                                <a href="#" class="special-service">"OOO «ARUSDGUR Trade»"</a>

                                <a href="#" class="special-comment mt-2">
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
                        <div class="special-item px-0">
                            <div class="p-3 border border-bottom-0 rounded-top">
                                <img src="{{asset('/assets/image_qur_material/taxta2.jpg')}}" height="160" class="w-100" alt="special">
                                <p class="special-ad">Taxta</p>

                                <p class="special-price">
                                    150000 so’m/1 dona
                                </p>

                                <!-- <small class="special-type text-success"><i class="fas fa-check-circle"></i>
                                    Arenda</small> -->
                                <small class="special-delivery mx-1"><i class="fas fa-truck"></i> Yetkazib
                                    berish</small>
                                <small class="special-store"><i class="fas fa-store-alt"></i> Olib ketish</small>
                            </div>

                            <div class="border rounded-bottom p-3">
                                <a href="#" class="special-service">"OOO «ARUSDGUR Trade»"</a>

                                <a href="#" class="special-comment mt-2">
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
                        <div class="special-item pe-0">
                            <div class="p-3 border border-bottom-0 rounded-top">
                                <img src="{{asset('/assets/image_qur_material/taxta3.jpg')}}" height="160" class="w-100" alt="special">
                                <p class="special-ad">Taxta</p>

                                <p class="special-price">
                                    150000 so’m/1 dona
                                </p>

                                <!-- <small class="special-type text-success"><i class="fas fa-check-circle"></i>
                                    Arenda</small> -->
                                <small class="special-delivery mx-1"><i class="fas fa-truck"></i> Yetkazib
                                    berish</small>
                                <small class="special-store"><i class="fas fa-store-alt"></i> Olib ketish</small>
                            </div>

                            <div class="border rounded-bottom p-3">
                                <a href="#" class="special-service">"OOO «ARUSDGUR Trade»"</a>

                                <a href="#" class="special-comment mt-2">
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
                                <img src="{{asset('/assets/image_qur_material/taxta.jpg')}}" height="160" class="w-100" alt="special">
                                <p class="special-ad">Taxta</p>

                                <p class="special-price">
                                    150000 so’m/1 dona
                                </p>

                                <!--   <small class="special-type text-success"><i class="fas fa-check-circle"></i>
                                      Arenda</small> -->
                                <small class="special-delivery mx-1"><i class="fas fa-truck"></i> Yetkazib
                                    berish</small>
                                <small class="special-store"><i class="fas fa-store-alt"></i> Olib ketish</small>
                            </div>

                            <div class="border rounded-bottom p-3">
                                <a href="#" class="special-service">"OOO «ARUSDGUR Trade»"</a>

                                <a href="#" class="special-comment mt-2">
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