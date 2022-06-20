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
                    <img src="{{asset('/assets/images/cluster.svg')}}" class="rounded" width="250" alt="cluster">
                </div>
                <div class="col-lg-9">
                    <div class="d-flex">
                        <div class="cluster_id">
                            307491492
                        </div>

                        <div class="cluster_date">
                            19.06.2020
                        </div>
                    </div>

                    <p class="cluster_title mb-4">
                        "MARG‘ILON NODIR QURILISH" mas’uliyati cheklangan jamiyati
                    </p>

                    <div class="cluster_text mb-2">
                        <i class="fas fa-phone-alt me-2"></i>

                        <a href="#" class="text-body">+998(raqamni ko‘rish)</a>
                    </div>

                    <div class="cluster_text">
                        <i class="fas fa-map-marker-alt me-2"></i>

                        <a href="#" class="text-body">
                            Buxoro viloyati, G'ijduvon tumani, G'ijduvon shahri, Ibn Sino kuchasi 5 uy
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cluster border rounded py-2 my-4">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="{{asset('/assets/images/cluster_1.svg')}}" class="rounded" width="250" alt="cluster">
                </div>
                <div class="col-lg-9">
                    <div class="d-flex">
                        <div class="cluster_id">
                            307491492
                        </div>

                        <div class="cluster_date">
                            19.06.2020
                        </div>
                    </div>

                    <p class="cluster_title mb-4">
                        "MARG‘ILON NODIR QURILISH" mas’uliyati cheklangan jamiyati
                    </p>

                    <div class="cluster_text mb-2">
                        <i class="fas fa-phone-alt me-2"></i>

                        <a href="#" class="text-body">+998(raqamni ko‘rish)</a>
                    </div>

                    <div class="cluster_text">
                        <i class="fas fa-map-marker-alt me-2"></i>

                        <a href="#" class="text-body">
                            Buxoro viloyati, G'ijduvon tumani, G'ijduvon shahri, Ibn Sino kuchasi 5 uy
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cluster border rounded py-2 my-4">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="{{asset('/assets/images/cluster_2.svg')}}" class="rounded" width="250" alt="cluster">
                </div>
                <div class="col-lg-9">
                    <div class="d-flex">
                        <div class="cluster_id">
                            307491492
                        </div>

                        <div class="cluster_date">
                            19.06.2020
                        </div>
                    </div>

                    <p class="cluster_title mb-4">
                        "MARG‘ILON NODIR QURILISH" mas’uliyati cheklangan jamiyati
                    </p>

                    <div class="cluster_text mb-2">
                        <i class="fas fa-phone-alt me-2"></i>

                        <a href="#" class="text-body">+998(raqamni ko‘rish)</a>
                    </div>

                    <div class="cluster_text">
                        <i class="fas fa-map-marker-alt me-2"></i>

                        <a href="#" class="text-body">
                            Buxoro viloyati, G'ijduvon tumani, G'ijduvon shahri, Ibn Sino kuchasi 5 uy
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cluster border rounded py-2 my-4">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="{{asset('/assets/images/cluster_3.svg')}}" class="rounded" width="250" alt="cluster">
                </div>
                <div class="col-lg-9">
                    <div class="d-flex">
                        <div class="cluster_id">
                            307491492
                        </div>

                        <div class="cluster_date">
                            19.06.2020
                        </div>
                    </div>

                    <p class="cluster_title mb-4">
                        "MARG‘ILON NODIR QURILISH" mas’uliyati cheklangan jamiyati
                    </p>

                    <div class="cluster_text mb-2">
                        <i class="fas fa-phone-alt me-2"></i>

                        <a href="#" class="text-body">+998(raqamni ko‘rish)</a>
                    </div>

                    <div class="cluster_text">
                        <i class="fas fa-map-marker-alt me-2"></i>

                        <a href="#" class="text-body">
                            Buxoro viloyati, G'ijduvon tumani, G'ijduvon shahri, Ibn Sino kuchasi 5 uy
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cluster border rounded py-2 my-4">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="{{asset('/assets/images/cluster_empty.svg')}}" class="rounded" width="120" alt="cluster">
                </div>
                <div class="col-lg-9">
                    <div class="d-flex">
                        <div class="cluster_id">
                            307491492
                        </div>

                        <div class="cluster_date">
                            19.06.2020
                        </div>
                    </div>

                    <p class="cluster_title mb-4">
                        "MARG‘ILON NODIR QURILISH" mas’uliyati cheklangan jamiyati
                    </p>

                    <div class="cluster_text mb-2">
                        <i class="fas fa-phone-alt me-2"></i>

                        <a href="#" class="text-body">+998(raqamni ko‘rish)</a>
                    </div>

                    <div class="cluster_text">
                        <i class="fas fa-map-marker-alt me-2"></i>

                        <a href="#" class="text-body">
                            Buxoro viloyati, G'ijduvon tumani, G'ijduvon shahri, Ibn Sino kuchasi 5 uy
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cluster border rounded py-2 my-4">
            <div class="row">
                <div class="col-lg-3 d-flex align-items-center justify-content-center">
                    <img src="{{asset('/assets/images/cluster_empty.svg')}}" class="rounded" width="120" alt="cluster">
                </div>
                <div class="col-lg-9">
                    <div class="d-flex">
                        <div class="cluster_id">
                            307491492
                        </div>

                        <div class="cluster_date">
                            19.06.2020
                        </div>

                        <div class="cluster_danger">
                            Tugatilgan
                        </div>
                    </div>

                    <p class="cluster_title mb-4">
                        "MARG‘ILON NODIR QURILISH" mas’uliyati cheklangan jamiyati
                    </p>

                    <div class="cluster_text mb-2">
                        <i class="fas fa-phone-alt me-2"></i>

                        <a href="#" class="text-body">+998(raqamni ko‘rish)</a>
                    </div>

                    <div class="cluster_text">
                        <i class="fas fa-map-marker-alt me-2"></i>

                        <a href="#" class="text-body">
                            Buxoro viloyati, G'ijduvon tumani, G'ijduvon shahri, Ibn Sino kuchasi 5 uy
                        </a>
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
                            <img src="{{asset('/assets/images/cluster.svg')}}" class="w-100" alt="cluster">
                        </div>

                        <div class="col-lg-8">
                            <p class="fw-600 font-roboto">
                                "ME’MOR MEXANIZATSIYA QURILISH"
                                xususiy korxonasi
                            </p>

                            <div class="cluster_text mb-2">
                                <i class="fas fa-phone-alt me-2"></i>

                                <a href="#" class="text-body">+998(raqamni ko‘rish)</a>
                            </div>

                            <div class="cluster_text">
                                <i class="fas fa-map-marker-alt me-2"></i>

                                <a href="#" class="text-body">
                                    Buxoro viloyati, G'ijduvon tumani, G'ijduvon shahri, Ibn Sino kuchasi 5 uy
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
                            <p>23.03.2010</p>
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
                            <p>201879592</p>
                        </div>
                        <div class="col-lg-6">
                            <p>THSHT: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>110 - Xususiy korxona </p>
                        </div>
                        <div class="col-lg-6">
                            <p>DBIBT: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>79994 - Davlat va xo‘jalik boshqaruvi organlari tarkibiga kirmagan tadbirkorlik
                                sub‘yektlari </p>
                        </div>
                        <div class="col-lg-6">
                            <p>IFUT: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>41201 - Turar joy binolarini qurish </p>
                        </div>
                        <div class="col-lg-6">
                            <p>Ustav fondi: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>1 606 880 000,00 UZS </p>
                        </div>
                        <div class="col-lg-6">
                            <p>Rahbar: </p>
                        </div>
                        <div class="col-lg-6">
                            <p>Shamsutdinov Shoxruxmirzo Oybekovich </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection