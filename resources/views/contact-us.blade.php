@extends('layouts.app')
@section('style')
@endsection

@section('content')

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/main-banner/Contact-Us-banner.webp') }}" data-overlay="title"
        data-opacity="2">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Contact</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>


    <section class="space position-relative">
        <div class="container">
            <div class="contact-form-wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="map-sec">
                            <iframe
                                src="{{ url('https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6860.008707860569!2d76.703376!3d30.718278!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fefeebb82eded%3A0xc90f2716eb484223!2sVKARE%20Retail%20Ventures%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1707462264769!5m2!1sen!2sin') }}"
                                allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <form action="{{ route('contact.submit') }}" method="POST" class="contact-form ajax-contact" enctype="multipart/form-data" >
                           {{ csrf_field() }}
                            <div class="title-area mb-30 text-center text-lg-start">
                                <h2 class="sec-title">
                                    Want To Explore <span class="text-theme">Our Services Further?</span> Fill Out The Form!
                                </h2>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Enter Your Name" required/>
                                    <i class="fal fa-user"></i>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Email Address" required />
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="number" class="form-control" name="phone"
                                        placeholder="Phone Number" required />
                                    <i class="fa-light fa-phone"></i>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="location"
                                        placeholder="Enter Address" required />
                                    <i class="fa-sharp fa-light fa-location-dot"></i>
                                </div>
                                <div class="form-group col-12">
                                    <select class="form-select nice-select" name="selected_value" >
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
                                    <textarea name="message" cols="30" rows="3" class="form-control"
                                        placeholder="Message" required></textarea>
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
    </section>

    <section class="space" id="contact-sec">
        <div class="container">
            <div class="tab-content">
                <div class="tab-pane fade show active">
                    <div class="row gy-30 justify-content-center">
                        <div class="col-md-6 col-lg-4">
                            <div class="contact-box">
                                <div class="contact-box_content">
                                    <div class="contact-box_icon">
                                        <i class="fa-thin fa-phone-office"></i>
                                    </div>
                                    <div class="contact-box_info">
                                        <p class="contact-box_text">Call Us 24/7</p>
                                        <h5 class="contact-box_link">
                                            <a href="{{ url('tel:01724625959') }}">01724625959</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="contact-box">
                                <div class="contact-box_content">
                                    <div class="contact-box_icon">
                                        <i class="fa-sharp fa-thin fa-phone-volume"></i>
                                    </div>
                                    <div class="contact-box_info">
                                        <p class="contact-box_text">Call Now</p>
                                        <h5 class="contact-box_link">
                                            <a href="{{ url('tel:+919855955959') }}">+91 9855955959</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="contact-box">
                                <div class="contact-box_content">
                                    <div class="contact-box_icon">
                                        <i class="fa-thin fa-envelopes"></i>
                                    </div>
                                    <div class="contact-box_info">
                                        <p class="contact-box_text">Email Address</p>
                                        <h5 class="contact-box_link">
                                            <a href="{{ url('mailto:contact@e-vahan.com') }}">contact@e-vahan.com</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="contact-box">
                                <div class="contact-box_content">
                                    <div class="contact-box_icon">
                                        <i class="fa-sharp fa-thin fa-location-dot"></i>
                                    </div>
                                    <div class="contact-box_info">
                                        <p class="contact-box_text">Corporate Office Address</p>
                                        <h5 class="contact-box_link">
                                            G-04, Ground Floor, D-141 Industrial Area, Phase 7, Sector 73, S.A.S. Nagar, Mohali-160055(Punjab) INDIA
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="contact-box">
                                <div class="contact-box_content">
                                    <div class="contact-box_icon">
                                        <i class="fa-sharp fa-thin fa-map-location-dot"></i>
                                    </div>
                                    <div class="contact-box_info">
                                        <p class="contact-box_text">Registered Office Address</p>
                                        <h5 class="contact-box_link">
                                            Nehru Garden Road, Jalandhar, Punjab-144001
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
@endsection
