@extends('layouts.app')
@section('style')
@endsection

@section('content')

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/main-banner/Special-Projects-new.jpg') }}" data-overlay="title"
        data-opacity="2">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Special Projects</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Special Projects</li>
            </ul>
        </div>
    </div>

    <section class="mt-50 mb-50" id="about-sec">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Start Early Campaign<span class="double-line"></span></span>
                <h2 class="sec-title">Drive Your Future, Shape Your Destiny</h2>
                {{-- <p class="px-30p">
                    Self-Employment Workshops in association with State governments are
                    organise at various District Employment Offices to appraise the
                    youth about opportunities in automobile sector.
                </p> --}}
                <br />
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pe-xl-5 mb-5 mb-lg-0">
                    <div class="th-video wow fadeInLeft">
                        <img class="w-100" src="{{ asset('assets/img/main-banner/Start-Early-Campaign-01.webp') }}" alt="about" />
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight pe-sm-5">
                    <h4 class="mt-n3">Opportunity Knocks:</h4>
                    <p class="pra-text mb-4">
                        India's automotive sector is accelerating at an unprecedented pace, with over 34 crore registered vehicles dominating
                        our roads. Each year witnesses an influx of approximately 2 crore new vehicles, propelling India to become the
                        fifth-largest auto market globally in 2020. As the nation gears up for significant growth, projections estimate a
                        staggering 315 million on-road vehicles by 2030. The road ahead is paved with opportunities, and the time to seize them
                        is now.
                    </p>
                    <h4 class="mt-n3">The Automotive Landscape:</h4>
                    <p class="pra-text mb-4">
                        In response to the Supreme Court's directives, the Ministry of Road Transport and Highways (MORTH) has taken significant
                        steps to enhance compliance with Pollution Under Control (PUC) certification. The conversion of offline PUC centres to
                        online, completed nationwide in 2019, is a testament to the government's commitment. A recent communication from MORTH,
                        dated July 22, 2021, urges state transport departments to mandate PUC centres at all fuel stations, further fortifying
                        the drive for vehicular pollution control.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <section class="mt-50 mb-50" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 wow fadeInRight pe-sm-5">
                    <h4 class="mt-n3">Why Start Early:</h4>
                    <p class="pra-text mb-4">
                        Embarking on an entrepreneurial journey in the automobile sector can be the key to unlocking your dreams. The START
                        EARLY campaign encourages young minds to take the wheel of their destiny early on. By starting your venture sooner,
                        you
                        not only align with industry growth but also set the wheels in motion for achieving your life goals well within
                        time.
                    </p>

                    <h4 class="mt-n3">Key Features of START EARLY Program:</h4>

                    <div>
                        <ul class="list-line">
                            <li>
                                <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span
                                    style="font-weight: 600;">Up to 95% Funding: We understand the financial challenges that budding entrepreneurs face. To catalyse your dreams, we
                                    offer up to 95% funding on the total startup investment, ensuring you have the financial backing needed to kickstart
                                    your venture.</span>
                            </li>
                            <li>
                                <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span style="font-weight: 600;">Up to 35% Subsidy: Lighten the financial load with our generous subsidy program, offering up to 35% subsidy on the
                                funded amount. This enables you to focus on building and growing your business without being burdened by excessive
                                financial constraints.</span>
                            </li>
                            <li>
                                <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span
                                    style="font-weight: 600;">Supreme Court and Government Compliance: Our initiative adheres to the directives of the Supreme Court and aligns with
                                    the guidelines set by the Government of India. This ensures not only legal compliance but also the endorsement of your
                                    venture by the highest authorities.</span>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-5 pe-xl-5 mb-5 mb-lg-0">
                    <div class="th-video wow fadeInLeft">
                        <img class="w-100" src="{{ asset('assets/img/main-banner/Start-Early-Campaign-02.webp') }}" alt="about" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-50 mb-50" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 wow fadeInRight pe-sm-5">

                    <h4 class="mt-n3">Key Drivers to This Business:</h4>

                    <div>
                        <ul class="list-line">
                            <li>
                                <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span style="font-weight: 600;">Implementation of PUC Certification in Vahan Portal: Streamlining the PUC certification process through the Vahan Portal
                                ensures efficiency and ease of compliance.</span>
                            </li>
                            <li>
                                <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span style="font-weight: 600;">Direct Intervention of Supreme Court: The Supreme Court's involvement lends credibility and authority to our initiative,
                                emphasizing the importance of environmental responsibility.</span>
                            </li>
                            <li>
                                <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span
                                    style="font-weight: 600;">Heavy Fines on Non-Compliance: Stringent fines via eCHALLAN for non-compliance with PUC norms act as a deterrent,
                                    ensuring businesses prioritize environmental responsibility. </span>
                            </li>
                            <li>
                                <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span style="font-weight: 600;">Compliance for MORTH Notification: Our program emphasizes adherence to the Ministry of Road Transport and Highways
                                (MORTH) notification, positioning your venture within the legal framework.</span>
                            </li>
                            <li>
                                <i class="fa-thin fa-caret-right size-icon pr-10"></i> <span style="font-weight: 600;">Government's Focused Initiatives: Aligned with the government's initiatives to address vehicular pollution, our campaign
                                ensures your contribution to a cleaner and sustainable future.</span>
                            </li>
                        </ul>
                    </div>
                    <br />
                    <h4 class="mt-n3">Target Audience:</h4>
                    <p class="pra-text mb-4">
                        Our campaign is tailored for Indian domiciles, aged 18 and above, with educational qualifications ranging from 10+2 to a
                        degree or diploma in Mechanical Engineering or equivalent. Join us as we accelerate towards a future of entrepreneurial
                        success and environmental responsibility.
                        <br/>
                        Ignite your passion, start early, and drive towards a future where your dreams become reality. The road to success is
                        waiting—are you ready to take the wheel? Join the START EARLY campaign and be the architect of your destiny.
                    </p>

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
                                        Select Services
                                    </option>
                                    <option value="Start Early Campaign">Start Early Campaign</option>
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
