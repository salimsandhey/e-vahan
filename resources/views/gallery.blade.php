@extends('layouts.app')
@section('style')
@endsection

@section('content')
    <!--==============================Breadcumb ============================= -->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/main-banner/eVAHAN-Services-banner.webp') }}"
        data-overlay="title" data-opacity="2">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Gallery</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Gallery</li>
            </ul>
        </div>
    </div>
    <!--==============================Gallery Area  ============================-->

    {{-- <section class="bg-smoke space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Our Gallery<span class="double-line"></span></span>
                <h2 class="sec-title">eVAHAN Gallery</h2>
                <br />
            </div>
            <div class="row slider-shadow th-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2"
                data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true">
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/gallery-sec-1.webp') }}" alt="Team" />
                        </div>

                        <div class="service-list-box">
                            <div class="service-list_icon">
                                <img src="{{ asset('assets/img/main-banner/fuel.webp') }}" alt="service Icon" />
                            </div>
                            <div class="service-list_content">
                                <span class="service-list_text">Jaiswal Filling Station</span>
                                <h3 class="team-title1">Phagwara</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/gallery-sec-2.webp') }}" alt="Team" />
                        </div>
                        <div class="service-list-box">
                            <div class="service-list_icon">
                                <img src="{{ asset('assets/img/main-banner/fuel.webp') }}" alt="service Icon" />
                            </div>
                            <div class="service-list_content">
                                <span class="service-list_text">COCO 33</span>
                                <h3 class="team-title1">Chandigarh</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/gallery-sec-3.webp') }}" alt="Team" />
                        </div>
                        <div class="service-list-box">
                            <div class="service-list_icon">
                                <img src="{{ asset('assets/img/main-banner/fuel.webp') }}" alt="service Icon" />
                            </div>
                            <div class="service-list_content">
                                <span class="service-list_text">Sushma Fuels</span>
                                <h3 class="team-title1">Kharar</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/gallery-sec-4.webp') }}" alt="Team" />
                        </div>
                        <div class="service-list-box">
                            <div class="service-list_icon">
                                <img src="{{ asset('assets/img/main-banner/fuel.webp') }}" alt="service Icon" />
                            </div>
                            <div class="service-list_content">
                                <span class="service-list_text">Petro Junction</span>
                                <h3 class="team-title1">Mohali</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/gallery-sec-5.webp') }}" alt="Team" />
                        </div>
                        <div class="service-list-box">
                            <div class="service-list_icon">
                                <img src="{{ asset('assets/img/main-banner/fuel.webp') }}" alt="service Icon" />
                            </div>
                            <div class="service-list_content">
                                <span class="service-list_text">Khaira Filling Station</span>
                                <h3 class="team-title1">Jalandhar</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/gallery-sec-6.webp') }}" alt="Team" />
                        </div>
                        <div class="service-list-box">
                            <div class="service-list_icon">
                                <img src="{{ asset('assets/img/main-banner/fuel.webp') }}" alt="service Icon" />
                            </div>
                            <div class="service-list_content">
                                <span class="service-list_text">Gill Filling Station</span>
                                <h3 class="team-title1">Dasuya</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/gallery-sec-7.webp') }}" alt="Team" />
                        </div>
                        <div class="service-list-box">
                            <div class="service-list_icon">
                                <img src="{{ asset('assets/img/main-banner/fuel.webp') }}" alt="service Icon" />
                            </div>
                            <div class="service-list_content">
                                <span class="service-list_text">A+ Pollution Check Center</span>
                                <h3 class="team-title1">Kapurthala</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <div class="overflow-hidden space">
        <div class="container">
            <!-- <div class="gallery-tabs indicator-active filter-menu-active">
                  <button data-filter="*" class="th-btn tab-btn active" type="button">
                    All Photos
                  </button>
                  <button data-filter=".cat1" class="th-btn tab-btn" type="button">
                    E-Vahan
                  </button>
                  <button data-filter=".cat2" class="th-btn tab-btn" type="button">
                    E-Vahan
                  </button>
                  <button data-filter=".cat3" class="th-btn tab-btn" type="button">
                    E-Vahan
                  </button>
                </div> -->
            <div class="row mb-30">
                <div class="col-12 title-area text-center">
                    <div class="gallery-card">
                        <h2 class="sec-title">eVAHAN Suvidha Kendra Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row gallery-row filter-active">
                <div class="col-md-6 col-lg-4 filter-item cat5 cat9 cat8 cat9">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/main-banner/gallery-sec-1.webp') }}" alt="gallery image" />
                            <a href="{{ url('assets/img/main-banner/gallery-sec-1.webp') }}" class="icon-btn popup-image"><i
                                    class="fa-regular fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item cat7 cat6 cat5 cat4 cat3">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/main-banner/gallery-sec-2.webp') }}" alt="gallery image" />
                            <a href="{{ url('assets/img/main-banner/gallery-sec-2.webp') }}" class="icon-btn popup-image"><i
                                    class="fa-regular fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item cat9 cat7 cat4">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/main-banner/gallery-sec-3.webp') }}" alt="gallery image" />
                            <a href="{{ url('assets/img/main-banner/gallery-sec-3.webp') }}" class="icon-btn popup-image"><i
                                    class="fa-regular fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item cat1 cat3 cat4 cat5">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/main-banner/gallery-sec-4.webp') }}" alt="gallery image" />
                            <a href="{{ url('assets/img/main-banner/gallery-sec-4.webp') }}" class="icon-btn popup-image"><i
                                    class="fa-regular fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item cat6 cat8 cat9">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/main-banner/gallery-sec-5.webp') }}" alt="gallery image" />
                            <a href="{{ url('assets/img/main-banner/gallery-sec-5.webp') }}"
                                class="icon-btn popup-image"><i class="fa-regular fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item cat2 cat9 cat5 cat4 cat3">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/main-banner/gallery-sec-6.webp') }}" alt="gallery image" />
                            <a href="{{ url('assets/img/main-banner/gallery-sec-6.webp') }}"
                                class="icon-btn popup-image"><i class="fa-regular fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-50 mb-30">
                <div class="col-12 title-area text-center">
                    <div class="gallery-card">
                        <h2 class="sec-title">Automatic Test System Gallery</h2>
                    </div>
                </div>
            </div>

            <div class="row gallery-row filter-active">
                <div class="col-md-6 col-lg-4 filter-item cat9 cat5 cat9 cat8 cat9">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/main-banner/ATS-Gallery-image.webp') }}" alt="gallery image" />
                            <a href="{{ url('assets/img/main-banner/ATS-Gallery-image.webp') }}"
                                class="icon-btn popup-image"><i class="fa-regular fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div
                    class="col-md-6 col-lg-4 filter-item <br /> <b>Warning</b>: Undefined array key 8 in <b>E:\web-dev\angfuzsoft\html\taxiar-html\build\inc\sections\gallery-sec-v3.php</b> on line <b>57</b><br />">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/main-banner/ATS-Gallery-image01.webp') }}"
                                alt="gallery image" />
                            <a href="{{ url('assets/img/main-banner/ATS-Gallery-image01.webp') }}"
                                class="icon-btn popup-image"><i class="fa-regular fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item cat1 cat2 cat5 cat4 cat3">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/main-banner/ATS-Gallery-image02.webp') }}"
                                alt="gallery image" />
                            <a href="{{ url('assets/img/main-banner/ATS-Gallery-image02.webp') }}"
                                class="icon-btn popup-image"><i class="fa-regular fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 filter-item cat9 cat5 cat9 cat8 cat9">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/main-banner/ATS-Gallery-image03.webp') }}"
                                alt="gallery image" />
                            <a href="{{ url('assets/img/main-banner/ATS-Gallery-image03.webp') }}"
                                class="icon-btn popup-image"><i class="fa-regular fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div
                    class="col-md-6 col-lg-4 filter-item <br /> <b>Warning</b>: Undefined array key 8 in <b>E:\web-dev\angfuzsoft\html\taxiar-html\build\inc\sections\gallery-sec-v3.php</b> on line <b>57</b><br />">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/main-banner/ATS-Gallery-image04.webp') }}"
                                alt="gallery image" />
                            <a href="{{ url('assets/img/main-banner/ATS-Gallery-image04.webp') }}"
                                class="icon-btn popup-image"><i class="fa-regular fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item cat1 cat2 cat5 cat4 cat3">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/main-banner/ATS-Gallery-image05.webp') }}"
                                alt="gallery image" />
                            <a href="{{ url('assets/img/main-banner/ATS-Gallery-image05.webp') }}"
                                class="icon-btn popup-image"><i class="fa-regular fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-50 mb-30">
                <div class="col-12 title-area text-center">
                    <div class="gallery-card">
                        <h2 class="sec-title">Automatic Driving Training Centre Gallery</h2>
                    </div>
                </div>
            </div>

            <div class="row gallery-row filter-active">
                <div class="col-md-6 col-lg-4 filter-item cat9 cat5 cat9 cat8 cat9">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/main-banner/ADTC-Gallery-image.webp') }}"
                                alt="gallery image" />
                            <a href="{{ url('assets/img/main-banner/ADTC-Gallery-image.webp') }}"
                                class="icon-btn popup-image"><i class="fa-regular fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div
                    class="col-md-6 col-lg-4 filter-item <br /> <b>Warning</b>: Undefined array key 8 in <b>E:\web-dev\angfuzsoft\html\taxiar-html\build\inc\sections\gallery-sec-v3.php</b> on line <b>57</b><br />">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/main-banner/ADTC-Gallery-image01.webp') }}"
                                alt="gallery image" />
                            <a href="{{ url('assets/img/main-banner/ADTC-Gallery-image01.webp') }}"
                                class="icon-btn popup-image"><i class="fa-regular fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item cat1 cat2 cat5 cat4 cat3">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/main-banner/ADTC-Gallery-image02.webp') }}"
                                alt="gallery image" />
                            <a href="{{ url('assets/img/main-banner/ADTC-Gallery-image02.webp') }}"
                                class="icon-btn popup-image"><i class="fa-regular fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item cat9 cat5 cat9 cat8 cat9">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/main-banner/ADTC-Gallery-image03.webp') }}"
                                alt="gallery image" />
                            <a href="{{ url('assets/img/main-banner/ADTC-Gallery-image03.webp') }}"
                                class="icon-btn popup-image"><i class="fa-regular fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div
                    class="col-md-6 col-lg-4 filter-item <br /> <b>Warning</b>: Undefined array key 8 in <b>E:\web-dev\angfuzsoft\html\taxiar-html\build\inc\sections\gallery-sec-v3.php</b> on line <b>57</b><br />">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/main-banner/ADTC-Gallery-image04.webp') }}"
                                alt="gallery image" />
                            <a href="{{ url('assets/img/main-banner/ADTC-Gallery-image04.webp') }}"
                                class="icon-btn popup-image"><i class="fa-regular fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item cat1 cat2 cat5 cat4 cat3">
                    <div class="gallery-card">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/img/main-banner/ADTC-Gallery-image05.webp') }}"
                                alt="gallery image" />
                            <a href="{{ url('assets/img/main-banner/ADTC-Gallery-image05.webp') }}"
                                class="icon-btn popup-image"><i class="fa-regular fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="pt-30 mb-60">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Our Media <span class="double-line"></span></span>
                <h2 class="sec-title">Media Corner</h2>
                <br />
            </div>
            <div class="row slider-shadow th-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2"
                data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true">
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid-img  wow fadeInUp ">
                        <div class="team-img h-100">
                            <a
                                href="{{ url('https://aninews.in/news/business/business/evahan174-to-operate-2000-puc-centres-approved-by-the-transport-department-government-of-punjab20220201174333/') }}">
                                <img src="{{ asset('assets/img/main-banner/media-c-1.webp') }}" alt="Team"
                                    class="h-100 w-100" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid-img wow fadeInUp ">
                        <div class="team-img h-100">
                            <a
                                href="{{ url('https://www.business-standard.com/content/press-releases-ani/evahan-to-operate-2000-puc-centres-approved-by-the-transport-department-government-of-punjab-122020101647_1.html') }}">
                                <img src="{{ asset('assets/img/main-banner/media-c-2.webp') }}" alt="Team"
                                    class="h-100 w-100" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid-img wow fadeInUp">
                        <div class="team-img h-100">
                            <a
                                href="{{ url('https://www.zee5.com/articles/evahan-to-operate-2000-puc-centres-approved-by-the-transport-department-government-of-punjab') }}">
                                <img src="{{ asset('assets/img/main-banner/media-c-3.webp') }}" alt="Team"
                                    class="h-100 w-100" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid-img wow fadeInUp">
                        <div class="team-img h-100">
                            <a
                                href="{{ url('https://www.punjablive.news/news/evahan-to-operate-2000-puc-centres-approved-by-the-transport-department-government-of-punjab20220201174327/') }}">
                                <img src="{{ asset('assets/img/main-banner/media-c-4.webp') }}" alt="Team"
                                    class="h-100 w-100" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid-img wow fadeInUp">
                        <div class="team-img h-100">
                            <a
                                href="{{ url('https://www.indiastudychannel.com/resources/168905-How-to-open-an-authorized-auto-pollution-control-checking-centre-in-India.aspx') }}">
                                <img src="{{ asset('assets/img/main-banner/media-c-5.webp') }}" alt="Team"
                                    class="h-100 w-100" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid-img wow fadeInUp">
                        <div class="team-img h-100">
                            <a
                                href="{{ url('https://www.zeebiz.com/india/news-how-to-open-puc-centre-want-to-earn-up-to-rs-5000-per-day-here-is-big-opportunity-114158') }}">
                                <img src="{{ asset('assets/img/main-banner/media-c-6.webp') }}" alt="Team"
                                    class="h-100 w-100" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid-img wow fadeInUp">
                        <div class="team-img h-100">
                            <a
                                href="{{ url('https://theprint.in/ani-press-releases/evahan-to-operate-2000-puc-centres-approved-by-the-transport-department-government-of-punjab/818798/') }}">
                                <img src="{{ asset('assets/img/main-banner/media-c-7.webp') }}" alt="Team"
                                    class="h-100 w-100" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid-img wow fadeInUp">
                        <div class="team-img h-100">
                            <a
                                href="{{ url('https://www.himachalpatrika.com/news/evahan-to-operate-2000-puc-centres-approved-by-the-transport-department-government-of-punjab20220201174327/') }}">
                                <img src="{{ asset('assets/img/main-banner/media-c-8.webp') }}" alt="Team"
                                    class="h-100 w-100" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
