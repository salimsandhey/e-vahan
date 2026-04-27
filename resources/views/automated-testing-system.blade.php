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

        .breadcumb-wrapper {
            background-size: 100% auto !important;
            background-position: center center !important;
            background-repeat: no-repeat !important;
            padding: 70px 0 !important;
            min-height: unset !important;
        }

        .breadcumb-wrapper .breadcumb-title {
            font-size: 32px !important;
            line-height: 1.3 !important;
        }

        @media (max-width: 991px) {
            .breadcumb-wrapper {
                background-size: cover !important;
                padding: 60px 0 !important;
            }

            .breadcumb-wrapper .breadcumb-title {
                font-size: 24px !important;
            }
        }
    </style>
@endsection

@section('content')

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/main-banner/ATS-new.jpg') }}" data-overlay="title"
        data-opacity="2">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Automated Testing <br> System (ATS)</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>ATS</li>
            </ul>
        </div>
    </div>

    <section class="space-top">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-8">
                    <img class="w-100" src="{{ asset('assets/img/main-banner/Automated-Testing-System-project.png') }}"
                        alt="Service Image" style="max-width: 60%; display: block; margin: 0 auto; border-radius: 10px;" />
                    <div style="max-width: 80%; margin: 0 auto;">
                        <h3 class="single-title">
                            About Automated Testing System (ATS)
                        </h3>
                        <div class="service-content">
                            <p class="mb-20 text-justify">
                                This government-approved, Automated Testing System (ATS) driven by advanced technology is a
                                wholesome setup that ensures all the vehicles on the road are safe and fit. It is a high
                                potential solution to combat two major problems—rising road accidents due to unfit vehicles
                                and increasing pollution caused by poor emission control. With the help of its accurate
                                testing, ATS ensures that every vehicle meets the standards set by the government. At the
                                same time, it opens up a strong business opportunity for investors, as vehicle fitness
                                testing is now mandatory and demand will only grow. Let’s root for a system that supports
                                safer roads, cleaner air, and a scalable, future-ready business.
                            </p>
                        </div>
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
                                        <a href="{{ url('assets/video/ATS-Video.mp4') }}"
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
                        Our Approach
                    </h4>
                    <div class="service-content">
                        <p class="mb-20 text-justify">
                            ATS is driven by a problem solving approach. We focus on building a reliable, eco-friendly, and
                            efficient vehicle testing system using advanced technology. We provide complete support—from
                            setting up the infrastructure and installing machinery to getting approvals and running
                            operations smoothly. The system is thoughtfully designed to reduce emissions, improve vehicle
                            performance, and promote better vehicle usage. By making testing more accurate and accessible,
                            we help in lowering pollution levels and protecting the environment. At the same time, we ensure
                            that investors get a structured and sustainable business model with long-term growth. The goal
                            is clear—create a balance between business success and environmental responsibility while
                            contributing to a safer transport system.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row pt-40">
                <div class="col-lg-12">
                    <h4 class="single-title">
                        Why is ATS Important?
                    </h4>
                    <div class="service-content">
                        <p class="mb-20 text-justify">
                            Even well-maintained vehicles can deteriorate over time, exceeding emission norms and posing
                            safety risks. ATS
                            identifies these issues early on, allowing you to address them before they become more
                            significant problems.
                            Regular
                            testing also ensures your car meets legal requirements, preventing penalties and keeping you
                            compliant.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-12">
                    <h3 class="single-title text-center">
                        How it works?
                    </h3>
                    <div class="service-content">
                        <p class="mb-20 text-justify">
                            Our friendly and qualified technicians guide you through the process, which takes about 30
                            minutes. Your car undergoes
                            various tests, including:
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-12 col-md-6 mb-40">
                            <div class="service-feature">
                                <div class="service-feature_icon">
                                    <img src="{{ asset('assets/img/icon/service_feature_1_1.svg') }}" alt="Icon" />
                                </div>
                                <div class="service-feature_content">
                                    <h4 class="service-feature_title">Emission Testing</h4>
                                    <p class="service-feature_text">
                                        Conducting thorough checks to assess vehicle emissions and ensure compliance with
                                        environmental regulations.
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
                                    <h4 class="service-feature_title">Brake Testing</h4>
                                    <p class="service-feature_text">
                                        Evaluating the effectiveness and functionality of a vehicle's braking system to
                                        ensure optimal safety on the road.
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
                                    <h4 class="service-feature_title">Suspension Testing</h4>
                                    <p class="service-feature_text">
                                        Checking the suspension components for wear and tear to maintain vehicle stability
                                        and comfort.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 col-md-6 mb-40">
                            <div class="service-feature">
                                <div class="service-feature_icon">
                                    <img src="{{ asset('assets/img/icon/service_feature_1_4.svg') }}" alt="Icon" />
                                </div>
                                <div class="service-feature_content">
                                    <h4 class="service-feature_title">Headlight Alignment</h4>
                                    <p class="service-feature_text">
                                        Adjust headlight alignment to improve visibility and ensure they meet safety
                                        standards.
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
                                    <h4 class="service-feature_title">Wheel Alignment</h4>
                                    <p class="service-feature_text">
                                        Aligning the wheels to ensure proper handling, steering, and tire wear, enhancing
                                        overall vehicle performance.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 col-md-6 mb-40">
                            <div class="service-feature">
                                <div class="service-feature_icon">
                                    <img src="{{ asset('assets/img/icon/service_feature_1_4.svg') }}" alt="Icon" />
                                </div>
                                <div class="service-feature_content">
                                    <h4 class="service-feature_title">Performance Tests</h4>
                                    <p class="service-feature_text">
                                        We assess your vehicle's overall health and efficiency, providing valuable insights
                                        for future maintenance.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="service-content">
                        <p class="mb-20 text-justify">
                            We don't just test, we guide. Our team interprets the results, explains any issues, and
                            recommends appropriate repairs
                            or maintenance. We also share helpful tips to keep your car in top shape between tests.
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
                                            <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span
                                                style="font-weight: 600;">Installation and integration of vehicle inspection
                                                equipment.</span>
                                        </li>
                                        <li>
                                            <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span
                                                style="font-weight: 600;">Designing and implementing an ATS layout for
                                                seamless operations.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="service-process">
                                <div class="service-process_num">02</div>
                                <h5 class="service-process_title">Advanced Equipment Installation</h5>
                                <div class="text-left pl-20">
                                    <ul class="list-line">
                                        <li>
                                            <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span
                                                style="font-weight: 600;">Sourcing and installation of state-of-the-art
                                                testing equipment.</span>
                                        </li>
                                        <li>
                                            <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span
                                                style="font-weight: 600;">Calibration and testing of equipment to ensure
                                                accuracy and reliability.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="service-process">
                                <div class="service-process_num">03</div>
                                <h5 class="service-process_title">Compliance with Regulatory Standards</h5>
                                <div class="text-left pl-20">
                                    <ul class="list-line">
                                        <li>
                                            <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span
                                                style="font-weight: 600;">Ensuring adherence to regulatory standards and
                                                guidelines.</span>
                                        </li>
                                        <li>
                                            <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span
                                                style="font-weight: 600;">System testing and validation to ensure smooth
                                                operation and compliance.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="service-process">
                                <div class="service-process_num">04</div>
                                <h5 class="service-process_title">Training and Capacity Building</h5>
                                <div class="text-left pl-20">
                                    <ul class="list-line">
                                        <li>
                                            <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span
                                                style="font-weight: 600;">Capacity-building initiatives to enhance the
                                                skills and knowledge of personnel.</span>
                                        </li>
                                        <li>
                                            <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span
                                                style="font-weight: 600;">Continuous training updates to keep staff informed
                                                about the latest technologies.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="service-process">
                                <div class="service-process_num">05</div>
                                <h5 class="service-process_title">Operational Support and Maintenance</h5>
                                <div class="text-left pl-20">
                                    <ul class="list-line">
                                        <li>
                                            <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span
                                                style="font-weight: 600;">Provision of ongoing operational support and
                                                maintenance services.</span>
                                        </li>
                                        <li>
                                            <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span
                                                style="font-weight: 600;">Regular inspections and calibration of equipment
                                                to maintain accuracy.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="service-process">
                                <div class="service-process_num">06</div>
                                <h5 class="service-process_title">Environmental and Safety Concerns</h5>
                                <div class="text-left pl-20">
                                    <ul class="list-line">
                                        <li>
                                            <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span
                                                style="font-weight: 600;">Implementation of eco-friendly practices in ATS
                                                operations.</span>
                                        </li>
                                        <li>
                                            <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span
                                                style="font-weight: 600;">Minimization of environmental impact through
                                                efficient resource utilization.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p class="mt-30 mb-30 text-justify">
                            Setting up an Automated Testing System (ATS) requires meticulous planning, execution, and
                            ongoing support to ensure its
                            effectiveness and efficiency in vehicle testing and inspection processes. By focusing on
                            infrastructure development,
                            equipment procurement, regulatory compliance, training, support services, customer satisfaction,
                            and environmental
                            considerations, we aim to deliver a comprehensive ATS solution that meets the needs of our
                            clients and contributes to
                            safer, cleaner roads for all.
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
                <h2 class="sec-title">Automated Testing System Gallery</h2>
                <br />
            </div>
            <div class="row slider-shadow th-carousel home-project-carousel gallery-carousel" data-slide-show="4"
                data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2" data-xs-slide-show="1"
                data-arrows="true">
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/ATS-Gallery-image.webp') }}" alt="Gallery Image" />
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
                            <img src="{{ asset('assets/img/main-banner/ATS-Gallery-image01.webp') }}" alt="Gallery Image" />
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
                            <img src="{{ asset('assets/img/main-banner/ATS-Gallery-image02.webp') }}" alt="Gallery Image" />
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
                            <img src="{{ asset('assets/img/main-banner/ATS-Gallery-image03.webp') }}" alt="Gallery Image" />
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
                            <img src="{{ asset('assets/img/main-banner/ATS-Gallery-image04.webp') }}" alt="Gallery Image" />
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
                            <img src="{{ asset('assets/img/main-banner/ATS-Gallery-image05.webp') }}" alt="Gallery Image" />
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
                            <img src="{{ asset('assets/img/main-banner/ATS-Gallery-image06.webp') }}" alt="Team" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/ATS-Gallery-image07.webp') }}" alt="Team" />
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
                        {{-- @csrf --}}
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
                        {{-- <p class="form-messages success mb-0 mt-3"></p> --}}
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
@endsection