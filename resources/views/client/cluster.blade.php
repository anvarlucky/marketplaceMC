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
            <div class="col-lg-8 mb-2 mb-lg-0 d-flex align-items-center rounded-start border-lg border-end-lg-0">
                <input type="text" class="form-control border-lg-0"
                       placeholder="STIR, tashkilot yoki brend nomi, ta'sischi yoki rahbar ismini kiriting...">
            </div>
            <div class="col-lg-2 mb-2 mb-lg-0 d-flex flex-column py-2 border-lg">
                <label class="d-block" for="type">Hudud</label>
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

    <div class="container min-vh-50">
        <div class="cluster border rounded py-2 my-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="{{asset('/assets/images/new2.png')}}" class="rounded" width="250" alt="cluster">
                </div>
                <div class="col-lg-9">
                    <div class="d-flex">
                        <div class="cluster_id">
                            302699236
                        </div>

                        <div class="cluster_date">
                            05.09.2013
                        </div>
                    </div>

                    <p class="cluster_title mb-4">
                        "GOLD STEP INVEST" mas’uliyati cheklangan jamiyati
                    </p>

                    <div class="cluster_text mb-2">
                        <i class="fas fa-phone-alt me-2"></i>

                        <a href="#" class="text-body">+998 (90) 910 49 89</a>
                    </div>

                    <div class="cluster_text">
                        <i class="fas fa-map-marker-alt me-2"></i>

                        <a href="#" class="text-body">
                            Toshkent shahri, Yunusobod tumani, Osiyo ko`chasi, 56A-uy
                        </a>
                    </div>
                    <div class="cluster_text  mt-2">
                        <p class="text-body">
                            Reyting:BB
                        <br>
                            www.goldstepinvest.uz
                        <br>
                            Foydalanishga topshirilgan xonadonlar soni:
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cluster border rounded py-2 my-4" data-bs-toggle="modal" data-bs-target="#exampleModal2">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="{{asset('/assets/images/44.jpg')}}" class="rounded" width="250" alt="cluster">
                </div>
                <div class="col-lg-9">
                    <div class="d-flex">
                        <div class="cluster_id">
                            304424670
                        </div>

                        <div class="cluster_date">
                            14.11.2016
                        </div>
                    </div>

                    <p class="cluster_title mb-4">
                        "YANGI ZAMON BINO" mas’uliyati cheklangan jamiyati
                    </p>

                    <div class="cluster_text mb-2">
                        <i class="fas fa-phone-alt me-2"></i>

                        <a href="#" class="text-body">+998 (95) 177 17 59</a>
                    </div>

                    <div class="cluster_text">
                        <i class="fas fa-map-marker-alt me-2"></i>

                        <a href="#" class="text-body">
                            Toshkent shahri, Yunusobod tumani, A.TEMUR SHOX KO`CHASI, 95A-UY

                        </a>
                    </div>
                    <div class="cluster_text  mt-2">
                        <p class="text-body">
                            Reyting:BB
                        <br>
                            www.yangi-zamon.uz
                            <br>
                            Foydalanishga topshirilgan xonadonlar soni:
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cluster border rounded py-2 my-4" data-bs-toggle="modal" data-bs-target="#exampleModal3">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="{{asset('/assets/images/55.jpg')}}" class="rounded" width="250" alt="cluster">
                </div>
                <div class="col-lg-9">
                    <div class="d-flex">
                        <div class="cluster_id">
                            201797918
                        </div>

                        <div class="cluster_date">
                            29.12.1995

                        </div>
                    </div>

                    <p class="cluster_title mb-4">
                        "TERMIZ-TA’MINOT SANOAT QURILISH TA’MINOTI" xususiy korxonasi
                    </p>

                    <div class="cluster_text mb-2">
                        <i class="fas fa-phone-alt me-2"></i>

                        <a href="#" class="text-body">+998762211932</a>
                    </div>

                    <div class="cluster_text">
                        <i class="fas fa-map-marker-alt me-2"></i>

                        <a href="#" class="text-body">
                            Surxondaryo viloyati, Termiz sh., Oytumor ko`chasi, 3 b-uy

                        </a>
                    </div>
                    <div class="cluster_text  mt-2">
                        <p class="text-body">
                            Reyting:BB
                        <br>
                        www.termizt.uz
                            <br>
                            Foydalanishga topshirilgan xonadonlar soni:
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cluster border rounded py-2 my-4" data-bs-toggle="modal" data-bs-target="#exampleModal4">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="{{asset('/assets/images/66.jpeg')}}" class="rounded" width="250" alt="cluster">
                </div>
                <div class="col-lg-9">
                    <div class="d-flex">
                        <div class="cluster_id">
                            201741741
                        </div>

                        <div class="cluster_date">
                            18.02.1995

                        </div>
                    </div>

                    <p class="cluster_title mb-4">
                        "BINOKOR" mas’uliyati cheklangan jamiyati
                    </p>

                    <div class="cluster_text mb-2">
                        <i class="fas fa-phone-alt me-2"></i>

                        <a href="#" class="text-body">+998912141868</a>
                    </div>

                    <div class="cluster_text">
                        <i class="fas fa-map-marker-alt me-2"></i>

                        <a href="#" class="text-body">
                            Qashqadaryo viloyati, Chiroqchi tumani, Chiroqchi shahri, Mustaqillik ko'chasi

                        </a>
                    </div>
                    <div class="cluster_text  mt-2">
                        <p class="text-body">
                            Reyting:BBB
                        <br>
                            www.binokor.uz
                            <br>
                            Foydalanishga topshirilgan xonadonlar soni:
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cluster border rounded py-2 my-4" data-bs-toggle="modal" data-bs-target="#exampleModal5">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="{{asset('/assets/images/33.jpg')}}" class="rounded" width="250" alt="cluster">
                </div>
                <div class="col-lg-9">
                    <div class="d-flex">
                        <div class="cluster_id">
                            305599445
                        </div>

                        <div class="cluster_date">
                            12.06.2018


                        </div>
                    </div>

                    <p class="cluster_title mb-4">
                        "LAND HOUSE" mas’uliyati cheklangan jamiyati

                    </p>

                    <div class="cluster_text mb-2">
                        <i class="fas fa-phone-alt me-2"></i>

                        <a href="#" class="text-body">+998977721007</a>
                    </div>

                    <div class="cluster_text">
                        <i class="fas fa-map-marker-alt me-2"></i>

                        <a href="#" class="text-body">
                            Toshkent shahri, Mirobod tumani, Nukus ko'chasi, 4A-uy

                        </a>
                    </div>
                    <div class="cluster_text  mt-2">
                        <p class="text-body">
                            Reyting:BB
                        <br>
                            www.landhouse.uz
                            <br>
                            Foydalanishga topshirilgan xonadonlar soni:
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cluster border rounded py-2 my-4" data-bs-toggle="modal" data-bs-target="#exampleModal6">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="{{asset('/assets/images/22.jpg')}}" class="rounded" width="250" alt="cluster">
                </div>
                <div class="col-lg-9">
                    <div class="d-flex">
                        <div class="cluster_id">
                            300066115
                        </div>

                        <div class="cluster_date">
                            29.11.2006



                        </div>
                    </div>

                    <p class="cluster_title mb-4">
                        "ZARAFSHAN GOLDEN G R O U P" mas’uliyati cheklangan jamiyati


                    </p>

                    <div class="cluster_text mb-2">
                        <i class="fas fa-phone-alt me-2"></i>

                        <a href="#" class="text-body">+998977956064</a>
                    </div>

                    <div class="cluster_text">
                        <i class="fas fa-map-marker-alt me-2"></i>

                        <a href="#" class="text-body">
                            Navoiy viloyati, Qiziltepa tumani, G'ardiyon QFY, Kulolon MFY

                        </a>
                    </div>
                    <div class="cluster_text  mt-2">
                        <p class="text-body">
                            Reyting:BB
                        <br>
                            www.zarafshongold.uz
                            <br>
                            Foydalanishga topshirilgan xonadonlar soni:
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cluster border rounded py-2 my-4" data-bs-toggle="modal" data-bs-target="#exampleModal7">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="{{asset('/assets/images/11.jpg')}}" class="rounded" width="250" alt="cluster">
                </div>
                <div class="col-lg-9">
                    <div class="d-flex">
                        <div class="cluster_id">
                            305797151
                        </div>

                        <div class="cluster_date">
                            10.10.2018




                        </div>
                    </div>

                    <p class="cluster_title mb-4">
                        "AGROMIR BUILDINGS" mas’uliyati cheklangan jamiyati


                    </p>

                    <div class="cluster_text mb-2">
                        <i class="fas fa-phone-alt me-2"></i>

                        <a href="#" class="text-body">+998985770751</a>
                    </div>

                    <div class="cluster_text">
                        <i class="fas fa-map-marker-alt me-2"></i>

                        <a href="#" class="text-body">
                            Samarqand viloyati, Tayloq tumani, Qo'rg'oncha QFY, Qo`rg`oncha qishlog`i

                        </a>
                    </div>
                    <div class="cluster_text  mt-2">
                        <p class="text-body">
                            Reyting:BB
                        </p>
                        <p class="text-body">
                            www.agromirbuildings.uz
                            <br>
                            Foydalanishga topshirilgan xonadonlar soni:
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cluster border rounded py-2 my-4" data-bs-toggle="modal" data-bs-target="#exampleModal8">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="{{asset('/assets/images/77.png')}}" class="rounded" width="250" alt="cluster">
                </div>
                <div class="col-lg-9">
                    <div class="d-flex">
                        <div class="cluster_id">
                            307528903
                        </div>

                        <div class="cluster_date">
                            01.07.2020




                        </div>
                    </div>

                    <p class="cluster_title mb-4">
                        "MIMAR GROUP" mas’uliyati cheklangan jamiyati


                    </p>

                    <div class="cluster_text mb-2">
                        <i class="fas fa-phone-alt me-2"></i>

                        <a href="#" class="text-body">+998991154949</a>
                    </div>

                    <div class="cluster_text">
                        <i class="fas fa-map-marker-alt me-2"></i>

                        <a href="#" class="text-body">
                            Toshkent shahri, Uchtepa tumani, TXAY, SANOAT MINTAQASI

                        </a>
                    </div>
                    <div class="cluster_text  mt-2">
                        <p class="text-body">
                            Reyting:BB
                        <br>
                            www.mimar.uz
                            <br>
                            Foydalanishga topshirilgan xonadonlar soni:
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cluster border rounded py-2 my-4" data-bs-toggle="modal" data-bs-target="#exampleModal9">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="{{asset('/assets/images/88.jpeg')}}" class="rounded" width="250" alt="cluster">
                </div>
                <div class="col-lg-9">
                    <div class="d-flex">
                        <div class="cluster_id">
                            300935078
                        </div>

                        <div class="cluster_date">
                            15.09.2008





                        </div>
                    </div>

                    <p class="cluster_title mb-4">
                        "DISCOVER INVEST" mas’uliyati cheklangan jamiyati



                    </p>

                    <div class="cluster_text mb-2">
                        <i class="fas fa-phone-alt me-2"></i>

                        <a href="#" class="text-body">+998712888888</a>
                    </div>

                    <div class="cluster_text">
                        <i class="fas fa-map-marker-alt me-2"></i>

                        <a href="#" class="text-body">
                            Toshkent shahri, Chilonzor tumani, BAYNAL MINAL KO'CHASI, 16-UY


                        </a>
                    </div>
                    <div class="cluster_text  mt-2">
                        <p class="text-body">
                            Reyting:A
                        <br>
                            www.di.uz
                            <br>
                            Foydalanishga topshirilgan xonadonlar soni:
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cluster border rounded py-2 my-4" data-bs-toggle="modal" data-bs-target="#exampleModal10">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="{{asset('/assets/images/99.jpg')}}" class="rounded" width="250" alt="cluster">
                </div>
                <div class="col-lg-9">
                    <div class="d-flex">
                        <div class="cluster_id">
                            303519710
                        </div>

                        <div class="cluster_date">
                            05.12.2015






                        </div>
                    </div>

                    <p class="cluster_title mb-4">
                        "TAYANCH QURILISH SERVIS" mas’uliyati cheklangan jamiyati



                    </p>

                    <div class="cluster_text mb-2">
                        <i class="fas fa-phone-alt me-2"></i>

                        <a href="#" class="text-body">+998906191001</a>
                    </div>

                    <div class="cluster_text">
                        <i class="fas fa-map-marker-alt me-2"></i>

                        <a href="#" class="text-body">
                            Navoiy viloyati, Qiziltepa tumani, Zarmitan QFY, Varozun mahallasi



                        </a>
                    </div>
                    <div class="cluster_text  mt-2">
                        <p class="text-body">
                            Reyting:BB
                            <br>
                            www.tayanch-qurilish.uz
                            <br>
                            Foydalanishga topshirilgan xonadonlar soni:
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cluster border rounded py-2 my-4" data-bs-toggle="modal" data-bs-target="#exampleModal11">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="{{asset('/assets/images/1010.jpg')}}" class="rounded" width="250" alt="cluster">
                </div>
                <div class="col-lg-9">
                    <div class="d-flex">
                        <div class="cluster_id">
                            203512644
                        </div>

                        <div class="cluster_date">
                            06.02.2001





                        </div>
                    </div>

                    <p class="cluster_title mb-4">
                        "QURILISH TAMINOTCHI" mas’uliyati cheklangan jamiyati




                    </p>

                    <div class="cluster_text mb-2">
                        <i class="fas fa-phone-alt me-2"></i>

                        <a href="#" class="text-body">+998795552380</a>
                    </div>

                    <div class="cluster_text">
                        <i class="fas fa-map-marker-alt me-2"></i>

                        <a href="#" class="text-body">
                            Navoiy viloyati, Qiziltepa tumani, Qiziltepa shahri, Qizil-tong ko'chasi, 1-uy


                        </a>
                    </div>
                    <div class="cluster_text  mt-2">
                        <p class="text-body">
                            Reyting:
                            <br>
                            www.qurilish-taminotchi.uz
                            <br>
                            Foydalanishga topshirilgan xonadonlar soni:
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cluster border rounded py-2 my-4" data-bs-toggle="modal" data-bs-target="#exampleModal12">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="{{asset('/assets/images/1111.jpg')}}" class="rounded" width="250" alt="cluster">
                </div>
                <div class="col-lg-9">
                    <div class="d-flex">
                        <div class="cluster_id">
                            206159417
                        </div>

                        <div class="cluster_date">
                            24.02.2006






                        </div>
                    </div>

                    <p class="cluster_title mb-4">
                        "BUNYODKOR ZAMONDOSH" mas’uliyati cheklangan jamiyati



                    </p>

                    <div class="cluster_text mb-2">
                        <i class="fas fa-phone-alt me-2"></i>

                        <a href="#" class="text-body">+998913098007</a>
                    </div>

                    <div class="cluster_text">
                        <i class="fas fa-map-marker-alt me-2"></i>

                        <a href="#" class="text-body">
                            Navoiy viloyati, Qiziltepa tumani, Uzilishkent shaharchasi, Uzilishkent MFY


                        </a>
                    </div>
                    <div class="cluster_text  mt-2">
                        <p class="text-body">
                            Reyting:BB
                            <br>
                            www.bunyodkor-zamondosh.uz
                            <br>
                            Foydalanishga topshirilgan xonadonlar soni:
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog w-auto modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{asset('/assets/images/new2.png')}}" class="w-100" alt="cluster">
                        </div>

                        <div class="col-lg-8">
                            <p class="fw-600 font-roboto">
                                "GOLD STEP INVEST" mas’uliyati cheklangan jamiyati
                            </p>

                            <div class="cluster_text mb-2">
                                <i class="fas fa-phone-alt me-2"></i>

                                <a href="#" class="text-body">+998 (90) 910 49 89</a>
                            </div>

                            <div class="cluster_text">
                                <i class="fas fa-map-marker-alt me-2"></i>

                                <a href="#" class="text-body">
                                    Toshkent shahri, Yunusobod tumani, Osiyo ko`chasi, 56A-uy
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6">
                            <p>Faoliyati: </p>
                        </div>
                        <div class="col-lg-6">
                            <p class="cluster_success py-0 d-inline-block">
                                Hozirda mavjud
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>Ro'yxatdan o'tgan sana: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>05.09.2013</p>
                        </div>
                        <div class="col-lg-6">
                            <p>Ro'yxatdan o'tkazuvchi organ: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>Tuman (shahar) hokimiyati</p>
                        </div>
                        <div class="col-lg-6">
                            <p>STIR: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>302699236</p>
                        </div>
                        <div class="col-lg-6">
                            <p>THSHT: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>152 - Mas‘uliyati cheklangan yoki qo‘shimcha mas‘uliyatli jamiyat</p>
                        </div>
                        <div class="col-lg-6">
                            <p>DBIBT: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>79994 - Davlat va xo‘jalik boshqaruvi organlari tarkibiga kirmagan tadbirkorlik sub‘yektlari</p>
                        </div>
                        <div class="col-lg-6">
                            <p>IFUT: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>l41201 - Turar joy binolarini qurish</p>
                        </div>
                        <div class="col-lg-6">
                            <p>Ustav fondi: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>1 783 106 400,00 UZS</p>
                        </div>
                        <div class="col-lg-6">
                            <p>Rahbar: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>Shamansurov Shoislam Sultanovich</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog w-auto modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{asset('/assets/images/44.jpg')}}" class="w-100" alt="cluster">
                    </div>

                    <div class="col-lg-8">
                        <p class="fw-600 font-roboto">
                            "YANGI ZAMON BINO" mas’uliyati cheklangan jamiyati

                        </p>

                        <div class="cluster_text mb-2">
                            <i class="fas fa-phone-alt me-2"></i>

                            <a href="#" class="text-body">+998951771759</a>
                        </div>

                        <div class="cluster_text">
                            <i class="fas fa-map-marker-alt me-2"></i>

                            <a href="#" class="text-body">
                                Toshkent shahri, Yunusobod tumani, A.TEMUR SHOX KO`CHASI, 95A-UY

                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <p>Faoliyati: </p>
                    </div>
                    <div class="col-lg-6">
                        <p class="cluster_success py-0 d-inline-block">
                            Hozirda mavjud
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ro'yxatdan o'tgan sana: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>14.11.2016
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ro'yxatdan o'tkazuvchi organ: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Tuman (shahar) hokimiyati</p>
                    </div>
                    <div class="col-lg-6">
                        <p>STIR: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>304424670</p>
                    </div>
                    <div class="col-lg-6">
                        <p>THSHT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>152 - Mas‘uliyati cheklangan yoki qo‘shimcha mas‘uliyatli jamiyat
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>DBIBT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>79994 - Davlat va xo‘jalik boshqaruvi organlari tarkibiga kirmagan tadbirkorlik sub‘yektlari</p>
                    </div>
                    <div class="col-lg-6">
                        <p>IFUT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>l41201 - Turar joy binolarini qurish</p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ustav fondi: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>566 179 603 500,00 UZS</p>
                    </div>
                    <div class="col-lg-6">
                        <p>Rahbar: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Mixaylov Kirill Anatolevich</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog w-auto modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{asset('/assets/images/55.jpg')}}" class="w-100" alt="cluster">
                    </div>

                    <div class="col-lg-8">
                        <p class="fw-600 font-roboto">
                            "TERMIZ-TA’MINOT SANOAT QURILISH TA’MINOTI" xususiy korxonasi

                        </p>

                        <div class="cluster_text mb-2">
                            <i class="fas fa-phone-alt me-2"></i>

                            <a href="#" class="text-body">+998762211932</a>
                        </div>

                        <div class="cluster_text">
                            <i class="fas fa-map-marker-alt me-2"></i>

                            <a href="#" class="text-body">
                                Surxondaryo viloyati, Termiz sh., Oytumor ko`chasi, 3 b-uy

                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <p>Faoliyati: </p>
                    </div>
                    <div class="col-lg-6">
                        <p class="cluster_success py-0 d-inline-block">
                            Hozirda mavjud
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ro'yxatdan o'tgan sana: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>29.12.1995

                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ro'yxatdan o'tkazuvchi organ: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Tuman (shahar) hokimiyati</p>
                    </div>
                    <div class="col-lg-6">
                        <p>STIR: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>201797918</p>
                    </div>
                    <div class="col-lg-6">
                        <p>THSHT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>110 - Xususiy korxona
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>DBIBT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>79994 - Davlat va xo‘jalik boshqaruvi organlari tarkibiga kirmagan tadbirkorlik sub‘yektlari</p>
                    </div>
                    <div class="col-lg-6">
                        <p>IFUT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>41202 - YAshash uchun mo'ljallanmagan binolar qurish</p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ustav fondi: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>6 302 191 200,00 UZS</p>
                    </div>
                    <div class="col-lg-6">
                        <p>Rahbar: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Tuxtarov Rustam Allamuradovich</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog w-auto modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{asset('/assets/images/66.jpeg')}}" class="w-100" alt="cluster">
                    </div>

                    <div class="col-lg-8">
                        <p class="fw-600 font-roboto">
                            "BINOKOR" mas’uliyati cheklangan jamiyati

                        </p>

                        <div class="cluster_text mb-2">
                            <i class="fas fa-phone-alt me-2"></i>

                            <a href="#" class="text-body">+998912141868</a>
                        </div>

                        <div class="cluster_text">
                            <i class="fas fa-map-marker-alt me-2"></i>

                            <a href="#" class="text-body">
                                Qashqadaryo viloyati, Chiroqchi tumani, Chiroqchi shahri, Mustaqillik ko'chasi

                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <p>Faoliyati: </p>
                    </div>
                    <div class="col-lg-6">
                        <p class="cluster_success py-0 d-inline-block">
                            Hozirda mavjud
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ro'yxatdan o'tgan sana: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>18.02.1995

                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ro'yxatdan o'tkazuvchi organ: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Tuman (shahar) hokimiyati</p>
                    </div>
                    <div class="col-lg-6">
                        <p>STIR: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>201741741</p>
                    </div>
                    <div class="col-lg-6">
                        <p>THSHT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>152 - Mas‘uliyati cheklangan yoki qo‘shimcha mas‘uliyatli jamiyat

                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>DBIBT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>79994 - Davlat va xo‘jalik boshqaruvi organlari tarkibiga kirmagan tadbirkorlik sub‘yektlari</p>
                    </div>
                    <div class="col-lg-6">
                        <p>IFUT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>41201 - Turar joy binolarini qurish
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ustav fondi: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>130 424 000,00 UZS</p>
                    </div>
                    <div class="col-lg-6">
                        <p>Rahbar: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Shaymanov Sherali Jabborovich</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog w-auto modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{asset('/assets/images/33.jpg')}}" class="w-100" alt="cluster">
                    </div>

                    <div class="col-lg-8">
                        <p class="fw-600 font-roboto">
                            "LAND HOUSE" mas’uliyati cheklangan jamiyati

                        </p>

                        <div class="cluster_text mb-2">
                            <i class="fas fa-phone-alt me-2"></i>

                            <a href="#" class="text-body">+998977721007</a>
                        </div>

                        <div class="cluster_text">
                            <i class="fas fa-map-marker-alt me-2"></i>

                            <a href="#" class="text-body">
                                Toshkent shahri, Mirobod tumani, Nukus ko'chasi, 4A-uy

                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <p>Faoliyati: </p>
                    </div>
                    <div class="col-lg-6">
                        <p class="cluster_success py-0 d-inline-block">
                            Hozirda mavjud
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ro'yxatdan o'tgan sana: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>12.06.2018

                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ro'yxatdan o'tkazuvchi organ: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Tuman (shahar) hokimiyati</p>
                    </div>
                    <div class="col-lg-6">
                        <p>STIR: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>305599445</p>
                    </div>
                    <div class="col-lg-6">
                        <p>THSHT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>152 - Mas‘uliyati cheklangan yoki qo‘shimcha mas‘uliyatli jamiyat

                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>DBIBT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>79994 - Davlat va xo‘jalik boshqaruvi organlari tarkibiga kirmagan tadbirkorlik sub‘yektlari</p>
                    </div>
                    <div class="col-lg-6">
                        <p>IFUT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>41201 - Turar joy binolarini qurish
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ustav fondi: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>250 000 000,00 UZS</p>
                    </div>
                    <div class="col-lg-6">
                        <p>Rahbar: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Safarov Ahror Ruziqulovich</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog w-auto modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{asset('/assets/images/22.jpg')}}" class="w-100" alt="cluster">
                    </div>

                    <div class="col-lg-8">
                        <p class="fw-600 font-roboto">
                            "ZARAFSHAN GOLDEN G R O U P" mas’uliyati cheklangan jamiyati

                        </p>

                        <div class="cluster_text mb-2">
                            <i class="fas fa-phone-alt me-2"></i>

                            <a href="#" class="text-body">+998977956064</a>
                        </div>

                        <div class="cluster_text">
                            <i class="fas fa-map-marker-alt me-2"></i>

                            <a href="#" class="text-body">
                                Navoiy viloyati, Qiziltepa tumani, G'ardiyon QFY, Kulolon MFY


                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <p>Faoliyati: </p>
                    </div>
                    <div class="col-lg-6">
                        <p class="cluster_success py-0 d-inline-block">
                            Hozirda mavjud
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ro'yxatdan o'tgan sana: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>29.11.2006

                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ro'yxatdan o'tkazuvchi organ: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Tuman (shahar) hokimiyati</p>
                    </div>
                    <div class="col-lg-6">
                        <p>STIR: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>300066115</p>
                    </div>
                    <div class="col-lg-6">
                        <p>THSHT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>152 - Mas‘uliyati cheklangan yoki qo‘shimcha mas‘uliyatli jamiyat

                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>DBIBT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>07154 - "O'zqurilishmateriallari" aksiyadorlik kompaniyasi</p>
                    </div>
                    <div class="col-lg-6">
                        <p>IFUT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>41201 - Turar joy binolarini qurish
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ustav fondi: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>1 631 517 100,00 UZS</p>
                    </div>
                    <div class="col-lg-6">
                        <p>Rahbar: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Kosimov Shuxrat Shodikul O‘G‘Li</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog w-auto modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{asset('/assets/images/11.jpg')}}" class="w-100" alt="cluster">
                    </div>

                    <div class="col-lg-8">
                        <p class="fw-600 font-roboto">
                            "AGROMIR BUILDINGS" mas’uliyati cheklangan jamiyati


                        </p>

                        <div class="cluster_text mb-2">
                            <i class="fas fa-phone-alt me-2"></i>

                            <a href="#" class="text-body">+998977956064</a>
                        </div>

                        <div class="cluster_text">
                            <i class="fas fa-map-marker-alt me-2"></i>

                            <a href="#" class="text-body">
                                Samarqand viloyati, Tayloq tumani, Qo'rg'oncha QFY, Qo`rg`oncha qishlog`i

                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <p>Faoliyati: </p>
                    </div>
                    <div class="col-lg-6">
                        <p class="cluster_success py-0 d-inline-block">
                            Hozirda mavjud
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ro'yxatdan o'tgan sana: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>10.10.2018

                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ro'yxatdan o'tkazuvchi organ: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Tuman (shahar) hokimiyati</p>
                    </div>
                    <div class="col-lg-6">
                        <p>STIR: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>305797151</p>
                    </div>
                    <div class="col-lg-6">
                        <p>THSHT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>152 - Mas‘uliyati cheklangan yoki qo‘shimcha mas‘uliyatli jamiyat

                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>DBIBT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>79994 - Davlat va xo‘jalik boshqaruvi organlari tarkibiga kirmagan tadbirkorlik sub‘yektlari</p>
                    </div>
                    <div class="col-lg-6">
                        <p>IFUT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>41201 - Turar joy binolarini qurish
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ustav fondi: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>70 200 000 000,00 UZS</p>
                    </div>
                    <div class="col-lg-6">
                        <p>Rahbar: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Xamidov Zoxir Saliyevich</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog w-auto modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{asset('/assets/images/77.png')}}" class="w-100" alt="cluster">
                    </div>

                    <div class="col-lg-8">
                        <p class="fw-600 font-roboto">
                            "MIMAR GROUP" mas’uliyati cheklangan jamiyati


                        </p>

                        <div class="cluster_text mb-2">
                            <i class="fas fa-phone-alt me-2"></i>

                            <a href="#" class="text-body">+998991154949</a>
                        </div>

                        <div class="cluster_text">
                            <i class="fas fa-map-marker-alt me-2"></i>

                            <a href="#" class="text-body">
                                Toshkent shahri, Uchtepa tumani, TXAY, SANOAT MINTAQASI

                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <p>Faoliyati: </p>
                    </div>
                    <div class="col-lg-6">
                        <p class="cluster_success py-0 d-inline-block">
                            Hozirda mavjud
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ro'yxatdan o'tgan sana: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>01.07.2020


                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ro'yxatdan o'tkazuvchi organ: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Tuman (shahar) hokimiyati</p>
                    </div>
                    <div class="col-lg-6">
                        <p>STIR: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>307528903</p>
                    </div>
                    <div class="col-lg-6">
                        <p>THSHT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>152 - Mas‘uliyati cheklangan yoki qo‘shimcha mas‘uliyatli jamiyat

                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>DBIBT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>79994 - Davlat va xo‘jalik boshqaruvi organlari tarkibiga kirmagan tadbirkorlik sub‘yektlari</p>
                    </div>
                    <div class="col-lg-6">
                        <p>IFUT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>42990 - Boshqa toifalarga kiritilmagan boshqa muhandislik inshootlari qurish
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ustav fondi: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>113 910 122 000,00 UZS</p>
                    </div>
                    <div class="col-lg-6">
                        <p>Rahbar: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Davronov Feruzbek G‘Ulomjonovich</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog w-auto modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="{{asset('/assets/images/88.jpeg')}}" class="w-100" alt="cluster">
                    </div>

                    <div class="col-lg-8">
                        <p class="fw-600 font-roboto">
                            "DISCOVER INVEST" mas’uliyati cheklangan jamiyati


                        </p>

                        <div class="cluster_text mb-2">
                            <i class="fas fa-phone-alt me-2"></i>

                            <a href="#" class="text-body">+998712888888</a>
                        </div>

                        <div class="cluster_text">
                            <i class="fas fa-map-marker-alt me-2"></i>

                            <a href="#" class="text-body">
                                Toshkent shahri, Chilonzor tumani, BAYNAL MINAL KO'CHASI, 16-UY

                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <p>Faoliyati: </p>
                    </div>
                    <div class="col-lg-6">
                        <p class="cluster_success py-0 d-inline-block">
                            Hozirda mavjud
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ro'yxatdan o'tgan sana: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>15.09.2008



                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ro'yxatdan o'tkazuvchi organ: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Tuman (shahar) hokimiyati</p>
                    </div>
                    <div class="col-lg-6">
                        <p>STIR: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>300935078</p>
                    </div>
                    <div class="col-lg-6">
                        <p>THSHT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>152 - Mas‘uliyati cheklangan yoki qo‘shimcha mas‘uliyatli jamiyat

                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>DBIBT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>79994 - Davlat va xo‘jalik boshqaruvi organlari tarkibiga kirmagan tadbirkorlik sub‘yektlari</p>
                    </div>
                    <div class="col-lg-6">
                        <p>IFUT: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>41202 - YAshash uchun mo'ljallanmagan binolar qurish
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Ustav fondi: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>49 757 824 000,00 UZS</p>
                    </div>
                    <div class="col-lg-6">
                        <p>Rahbar: </p>
                    </div>
                    <div class="col-lg-6">
                        <p>Merganov Alisher Tuychiyevich</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog w-auto modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{asset('/assets/images/99.jpg')}}" class="w-100" alt="cluster">
                        </div>

                        <div class="col-lg-8">
                            <p class="fw-600 font-roboto">
                                "TAYANCH QURILISH SERVIS" mas’uliyati cheklangan jamiyati



                            </p>

                            <div class="cluster_text mb-2">
                                <i class="fas fa-phone-alt me-2"></i>

                                <a href="#" class="text-body">+998906191001</a>
                            </div>

                            <div class="cluster_text">
                                <i class="fas fa-map-marker-alt me-2"></i>

                                <a href="#" class="text-body">
                                    Navoiy viloyati, Qiziltepa tumani, Zarmitan QFY, Varozun mahallasi

                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6">
                            <p>Faoliyati: </p>
                        </div>
                        <div class="col-lg-6">
                            <p class="cluster_success py-0 d-inline-block">
                                Hozirda mavjud
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>Ro'yxatdan o'tgan sana: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>05.12.2015



                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>Ro'yxatdan o'tkazuvchi organ: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>Tuman (shahar) hokimiyati</p>
                        </div>
                        <div class="col-lg-6">
                            <p>STIR: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>303519710</p>
                        </div>
                        <div class="col-lg-6">
                            <p>THSHT: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>152 - Mas‘uliyati cheklangan yoki qo‘shimcha mas‘uliyatli jamiyat

                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>DBIBT: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>79994 - Davlat va xo‘jalik boshqaruvi organlari tarkibiga kirmagan tadbirkorlik sub‘yektlari</p>
                        </div>
                        <div class="col-lg-6">
                            <p>IFUT: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>41202 - YAshash uchun mo'ljallanmagan binolar qurish
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>Ustav fondi: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>621 229 700,00 UZS</p>
                        </div>
                        <div class="col-lg-6">
                            <p>Rahbar: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>Raximov Xazrat Tojiyevich</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog w-auto modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{asset('/assets/images/1010.jpg')}}" class="w-100" alt="cluster">
                        </div>

                        <div class="col-lg-8">
                            <p class="fw-600 font-roboto">
                                "QURILISH TAMINOTCHI" mas’uliyati cheklangan jamiyati


                            </p>

                            <div class="cluster_text mb-2">
                                <i class="fas fa-phone-alt me-2"></i>

                                <a href="#" class="text-body">+998795552380</a>
                            </div>

                            <div class="cluster_text">
                                <i class="fas fa-map-marker-alt me-2"></i>

                                <a href="#" class="text-body">
                                    Navoiy viloyati, Qiziltepa tumani, Qiziltepa shahri, Qizil-tong ko'chasi, 1-uy

                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6">
                            <p>Faoliyati: </p>
                        </div>
                        <div class="col-lg-6">
                            <p class="cluster_success py-0 d-inline-block">
                                Hozirda mavjud
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>Ro'yxatdan o'tgan sana: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>06.02.2001



                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>Ro'yxatdan o'tkazuvchi organ: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>Tuman (shahar) hokimiyati</p>
                        </div>
                        <div class="col-lg-6">
                            <p>STIR: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>203512644</p>
                        </div>
                        <div class="col-lg-6">
                            <p>THSHT: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>152 - Mas‘uliyati cheklangan yoki qo‘shimcha mas‘uliyatli jamiyat

                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>DBIBT: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>79994 - Davlat va xo‘jalik boshqaruvi organlari tarkibiga kirmagan tadbirkorlik sub‘yektlari</p>
                        </div>
                        <div class="col-lg-6">
                            <p>IFUT: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>23610 - Betondan qurilish uchun buyumlar ishlab chiqarish

                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>Ustav fondi: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>6 164 000,00 UZS</p>
                        </div>
                        <div class="col-lg-6">
                            <p>Rahbar: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>Toshev Botir Shayimovich</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog w-auto modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <img src="{{asset('/assets/images/1111.jpg')}}" class="w-100" alt="cluster">
                        </div>

                        <div class="col-lg-8">
                            <p class="fw-600 font-roboto">
                                "BUNYODKOR ZAMONDOSH" mas’uliyati cheklangan jamiyati



                            </p>

                            <div class="cluster_text mb-2">
                                <i class="fas fa-phone-alt me-2"></i>

                                <a href="#" class="text-body">+998913098007</a>
                            </div>

                            <div class="cluster_text">
                                <i class="fas fa-map-marker-alt me-2"></i>

                                <a href="#" class="text-body">
                                    Navoiy viloyati, Qiziltepa tumani, Uzilishkent shaharchasi, Uzilishkent MFY

                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-6">
                            <p>Faoliyati: </p>
                        </div>
                        <div class="col-lg-6">
                            <p class="cluster_success py-0 d-inline-block">
                                Hozirda mavjud
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>Ro'yxatdan o'tgan sana: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>24.02.2006



                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>Ro'yxatdan o'tkazuvchi organ: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>Tuman (shahar) hokimiyati</p>
                        </div>
                        <div class="col-lg-6">
                            <p>STIR: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>206159417</p>
                        </div>
                        <div class="col-lg-6">
                            <p>THSHT: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>152 - Mas‘uliyati cheklangan yoki qo‘shimcha mas‘uliyatli jamiyat

                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>DBIBT: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>79994 - Davlat va xo‘jalik boshqaruvi organlari tarkibiga kirmagan tadbirkorlik sub‘yektlari</p>
                        </div>
                        <div class="col-lg-6">
                            <p>IFUT: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>41201 - Turar joy binolarini qurish
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>Ustav fondi: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>2 560 000,00 UZS</p>
                        </div>
                        <div class="col-lg-6">
                            <p>Rahbar: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>Xolikov Nodirbek Istamovich</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection