@extends('layouts.app')
@section('style')
@endsection

@section('content')

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/main-banner/Services-banner.webp') }}" data-overlay="title"
        data-opacity="2">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">eVAHAN Suvidha Kendra (eVSK)</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>eVSK</li>
            </ul>
        </div>
    </div>

    <section class="space-top">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-8">
                    <img class="w-100" src="{{ asset('assets/img/main-banner/eVSK-Service-Image.webp') }}" alt="Service Image" />
                    <h3 class="single-title">
                        About eVAHAN Suvidha Kendra (eVSK)
                    </h3>
                    <div class="service-content">
                        <p class="mb-20 text-justify">
                            Welcome to eVAHAN Suvidha Kendra (eVSK), a powerful opportunity for ambitious youngsters like you, who want to start your own business but don't have huge capital to invest. The best part is this golden opportunity project is backed by Government-supported initiative. These eVSK’s can be set up at petrol pumps or shops. These kendras are service points for essential vehicle-related needs like pollution checks, fitness tests of vehicles, and other necessary documentation.
                        </p>
                    </div>

                    <h4 class="single-title">
                        Our Approach:
                    </h4>
                    <div class="service-content">
                        <p class="mb-20 text-justify">
                            At eVSK, our approach is built around a sense of responsibility, simplicity, and sustainability. Our agenda is to solve the two major problems: Lack of Employment Opportunities and Imbalanced Economy. We provide the support, setup, and systems you need to start and grow your centre with confidence. Using smart technology, these centres keep track of vehicle data and ensure timely checks, making the process smooth for both you and your customers.
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
                                        <a href="https://www.youtube.com/watch?v=iox_jfMV9Hk" class="play-btn style2 popup-video"><i
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

    <section class="space overflow-hidden" id="service-sec" data-bg-src="{{ asset('assets/img/bg/service_bg_1.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-10 pb-20">
                    <div class="title-area text-center">
                        <h2 class="sec-title">eVAHAN Suvidha Kendra Services</h2>
                        <p class="sec-text">
                            At eVAHAN Suvidha Kendra, we're not just about providing services; we're committed to making a positive impact on the
                            environment and leveraging technology for the benefit of our customers. The 'e' in eVAHAN symbolizes our dedication to
                            eco-friendliness and electronic innovation. This ethos is ingrained in everything we do, from our service offerings to
                            our meticulously designed processes.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row slider-shadow th-carousel" data-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2"
                data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true">
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="service-block01 shadow wow fadeInUp">
                        <div class="service-block_content ">
                            <div class="service-process_num">01</div>
                            <h5 class="service-process_title">PUC Certificate</h5>
                            <p class="service-process_text01">
                                Stay compliant with regulatory standards and reduce your environmental footprint with our hassle-free pollution check
                                service. We'll ensure that your vehicle meets emission requirements without any unnecessary delays.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="service-block01 shadow wow fadeInUp">
                        <div class="service-block_content ">
                            <div class="service-process_num">02</div>
                            <h5 class="service-process_title">Vehicle Insurance</h5>
                            <p class="service-process_text01">
                                Protect your investment and safeguard your peace of mind with our comprehensive vehicle insurance services. From policy
                                renewals to claims assistance, we're here to ensure that you're covered every step of the way.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="service-block01 shadow wow fadeInUp">
                        <div class="service-block_content ">
                            <div class="service-process_num">03</div>
                            <h5 class="service-process_title">FasTag</h5>
                            <p class="service-process_text01">
                                Say goodbye to long queues and manual toll payments. With our Fastag service, enjoy seamless and cashless transactions
                                as you breeze through toll booths with ease.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="service-block01 shadow wow fadeInUp">
                        <div class="service-block_content ">
                            <div class="service-process_num">04</div>
                            <h5 class="service-process_title">E-Challan</h5>
                            <p class="service-process_text01">
                                Experience hassle-free traffic enforcement with our E-challan service. Our electronic system ensures swift and efficient
                                processing for traffic violations or fines, promoting road safety and compliance.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="service-block01 shadow wow fadeInUp">
                        <div class="service-block_content ">
                            <div class="service-process_num">05</div>
                            <h5 class="service-process_title">Vehicle Fitness Check</h5>
                            <p class="service-process_text01">
                                Ensure your vehicle's safety with our fitness check service. Our experienced technicians conduct thorough inspections to
                                assess crucial safety and performance parameters, providing you with peace of mind and confidence on the road.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="service-block01 shadow wow fadeInUp">
                        <div class="service-block_content ">
                            <div class="service-process_num">06</div>
                            <h5 class="service-process_title">Roadside Assistance</h5>
                            <p class="service-process_text01">
                                Unexpected breakdowns or emergencies on the road can be stressful. That's where our roadside assistance team comes in.
                                Whether you need a jump start, tyre change, or towing services, we'll be there to lend a helping hand.
                            </p>
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
                <h2 class="sec-title">eVAHAN Suvidha Kendra Gallery</h2>
                <br />
            </div>
            <div class="row slider-shadow th-carousel home-project-carousel gallery-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2"
                data-sm-slide-show="2" data-xs-slide-show="1" data-arrows="true">
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

@endsection

@section('script')
@endsection
