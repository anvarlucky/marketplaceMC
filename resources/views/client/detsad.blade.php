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
                                <img src="{{asset('/assets/house/KKKK--.jpg')}}" class="w-100 mb-3" alt="details">

                                <img src="{{asset('/assets/house/001.jpg')}}" class="w-100 mb-3" alt="details">

                                <img src="{{asset('/assets/house/KKKK--.jpg')}}" class="w-100 mb-3" alt="details">

                                <img src="{{asset('/assets/house/001.jpg')}}" class="w-100" alt="details">
                            </div>

                            <img src="{{asset('/assets/house/KKKK--.jpg')}}" class="rounded w-80" alt="details">
                        </div>
                    </div>

                    <div class="col-lg-6 pt-2">
                        <p class="details-title">120 o`rinli bog`cha</p>

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
                            115000000000 so’m
                        </p>


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
                                Korxonada ma'lum bir harorat rejimini talab qiladigan yuklarni tashish uchun
                                mo'ljallangan
                                izotermik mikroavtobuslar ishlab chiqariladi (oziq-ovqat, dori-darmon va boshqalar).
                                Izotermik mikroavtobus odatiy ishlab chiqarilgan tovarlar mikrosxemasidan o'zining
                                issiqlik
                                o'tkazuvchanligi, ichki qoplamasining mustahkamligi va ekologik tozaligi bilan ajralib
                                turadi. Izotermik van, ramka usuli yordamida amalga oshiriladi. Tashqi tomondan,
                                mikroavtobus bo'yalgan qoplangan metall qatlam bilan qoplangan, bu polimer qoplamasi
                                tufayli
                                korroziyaga qarshi turadi va shu bilan mustahkamlikni ta'minlaydi Ichki qism, ya'ni 40
                                mm
                                dan 75 mm gacha bo'lgan polistirol ko'pik yordamida issiqlik izolatsiyasi va tana
                                qismlarini
                                ehtiyotkorlik bilan tayyorlash (yoriqlar va bo'shliqlarni bartaraf etish). bu nafaqat
                                harorat ta'siridan, balki namlikdan ham himoya qilishga imkon beradi. Vannaning ichki
                                qismi
                                galvanizli varaq.

                                <br>
                                <br>


                                <br>
                                <br>

                                <br>
                                <br>

                            </p>
                        </div>

                        <div class="check_second">
                            <p class="mt-4">
                                2. Korxonada ma'lum bir harorat rejimini talab qiladigan yuklarni tashish uchun
                                mo'ljallangan
                                izotermik mikroavtobuslar ishlab chiqariladi (oziq-ovqat, dori-darmon va boshqalar).
                                Izotermik mikroavtobus odatiy ishlab chiqarilgan tovarlar mikrosxemasidan o'zining
                                issiqlik
                                o'tkazuvchanligi, ichki qoplamasining mustahkamligi va ekologik tozaligi bilan ajralib
                                turadi. Izotermik van, ramka usuli yordamida amalga oshiriladi. Tashqi tomondan,
                                mikroavtobus bo'yalgan qoplangan metall qatlam bilan qoplangan, bu polimer qoplamasi
                                tufayli
                                korroziyaga qarshi turadi va shu bilan mustahkamlikni ta'minlaydi Ichki qism, ya'ni 40
                                mm
                                dan 75 mm gacha bo'lgan polistirol ko'pik yordamida issiqlik izolatsiyasi va tana
                                qismlarini
                                ehtiyotkorlik bilan tayyorlash (yoriqlar va bo'shliqlarni bartaraf etish). bu nafaqat
                                harorat ta'siridan, balki namlikdan ham himoya qilishga imkon beradi. Vannaning ichki
                                qismi
                                galvanizli varaq.

                                <br>
                                <br>


                                <br>
                                <br>

                                <br>
                                <br>

                            </p>
                        </div>

                        <div class="check_third">
                            <p class="mt-4">
                                3. Korxonada ma'lum bir harorat rejimini talab qiladigan yuklarni tashish uchun
                                mo'ljallangan
                                izotermik mikroavtobuslar ishlab chiqariladi (oziq-ovqat, dori-darmon va boshqalar).
                                Izotermik mikroavtobus odatiy ishlab chiqarilgan tovarlar mikrosxemasidan o'zining
                                issiqlik
                                o'tkazuvchanligi, ichki qoplamasining mustahkamligi va ekologik tozaligi bilan ajralib
                                turadi. Izotermik van, ramka usuli yordamida amalga oshiriladi. Tashqi tomondan,
                                mikroavtobus bo'yalgan qoplangan metall qatlam bilan qoplangan, bu polimer qoplamasi
                                tufayli
                                korroziyaga qarshi turadi va shu bilan mustahkamlikni ta'minlaydi Ichki qism, ya'ni 40
                                mm
                                dan 75 mm gacha bo'lgan polistirol ko'pik yordamida issiqlik izolatsiyasi va tana
                                qismlarini
                                ehtiyotkorlik bilan tayyorlash (yoriqlar va bo'shliqlarni bartaraf etish). bu nafaqat
                                harorat ta'siridan, balki namlikdan ham himoya qilishga imkon beradi. Vannaning ichki
                                qismi
                                galvanizli varaq.

                                <br>
                                <br>


                                <br>
                                <br>

                                <br>
                                <br>

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
                        ООО "BOG`CHAINVEST"
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
                                bogcha-invest.gl.uz
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




@endsection