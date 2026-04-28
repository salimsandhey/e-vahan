@extends('layouts.app')
@section('style')
    <style>
        .gallery-carousel .team-img img {
            width: 100%;
            height: 260px;
            object-fit: cover;
        }

        .gallery-carousel .team-content {
            min-height: 110px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    </style>
@endsection

@section('content')

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/main-banner/STMPS-new.jpg') }}" data-overlay="title"
        data-opacity="2">
        <div class="container z-index-common">
            <h1 class="breadcumb-title" style="font-size:32px">Smart Traffic and Parking Management Systems (STPMS)</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>STPMS</li>
            </ul>
        </div>
    </div>

    <section class="space-top">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-8">
                    <img class="w-100" src="{{ asset('assets/img/main-banner/stpms-bg.png') }}" alt="Service Image"
                        style="max-width: 80%; display: block; margin: 0 auto; border-radius: 10px;" />
                    <div style="max-width: 80%; margin: 0 auto;">
                        <h3 class="single-title">
                            About Smart Traffic and Parking Management Systems (STPMS)
                        </h3>
                        <div class="service-content">
                            <p class="mb-20 text-justify">
                                Smart Traffic and Parking Management Systems are intelligent, technology-enabled solutions
                                that help facilitate smoother automobile traffic, and simplify parking. The facilities
                                utilize integrated vehicle sensors, cameras, and digitally-enabled payment systems.
                                Assigning parking to vehicles in real-time, and automatically collecting payments it offers
                                all in one application.
                            </p>
                            <p class="mb-20 text-justify">
                                Furthermore, for the governmental authority, the Smart Traffic and Parking Management
                                Systems provide a continuous source of revenue via entry fees and parking fees, while
                                providing the governmental authority with a reliable source of real-time data that the
                                governmental authority can utilize to accurately plan and conduct governmental functions and
                                also allow for more effective decision making.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 d-lg-flex">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Services</h3>
                            <ul>
                                <li>
                                    <a href="{{ url('evahan-suvidha-kendra') }}">eVAHAN Suvidha Kendra (eVSK)</a>
                                </li>
                                <li>
                                    <a href="{{ url('automated-testing-system') }}">Automated Testing System (ATS)</a>
                                </li>
                                <li>
                                    <a href="{{ url('automatic-driving-training-centre') }}">Accredited Driving Training and
                                        Testing Centre (ADTTC)</a>
                                </li>
                                <li>
                                    <a href="{{ url('smart-traffic-parking-management-systems') }}">Smart Traffic & Parking
                                        Management (STPMS)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_offer style2">
                            <div class="offer-banner">
                                <div class="banner-logo">
                                    <div class="th-video01 wow fadeInLeft">
                                        <a href="https://www.youtube.com/watch?v=iox_jfMV9Hk"
                                            class="play-btn style2 popup-video"><i class="fas fa-play"></i></a>
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
            <div class="row pt-40">
                <div class="col-lg-12">
                    <h4 class="single-title">
                        Why STPMS Is Important for You
                    </h4>
                    <div class="service-content">
                        <p class="mb-20 text-justify">
                            Smart Traffic and Parking Management Systems therefore allow you to have a more seamless daily
                            journey, relieving the stresses of parking and entering the facilities. Wherever you go, you no
                            longer have to search for parking spaces or wait in long lines. Everything from entering the
                            facility to being assigned parking is all automated, with real time updates, and simple digital
                            payment options. As a result, you save time, reduce stress, and experience a much more
                            convenient commute!
                        </p>
                        <p class="mb-20 text-justify">
                            STPMS simplifies compliance with parking & entry taxes as well as keeping you in the clear from
                            penalties. In addition to mitigating traffic congestion and limiting unnecessary idling, it has
                            a positive impact on air quality and makes our communities safer. Simply put, STPMS allows you
                            to drive smarter, quicker and with full peace of mind.
                        </p>
                    </div>
                </div>
            </div>
    </section>

    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-12">
                    <h3 class="single-title text-center">
                        How STPMS Works
                    </h3>
                    <div class="service-content">
                        <p class="mb-20 text-justify text-center">
                            STPMS utilizes a fully automated solution that consists of multiple systems including smart
                            sensors, cameras and digital payment methods to create a hassle-free journey for the user. When
                            a vehicle arrives at an STPMS location it will be detected instantly.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12 col-md-6 mb-40">
                            <div class="service-feature">
                                <div class="service-feature_icon">
                                    <img src="{{ asset('assets/img/icon/service_feature_1_1.svg') }}" alt="Icon" />
                                </div>
                                <div class="service-feature_content">
                                    <h4 class="service-feature_title">Smart Sensor Detection & Automated Entry</h4>
                                    <p class="service-feature_text">
                                        Smart sensors and cameras detect the vehicle and capture its information very
                                        quickly to automatically provide confirmation and allow for the automatic opening of
                                        the gates providing a very quick, touchless entry.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 col-md-6 mb-40">
                            <div class="service-feature">
                                <div class="service-feature_icon">
                                    <img src="{{ asset('assets/img/icon/service_feature_1_2.svg') }}" alt="Icon" />
                                </div>
                                <div class="service-feature_content">
                                    <h4 class="service-feature_title">Real-Time Parking Allocation & Navigation</h4>
                                    <p class="service-feature_text">
                                        The system will detect the available parking spaces and provide real-time location
                                        updates of the nearest available parking space with simplified navigational
                                        instructions, to save time and eliminate the frustration of finding available
                                        parking space.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 col-md-6 mb-40">
                            <div class="service-feature">
                                <div class="service-feature_icon">
                                    <img src="{{ asset('assets/img/icon/service_feature_1_3.svg') }}" alt="Icon" />
                                </div>
                                <div class="service-feature_content">
                                    <h4 class="service-feature_title">Automated Fee Calculation & Digital Payment</h4>
                                    <p class="service-feature_text">
                                        Any parking charges and entry fees are automatically calculated based on usage;
                                        payments may be made via FASTag and digital payment methods, enabling an efficient
                                        customer experience without having to wait to process a payment.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-content">
                        <p class="mb-20 text-justify">
                            A parking assignment will be made in real-time and the fee will be calculated and collected
                            automatically without any manual processing. The result is the creation of a continuing flow of
                            traffic, very little waiting time and total transparency from the time you enter until you exit.
                        </p>
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
                                <h5 class="service-process_title">Automated Vehicle Entry & Exit</h5>
                                <div class="text-left pl-20">
                                    <p class="service-process_text">The system incorporates advanced sensors and cameras to
                                        detect vehicle entry and immediately allows for touchless entry and controlled exit
                                        from any metropolitan area without needing to stand in line, reducing all vehicle
                                        congestion.</p>
                                </div>
                            </div>
                            <div class="service-process">
                                <div class="service-process_num">02</div>
                                <h5 class="service-process_title">Real-Time Parking Slot Allocation</h5>
                                <div class="text-left pl-20">
                                    <p class="service-process_text">This feature will allow all drivers to be provided with
                                        real-time information on nearby available parking locations in addition to reducing
                                        the amount of time that they spend searching for parking while avoiding the negative
                                        experience of searching for parking.</p>
                                </div>
                            </div>
                            <div class="service-process">
                                <div class="service-process_num">03</div>
                                <h5 class="service-process_title">Digital Payment Integration</h5>
                                <div class="text-left pl-20">
                                    <p class="service-process_text">Seamless cashless transactions and auto-generated
                                        receipts for driving on the system via FASTag, UPI or credit cards and wallets for
                                        fast, reliable and transparent transactions.</p>
                                </div>
                            </div>
                            <div class="service-process">
                                <div class="service-process_num">04</div>
                                <h5 class="service-process_title">Live Monitoring & Analytics Dashboard</h5>
                                <div class="text-left pl-20">
                                    <p class="service-process_text">The system also allows the delivery of "live" and
                                        historical reports of traffic, parking usage and revenue for more effective planning
                                        and quicker decision-making.</p>
                                </div>
                            </div>
                            <div class="service-process">
                                <div class="service-process_num">05</div>
                                <h5 class="service-process_title">Environmental & Safety Benefits</h5>
                                <div class="text-left pl-20">
                                    <p class="service-process_text">Reducing congestion leads to lower emissions from motor
                                        vehicles while better coordinating traffic will increase safety for motorists,
                                        passengers and pedestrians, and provide quicker responses to any incident.</p>
                                </div>
                            </div>
                            <div class="service-process">
                                <div class="service-process_num">06</div>
                                <h5 class="service-process_title">Centralized Control & Management</h5>
                                <div class="text-left pl-20">
                                    <p class="service-process_text">The complete system can be monitored from one
                                        application and provide easy control over multiple systems with seamless and
                                        efficient operation.</p>
                                </div>
                            </div>
                        </div>
                        <p class="mt-30 mb-30 text-justify">
                            The Smart Parking and Traffic Management System provide an integrated solution for managing
                            city-wide jitters, friction-free entry/exit, up-to-the-minute location or non-location-based
                            parking guidance and smart location-based (real-time) digital payments via FASTag or UPI
                            (complete with auto receipt issuance), authorities with access to live data on the system,
                            usage/revenue reports and complete control of the system for monthly and annual reports
                            including real-time revenue generation capabilities that will accelerate decision-making or
                            traffic flow issues.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-smoke space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Our Gallery<span class="double-line"></span></span>
                <h2 class="sec-title">Smart Traffic & Parking Management System Gallery</h2>
                <br />
            </div>
            <div class="row slider-shadow th-carousel home-project-carousel gallery-carousel" data-slide-show="4"
                data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1"
                data-arrows="true">
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/new-gallery-1.jpeg') }}" alt="Gallery Image" />
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('#') }}">eVAHAN Center</a>
                            </h3>
                            <span class="team-desig" style="visibility: hidden; opacity: 0;">Location</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/new-gallery-2.jpeg') }}" alt="Gallery Image" />
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('#') }}">eVAHAN Center</a>
                            </h3>
                            <span class="team-desig" style="visibility: hidden; opacity: 0;">Location</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/new-gallery-3.jpeg') }}" alt="Gallery Image" />
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('#') }}">eVAHAN Center</a>
                            </h3>
                            <span class="team-desig" style="visibility: hidden; opacity: 0;">Location</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/new-gallery-4.jpeg') }}" alt="Gallery Image" />
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('#') }}">eVAHAN Center</a>
                            </h3>
                            <span class="team-desig" style="visibility: hidden; opacity: 0;">Location</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/new-gallery-5.jpeg') }}" alt="Gallery Image" />
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('#') }}">eVAHAN Center</a>
                            </h3>
                            <span class="team-desig" style="visibility: hidden; opacity: 0;">Location</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/new-gallery-6.jpeg') }}" alt="Gallery Image" />
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('#') }}">eVAHAN Center</a>
                            </h3>
                            <span class="team-desig" style="visibility: hidden; opacity: 0;">Location</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Our Projects<span class="double-line"></span></span>
                <h2 class="sec-title">eVAHAN Special Projects</h2>
                <p class="px-30p">
                    Self-Employment Workshops in association with State governments are
                    organise at various District Employment Offices to appraise the
                    youth about opportunities in automobile sector.
                </p>
                <br />
            </div>
            <div class="row slider-shadow th-carousel home-project-carousel" data-slide-show="4" data-lg-slide-show="3"
                data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true">
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/spec-proj-1.webp') }}" alt="Team" />
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('#') }}">Self Employement Camp</a>
                            </h3>
                            <span class="team-desig">Jalandhar</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/spec-proj-2.webp') }}" alt="Team" />
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('#') }}">Self Employement Camp</a>
                            </h3>
                            <span class="team-desig">Ludhiana</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/spec-proj-3.webp') }}" alt="Team" />
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('#') }}">Self Employement Camp</a>
                            </h3>
                            <span class="team-desig">Amritsar</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/spec-proj-4.webp') }}" alt="Team" />
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('#') }}">Self Employement Camp</a>
                            </h3>
                            <span class="team-desig">SAS Nagar</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/spec-proj-5.webp') }}" alt="Team" />
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('#') }}">Self Employement Camp</a>
                            </h3>
                            <span class="team-desig">Gurdaspur</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/spec-proj-6.webp') }}" alt="Team" />
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('#') }}">Self Employement Camp</a>
                            </h3>
                            <span class="team-desig">Pathankot</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/our-project-img-1.jpeg') }}" alt="Our Project 1" />
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('#') }}">Self Employement Camp</a>
                            </h3>
                            <span class="team-desig">Special Project</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/our-project-img-2.jpeg') }}" alt="Our Project 2" />
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('#') }}">Self Employement Camp</a>
                            </h3>
                            <span class="team-desig">Special Project</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/our-project-img-3.jpeg') }}" alt="Our Project 3" />
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('#') }}">Self Employement Camp</a>
                            </h3>
                            <span class="team-desig">Special Project</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/our-project-img-4.jpeg') }}" alt="Our Project 4" />
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('#') }}">Self Employement Camp</a>
                            </h3>
                            <span class="team-desig">Special Project</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/our-project-img-5.jpeg') }}" alt="Our Project 5" />
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('#') }}">Self Employement Camp</a>
                            </h3>
                            <span class="team-desig">Special Project</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/our-project-img-6.jpeg') }}" alt="Our Project 6" />
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('#') }}">Self Employement Camp</a>
                            </h3>
                            <span class="team-desig">Special Project</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/our-project-img-7.jpeg') }}" alt="Our Project 7" />
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('#') }}">Self Employement Camp</a>
                            </h3>
                            <span class="team-desig">Special Project</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/our-project-img-8.jpeg') }}" alt="Our Project 8" />
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('#') }}">Self Employement Camp</a>
                            </h3>
                            <span class="team-desig">Special Project</span>
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
                                <a href="{{ url('#') }}" class="info-card_link">G-04, Ground Floor, D-141 Industrial Area,
                                    Phase 7, Sector 73, S.A.S. Nagar, Mohali-160055(Punjab) INDIA</a>
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
                        {{ csrf_field() }}
                        <div class="title-area mb-30 text-center text-lg-start">
                            <h2 class="sec-title text-center">
                                Want To Explore <span class="text-theme">Our Services Further?</span> Fill Out The Form!
                            </h2>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="name" placeholder="Enter Your Name"
                                    required />
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Email Address"
                                    required />
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="number" class="form-control" name="phone" placeholder="Phone Number"
                                    required />
                                <i class="fa-light fa-phone"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="location" placeholder="Enter Address"
                                    required />
                                <i class="fa-sharp fa-light fa-location-dot"></i>
                            </div>
                            <div class="form-group col-12">
                                <select class="form-select nice-select" name="selected_value">
                                    <option value="Normal" selected="selected" disabled="disabled">
                                        Select eVAHAN Services
                                    </option>
                                    <option value="eVAHAN Suvidha Kendra">eVAHAN Suvidha Kendra (eVSK)</option>
                                    <option value="Automated Testing System">
                                        Automated Testing System (ATS)
                                    </option>
                                    <option value="Accredited Driving Training and Testing Centre">
                                        Accredited Driving Training and Testing Centre (ADTTC)
                                    </option>
                                    <option value="Smart Traffic and Parking Management Systems">
                                        Smart Traffic and Parking Management Systems (STPMS)
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" cols="30" rows="3" class="form-control" placeholder="Message"
                                    required></textarea>
                                <i class="fal fa-comment"></i>
                            </div>
                            <div class="form-btn col-12 text-center mb-20">
                                <button type="submit" class="th-btn w-75 fw-btn">
                                    Send Message<i class="fa-regular fa-arrow-right"></i>
                                </button>
                            </div>
                            @include('layouts.message')
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
@endsection