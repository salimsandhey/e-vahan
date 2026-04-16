@extends('layouts.app')
@section('style')
@endsection

@section('content')

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/main-banner/Frequently-Asked-Question-banner.webp') }}" data-overlay="title"
        data-opacity="2">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Frequently Asked Question</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Faq</li>
            </ul>
        </div>
    </div>

    <div class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion-area accordion mb-30" id="faqAccordion">
                        <div class="accordion-card style4 active">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                    What services does eVAHAN Suvidha Kendra offer?
                                </button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        eVAHAN Suvidha Kendra provides a wide range of services, including driver on-call, Fastag installations, vehicle
                                        pollution checks, roadside assistance, waterless car wash, and vehicle insurance solutions.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card style4">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    How does the driver-on-call service work?
                                </button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="collapse-item-2"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Our driver-on-call service allows you to request a reliable driver to assist you with your transportation needs, whether
                                        for a night out, navigating unfamiliar roads, or running errands.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card style4">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    What are the benefits of using Fastag?
                                </button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="collapse-item-3"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Fastag offers seamless and cashless transactions at toll booths, eliminating the need for manual payments and reducing
                                        travel time by avoiding long queues.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card style4">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    How often should I get a vehicle pollution check?
                                </button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="collapse-item-4"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        It is recommended to get a vehicle pollution check done per your area's regulatory requirements. However, we advise our
                                        customers to schedule regular checks to ensure compliance with emission standards and minimize environmental impact.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card style4">
                            <div class="accordion-header" id="collapse-item-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    What types of roadside assistance does eVAHAN offer?
                                </button>
                            </div>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="collapse-item-5"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Our roadside assistance services include jump starts, tyre changes, fuel delivery, towing, and other emergency services
                                        to help you get back on the road quickly and safely in case of breakdowns or accidents.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card style4">
                            <div class="accordion-header" id="collapse-item-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                                    Can I renew my vehicle insurance through eVAHAN Suvidha Kendra?
                                </button>
                            </div>
                            <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="collapse-item-6"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Absolutely! We offer comprehensive vehicle insurance solutions, including policy renewals and claims assistance, to
                                        ensure you're adequately covered and prepared for any unforeseen circumstances.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card style4">
                            <div class="accordion-header" id="collapse-item-7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                                    Is ATS equipped to handle specialized vehicle tests like emission or brake testing?
                                </button>
                            </div>
                            <div id="collapse-7" class="accordion-collapse collapse" aria-labelledby="collapse-item-7"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Yes, ATS is equipped with specialized equipment and facilities to conduct a wide range of tests, including emission
                                        testing, brake testing, suspension testing, and more.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card style4">
                            <div class="accordion-header" id="collapse-item-8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8"
                                    aria-expanded="false" aria-controls="collapse-8">
                                    What types of vehicles can be tested at ATS?
                                </button>
                            </div>
                            <div id="collapse-8" class="accordion-collapse collapse" aria-labelledby="collapse-item-8"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Our ATS can test a wide range of vehicles, including cars, bikes, and SUVs. Please contact us if you have any specific
                                        questions about your vehicle's eligibility.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card style4">
                            <div class="accordion-header" id="collapse-item-9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9"
                                    aria-expanded="false" aria-controls="collapse-9">
                                    Are your services eco-friendly?
                                </button>
                            </div>
                            <div id="collapse-9" class="accordion-collapse collapse" aria-labelledby="collapse-item-9"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Yes, we are committed to being an eco-friendly company. We use waterless car wash technology, offer eco-friendly
                                        cleaning kits, and promote responsible vehicle maintenance practices.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card style4">
                            <div class="accordion-header" id="collapse-item-10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10"
                                    aria-expanded="false" aria-controls="collapse-10">
                                    Who can set up an ADTC?
                                </button>
                            </div>
                            <div id="collapse-10" class="accordion-collapse collapse" aria-labelledby="collapse-item-10"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        ADTCs are typically established by government authorities, large institutions, or organizations with the necessary
                                        infrastructure, resources, and expertise to provide accredited driving training services.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card style4">
                            <div class="accordion-header" id="collapse-item-11">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-11"
                                    aria-expanded="false" aria-controls="collapse-11">
                                    What are the benefits of enrolling in a driving course at an ADTC?
                                </button>
                            </div>
                            <div id="collapse-11" class="accordion-collapse collapse" aria-labelledby="collapse-item-11"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">
                                        Enrolling in a driving course at an ADTC offers several benefits, including professional instruction, access to modern
                                        training facilities and equipment, and the opportunity to obtain recognized certifications or licenses.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
