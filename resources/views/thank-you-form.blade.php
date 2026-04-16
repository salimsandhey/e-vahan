@extends('layouts.app')
@section('style')
@endsection

@section('content')

<div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/main-banner/About-eVSK-banner.webp') }}"
    data-overlay="title" data-opacity="2">
    <div class="container z-index-common">
        <h1 class="breadcumb-title">eVAHAN Team</h1>
        <ul class="breadcumb-menu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Thank You</li>
        </ul>
    </div>
</div>

<section class="space-top pt-70 pb-70 mb-50" id="about-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 pe-xl-5 mb-5 mb-lg-0">
                <div class="th-video wow fadeInLeft">
                    <img class="w-100" src="{{ asset('assets/img/main-banner/gallery-sec-1.webp') }}"
                        alt="about" />
                    {{-- <a href="{{ url('assets/video/about-evsk-video.mp4') }}" class="play-btn style2 popup-video"><i
                            class="fas fa-play"></i></a> --}}
                </div>
            </div>
            <div class="col-lg-7 wow fadeInRight">
                <h2 class="mt-n3">Thank You For Enquiry!</h2>
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


@endsection

@section('script')
@endsection
