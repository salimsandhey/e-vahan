@extends('layouts.app')
@section('style')
@endsection

@section('content')

<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/main-banner/About-eVSK-banner.webp') }}"
    data-overlay="title" data-opacity="2">
    <div class="container z-index-common">
        <h1 class="breadcumb-title">Thank You From eVAHAN</h1>
        <ul class="breadcumb-menu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Thank You</li>
        </ul>
    </div>
</div>

<section class="space-top pt-70 pb-70" id="about-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 pe-xl-5 mb-5 mb-lg-0">
                <div class="th-video wow fadeInLeft">
                    <img class="w-100" src="{{ asset('assets/img/main-banner/about-us-evsk.JPG') }}"
                        alt="about" />
                    {{-- <a href="{{ url('assets/video/about-evsk-video.mp4') }}" class="play-btn style2 popup-video"><i
                            class="fas fa-play"></i></a> --}}
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <h2 class="mt-n3">Thank You For Downloading Our Brochure!</h2>
                <p class="pra-text mb-4">
                    We appreciate your interest in our service and are thrilled to share more about our innovative services with you.
                    Whether it's obtaining your PUC certificate, renewing vehicle insurance, or accessing our convenient Fastag services,
                    eVAHAN Suvidha Kendra is dedicated to providing efficient and eco-friendly solutions for all your automotive needs. Stay
                    tuned for more updates and exciting offers from eVAHAN. Thank you for choosing us to be your trusted partner in vehicle
                    maintenance.
                    <br /><br />
                    Team eVAHAN
                </p>
                <a href="{{ url('/') }}" class="th-btn">Back To Home Page</a>
            </div>
        </div>
    </div>
</section>


<section class="space-60 position-relative">
    <div class="space-bottom overflow-hidden">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Who Help Us<span class="double-line"></span></span>
                <h2 class="sec-title">Our Partners</h2>
                <p class="sec-text px-30p">
                    We work closely with high reputed brand to deliver best in class
                    services to our franchises and customers.
                </p>
            </div>
            <div class="row brand-slide th-carousel" data-slide-show="6" data-lg-slide-show="4" data-md-slide-show="3"
                data-sm-slide-show="2" data-xs-slide-show="2">
                <div class="col-auto brand-img style2 wow fadeInLeft">
                    <img src="{{ asset('assets/img/main-banner/Partner-1.png') }}" alt="Brand Logo" />
                </div>
                <div class="col-auto brand-img style2 wow fadeInLeft">
                    <img src="{{ asset('assets/img/main-banner/Partner-2.png') }}" alt="Brand Logo" />
                </div>
                <div class="col-auto brand-img style2 wow fadeInLeft">
                    <img src="{{ asset('assets/img/main-banner/Partner-3.png') }}" alt="Brand Logo" />
                </div>
                <div class="col-auto brand-img style2 wow fadeInLeft">
                    <img src="{{ asset('assets/img/main-banner/Partner-4.png') }}" alt="Brand Logo" />
                </div>
                <div class="col-auto brand-img style2 wow fadeInLeft">
                    <img src="{{ asset('assets/img/main-banner/Partner-5.png') }}" alt="Brand Logo" />
                </div>
                <div class="col-auto brand-img style2 wow fadeInLeft">
                    <img src="{{ asset('assets/img/main-banner/Partner-6.png') }}" alt="Brand Logo" />
                </div>
                <div class="col-auto brand-img style2 wow fadeInLeft">
                    <img src="{{ asset('assets/img/main-banner/Partner-7.png') }}" alt="Brand Logo" />
                </div>
                <div class="col-auto brand-img style2 wow fadeInLeft">
                    <img src="{{ asset('assets/img/main-banner/Partner-8.png') }}" alt="Brand Logo" />
                </div>
                <div class="col-auto brand-img style2 wow fadeInLeft">
                    <img src="{{ asset('assets/img/main-banner/Partner-9.png') }}" alt="Brand Logo" />
                </div>
                <div class="col-auto brand-img style2 wow fadeInLeft">
                    <img src="{{ asset('assets/img/main-banner/Partner-10.png') }}" alt="Brand Logo" />
                </div>
                <div class="col-auto brand-img style2 wow fadeInLeft">
                    <img src="{{ asset('assets/img/main-banner/Partner-11.png') }}" alt="Brand Logo" />
                </div>
                <div class="col-auto brand-img style2 wow fadeInLeft">
                    <img src="{{ asset('assets/img/main-banner/Partner-12.png') }}" alt="Brand Logo" />
                </div>
                <div class="col-auto brand-img style2 wow fadeInLeft">
                    <img src="{{ asset('assets/img/main-banner/Partner-13.png') }}" alt="Brand Logo" />
                </div>
                <div class="col-auto brand-img style2 wow fadeInLeft">
                    <img src="{{ asset('assets/img/main-banner/Partner-14.png') }}" alt="Brand Logo" />
                </div>
                <div class="col-auto brand-img style2 wow fadeInLeft">
                    <img src="{{ asset('assets/img/main-banner/Partner-15.png') }}" alt="Brand Logo" />
                </div>
                <div class="col-auto brand-img style2 wow fadeInLeft">
                    <img src="{{ asset('assets/img/main-banner/Partner-16.png') }}" alt="Brand Logo" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Our Media <span class="double-line"></span></span>
            <h2 class="sec-title">Gallery of EVSK</h2>
            <br />
        </div>
        <div class="row slider-shadow th-carousel" data-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2"
            data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true">
            <div class="col-md-6 col-lg-4">
                <div class="team-grid-img wow fadeInUp">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/main-banner/gallery-sec-1.webp') }}" alt="Team" />
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="team-grid-img wow fadeInUp">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/main-banner/gallery-sec-2.webp') }}" alt="Team" />
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="team-grid-img wow fadeInUp">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/main-banner/gallery-sec-3.webp') }}" alt="Team" />
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="team-grid-img wow fadeInUp">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/main-banner/gallery-sec-4.webp') }}" alt="Team" />
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="team-grid-img wow fadeInUp">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/main-banner/gallery-sec-5.webp') }}" alt="Team" />
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="team-grid-img wow fadeInUp">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/main-banner/gallery-sec-6.webp') }}" alt="Team" />
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="team-grid-img wow fadeInUp">
                    <div class="team-img">
                        <img src="{{ asset('assets/img/main-banner/gallery-sec-7.webp') }}" alt="Team" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('script')
@endsection
