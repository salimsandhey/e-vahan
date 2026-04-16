@extends('layouts.app')
@section('style')
@endsection

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/main-banner/About-eVSK-banner.webp') }}"
        data-overlay="title" data-opacity="2">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">About eVSK</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>About</li>
            </ul>
        </div>
    </div>

    <section class="space-top pt-70 pb-70" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 pe-xl-5 mb-5 mb-lg-0">
                    <div class="th-video wow fadeInLeft">
                        <img class="w-100" src="{{ asset('assets/img/main-banner/about-evsk-slider-02.png') }}"
                            alt="about" />
                        <a href="{{ url('assets/video/about-evsk-video.mp4') }}" class="play-btn style2 popup-video"><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <h2 class="mt-n3">About eVAHAN</h2>
                    <p class="pra-text mb-4">
                        eVAHAN® is a new-age automobile maintenance start-up. Working with a vision to transform the
                        unorganized vehicle maintenance
                        market using new-age technology, eVAHAN delivers top-notch services ranging from vehicle servicing
                        to renewing mandatory
                        vehicle certificates and providing expert driving lessons at unbelievably affordable prices. Our
                        global partners have
                        done pioneering work in partnership with the Indian automotive industry in the field of engine
                        development &
                        instrumentation. Our partners have played a leading role with automobile manufacturing companies in
                        setting & meeting
                        goals on vehicular emission norms in line with European and global legislation through engine
                        development, testing, &
                        Instrumentation systems.<br /><br />
                        We at eVAHAN aren't just another automotive service provider. We're your trusted companions on the
                        road, ensuring a
                        smooth and worry-free journey for you and your vehicle. Founded with a vision to revolutionize car
                        care, we combine
                        technology with dedicated professionals to deliver exceptional service at affordable prices.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-12">

                    <div class="row">
                        <div class="col-lg-12 mb-40">
                            <div class="service-feature">
                                <div class="service-feature_content">
                                    <h4 class="service-feature_title">Our Vision</h4>
                                    <p class="service-feature_text">
                                        Our vision is rooted in innovation. We envision a future where vehicle maintenance
                                        is not a chore but an experience
                                        seamlessly integrating with modern lifestyles. Through our relentless pursuit of
                                        technological advancements and
                                        strategic partnerships, we strive to set new standards in the automotive industry,
                                        fostering a culture of efficiency and
                                        sustainability.
                                    </p>
                                    <br />
                                    <br />
                                    <h4 class="service-feature_title">Our Mission</h4>
                                    <p class="service-feature_text">
                                        To make car ownership stress-free and enjoyable. We achieve this by providing
                                        comprehensive services under one roof,
                                        from routine maintenance to emergency assistance. Whether ensuring vehicles comply
                                        with mandatory regulations or
                                        providing expert guidance to aspiring drivers, we are dedicated to facilitating
                                        safe, smooth, and enjoyable travels
                                        for
                                        all. Through our comprehensive range of services, we aim to cater to the diverse
                                        needs of vehicle owners, offering
                                        convenience, reliability, and peace of mind at every step.
                                    </p>
                                </div>
                            </div>
                        </div>
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
                        <h2 class="sec-title">iAUTO Ventures Private Limited</h2>
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
                                <a href="{{ url('#') }}" class="info-card_link">E-160, Phase 7, Industrial Area,
                                    SAS Nagar Mohali -
                                    160055</a>
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
                                <a href="{{ url('#') }}" class="info-card_link">15, Lajpat Nagar, Jalandhar,
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

    <section class="space position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="title-area text-center">
                        <h2 class="sec-title">eVSK Business Models</h2>
                        <p class="sec-text px-lg-10 text-justify">
                            eVAHAN®️, is inviting applications to own and operate eVAHAN
                            Suvidha Kendra, Government Approved Online pollution check
                            centres. These centres will be placed at petrol pumps and shops
                            in high footfall areas, these centres will be allotted Pin code
                            wise on first come first basis. The eligible candidates will be
                            considered for allotment of eVAHAN Suvidha Kendra on various
                            investment models. eVAHAN®️ will provide all necessary
                            system/infrastructure to start the centre, The models are
                            designed to ensure attractive returns.
                        </p>
                    </div>
                </div>
            </div>
            <div class="price-box-wrap">
                <div class="row gx-108 justify-content-between slider-shadow th-carousel" id="eVSKmoddels1" data-slide-show="3" data-lg-slide-show="3"
                    data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1">
                    <div class="col-md-auto">
                        <div class="price-box wow fadeInLeft" data-bg-src="{{ asset('assets/img/bg/price-box-bg.jpg') }}">
                            <div class="price-box_package layer-btn">Subsidy</div>
                            <p class="price-box_text">Key Highlights</p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>
                                    Subsidy Up to ₹ 70,000 on machinery and equipment</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>
                                    Total Machinery & Equipment cost for the setup is approx. ₹
                                    2.50 lakh*.</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>
                                    Complete Setup, Training and Branding will be done by the
                                    company.</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>
                                    Marketing Campaigns to ensure desired revenues will be done
                                    by the company.</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>
                                    No revenue sharing with company, 100% revenue is for the
                                    franchise owner.</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>
                                    Portal for Insurance, FASTag, Tour and Travel Booking, RSA
                                    and other online services will be provided.</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span> Get easy loan up to 90% of total amount.</span>
                            </p>
                            <div class="model-download center">
                                <button class="about-evsk-btn th-btn style4" id="openPopupButtonModel1">Download
                                    Brochure</button>
                            </div>
                            <!-- {{-- <a href="{{ url('#') }}" class="th-btn style4" id="openBtn">Download Brochure</a> --}}
                                                {{-- <button id="openBtn" class="th-btn style4">Download Brochure</button> --}} -->
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="price-box wow fadeInUp" data-bg-src="{{ asset('assets/img/bg/price-box-bg.jpg') }}">
                            <div class="price-box_package layer-btn">Earn & Pay</div>
                            <p class="price-box_text">Key Highlights</p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>No Need to Buy Expensive Machinery</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>Minimum Paper Work</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>Instant Approval</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>Revenue based rental model</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>Zero Maintenance cost for Machines</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>Support in Sales Promotional activities</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>Free Portal for Vehicle Insurance FASTag, RSA, Tour &
                                    Travel Booking, Driver Booking and Vehicle cleaning
                                    Kits</span>
                            </p>
                            <!-- <a href="{{ url('#') }}" class="th-btn style4">Download Brochure</a> -->
                            <div class="model-download center">
                                <button class="about-evsk-btn th-btn style4" id="openPopupButtonModel2">Download
                                    Brochure</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="price-box wow fadeInRight" data-bg-src="{{ asset('assets/img/bg/price-box-bg.jpg') }}">
                            <div class="price-box_package layer-btn">
                                Guaranteed Returns
                            </div>
                            <p class="price-box_text">Key Highlights</p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>Guaranteed Income Plan</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>Guaranteed Return of 30% on Investment</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>No Revenue/Profit Sharing</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>All operating expenses will be borne by the company</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>Profit Sharing Plan</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>Guaranteed Return of 10% on Investment</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>Profit Sharing of 50-50 (including Guaranteed Return of
                                    10%)</span>
                            </p>
                            <p class="price-box_info">
                                <i class="fa-thin fa-check-to-slot icon-space"></i>
                                <span>All operating expenses will be borne by the company</span>
                            </p>
                            <!-- <a href="{{ url('#') }}" class="th-btn style4">Download Brochure</a> -->
                            <div class="model-download center">
                                <button class="about-evsk-btn th-btn style4" id="openPopupButtonModel3">Download
                                    Brochure</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line-ani"></div>
                <div class="line-ani"></div>
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
                <div class="row brand-slide th-carousel" data-slide-show="6" data-lg-slide-show="4"
                    data-md-slide-show="3" data-sm-slide-show="2" data-xs-slide-show="2">
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

    <section class="">
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
                            <img src="{{ asset('assets/img/main-banner/Hiring-Img.png') }}" alt="E-Vahan"
                                class="h-100" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-smoke space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Our Services<span class="double-line"></span></span>
                <h2 class="sec-title">eVAHAN Suvidha Kendra Services</h2>
                <p class="px-30p">
                    We believe in building trust and relationships with our customers. Our team is passionate about cars and
                    committed to
                    providing personalized attention and expert advice. We're transparent about our services and pricing so
                    that you can
                    confidently make informed decisions.
                </p>
                <br />
            </div>
            <div class="row slider-shadow th-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2"
                data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true">
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img b-radius">
                            <img src="{{ asset('assets/img/main-banner/evsk-services-1.jpg') }}" alt="Team" />
                        </div>

                        <div class="service-list-box-center">
                            <h3 class="team-title1">Vehicle Insurance</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img b-radius">
                            <img src="{{ asset('assets/img/main-banner/evsk-services-2.jpg') }}" alt="Team" />
                        </div>
                        <div class="service-list-box-center">
                            <h3 class="team-title1">Driver on Call</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img b-radius">
                            <img src="{{ asset('assets/img/main-banner/evsk-services-3.jpg') }}" alt="Team" />
                        </div>
                        <div class="service-list-box-center">
                            <h3 class="team-title1">FASTag</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img b-radius">
                            <img src="{{ asset('assets/img/main-banner/evsk-services-4.jpg') }}" alt="Team" />
                        </div>
                        <div class="service-list-box-center">
                            <h3 class="team-title1">Vehicle Pollution Check</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img b-radius">
                            <img src="{{ asset('assets/img/main-banner/evsk-services-5.jpg') }}" alt="Team" />
                        </div>
                        <div class="service-list-box-center">
                            <h3 class="team-title1">Roadside Assistance</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-grid wow fadeInUp">
                        <div class="team-img b-radius">
                            <img src="{{ asset('assets/img/main-banner/evsk-services-6.jpg') }}" alt="Team" />
                        </div>
                        <div class="service-list-box-center">
                            <h3 class="team-title1">Waterless Car Wash</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">OUR GALLERY <span class="double-line"></span></span>
                <h2 class="sec-title">Gallery of eVSK</h2>
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
