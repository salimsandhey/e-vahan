@extends('layouts.app')
@section('style')
@endsection

@section('content')

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/main-banner/Automatic-Driving-Training-Centre-banner.webp ') }}" data-overlay="title"
        data-opacity="2">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">
                Automatic Driving Training Centre (ADTC)
            </h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>ADTC</li>
            </ul>
        </div>
    </div>

    <section class="space-top">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-8">
                    <img class="w-100" src="{{ asset('assets/img/main-banner/Automatic driving training centre project .png') }}" alt="Service Image" style="max-width: 80%; display: block; margin: 0 auto;" />
                    {{-- <div class="th-video wow fadeInLeft">

                        <a href="{{ url('assets/video/about-evsk-video.mp4') }}" class="play-btn style2 popup-video"><i
                                class="fas fa-play"></i></a>
                    </div> --}}
                    <h3 class="single-title">
                        About Automatic Driving Training Centre (ADTC)
                    </h3>
                    <div class="service-content">
                        <p class="mb-20 text-justify">
                            At eVAHAN, everyone deserves the confidence and freedom that comes with knowing how to drive safely and responsibly. Our
                            Automatic Driving Training Centre (ADTC) is designed to equip you with the skills and knowledge needed to become a
                            competent and responsible driver, empowering you to hit the road quickly.
                            It is a specialized facility that offers comprehensive training programs and resources to individuals seeking to obtain
                            driving licenses or improve their driving skills. These centers are accredited by regulatory authorities and adhere to
                            specific standards and guidelines to ensure the quality and effectiveness of their training programs.
                        </p>
                    </div>

                </div>
                <div class="col-lg-4 d-lg-flex align-items-center">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Services</h3>
                            <ul>
                                <li>
                                    <a href="{{ url('evahan-suvidha-kendra') }}">eVAHAN Suvidha Kendra (eVSK)</a>
                                    <!-- <span>(8)</span> -->
                                </li>
                                <li>
                                    <a href="{{ url('automatic-testing-system') }}">Automatic Testing System (ATS)</a>
                                </li>
                                <li>
                                    <a href="{{ url('automatic-driving-training-centre') }}">Automatic Driving Training Centre (ADTC)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_offer style2">
                            <div class="offer-banner">
                                <div class="banner-logo">
                                    <div class="th-video01 wow fadeInLeft">
                                        <a href="{{ url('assets/video/about-evsk-video.mp4') }}" class="play-btn style2 popup-video"><i
                                                class="fas fa-play"></i></a>
                                    </div>
                                    <img src="{{ asset('assets/img/E-vahan-logo.webp') }}" alt="E-vahan" />
                                </div>
                                <h5 class="banner-title2 text-white">
                                    Discover Our Services Through This Video.
                                </h5>
                                <a href="{{ url('contact-us') }}" class="th-btn">Contact Us</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>

    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-12">
                    <h3 class="single-title text-center">
                        Types of Driving Training Centers
                    </h3>
                    <div class="service-content">
                        <p class="mb-20 text-justify">
                            At an ADTC, learners receive theoretical and practical instruction on various aspects of driving, including traffic
                            rules and regulations, vehicle mechanics, defensive driving techniques, and more. These centers typically offer a range
                            of training programs tailored to different types of vehicles, driving conditions, and skill levels. There are 4 types of
                            Driving Training Centers:
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-40">
                            <div class="service-feature">
                                <div class="service-feature_icon">
                                    <img src="{{ asset('assets/img/icon/service_feature_1_1.svg') }}" alt="Icon" />
                                </div>
                                <div class="service-feature_content">
                                    <h4 class="service-feature_title">IDTR (Institute of Driving Training & Research)</h4>
                                    <p class="service-feature_text">
                                        Specialized institutes offering comprehensive driving training and research facilities.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-40">
                            <div class="service-feature">
                                <div class="service-feature_icon">
                                    <img src="{{ asset('assets/img/icon/service_feature_1_2.svg') }}" alt="Icon" />
                                </div>
                                <div class="service-feature_content">
                                    <h4 class="service-feature_title">RDTC (Regional Driving Training Centre)</h4>
                                    <p class="service-feature_text">
                                        Regional centers providing driving training services tailored to local needs and regulations.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-40">
                            <div class="service-feature">
                                <div class="service-feature_icon">
                                    <img src="{{ asset('assets/img/icon/service_feature_1_3.svg') }}" alt="Icon" />
                                </div>
                                <div class="service-feature_content">
                                    <h4 class="service-feature_title">DTC (Driving Training Centre)</h4>
                                    <p class="service-feature_text">
                                        Standard driving training centers offering basic and advanced driving courses.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-40">
                            <div class="service-feature">
                                <div class="service-feature_icon">
                                    <img src="{{ asset('assets/img/icon/service_feature_1_4.svg') }}" alt="Icon" />
                                </div>
                                <div class="service-feature_content">
                                    <h4 class="service-feature_title">ADTC (Accredited Driving Training Centre)</h4>
                                    <p class="service-feature_text">
                                        Accredited centers recognized for their adherence to quality standards and effective driving instruction.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-content">
                        <p class="mb-20 text-justify">
                            ADTCs promote road safety by equipping drivers with the knowledge, skills, and attitudes necessary to navigate roads
                            safely and responsibly. They also contribute to reducing road accidents and fatalities by fostering a culture of
                            responsible driving behavior and adherence to traffic laws.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="space-top bg-smoke space-extra-bottom">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-12">
                    <h3 class="single-title text-center">
                        What We Provide
                    </h3>
                    <div class="service-content">

                        <div class="service-process-wrap">
                            <div class="service-process">
                                <div class="service-process_num">01</div>
                                <h5 class="service-process_title">Infrastructure Development</h5>
                                <div class="text-left pl-20">
                                    <ul class="list-line">
                                        <li>
                                            <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span style="font-weight: 600;">Design and construct purpose-built training facilities tailored to your ADTC requirements.</span>
                                        </li>
                                        <li>
                                            <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span style="font-weight: 600;">Planning and layout optimization for efficient use of space and resources.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="service-process">
                                <div class="service-process_num">02</div>
                                <h5 class="service-process_title">Equipment Procurement and Installation</h5>
                                <div class="text-left pl-20">
                                    <ul class="list-line">
                                        <li>
                                            <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span style="font-weight: 600;">Sourcing and installation of essential equipment for driving instruction, including simulators, vehicles, and training
                                            aids.</span>
                                        </li>
                                        <li>
                                            <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span style="font-weight: 600;">Calibration and testing of equipment to meet regulatory standards and ensure optimal performance.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="service-process">
                                <div class="service-process_num">03</div>
                                <h5 class="service-process_title">Compliance and Accreditation Support</h5>
                               <div class="text-left pl-20">
                                <ul class="list-line">
                                    <li>
                                        <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span style="font-weight: 600;">Guidance on meeting regulatory requirements and accreditation standards for operating an ADTC.</span>
                                    </li>
                                    <li>
                                        <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span style="font-weight: 600;">Assistance with documentation and paperwork to streamline the accreditation process.</span>
                                    </li>
                                </ul>
                            </div>
                            </div>
                            <div class="service-process">
                                <div class="service-process_num">04</div>
                                <h5 class="service-process_title">Curriculum Development and Training Programs</h5>
                                <div class="text-left pl-20">
                                    <ul class="list-line">
                                        <li>
                                            <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span style="font-weight: 600;">Design and implement specialized training programs for different vehicle types, driving conditions, and skill levels.</span>
                                        </li>
                                        <li>
                                            <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span style="font-weight: 600;">Incorporation of theoretical and practical modules covering traffic rules, vehicle mechanics, defensive driving
                                            techniques, and more.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="service-process">
                                <div class="service-process_num">05</div>
                                <h5 class="service-process_title">Instructor Training</h5>
                                <div class="text-left pl-20">
                                    <ul class="list-line">
                                        <li>
                                            <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span style="font-weight: 600;">Training programs for driving instructors to enhance their teaching skills and proficiency.</span>
                                        </li>
                                        <li>
                                            <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span style="font-weight: 600;">Workshops and seminars on best practices in driving instruction, communication, and customer service.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="service-process">
                                <div class="service-process_num">06</div>
                                <h5 class="service-process_title">Operational Setup and Management</h5>
                                <div class="text-left pl-20">
                                    <ul class="list-line">
                                        <li>
                                            <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span style="font-weight: 600;">Guidance on setting up administrative processes, scheduling, and resource management for efficient ADTC operations.</span>
                                        </li>
                                        <li>
                                            <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span style="font-weight: 600;">Implementation of technology solutions for student enrollment, scheduling, and performance tracking.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- <p class="mt-30 mb-30 text-justify">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor
                            necessitatibus eligendi sequi cumque quam commodi. Ipsa, quidem?
                            Accusamus, a ipsum ullam consequatur in facilis repellendus,
                            expedita, magni porro molestias rerum!. Lorem ipsum dolor sit
                            amet consectetur, adipisicing elit. Dolor necessitatibus
                            eligendi sequi cumque quam commodi. Ipsa, quidem? Accusamus, a
                            ipsum ullam consequatur in facilis repellendus, expedita, magni
                            porro molestias rerum!
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-smoke space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Our Gallery<span class="double-line"></span></span>
                <h2 class="sec-title">Automatic Driving Training Centre Gallery</h2>
                <br />
            </div>
            <div class="row slider-shadow th-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2"
                data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true">
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/ADTC-Gallery-image.webp') }}" alt="Team" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/ADTC-Gallery-image01.webp') }}" alt="Team" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/ADTC-Gallery-image02.webp') }}" alt="Team" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/ADTC-Gallery-image03.webp') }}" alt="Team" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/ADTC-Gallery-image04.webp') }}" alt="Team" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/ADTC-Gallery-image05.webp') }}" alt="Team" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="position-relative space" id="contact-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-area mb-35 text-lg-center">
                        <span class="sub-title">Our Contact Now</span>
                        <h2 class="sec-title">Vkare Retail Ventures Private Limited</h2>
                        <p class="hero-para">
                            (A Joint Venture of VKARE Retail Ventures Private Limited and
                            FDL Services, United Kingdom)
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 mb-40 mb-lg-0 wow fadeInLeft">
                    <div class="about-quote d-flex justify-content-center justify-content-lg-start">
                        <div class="info-card w-100 ">
                            <div class="info-card_icon">
                                <i class="fa-thin fa-envelopes"></i>
                            </div>
                            <div class="info-card_content">
                                <p class="info-card_text">Email Address:</p>
                                <a href="{{ url('mailto:contact@e-vahan.com') }}"
                                    class="info-card_link">contact@e-vahan.com</a>
                            </div>
                        </div>
                        <!-- <div class="info-card pl-20">
                                    <div class="info-card_icon">
                                      <i class="fa-sharp fa-thin fa-phone-volume"></i>
                                    </div>
                                    <div class="info-card_content">
                                      <p class="info-card_text">Call Now:</p>
                                      <a href="tel:+919855955959" class="info-card_link"
                                        >+91 9855955959</a
                                      >
                                    </div>
                                  </div> -->
                    </div>
                    <div class="about-quote d-flex justify-content-center justify-content-lg-start">
                        <div class="info-card w-100 ">
                            <div class="info-card_icon">
                                <i class="fa-sharp fa-thin fa-phone-volume"></i>
                            </div>
                            <div class="info-card_content">
                                <p class="info-card_text">Call Now:</p>
                                <a href="{{ url('tel:+919855955959') }}" class="info-card_link">+91 9855955959</a>
                            </div>
                        </div>
                    </div>
                    <div class="about-quote d-flex justify-content-center justify-content-lg-start">
                        <div class="info-card w-100 ">
                            <div class="info-card_icon">
                                <i class="fa-sharp fa-thin fa-location-dot"></i>
                            </div>
                            <div class="info-card_content">
                                <p class="info-card_text">Corporate Office:</p>
                                <a href="{{ url('#') }}" class="info-card_link">G-04, Ground Floor, D-141 Industrial Area, Phase 7, Sector 73, S.A.S. Nagar, Mohali-160055(Punjab) INDIA</a>
                            </div>
                        </div>
                    </div>
                    <div class="about-quote d-flex justify-content-center justify-content-lg-start">
                        <div class="info-card w-100 ">
                            <div class="info-card_icon">
                                <i class="fa-sharp fa-thin fa-map-location-dot"></i>
                            </div>
                            <div class="info-card_content">
                                <p class="info-card_text">Registered Office:</p>
                                <a href="{{ url('#') }}" class="info-card_link">Nehru Garden Road, Jalandhar,
                                    Punjab-144001</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-3 ps-xl-5 d-flex align-items-center">

                    <form action="{{ route('contact.submit') }}" method="POST" class="contact-form ajax-contact"
                        enctype="multipart/form-data">
                        {{-- @csrf --}}
                        {{ csrf_field() }}
                        <div class="title-area mb-30 text-center text-lg-start">
                            <h2 class="sec-title text-center">
                                Want To Explore <span class="text-theme">Our Services Further?</span> Fill Out The Form!
                            </h2>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="name"
                                    placeholder="Enter Your Name" required />
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email"
                                    placeholder="Email Address" required />
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="number" class="form-control" name="phone" placeholder="Phone Number"
                                    required />
                                <i class="fa-light fa-phone"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="location"
                                    placeholder="Enter Address" required />
                                <i class="fa-sharp fa-light fa-location-dot"></i>
                            </div>
                            <div class="form-group col-12">
                                <select class="form-select nice-select" name="selected_value">
                                    <option value="Normal" selected="selected" disabled="disabled">
                                        Select eVAHAN Services
                                    </option>
                                    <option value="eVAHAN Suvidha Kendra">eVAHAN Suvidha Kendra (eVSK)</option>
                                    <option value="Automatic Testing System">
                                        Automatic Testing System (ATS)
                                    </option>
                                    <option value="Automatic Driving Training Centre">
                                        Automatic Driving Training Centre (ADTC)
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" cols="30" rows="3" class="form-control" placeholder="Message" required></textarea>
                                <i class="fal fa-comment"></i>
                            </div>
                            <div class="form-btn col-12 text-center mb-20">
                                <button type="submit" class="th-btn w-75 fw-btn">
                                    Send Message<i class="fa-regular fa-arrow-right"></i>
                                </button>
                            </div>
                            @include('layouts.message')
                        </div>
                        {{-- <p class="form-messages success mb-0 mt-3"></p> --}}
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
@endsection
