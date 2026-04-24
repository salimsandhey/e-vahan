@extends('layouts.app')
@section('style')
    <style>
        .gallery-carousel .team-img img {
            width: 100%;
            height: 250px;
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
    <div class="th-hero-wrapper hero-slider-4 th-carousel" data-slide-show="1" data-md-slide-show="1" data-fade="true"
        data-arrows="true" data-xl-arrows="true" data-ml-arrows="true" data-lg-arrows="true">
        <div class="th-hero-slide">
            <div class="th-hero-bg">
                <img src="{{ asset('assets/img/main-banner/Online pollution check.jpg') }}" alt="Final Hero Image" />
            </div>
            <div class="mobile-th-hero-bg">
                <img src="{{ asset('assets/img/main-banner/Online pollution check.jpg') }}"
                    alt="Final Mobile Hero Image" />
            </div>
            <div>
                <div class="hero-style4">
                    <p class="hero-title-h1" data-ani="slideindown" data-ani-delay="0.1s">
                        Start Your Own Government Approved
                    </p>
                    <h1 class="hero-title-bl" data-ani="slideindown" data-ani-delay="0.1s">
                        Online <span class="hero-title">Pollution Check Centre</span> &
                        Earn Attractive Returns.
                    </h1>
                    <div class="btn-group" data-ani="slideinup" data-ani-delay="0.1s">
                        <a href="{{ url('about-evsk') }}" class="th-btn">Know More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="th-hero-slide">
            <div class="th-hero-bg">
                <img src="{{ asset('assets/img/main-banner/stpms-bg.png') }}" alt="Final Hero Image" />
            </div>
            <div class="mobile-th-hero-bg">
                <img src="{{ asset('assets/img/main-banner/stpms-bg.png') }}"
                    alt="Final Mobile Hero Image" />
            </div>
            <div>
                <div class="hero-style4">
                    <h2 class="hero-title-bl" data-ani="slideindown" data-ani-delay="0.1s">
                        Smart Traffic &
                        <span class="hero-title">Parking Management System</span> (STPMS)
                    </h2>
                    <p class="hero-title-h1" data-ani="slideindown" data-ani-delay="0.1s">
                        Enabling efficient urban mobility through real-time monitoring, congestion reduction, and
                        transparent revenue generation powered by advanced technology.
                    </p>
                    <div class="btn-group" data-ani="slideinup" data-ani-delay="0.1s">
                        <a href="{{ url('smart-traffic-parking-management-systems') }}" class="th-btn">Know More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="th-hero-slide">
            <div class="th-hero-bg">
                <img src="{{ asset('assets/img/main-banner/eVahan to operate.jpg') }}" alt="Final Hero Image" />
            </div>
            <div class="mobile-th-hero-bg">
                <img src="{{ asset('assets/img/main-banner/eVahan to operate.jpg') }}"
                    alt="Final Mobile Hero Image" />
            </div>
            <div>
                <div class="hero-style4">
                    <h2 class="hero-title-bl" data-ani="slideindown" data-ani-delay="0.1s">
                        eVAHAN To Operate
                        <span class="hero-title">2000 PUC Centres</span> In Punjab
                    </h2>
                    <p class="hero-title-h1" data-ani="slideindown" data-ani-delay="0.1s">
                        With High ROI Self Employment Model Supported By Government Of
                        Punjab.
                    </p>
                    <div class="btn-group" data-ani="slideinup" data-ani-delay="0.1s">
                        <a href="{{ url('about-evsk') }}" class="th-btn">Know More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="th-hero-slide">
            <div class="th-hero-bg">
                <img src="{{ asset('assets/img/main-banner/Our cutting edge.png') }}" alt="Final Hero Image" />
            </div>
            <div class="mobile-th-hero-bg">
                <img src="{{ asset('assets/img/main-banner/Our cutting edge.png') }}"
                    alt="Final Mobile Hero Image" />
            </div>
            <div>
                <div class="hero-style4">
                    <h2 class="hero-title-h1" data-ani="slideindown" data-ani-delay="0.1s">
                        Experience Excellence With
                        </h1>
                        <h2 class="hero-title-bl" data-ani="slideindown" data-ani-delay="0.1s">
                            Our Cutting-Edge
                            <span class="hero-title">Automated Testing Centre Solution.</span>
                        </h2>
                        <p class="hero-title-h1" data-ani="slideindown" data-ani-delay="0.1s">
                            Unparalleled setup and state-of-the-art equipment for optimal performance.
                        </p>
                        <div class="btn-group" data-ani="slideinup" data-ani-delay="0.1s">
                            <a href="{{ url('/automatic-testing-system/') }}" class="th-btn">Know More</a>
                        </div>
                </div>
            </div>
        </div>
        <div class="th-hero-slide">
            <div class="th-hero-bg">
                <img src="{{ asset('assets/img/main-banner/Encompassing design.png') }}" alt="Final Hero Image" />
            </div>
            <div class="mobile-th-hero-bg">
                <img src="{{ asset('assets/img/main-banner/Encompassing design.png') }}"
                    alt="Final Mobile Hero Image" />
            </div>
            <div>
                <div class="hero-style4">
                    <p class="hero-title-h1" data-ani="slideindown" data-ani-delay="0.1s">
                        Embark on a seamless journey with our comprehensive solutions
                    </p>
                    <h2 class="hero-title-bl" data-ani="slideindown" data-ani-delay="0.1s">
                        Encompassing Design,
                        <span class="hero-title">Equipment Installation</span>
                    </h2>
                    <p class="hero-title-h1" data-ani="slideindown" data-ani-delay="0.1s">
                        and Commissioning. Elevate your driving training and testing centre with our accredited expertise.
                    </p>

                    <div class="btn-group" data-ani="slideinup" data-ani-delay="0.1s">
                        <a href="{{ url('/automatic-driving-training-centre/') }}" class="th-btn">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="mt-50 pt-70 pb-70" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6  pe-lg-4 pe-xl-6 mb-5 mb-lg-0">
                    <div class="th-video wow fadeInLeft">
                        <img class="w-100" src="{{ asset('assets/img/main-banner/about-us-left.webp') }}" alt="about" />
                        <a href="{{ url('assets/video/eVahan-Business-Model-Feb-2020.mp4') }}"
                            class="play-btn style2 popup-video"><i class="fas fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 wow text-center text-md-start fadeInRight">
                    <h2 class="mt-n3">Who We Are?</h2>
                    <p class="pra-text mb-4 sec-2-para">
                        At eVAHAN®, we're a modern car care startup with a mission: to revolutionize vehicle maintenance.
                        Our goal is simple yet
                        powerful: using cutting-edge technology to bring order to the chaos of the automobile service
                        industry. We've got you
                        covered, from routine maintenance to essential paperwork like renewing certificates. Plus, we offer
                        expert driving
                        lessons at prices that won't break the bank. Our global partners are engine development and testing
                        experts, working
                        closely with Indian car manufacturers to meet strict emission standards. We're paving the way for a
                        cleaner, safer
                        automotive future.
                    </p>
                    <a href="{{ url('about-evsk') }}" class="th-btn">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="space overflow-hidden" id="service-sec" data-bg-src="{{ asset('assets/img/bg/service_bg_1.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="title-area text-center">
                        <h2 class="sec-title">Our Vehicle Wellness Solutions</h2>
                        <p class="sec-text">
                            Keeping your vehicle running smoothly and safely is our top priority. We offer comprehensive
                            services to meet all your
                            automotive needs, from routine maintenance to complex repairs.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row slider-shadow th-carousel" data-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2"
                data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="service-block shadow wow fadeInUp">
                        <div class="service-block_img">
                            <img src="{{ asset('assets/img/main-banner/evahan-sk.png') }}" alt="service image" />
                        </div>
                        <div class="service-block_content ">
                            <h3 class="service-block_title">
                                <a href="{{ url('evahan-suvidha-kendra') }}">eVAHAN Suvidha Kendra</a>
                            </h3>
                            <p class="service-block_text">
                                At eVAHAN Suvidha Kendra, we offer a spectrum of services designed to keep your vehicle in
                                optimal condition. We've
                                covered you, from PUC checks to insurance renewals, roadside assistance, FASTag, and
                                comprehensive cleaning kits.
                            </p>
                            {{-- <div class="service-block_button"> <a href="{{ url('evahan-suvidha-kendra') }}"
                                    class="layer-btn">Read More</a></div> --}}

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="service-block shadow wow fadeInDown">
                        <div class="service-block_img">
                            <img src="{{ asset('assets/img/main-banner/testing-center.png') }}" alt="service image" />
                        </div>
                        <div class="service-block_content">
                            <h3 class="service-block_title">
                                <a href="{{ url('automatic-testing-system') }}">Automatic Testing Centre</a>
                            </h3>
                            <p class="service-block_text">
                                Our state-of-the-art testing center ensures that your vehicle meets all mandatory
                                requirements, providing fitness
                                certificates with precision and efficiency. Rest assured, your vehicle's safety and legal
                                compliance are our top
                                priorities.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="service-block shadow wow fadeInDown">
                        <div class="service-block_img">
                            <img src="{{ asset('assets/img/main-banner/drivig-school.png') }}" alt="service image" />
                        </div>
                        <div class="service-block_content">
                            <h3 class="service-block_title">
                                <a href="{{ url('automatic-driving-training-centre') }}">Automatic Driving School</a>
                            </h3>
                            <p class="service-block_text">
                                Combining virtual classroom sessions with practical road experience, we equip aspiring
                                drivers with the skills and
                                knowledge to navigate the roads safely and responsibly. If you're seeking to refine your
                                skills, our experts are here to
                                guide you.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="service-block shadow wow fadeInDown">
                        <div class="service-block_img">
                            <img src="{{ asset('assets/img/main-banner/clean-wheels.png') }}" alt="service image" />
                        </div>
                        <div class="service-block_content">
                            <h3 class="service-block_title">
                                <a href="{{ url('/') }}">Clean Wheels</a>
                            </h3>
                            <p class="service-block_text">
                                Experience the next level of car care with our eco-friendly steam car wash. Beyond cleaning,
                                our process delivers a
                                brighter shine, impeccable polish, and a thoroughly disinfected interior.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="service-block shadow wow fadeInUp">
                        <div class="service-block_img">
                            <img src="{{ asset('assets/img/main-banner/wheel-care.png') }}" alt="service image" />
                        </div>
                        <div class="service-block_content">
                            <h3 class="service-block_title">
                                <a href="{{ url('/') }}">Wheel Care</a>
                            </h3>
                            <p class="service-block_text">
                                Safety on the road starts with well-maintained wheels. Our dedicated centre specializes in
                                wheel alignment and
                                balancing, which is essential for ensuring vehicle stability, safety, and fuel efficiency.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="service-block shadow wow fadeInDown">
                        <div class="service-block_img">
                            <img src="{{ asset('assets/img/main-banner/kar-kare.png') }}" alt="service image" />
                        </div>
                        <div class="service-block_content">
                            <h3 class="service-block_title">
                                <a href="{{ url('/') }}">Car Cares</a>
                            </h3>
                            <p class="service-block_text">
                                Our team of skilled technicians goes beyond routine maintenance, focusing on improving
                                lifespan and overall performance.
                                From regular check-ups to intricate repairs, we're committed to keeping your vehicle in
                                top-notch condition.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="service-block shadow wow fadeInDown">
                        <div class="service-block_img">
                            <img src="{{ asset('assets/img/main-banner/service-on-wheels.png') }}" alt="service image" />
                        </div>
                        <div class="service-block_content">
                            <h3 class="service-block_title">
                                <a href="{{ url('/') }}">Services on Wheels</a>
                            </h3>
                            <p class="service-block_text">
                                Our mobile servicing unit brings the workshop to you, eliminating the need for inconvenient
                                trips to the garage. Enjoy
                                the flexibility of getting your car serviced at a time and place that suits your schedule
                                without compromising quality
                                or reliability.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="service-block shadow wow fadeInDown">
                        <div class="service-block_img">
                            <img src="{{ asset('assets/img/main-banner/puncture.png') }}" alt="service image" />
                        </div>
                        <div class="service-block_content">
                            <h3 class="service-block_title">
                                <a href="{{ url('/') }}">Perfect Puncture</a>
                            </h3>
                            <p class="service-block_text">
                                Our one-stop-shop offers Tyre Care Solutions to ensure the longevity and performance of your
                                vehicle's tyres. From
                                puncture repairs to tyre maintenance tips, we have everything you need to keep rolling
                                smoothly on the road ahead.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="service-block shadow wow fadeInDown">
                        <div class="service-block_img">
                            <img src="{{ asset('assets/img/main-banner/Parking.jpg') }}" alt="service image" style="height: 100px; object-fit: cover;" />
                        </div>
                        <div class="service-block_content">
                            <h3 class="service-block_title">
                                <a href="{{ url('smart-traffic-parking-management-systems') }}">Parking Management (STPMS)</a>
                            </h3>
                            <p class="service-block_text">
                                Smart Traffic and Parking Management Systems are intelligent, technology-enabled solutions that help facilitate smoother automobile traffic, and simplify parking.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-70 pb-70" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInRight ">
                    <h2 class="mt-n3 text-center text-lg-start">About eVAHAN Suvidha Kendra</h2>
                    <p class="pra-text p-2 mb-4">
                        At eVSK, our aim is simple: to make vehicle maintenance easy and hassle-free for our customers. We
                        offer high-quality
                        services at prices that won't break the bank, all backed by a user-friendly web and app interface.
                        With us, customers
                        can conveniently store digital copies of essential documents like their driver's license, vehicle
                        registration
                        certificate, insurance policy, and PUC certificate. Plus, they can keep track of their vehicle
                        maintenance records and
                        warranty certificates for spare parts, all in one place. Booking appointments and finding the
                        nearest centre is a breeze
                        through our app and website. For registered customers, we provide advance notifications for renewing
                        mandatory
                        documents, ensuring peace of mind every step
                        of the way.
                    </p>

                    <a href="{{ url('/evahan-suvidha-kendra') }}" class="th-btn">Learn More</a>
                </div>
                <div class="col-lg-6 pe-xl-5 mb-5 mt-5 mt-lg-0 mb-lg-0">
                    <div class="th-video text-center wow fadeInLeft">
                        <img src="{{ asset('assets/img/main-banner/puc-under-control.png') }}" alt="about" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Highlight the active (centered) card in the eVSK section */
        .evsk-state-carousel .service-list {
            transition: all 0.4s ease-in-out;
            opacity: 0.8;
            transform: scale(0.9);
        }

        .evsk-state-carousel .slick-center .service-list {
            transform: scale(1.08); /* Subtle zoom for the center card */
            opacity: 1;
            box-shadow: 0px 15px 40px rgba(0, 0, 0, 0.12);
            border: 1px solid var(--theme-color);
            z-index: 2;
        }

        /* Ensure the carousel tracks allow for the scaling */
        .evsk-state-carousel .slick-list {
            padding-top: 30px !important;
            padding-bottom: 30px !important;
        }

        /* Precise replication of th-btn styling for state tabs */
        .state-tab-btn {
            position: relative;
            z-index: 2;
            overflow: hidden;
            vertical-align: middle;
            display: inline-block;
            text-transform: uppercase;
            text-align: center;
            background-color: var(--theme-color);
            color: #fff !important;
            font-size: 18px;
            font-weight: 600;
            line-height: 1;
            padding: 18px 30px;
            border-radius: 0px 0px 20px 0px;
            border: none;
            transition: all 0.5s ease;
            cursor: pointer;
            margin: 5px 10px;
            font-family: var(--title-font);
        }

        .state-tab-btn::before {
            content: "";
            position: absolute;
            height: 100%;
            left: 0;
            top: 0;
            width: 200%;
            background-color: var(--title-color);
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-transform: scale(1, 0);
            -ms-transform: scale(1, 0);
            transform: scale(1, 0);
            z-index: -1;
            -webkit-transition: 0.5s ease;
            transition: 0.5s ease;
            transform-origin: center center;
        }

        .state-tab-btn:hover::before,
        .state-tab-btn.active::before {
            -webkit-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            transform: scale(1, 1);
        }

        /* Adjusting for 'inactive' tabs to follow a secondary theme or just be slightly different */
        .state-tab-btn:not(.active):not(:hover) {
            background-color: #f0f0f0;
            color: var(--title-color) !important;
        }
        
        /* The active tab keeps the dark background from the :before element */
        .state-tab-btn.active {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        }
    </style>

    <section class="service-area pt-70 pb-100 mt-0 mt-lg-5" id="taxi-sec"
        data-bg-src="{{ asset('assets/img/update_2/bg/service_bg_3.jpg') }}">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title style2"><img src="{{ asset('assets/img/shape/title_shape_2.svg') }}"
                        alt="shape" />Choose
                    Your eVSK</span>
                <h2 class="sec-title">Latest Centers</h2>
            </div>

            @php
                $centersByState = [
                    'Punjab' => [
                        ['name' => 'Guru Nanak Auto Care', 'city' => 'Bathinda'],
                        ['name' => 'Aryan Pollution Check Centre', 'city' => 'Jalandhar'],
                        ['name' => 'Bhup Rabindra Pollution Check Centre', 'city' => 'Bathinda'],
                        ['name' => 'Bhola Pollution Check Centre', 'city' => 'Faridkot'],
                        ['name' => 'OP Filling Station', 'city' => 'Patiala'],
                        ['name' => 'Aggarwal GS Pollution Check Centre', 'city' => 'Jalandhar'],
                        ['name' => 'Ramgarh Filling Station', 'city' => 'Barnala'],
                        ['name' => 'Chakarvati Filling Station', 'city' => 'Patiala'],
                        ['name' => 'Rajan Pollution Check Centre', 'city' => 'Gurdaspur'],
                        ['name' => 'Goraya Pollution and Insurance Centre', 'city' => 'Kapurthala'],
                        ['name' => 'Lajwanti Pollution Check Centre', 'city' => 'Jalandhar'],
                        ['name' => 'Khajala Pollution Check Centre', 'city' => 'Gurdaspur'],
                        ['name' => 'Bholewasia Pollution Check Centre', 'city' => 'Ferozepur'],
                        ['name' => 'Kandola Pollution Check Centre', 'city' => 'Jalandhar'],
                        ['name' => 'Kathpal Pollution Check Centre & Ins.', 'city' => 'Ferozepur'],
                        ['name' => 'Deep Pollution Check Centre', 'city' => 'Ludhiana'],
                        ['name' => 'Mikhil Pollution Services', 'city' => 'Jalandhar'],
                        ['name' => 'Sodhi Mangal Singh Highway Fuels', 'city' => 'Ferozepur'],
                        ['name' => 'Kulrian Pollution Check Centre', 'city' => 'Bathinda'],
                        ['name' => 'Dhir Pollution Check Centre', 'city' => 'Jalandhar'],
                        ['name' => 'Sharma Pollution Check Centre', 'city' => 'Jalandhar'],
                        ['name' => 'Chawala Pollution Check Centre', 'city' => 'Faridkot'],
                        ['name' => 'Naaz Pollution Check Centre', 'city' => 'Ludhiana'],
                        ['name' => 'Fatehgarh Sahib Filling Station', 'city' => 'Patiala'],
                        ['name' => 'Amrit Pollution Check Centre', 'city' => 'Ludhiana'],
                        ['name' => 'Malwa Pollution Check Centre', 'city' => 'Sangrur'],
                        ['name' => 'Wadala Suvidha Online Service', 'city' => 'Amritsar'],
                        ['name' => 'Bee Kay Pollution Check Centre', 'city' => 'Ludhiana'],
                        ['name' => 'Tanvir Pollution Check Centre', 'city' => 'Jalandhar'],
                        ['name' => 'Rehmaan Filling Station', 'city' => 'Malerkotla'],
                        ['name' => 'Shamsher Singh Grewal Petro', 'city' => 'Ludhiana'],
                        ['name' => 'Gill Petro', 'city' => 'Ludhiana'],
                        ['name' => 'Aaplus Pollution Check Centre', 'city' => 'Jalandhar'],
                        ['name' => 'Bansal HP Centre', 'city' => 'Sangrur'],
                        ['name' => 'Jindal Auto Care', 'city' => 'Ropar'],
                        ['name' => 'Shri Balaji Enterprises', 'city' => 'Gurdaspur'],
                        ['name' => 'Jaipal Garg', 'city' => 'Patiala'],
                        ['name' => 'Shri Balaji Enterprises', 'city' => 'Gurdaspur'],
                        ['name' => 'Punjab Pollution Check Centre', 'city' => 'Kapurthala'],
                        ['name' => 'Aman Sukh Pollution Check Centre', 'city' => 'Hoshiarpur'],
                        ['name' => 'Jati Ram Sadhu Ram', 'city' => 'Rupnagar'],
                        ['name' => 'Labhi Pollution Check Centre', 'city' => 'Rupnagar'],
                        ['name' => 'OM Pollution Check Centre', 'city' => 'Nawanshahr'],
                        ['name' => 'Captain Pollution Check Centre', 'city' => 'Nawanshahr'],
                        ['name' => 'Kalia Pollution Check Centre', 'city' => 'Jalandhar'],
                        ['name' => 'Khalsa Pollution Check Centre', 'city' => 'Jalandhar'],
                        ['name' => 'Shri Balaji Enterprises', 'city' => 'Moga'],
                    ],
                    'Uttar Pradesh' => [
                        ['name' => 'Kapoor Fuels', 'city' => 'Lucknow'],
                        ['name' => 'Kapoor Petroleum', 'city' => 'Lucknow'],
                        ['name' => 'Maa Betwa Filling Station', 'city' => 'Jhansi'],
                        ['name' => 'Shivank Singh', 'city' => 'Barabanki'],
                        ['name' => 'Bhagwan Das Fuel Centre', 'city' => 'Bahraich'],
                        ['name' => 'Inderjeet Verma', 'city' => 'Fatehpur'],
                        ['name' => 'Alok Kumar Jaiswal', 'city' => 'Bhadohi'],
                    ],
                    'Haryana' => [
                        ['name' => 'Shri Shesh Sai Filling Station', 'city' => 'Sonipat'],
                        ['name' => 'Chharoda Service Station KSK', 'city' => 'Mewat'],
                        ['name' => 'Khurana Pollution Check Centre', 'city' => 'Sirsa'],
                    ],
                    'Jammu & Kashmir' => [
                        ['name' => 'Kisan Sewa Kendra', 'city' => 'Pulwama'],
                        ['name' => 'Shaheed Gurdeep Pollution Check Centre', 'city' => 'Jammu'],
                        ['name' => 'VB Filling Station', 'city' => 'Samba'],
                        ['name' => 'RG Filling Station', 'city' => 'Jammu'],
                        ['name' => 'Maqbool Fuel Station', 'city' => 'Budgam'],
                        ['name' => 'Sada Bahar Filling Station', 'city' => 'Srinagar'],
                        ['name' => 'Apple Town Filling Station', 'city' => 'Baramulla'],
                        ['name' => 'Nowshera Filling Station', 'city' => 'Srinagar'],
                        ['name' => 'Evergreen Filling Station', 'city' => 'Kupwara'],
                        ['name' => 'Mehboob Filling Station', 'city' => 'Srinagar'],
                        ['name' => 'Rafiquee Ventures Pvt Ltd', 'city' => 'Sonwar'],
                        ['name' => 'Asian Fuels', 'city' => 'Srinagar'],
                        ['name' => 'Prime Pollution Centre', 'city' => 'Budgam'],
                    ],
                    'Madhya Pradesh' => [
                        ['name' => 'Darshan Fuel Station', 'city' => 'Gwalior'],
                        ['name' => 'M/s Darshan Fuel Station', 'city' => 'Gwalior'],
                    ],
                    'Chhattisgarh' => [
                        ['name' => 'Amar Jawan Fuels', 'city' => 'Raipur'],
                        ['name' => 'Dinesh Fuels', 'city' => 'Kondagaon'],
                    ],
                    'Himachal Pradesh' => [
                        ['name' => 'Vikram HP Centre', 'city' => 'Mandi'],
                    ],
                    'Gujarat' => [
                        ['name' => 'Kiana Pollution Check Centre', 'city' => 'Vadodara'],
                        ['name' => 'Patel Filling Station', 'city' => 'Kiana'],
                    ],
                ];
            @endphp

            <ul class="nav nav-pills justify-content-center mb-50" id="evskTabs" role="tablist" style="border: none;">
                @foreach($centersByState as $state => $centers)
                    <li class="nav-item" role="presentation">
                        <button class="nav-link state-tab-btn {{ $loop->first ? 'active' : '' }}" 
                            id="tab-{{ \Illuminate\Support\Str::slug($state) }}" 
                            data-bs-toggle="pill" data-bs-target="#content-{{ \Illuminate\Support\Str::slug($state) }}" 
                            type="button" role="tab" aria-controls="content-{{ \Illuminate\Support\Str::slug($state) }}" 
                            aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                            {{ $state }}
                        </button>
                    </li>
                @endforeach
            </ul>

            <div class="tab-content" id="evskTabsContent">
                @foreach($centersByState as $state => $centers)
                    <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="content-{{ \Illuminate\Support\Str::slug($state) }}" role="tabpanel">
                        <div class="row slider-shadow th-carousel evsk-state-carousel" data-slide-show="3"
                            data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1"
                            data-arrows="true" data-center-mode="true" data-xl-center-mode="true" data-ml-center-mode="true"
                            data-lg-center-mode="true" data-md-center-mode="true" data-sm-center-mode="true" data-xs-center-mode="true"
                            data-infinite="true">
                            @foreach($centers as $center)
                                <div class="col-md-6 col-lg-4 col-12">
                                    <div class="service-list">
                                        <div class="service-list_icon">
                                            <img src="{{ asset('assets/img/main-banner/fuel.webp') }}" alt="service Icon" />
                                        </div>
                                        <div class="service-list_content text-start text-md-center">
                                            <span class="service-list_text">{{ $center['name'] }}</span>
                                            <h3 class="service-list_title">{{ $center['city'] }}</h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var tabEl = document.querySelectorAll('button[data-bs-toggle="pill"]')
                tabEl.forEach(function(el) {
                    el.addEventListener('shown.bs.tab', function (event) {
                        $('.th-carousel').slick('setPosition');
                    })
                });
            });
        </script>
    </section>

    <section class="mt-50 mb-50" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pe-xl-5 mb-5 mb-lg-0">
                    <div class="th-video wow fadeInLeft">
                        <img class="w-100" src="{{ asset('assets/img/main-banner/Frame 1 (1).png') }}" alt="about" style="height: 100%; object-fit: cover;" />
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight pe-sm-5">
                    <h2 class="mt-n3">eVAHAN Suvidha Kendra Business Models</h2>
                    <p class="pra-text mb-4">
                        eVAHAN®️, is excited to announce an opportunity for entrepreneurs to own and operate eVAHAN Suvidha
                        Kendra, a government-approved
                        online pollution check centre. These centres will be strategically located at petrol pumps and shops
                        in high-traffic
                        areas, with pin code-wise allotments on a first-come, first-served basis.<br /><br />
                        Eligible candidates will be considered for the allotment of eVAHAN Suvidha Kendra under various
                        investment models.
                        eVAHAN will provide all necessary systems and infrastructure to kickstart the centre, ensuring a
                        seamless setup process.
                        Our investment models are carefully crafted to offer attractive returns, providing a lucrative
                        business opportunity for
                        aspiring entrepreneurs.
                    </p>
                    <div>
                        <ul class="list-line">
                            <li>
                                <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span
                                    style="font-weight: 600;">Subsidy Model</span>
                            </li>
                            <li>
                                <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span style="font-weight: 600;">Earn
                                    & Pay Model</span>
                            </li>
                            <li>
                                <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span
                                    style="font-weight: 600;">Guaranteed Returns Model</span>
                            </li>
                        </ul>
                    </div>

                    <a href="{{ url('/evahan-suvidha-kendra') }}" class="th-btn">KNOW MORE</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-smoke space" id="service-sec">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-cards-center">
                <div class="col-lg-8">
                    <div class="title-area text-center text-lg-start">
                        <span class="sub-title style2"><img src="{{ asset('assets/img/shape/title_shape_2.svg') }}"
                                alt="shape" />Our
                            Awesome Service</span>
                        <h2 class="sec-title">Services We Offer At eVSK’s</h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <div class="icon-box style3">
                            <button data-slick-prev="#serviceSlide3" class="slick-arrow default">
                                <i class="far fa-arrow-left"></i>
                            </button>
                            <button data-slick-next="#serviceSlide3" class="slick-arrow default">
                                <i class="far fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row slider-shadow th-carousel" id="serviceSlide3" data-slide-show="3" data-lg-slide-show="2"
                data-md-slide-show="2">
                <div class="col-md-6 col-lg-4">
                    <div class="service-card style2 wow fadeInUp">
                        <div class="service-card_overlay"
                            data-bg-src="{{ asset('assets/img/update_2/service/service_shape.jpg') }}">
                        </div>
                        <div class="service-card_content">
                            <div class="service-card_wrapper">
                                <div class="service-card_icon">
                                    <img src="{{ asset('assets/img/icon-img/protection.webp') }}" alt="" />
                                </div>
                                <div>
                                    <span class="service-card_subtitle">service - 01</span>
                                    <h3 class="service-card_title">
                                        <a href="{{ url('/') }}">Nishchint - Motor Vehicle Insurance</a>
                                    </h3>
                                </div>
                            </div>
                            <p class="service-card_text">
                                Driving is a constant risk and not ensuring the risk is a huge
                                mistake! Accidental damages can really take a toll on your
                                finances and this is why it is crucial to get motor vehicle
                                insurance! e-Vahan makes it easy!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card style2 wow fadeInUp">
                        <div class="service-card_overlay"
                            data-bg-src="{{ asset('assets/img/update_2/service/service_shape.jpg') }}">
                        </div>
                        <div class="service-card_content">
                            <div class="service-card_wrapper">
                                <div class="service-card_icon">
                                    <img src="{{ asset('assets/img/icon-img/pollution1.webp') }}" alt="" />
                                </div>
                                <div>
                                    <span class="service-card_subtitle">service - 02</span>
                                    <h3 class="service-card_title">
                                        <a href="{{ url('/') }}">PUC – Pollution Under Control</a>
                                    </h3>
                                </div>
                            </div>
                            <p class="service-card_text">
                                A stitch in time, saves nine! Save thousands of bucks just by
                                spending a few in time! At e-Vahan, we issue PUC certificates
                                to registered vehicles and through our extensive database, we
                                remind you to renew it, whenever it expires!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card style2 wow fadeInUp">
                        <div class="service-card_overlay"
                            data-bg-src="{{ asset('assets/img/update_2/service/service_shape.jpg') }}">
                        </div>
                        <div class="service-card_content">
                            <div class="service-card_wrapper">
                                <div class="service-card_icon">
                                    <img src="{{ asset('assets/img/icon-img/wheel.webp') }}" alt="" />
                                </div>
                                <div>
                                    <span class="service-card_subtitle">service - 03</span>
                                    <h3 class="service-card_title">
                                        <a href="{{ url('/') }}">Clean Wheels – Waterless Vehicle Wash</a>
                                    </h3>
                                </div>
                            </div>
                            <p class="service-card_text">
                                Join us in our efforts to deliver an eco-friendly vehicle wash
                                service. We have sworn in to save as much water as we can by
                                delivering top-notch waterless vehicle wash services. Get a
                                squeaky-clean vehicle without wasting gallons of water!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card style2 wow fadeInUp">
                        <div class="service-card_overlay"
                            data-bg-src="{{ asset('assets/img/update_2/service/service_shape.jpg') }}">
                        </div>
                        <div class="service-card_content">
                            <div class="service-card_wrapper">
                                <div class="service-card_icon">
                                    <img src="{{ asset('assets/img/icon-img/car.webp') }}" alt="" />
                                </div>
                                <div>
                                    <span class="service-card_subtitle">service - 04</span>
                                    <h3 class="service-card_title">
                                        <a href="{{ url('/') }}">Auto Zone - Accessories eStore</a>
                                    </h3>
                                </div>
                            </div>
                            <p class="service-card_text">
                                Save your time by shopping for vehicle accessories online!
                                Pick from a selection of accessories, book an appointment, and
                                get the fittings done at your own convenience. Get the best of
                                both worlds by shopping online and utilizing real-time fitting
                                services!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card style2 wow fadeInUp">
                        <div class="service-card_overlay"
                            data-bg-src="{{ asset('assets/img/update_2/service/service_shape.jpg') }}">
                        </div>
                        <div class="service-card_content">
                            <div class="service-card_wrapper">
                                <div class="service-card_icon">
                                    <img src="{{ asset('assets/img/icon-img/car1.webp') }}" alt="" />
                                </div>
                                <div>
                                    <span class="service-card_subtitle">service - 05</span>
                                    <h3 class="service-card_title">
                                        <a href="{{ url('/') }}">Fitness First - Vehicle Service Centre</a>
                                    </h3>
                                </div>
                            </div>
                            <p class="service-card_text">
                                We are like the family doctors for your vehicles because we
                                care for their health! With regular pollution check, water
                                check, oil check, and other facilities, we make sure that your
                                vehicle is in fine fettle and eco-friendly on the roads!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card style2 wow fadeInUp">
                        <div class="service-card_overlay"
                            data-bg-src="{{ asset('assets/img/update_2/service/service_shape.jpg') }}">
                        </div>
                        <div class="service-card_content">
                            <div class="service-card_wrapper">
                                <div class="service-card_icon">
                                    <img src="{{ asset('assets/img/icon-img/license.webp') }}" alt="" />
                                </div>
                                <div>
                                    <span class="service-card_subtitle">service - 06</span>
                                    <h3 class="service-card_title">
                                        <a href="{{ url('/') }}">Sarthi - Verified Drivers</a>
                                    </h3>
                                </div>
                            </div>
                            <p class="service-card_text">
                                Don’t restrain yourself from going places just because you
                                don’t have someone to drive! We have an extensive data of
                                verified drivers registered with us that you can pick from.
                                Travel worry-free as all the information about each driver is
                                legally cross-checked!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card style2 wow fadeInUp">
                        <div class="service-card_overlay"
                            data-bg-src="{{ asset('assets/img/update_2/service/service_shape.jpg') }}">
                        </div>
                        <div class="service-card_content">
                            <div class="service-card_wrapper">
                                <div class="service-card_icon">
                                    <img src="{{ asset('assets/img/icon-img/new-car.webp') }}" alt="" />
                                </div>
                                <div>
                                    <span class="service-card_subtitle">service - 07</span>
                                    <h3 class="service-card_title">
                                        <a href="{{ url('/') }}">Bazar – Pre-Owned Vehicles Reselling</a>
                                    </h3>
                                </div>
                            </div>
                            <p class="service-card_text">
                                Fastest and most trusted way to sell & buy pre used vehicles,
                                Hundreds of vehicles available within your area, all these
                                vehicles are pre checked by our team of experts. Own these
                                vehicles with free fitness & maintenance packages.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card style2 wow fadeInUp">
                        <div class="service-card_overlay"
                            data-bg-src="{{ asset('assets/img/update_2/service/service_shape.jpg') }}">
                        </div>
                        <div class="service-card_content">
                            <div class="service-card_wrapper">
                                <div class="service-card_icon">
                                    <img src="{{ asset('assets/img/icon-img/service.webp') }}" alt="" />
                                </div>
                                <div>
                                    <span class="service-card_subtitle">service - 08</span>
                                    <h3 class="service-card_title">
                                        <a href="{{ url('/') }}">Book a Cab – Hire a vehicle</a>
                                    </h3>
                                </div>
                            </div>
                            <p class="service-card_text">
                                No need to run around looking for a suitable vehicle for your
                                next holiday or travel. We will provide you best quality
                                travel services at best price. Our well-maintained vehicles
                                and verified drivers will make your travel hassle free and
                                worriless.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card style2 wow fadeInUp">
                        <div class="service-card_overlay"
                            data-bg-src="{{ asset('assets/img/update_2/service/service_shape.jpg') }}">
                        </div>
                        <div class="service-card_content">
                            <div class="service-card_wrapper">
                                <div class="service-card_icon">
                                    <img src="{{ asset('assets/img/icon-img/battery-status.webp') }}" alt="" />
                                </div>
                                <div>
                                    <span class="service-card_subtitle">service - 09</span>
                                    <h3 class="service-card_title">
                                        <a href="{{ url('/') }}">Battery Clinic – Refurbishing old Batteries</a>
                                    </h3>
                                </div>
                            </div>
                            <p class="service-card_text">
                                No need to buy expensive new batteries when your old battery
                                can be recharged at a nominal price. Bring your dead batteries
                                to our battery clinic and we will make it as good as new. So,
                                your old vehicle batteries can save you lot of money.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-card style2 wow fadeInUp">
                        <div class="service-card_overlay"
                            data-bg-src="{{ asset('assets/img/update_2/service/service_shape.jpg') }}">
                        </div>
                        <div class="service-card_content">
                            <div class="service-card_wrapper">
                                <div class="service-card_icon">
                                    <img src="{{ asset('assets/img/icon-img/technical-support.webp') }}" alt="" />
                                </div>
                                <div>
                                    <span class="service-card_subtitle">service - 10</span>
                                    <h3 class="service-card_title">
                                        <a href="{{ url('/') }}">Road Side Assistance</a>
                                    </h3>
                                </div>
                            </div>
                            <p class="service-card_text">
                                Even a top end vehicle can break down during travel, ensure
                                yours and your families security by enrolling to our road side
                                assistance plans.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="space position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="title-area text-center">
                        <h2 class="sec-title">eVSK Business Models</h2>
                        <p class="sec-text px-lg-10 text-justify">
                            We have two exciting business model options for you including Saksham Campaign and the eVAHAN®
                            Subsidy Model. Together they open the door for you to step into entrepreneurship with
                            confidence, even with limited resources. The best part is, these models remove the biggest
                            barriers—high investment, complex setup, and uncertainty—by simply offering government
                            support, easy financing, and a ready-to-run business at sutaible locations.
                        </p>
                    </div>
                </div>
            </div>
            <div class="price-box-wrap">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-6 mb-40">
                        <div class="price-box mx-auto wow fadeInLeft"
                            data-bg-src="{{ asset('assets/img/bg/price-box-bg.jpg') }}">
                            <div class="price-box_package layer-btn">Saksham Campaign</div>
                            <p class="price-box_text">Key Highlights</p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>Self-Employment for 50,000+ Youth; 20,000+ PUC centres at IOCL, HPCL, BPCL pumps &
                                    shops</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>Mandatory High-Demand Service: PUC required every 3–6 months for 34 crore
                                    vehicles</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>7 Revenue Streams: PUC, Insurance, FASTag, RSA, eChallan, Travel,
                                    Driver-on-Call</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>Easy Eligibility: Age 18+, 10+2 ; 5–10% contribution</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>Low Investment: General: ₹68000/- | Reserved: ₹34000/-; Subsidy: 15% (Gen) | 25%
                                    (Res)</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>Up to 95% Funding Support: MSME-backed; 15–35% subsidy; 84% ROI</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>2-Phase Rollout: Ph 1: Apply and submit docs | Ph 2: Funding, Setup, Train</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>Future-Ready Business: Jobs + Pollution Control | Backed by Make in India, MSME</span>
                            </p>
                            <div class="model-download center">
                                <button class="about-evsk-btn th-btn style4" id="openPopupButtonModel1">Download
                                    Brochure</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-6 mb-40">
                        <div class="price-box mx-auto wow fadeInUp" data-bg-src="{{ asset('assets/img/bg/price-box-bg.jpg') }}">
                            <div class="price-box_package layer-btn">Subsidy</div>
                            <p class="price-box_text">Key Highlights</p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>Total setup ~₹6.20L with kiosk. Up to 20% Subsidy (Zero cap on subsidy
                                    value)</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>100% Revenue = Your Profit: No revenue sharing; keep all earnings</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>Turnkey Setup in 45 Days: Location + machinery + branding + license +
                                    training</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>7 Revenue Streams: PUC, Insurance, FASTag, RSA, e-Challan, Waterless Wash,
                                    Driver-on-Call</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>Mandatory Service: ₹10K fine for no PUC/insurance; PUC required for insurance
                                    claims</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>Free Digital Portal: Digital DL/RC/PUC records + auto-reminders for due
                                    dates</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>Trusted Partners: HP/IOCL/BPCL (locations);</span>
                            </p>
                            <br /><br />
                            <div class="model-download center">
                                <button class="about-evsk-btn th-btn style4" id="openPopupButtonModel2">Download
                                    Brochure</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line-ani" style="left: 50%;"></div>
                <div class="particle" id="particle2"></div>
                <div class="particle" id="particle3"></div>

                <div class="th-icon-box testi-1">
                    <button data-slick-prev="#eVSKmoddels1" class="icon-btn arrow-left">
                        <i class="far fa-chevron-left"></i>
                    </button>
                    <button data-slick-next="#eVSKmoddels1" class="icon-btn arrow-right">
                        <i class="far fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div id="popupOverlay1" class="overlay-1">
            <div class="popupModel-1" id="popupForm">
                <span class="close" id="closePopupButtonModel-1">
                    <img src="{{ asset('assets/img/icon-img/model-close.png') }}">
                </span>
                <div class="booking-logo-area header-logo">
                    <img src="assets/img/E-vahan-logo.webp" class="header-logo-img" alt="E-Vahan" />
                </div>
                <div class="booking-popup-area d-none d-md-flex header-logo">
                    <div class="booking-popup-area-left">
                        <div class="popup-img-wrapper">
                            <img class="text-center popup-img" src="assets/img/main-banner/popup-img.png" alt="E-Vahan" />
                        </div>
                    </div>
                </div>
                <div id="crmWebToEntityForm">
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <META HTTP-EQUIV='content-type' CONTENT='text/html;charset=UTF-8'>
                    <form id='webform' action="https://crm.zoho.in/crm/WebToLeadForm" method="POST" class="contact-form"
                        enctype="multipart/form-data" name="WebToLeads567050000000322012"
                        onSubmit='javascript:document.charset="UTF-8"; return checkMandatory567050000000322012()'
                        accept-charset='UTF-8'>
                        {{ csrf_field() }}
                        <input type='text' style='display:none;' name='xnQsjsdp'
                            value='49005ebbe11f5fd63c5cb57312f6209da19b160f10f59fbf9b2f1a330bc04c63'></input>
                        <input type='hidden' name='zc_gad' id='zc_gad' value=''></input>
                        <input type='text' style='display:none;' name='xmIwtLD'
                            value='6b80f16f086e8fc2f8ae6e9ae8972916e4012d0c6d0e5e0aca9b943f25f48a8f10eea1c3e0421630fff1ac757e9d520c'></input>
                        <input type='text' style='display:none;' name='actionType' value='TGVhZHM='></input>
                        <input type='text' style='display:none;' name='returnURL'
                            value='https&#x3a;&#x2f;&#x2f;e-vahan.com&#x2f;thank-you'>
                        </input>

                        <div class="booking-title-area mb-30 mb-sm-30">
                            <h4 class="booking-title" id='subsidyModlepdf'>Register Today</h4>
                        </div>
                        <div class="row">
                            <div class="form-group col-12  col-md-4">
                                <select class="form-select nice-select" id="LEADCF16" name="LEADCF16">
                                    <option value="Normal" selected="selected" disabled="disabled">
                                        Interested Model
                                    </option>
                                    <option value="Subsidy&#x20;Model">Subsidy Model</option>
                                    <option value="Earn&#x20;&amp;&#x20;Pay&#x20;Model">
                                        Earn &amp; Pay Model
                                    </option>
                                    <option value="Guaranteed&#x20;Return&#x20;Model">
                                        Guaranteed Return Model
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="text" class="form-control" id="First_Name" name="First Name"
                                    placeholder="First Name" required />
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="text" class="form-control" id="Last_Name" name="Last Name"
                                    placeholder="Last Name" required />
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="email" class="form-control" ftype="email" autocomplete="false" id="Email"
                                    name="Email" placeholder="Email Address" required />
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="number" class="form-control" id="Mobile" name="Mobile"
                                    placeholder="Phone Number" required />
                                <i class="fa-light fa-phone"></i>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="text" class="form-control" id="LEADCF4" name="LEADCF4"
                                    placeholder="Your Address" required />
                                <i class="fa-sharp fa-light fa-location-dot"></i>
                            </div>
                            <div class="form-group form-group-scroll col-6 col-sm-4">
                                <select name="passenger" id="LEADCF8" name="LEADCF8" class="form-select ">
                                    <option value="">State</option>
                                    <option value="Andhra&#x20;Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal&#x20;Pradesh">
                                        Arunachal Pradesh
                                    </option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal&#x20;Pradesh">Himachal Pradesh</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya&#x20;Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil&#x20;Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar&#x20;Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West&#x20;Bengal">West Bengal</option>
                                    <option value="Andaman&#x20;and&#x20;Nicobar&#x20;Islands">
                                        Andaman and Nicobar Islands
                                    </option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option
                                        value="Dadra&#x20;and&#x20;Nagar&#x20;Haveli&#x20;and&#x20;Daman&#x20;and&#x20;Diu">
                                        Dadra and Nagar Haveli and Daman and Diu
                                    </option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Ladakh">Ladakh</option>
                                    <option value="Jammu&#x20;and&#x20;Kashmir">
                                        Jammu and Kashmir
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="text" class="form-control" id="City" name="City" placeholder="City" required />
                                <i class="fa-sharp fa-light fa-location-dot"></i>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="text" class="form-control" id="Zip_Code" name="Zip Code" placeholder="Zip Code"
                                    required />
                                <i class="fa-sharp fa-light fa-location-dot"></i>
                            </div>
                            <div class="form-btn col-12">
                                <button class="th-btn fw-btn" id="formsubmit firstpdf btnPdf1">
                                    Submit Now <i class="fa-regular fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="popupOverlay2" class="overlay-1">
            <div class="popupModel-1" id="popupForm">
                <span class="close" id="closePopupButtonModel-2">
                    <img src="{{ asset('assets/img/icon-img/model-close.png') }}">
                </span>
                <div class="booking-logo-area header-logo">
                    <img src="assets/img/E-vahan-logo.webp" class="header-logo-img" alt="E-Vahan" />
                </div>
                <div class="booking-popup-area header-logo">
                    <div class="booking-popup-area-left">
                        <div class="popup-img-wrapper">
                            <img class="text-center popup-img" src="assets/img/main-banner/popup-img.png" alt="E-Vahan" />
                        </div>
                    </div>
                </div>
                <div id="crmWebToEntityForm">
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <META HTTP-EQUIV='content-type' CONTENT='text/html;charset=UTF-8'>
                    <form id='webform' action="https://crm.zoho.in/crm/WebToLeadForm" method="POST" class="contact-form"
                        enctype="multipart/form-data" name="WebToLeads567050000000322012"
                        onSubmit='javascript:document.charset="UTF-8"; return checkMandatory567050000000322012()'
                        accept-charset='UTF-8'>
                        {{ csrf_field() }}
                        <input type='text' style='display:none;' name='xnQsjsdp'
                            value='49005ebbe11f5fd63c5cb57312f6209da19b160f10f59fbf9b2f1a330bc04c63'></input>
                        <input type='hidden' name='zc_gad' id='zc_gad' value=''></input>
                        <input type='text' style='display:none;' name='xmIwtLD'
                            value='6b80f16f086e8fc2f8ae6e9ae8972916e4012d0c6d0e5e0aca9b943f25f48a8f10eea1c3e0421630fff1ac757e9d520c'></input>
                        <input type='text' style='display:none;' name='actionType' value='TGVhZHM='></input>
                        <input type='text' style='display:none;' name='returnURL'
                            value='https&#x3a;&#x2f;&#x2f;e-vahan.com&#x2f;thank-you'>
                        </input>

                        <div class="booking-title-area mb-30 mb-sm-30">
                            <h4 class="booking-title" id='subsidyModlepdf'>Register Today</h4>
                        </div>
                        <div class="row">
                            <div class="form-group col-12  col-md-4">
                                <select class="form-select nice-select" id="LEADCF16" name="LEADCF16">
                                    <option value="Normal" selected="selected" disabled="disabled">
                                        Interested Model
                                    </option>
                                    <option value="Subsidy&#x20;Model">Subsidy Model</option>
                                    <option value="Earn&#x20;&amp;&#x20;Pay&#x20;Model">
                                        Earn &amp; Pay Model
                                    </option>
                                    <option value="Guaranteed&#x20;Return&#x20;Model">
                                        Guaranteed Return Model
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="text" class="form-control" id="First_Name" name="First Name"
                                    placeholder="First Name" required />
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="text" class="form-control" id="Last_Name" name="Last Name"
                                    placeholder="Last Name" required />
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="email" class="form-control" ftype="email" autocomplete="false" id="Email"
                                    name="Email" placeholder="Email Address" required />
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="number" class="form-control" id="Mobile" name="Mobile"
                                    placeholder="Phone Number" required />
                                <i class="fa-light fa-phone"></i>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="text" class="form-control" id="LEADCF4" name="LEADCF4"
                                    placeholder="Your Address" required />
                                <i class="fa-sharp fa-light fa-location-dot"></i>
                            </div>
                            <div class="form-group form-group-scroll col-6 col-sm-4">
                                <select name="passenger" id="LEADCF8" name="LEADCF8" class="form-select ">
                                    <option value="">State</option>
                                    <option value="Andhra&#x20;Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal&#x20;Pradesh">
                                        Arunachal Pradesh
                                    </option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal&#x20;Pradesh">Himachal Pradesh</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya&#x20;Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil&#x20;Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar&#x20;Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West&#x20;Bengal">West Bengal</option>
                                    <option value="Andaman&#x20;and&#x20;Nicobar&#x20;Islands">
                                        Andaman and Nicobar Islands
                                    </option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option
                                        value="Dadra&#x20;and&#x20;Nagar&#x20;Haveli&#x20;and&#x20;Daman&#x20;and&#x20;Diu">
                                        Dadra and Nagar Haveli and Daman and Diu
                                    </option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Ladakh">Ladakh</option>
                                    <option value="Jammu&#x20;and&#x20;Kashmir">
                                        Jammu and Kashmir
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="text" class="form-control" id="City" name="City" placeholder="City" required />
                                <i class="fa-sharp fa-light fa-location-dot"></i>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="text" class="form-control" id="Zip_Code" name="Zip Code" placeholder="Zip Code"
                                    required />
                                <i class="fa-sharp fa-light fa-location-dot"></i>
                            </div>
                            <div class="form-btn  col-12">
                                <button class="th-btn fw-btn" id="formsubmit secondtpdf btnPdf2">
                                    Submit Now <i class="fa-regular fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="popupOverlay3" class="overlay-1">
            <div class="popupModel-1" id="popupForm">
                <span class="close" id="closePopupButtonModel-3">
                    <img src="{{ asset('assets/img/icon-img/model-close.png') }}">
                </span>
                <div class="booking-logo-area header-logo">
                    <img src="assets/img/E-vahan-logo.webp" class="header-logo-img" alt="E-Vahan" />
                </div>
                <div class="booking-popup-area header-logo">
                    <div class="booking-popup-area-left">
                        <div class="popup-img-wrapper">
                            <img class="text-center popup-img" src="assets/img/main-banner/popup-img.png" alt="E-Vahan" />
                        </div>
                    </div>
                </div>
                <div id="crmWebToEntityForm">
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <META HTTP-EQUIV='content-type' CONTENT='text/html;charset=UTF-8'>
                    <form id='webform' action="https://crm.zoho.in/crm/WebToLeadForm" method="POST" class="contact-form"
                        enctype="multipart/form-data" name="WebToLeads567050000000322012"
                        onSubmit='javascript:document.charset="UTF-8"; return checkMandatory567050000000322012()'
                        accept-charset='UTF-8'>
                        {{ csrf_field() }}
                        <input type='text' style='display:none;' name='xnQsjsdp'
                            value='49005ebbe11f5fd63c5cb57312f6209da19b160f10f59fbf9b2f1a330bc04c63'></input>
                        <input type='hidden' name='zc_gad' id='zc_gad' value=''></input>
                        <input type='text' style='display:none;' name='xmIwtLD'
                            value='6b80f16f086e8fc2f8ae6e9ae8972916e4012d0c6d0e5e0aca9b943f25f48a8f10eea1c3e0421630fff1ac757e9d520c'></input>
                        <input type='text' style='display:none;' name='actionType' value='TGVhZHM='></input>
                        <input type='text' style='display:none;' name='returnURL'
                            value='https&#x3a;&#x2f;&#x2f;e-vahan.com&#x2f;thank-you'>
                        </input>

                        <div class="booking-title-area mb-30 mb-sm-30">
                            <h4 class="booking-title" id='subsidyModlepdf'>Register Today</h4>
                        </div>
                        <div class="row">
                            <div class="form-group col-12  col-md-4">
                                <select class="form-select nice-select" id="LEADCF16" name="LEADCF16">
                                    <option value="Normal" selected="selected" disabled="disabled">
                                        Interested Model
                                    </option>
                                    <option value="Subsidy&#x20;Model">Subsidy Model</option>
                                    <option value="Earn&#x20;&amp;&#x20;Pay&#x20;Model">
                                        Earn &amp; Pay Model
                                    </option>
                                    <option value="Guaranteed&#x20;Return&#x20;Model">
                                        Guaranteed Return Model
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="text" class="form-control" id="First_Name" name="First Name"
                                    placeholder="First Name" required />
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="text" class="form-control" id="Last_Name" name="Last Name"
                                    placeholder="Last Name" required />
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="email" class="form-control" ftype="email" autocomplete="false" id="Email"
                                    name="Email" placeholder="Email Address" required />
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="number" class="form-control" id="Mobile" name="Mobile"
                                    placeholder="Phone Number" required />
                                <i class="fa-light fa-phone"></i>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="text" class="form-control" id="LEADCF4" name="LEADCF4"
                                    placeholder="Your Address" required />
                                <i class="fa-sharp fa-light fa-location-dot"></i>
                            </div>
                            <div class="form-group form-group-scroll col-6 col-sm-4">
                                <select name="passenger" id="LEADCF8" name="LEADCF8" class="form-select ">
                                    <option value="">State</option>
                                    <option value="Andhra&#x20;Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal&#x20;Pradesh">
                                        Arunachal Pradesh
                                    </option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal&#x20;Pradesh">Himachal Pradesh</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya&#x20;Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil&#x20;Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar&#x20;Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West&#x20;Bengal">West Bengal</option>
                                    <option value="Andaman&#x20;and&#x20;Nicobar&#x20;Islands">
                                        Andaman and Nicobar Islands
                                    </option>
                                    <option value="Chandigarh">Chandigarh</option>
                                    <option
                                        value="Dadra&#x20;and&#x20;Nagar&#x20;Haveli&#x20;and&#x20;Daman&#x20;and&#x20;Diu">
                                        Dadra and Nagar Haveli and Daman and Diu
                                    </option>
                                    <option value="Lakshadweep">Lakshadweep</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Puducherry">Puducherry</option>
                                    <option value="Ladakh">Ladakh</option>
                                    <option value="Jammu&#x20;and&#x20;Kashmir">
                                        Jammu and Kashmir
                                    </option>
                                </select>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="text" class="form-control" id="City" name="City" placeholder="City" required />
                                <i class="fa-sharp fa-light fa-location-dot"></i>
                            </div>
                            <div class="form-group col-6 col-md-4">
                                <input type="text" class="form-control" id="Zip_Code" name="Zip Code" placeholder="Zip Code"
                                    required />
                                <i class="fa-sharp fa-light fa-location-dot"></i>
                            </div>
                            <div class="form-btn col-12">
                                <button class="th-btn fw-btn" id="formsubmit thierdpdf btnPdf3">
                                    Submit Now <i class="fa-regular fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="space position-relative" data-bg-src="{{ asset('assets/img/bg/testimonial_bg_1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-4 mt-lg-0">
                    <div class="title-area mb-50 text-center">
                        <span class="sub-title">Testimonial<span class="double-line"></span></span>
                        <h2 class="sec-title">What People Say About Us</h2>
                    </div>
                    <div class="testi-block-area wow fadeInRight">
                        <div class="row th-carousel" id="testi1" data-slide-show="3" data-sm-slide-show="1">
                            <div class="col-lg-4">
                                <div class="testi-block">
                                    <div class="testi-block_img">
                                        <img src="{{ asset('assets/img/main-banner/hp-logo.webp') }}" alt="avater" />
                                        {{-- <div class="testi-block_quote">
                                            <img src="{{ asset('assets/img/icon/quote_right_1.png') }}" alt="icon" />
                                        </div> --}}
                                    </div>
                                    <h3 class="testi-block_name">Mr. Paramjit Singh Doaba</h3>
                                    <div class="testi-block_desig">Doaba Filling Station</div>
                                    <div class="testi-block_text">
                                        I have been associated with eVAHAN since 2021, The quality
                                        of PUC Machines installed by them is best in class and
                                        after sales service is exceptionally well, the service
                                        team is available 24X7 and our queries are resolved in
                                        minutes. Keep up the good work.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="testi-block">
                                    <div class="testi-block_img">
                                        <img src="{{ asset('assets/img/main-banner/Bharat-Petroleum-logo.webp') }}"
                                            alt="avater" />
                                        {{-- <div class="testi-block_quote">
                                            <img src="{{ asset('assets/img/icon/quote_right_1.png') }}" alt="icon" />
                                        </div> --}}
                                    </div>
                                    <h3 class="testi-block_name">Mr. Ravinder Mittal</h3>
                                    <div class="testi-block_desig">Moga Oil Store</div>
                                    <div class="testi-block_text">
                                        It is an amazing business opportunity for individuals
                                        because the services eVAHAN is offering for renewing
                                        Insurance, PUC (pollution) check is hassle-free. Customers
                                        give us positive feedback about ‘eVAHAN’ providing all
                                        the necessary information required and process of
                                        execution.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="testi-block">
                                    <div class="testi-block_img">
                                        <img src="{{ asset('assets/img/main-banner/hp-logo.webp') }}" alt="avater" />
                                        {{-- <div class="testi-block_quote">
                                            <img src="{{ asset('assets/img/icon/quote_right_1.png') }}" alt="icon" />
                                        </div> --}}
                                    </div>
                                    <h3 class="testi-block_name">Mr. Dinesh Gupta</h3>
                                    <div class="testi-block_desig">
                                        Chamunda Filling Station
                                    </div>
                                    <div class="testi-block_text">
                                        eVAHAN provides the perfect amount of help anybody can get
                                        with quality services. The machinery used at eVAHAN
                                        centres is quite well maintained and sustained which
                                        brings up productivity to the business even after
                                        installation.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="testi-block">
                                    <div class="testi-block_img">
                                        <img src="{{ asset('assets/img/main-banner/indial-oil-logo.webp') }}"
                                            alt="avater" />
                                        {{-- <div class="testi-block_quote">
                                            <img src="{{ asset('assets/img/icon/quote_right_1.png') }}" alt="icon" />
                                        </div> --}}
                                    </div>
                                    <h3 class="testi-block_name">Mr. Honey Gill</h3>
                                    <div class="testi-block_desig">Gill Filling Station</div>
                                    <div class="testi-block_text">
                                        The best part is that there marketing team design
                                        promotion campaign for us to achieve our desired revenue
                                        goals and help us get best ROI.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="testi-block">
                                    <div class="testi-block_img">
                                        <img src="{{ asset('assets/img/main-banner/Hero_MotoCorp-Logo.wine.webp') }}"
                                            alt="avater" />
                                        {{-- <div class="testi-block_quote">
                                            <img src="{{ asset('assets/img/icon/quote_right_1.png') }}" alt="icon" />
                                        </div> --}}
                                    </div>
                                    <h3 class="testi-block_name">Mr. Puneet</h3>
                                    <div class="testi-block_desig">Bhalla Automobiles</div>
                                    <div class="testi-block_text">
                                        I would like to bring it into notice that our customers
                                        are very satisfied with the feasible options at eVAHAN
                                        check centres. Applying for FASTag, Pollution check has
                                        become a very convenient and time saving task for the
                                        community.
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="testi-block">
                                    <div class="testi-block_img">
                                        <img src="{{ asset('assets/img/main-banner/36643-1-honda-logo.webp') }}"
                                            alt="avater" />
                                        {{-- <div class="testi-block_quote">
                                            <img src="{{ asset('assets/img/icon/quote_right_1.png') }}" alt="icon" />
                                        </div> --}}
                                    </div>
                                    <h3 class="testi-block_name">Mr. Mahajan</h3>
                                    <div class="testi-block_desig">Mahajan Motors</div>
                                    <div class="testi-block_text">
                                        I would like to tell you that eVAHAN is a very excellent
                                        resource for after-sale services of machines. They provide
                                        us efficient services for the maintenance of the
                                        machinery. Their experts help to improve the performance
                                        and increase lifespan simultaneously.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="th-icon-box testi-1">
                            <button data-slick-prev="#testi1" class="icon-btn arrow-left">
                                <i class="far fa-chevron-left"></i>
                            </button>
                            <button data-slick-next="#testi1" class="icon-btn arrow-right">
                                <i class="far fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec-border1" data-bg-src="{{ asset('assets/img/shape/border_1.png') }}"></div>
    </section>


    <section class="space">
        <div class="container going-projects">
            <div class="title-area text-center">
                {{-- <span class="sub-title">Our Projects<span class="double-line"></span></span> --}}
                <h2 class="sec-title">eVAHAN Latest On Going Projects</h2>
                <br />
            </div>
            <div class="row slider-shadow th-carousel" id="eVAHANon1" data-slide-show="3" data-lg-slide-show="2"
                data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1">
                <div class="col-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <a href="{{ url('evahan-suvidha-kendra') }}">
                                <img src="{{ asset('assets/img/main-banner/Frame 14 (1).png') }}" alt="Team" />
                            </a>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('evahan-suvidha-kendra') }}">eVAHAN Suvidha Kendra</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <a href="{{ url('automatic-testing-system') }}">
                                <img src="{{ asset('assets/img/main-banner/Automatic test system project .png') }}" alt="Team" />
                            </a>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('automatic-testing-system') }}">Automatic Test System</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <a href="{{ url('automatic-driving-training-centre') }}">
                                <img src="{{ asset('assets/img/main-banner/Automatic driving training centre project .png') }}" alt="Team" />
                            </a>
                        </div>
                        <div class="team-content">
                            <h3 class="team-title">
                                <a href="{{ url('automatic-driving-training-centre') }}">Automatic Driving Training
                                    Centre</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="th-icon-box">
                <button data-slick-prev="#eVAHANon1" class="icon-btn arrow-left">
                    <i class="far fa-chevron-left"></i>
                </button>
                <button data-slick-next="#eVAHANon1" class="icon-btn arrow-right">
                    <i class="far fa-chevron-right"></i>
                </button>
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
                        {{ csrf_field() }}
                        <div class="title-area mb-30 text-center text-lg-start">
                            <h2 class="sec-title">
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
                                    <option value="Automatic Testing System">
                                        Automatic Testing System (ATS)
                                    </option>
                                    <option value="Automatic Driving Training Centre">
                                        Automatic Driving Training Centre (ADTC)
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
                        {{-- <p class="success mb-0 mt-3"></p> --}}
                    </form>

                </div>
            </div>
        </div>
    </div>

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
            <div class="row slider-shadow th-carousel home-project-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2"
                data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true">
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

    <section class="bg-smoke space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Our Gallery<span class="double-line"></span></span>
                <h2 class="sec-title">eVAHAN Gallery</h2>
                <br />
            </div>
            <div class="row slider-shadow th-carousel home-project-carousel gallery-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2"
                data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true">
                <!-- 
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
                 -->

                <!-- New Gallery Cards -->
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
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img">
                            <img src="{{ asset('assets/img/main-banner/new-gallery-7.jpeg') }}" alt="Gallery Image" />
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
                            <img src="{{ asset('assets/img/main-banner/new-gallery-8.jpeg') }}" alt="Gallery Image" />
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
                            <img src="{{ asset('assets/img/main-banner/new-gallery-9.jpeg') }}" alt="Gallery Image" />
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
                            <img src="{{ asset('assets/img/main-banner/new-gallery-10.jpeg') }}" alt="Gallery Image" />
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

    <section class="pb-20">
        <div class="container">
            <div class="download-area wow fadeInUp" data-bg-src="{{ asset('assets/img/bg/download_bg_2.jpg') }}">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-start">
                        <div class="title-area px-50">
                            <div class="header-logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('assets/img/E-vahan-logo.webp') }}"
                                        alt="E-Vahan" /></a>
                            </div>
                            <br />
                            <h2 class="sec-title text-capitalize">Join our Team</h2>
                            <p>
                                We are hiring Mechanical Engineers for the post of Centre Managers.
                            </p>
                        </div>
                        <div class="download-btn-wrap px-50 my-20">
                            <a target="_blank" href="{{ url('/join-our-team') }}" class="download-btn"><i
                                    class="fa-brands fa-google-play"></i>
                                <div class="text-group">
                                    <h6 class="big-text">Apply Now</h6>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 text-center text-lg-start">
                        <div class="title-area h-100">
                            <img src="{{ asset('assets/img/main-banner/Hiring-Img.png') }}" alt="E-Vahan" class="h-100" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-50 pb-20">
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

    <section class="space overflow-hidden" id="blog-sec">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Our News Updates<span class="double-line"></span></span>
                <h2 class="sec-title">Latest News Posts</h2>
            </div>
            <div class="row slider-shadow  th-carousel" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2"
                data-sm-slide-show="1" data-arrows="true" data-xl-arrows="true" data-ml-arrows="true">

                @foreach ($getRecord as $value)
                    <div class="col-md-6 col-xl-4">
                        <div class="blog-box wow fadeInUp">
                            <div class="blog-img h-100">
                                <a href="{{ url($value->slug) }}"><img src="{{ $value->getImage() }}" alt="Blog Image" /></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="{{ url('#') }}"><i class="fas fa-user-circle"></i>{{ $value->user_name }}</a>
                                    <a href="{{ url('#') }}"><i
                                            class="fas fa-calendar-alt"></i>{{ date('d-m-Y', strtotime($value->created_at)) }}</a>
                                    <a href="{{ url('#') }}"><i class="fas fa-tags"></i>{{ $value->category_title }}</a>
                                </div>

                                <h3 class="blog-title pt-10">
                                    <a href="{{ url($value->slug) }}">{!! strip_tags(Str::substr($value->title, 0, 67)) !!}</a>
                                </h3>
                                <p>
                                    {!! strip_tags(Str::substr($value->description, 0, 180)) !!}.....
                                </p>
                                <a href="{{ url($value->slug) }}" class="th-btn blog-btn">Read Details</a>

                                {{-- <div class="blog-meta style2">
                                    <a href="{{ url('blog') }}">{{ date('d-m-Y', strtotime($value->created_at)) }}</a>
                                    <a href="{{ url('blog') }}">By Vikram Jhanji</a>
                                </div> --}}
                            </div>



                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection

@section('script')
    <!-- Do not remove this --- Analytics Tracking code starts -->
    <script id='wf_anal'
        src='https://crm.zohopublic.in/crm/WebFormAnalyticsServeServlet?rid=23c8fba577f8f39e82b5c3b0366379e274a8ba93d0e74e8ecef1dad8c07364ccd72c8688140b48746dbaf417d827f8b6gidfbf05b92d5c93ec9352cb928aada85cb5774c4d6bdf20775409025bc969e20b7gideb3d9e6ac08cc45d148a55823627b0945ca401999abce27b45775486e6e7a93bgide1df2ef131e4ae4a1ab544b4ccf8493dc40b74ac73b1c840cd3624b85d0c33c8&tw=5cd7564622b0db13d969e838199adf723bbbd7059265c5f56f21a734208aa682'>
        </script>
    <!-- Do not remove this --- Analytics Tracking code ends. -->
@endsection
