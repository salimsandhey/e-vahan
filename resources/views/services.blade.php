@extends('layouts.app')
@section('style')
@endsection

@section('content')

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/main-banner/About-Gallery-eVSK-new.jpg') }}" data-overlay="title"
        data-opacity="2">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">eVAHAN Services</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </div>

    <section class="space" id="service-sec">
        <div class="container">
            <div class="row gy-40">
                <div class="col-md-6 col-lg-4">
                    <div class="service-box wow fadeInUp">
                        <div class="service-box_img">
                            <a href="{{ url('evahan-suvidha-kendra') }}">
                                <img src="{{ asset('assets/img/main-banner/Frame 14 (1).png') }}" alt="service image" />
                            </a>
                        </div>
                        <div class="service-box_content">
                            <div class="service-box_icon">
                                <i class="fa-light fa-city"></i>
                            </div>
                            <h3 class="service-box_title">
                                <a href="{{ url('evahan-suvidha-kendra') }}">eVAHAN Suvidha Kendra</a>
                            </h3>
                            <p class="service-box_text">
                                eVAHAN Suvidha Kendra, we believe that taking care of your vehicle shouldn't be a hassle.....
                            </p>
                        </div>
                        <a href="{{ url('evahan-suvidha-kendra') }}" class="th-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-box wow fadeInDown">
                        <div class="service-box_img">
                            <a href="{{ url('automated-testing-system') }}">
                                <img src="{{ asset('assets/img/main-banner/Automated-Testing-System-project.png') }}" alt="service image" />
                            </a>
                        </div>
                        <div class="service-box_content">
                            <div class="service-box_icon">
                                <i class="fa-light fa-business-time"></i>
                            </div>
                            <h3 class="service-box_title">
                                <a href="{{ url('automated-testing-system') }}">Automated Testing System</a>
                            </h3>
                            <p class="service-box_text">
                                Our Automated Testing System (ATS) is your partner in ensuring your car meets safety......
                            </p>
                        </div>
                        <a href="{{ url('automated-testing-system') }}" class="th-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-box wow fadeInUp">
                        <div class="service-box_img">
                            <a href="{{ url('automatic-driving-training-centre') }}">
                                <img src="{{ asset('assets/img/main-banner/Accredited-driving-training-and-testing-centre-project.png') }}" alt="service image" />
                            </a>
                        </div>
                        <div class="service-box_content">
                            <div class="service-box_icon">
                                <i class="fa-light fa-house-laptop"></i>
                            </div>
                            <h3 class="service-box_title">
                                <a href="{{ url('automatic-driving-training-centre') }}">Accredited Driving Training and Testing Centre</a>
                            </h3>
                            <p class="service-box_text">
                                Our Accredited Driving Training and Testing Centre (ADTTC) is designed to equip you with the skills......
                            </p>
                        </div>
                        <a href="{{ url('automatic-driving-training-centre') }}" class="th-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-box wow fadeInDown">
                        <div class="service-box_img">
                            <a href="{{ url('smart-traffic-parking-management-systems') }}">
                                <img src="{{ asset('assets/img/main-banner/Parking.jpg') }}" alt="service image" />
                            </a>
                        </div>
                        <div class="service-box_content">
                            <div class="service-box_icon">
                                <i class="fa-light fa-traffic-light"></i>
                            </div>
                            <h3 class="service-box_title">
                                <a href="{{ url('smart-traffic-parking-management-systems') }}">Smart Traffic & Parking Management</a>
                            </h3>
                            <p class="service-box_text">
                                Smart Traffic and Parking Management Systems are intelligent, technology-enabled solutions......
                            </p>
                        </div>
                        <a href="{{ url('smart-traffic-parking-management-systems') }}" class="th-btn">Learn More <i class="fas fa-arrow-right"></i></a>
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
    </div>    <section class="space">
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



@endsection

@section('script')
@endsection
