<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ url('') }}"><img src="{{ asset('assets/img/E-vahan-logo.webp') }}" alt="E-Vahan" /></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li>
                    <a href="{{ url('') }}">Home</a>
                </li>
                <li>
                    <a href="{{ url('about-evsk') }}">About eVSK</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ url('services') }}">Services</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('evahan-suvidha-kendra') }}">eVAHAN Suvidha Kendra (eVSK)</a>
                        </li>
                        <li>
                            <a href="{{ url('automatic-testing-system') }}">Automatic Testing System (ATS)</a>
                        </li>
                        <li>
                            <a href="{{ url('automatic-driving-training-centre') }}">Automatic Driving Training Centre (ADTC)</a>
                        </li>
                        <li>
                            <a href="{{ url('smart-traffic-parking-management-systems') }}">Smart Traffic & Parking Management (STPMS)</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('blog') }}">Blog</a>
                </li>
                <li><a href="{{ url('contact-us') }}">Contact</a></li>
                <li class="menu-item-has-children">
                    <a href="{{ url('/') }}">Pages</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('faq') }}">FAQ</a>
                        </li>
                        <li>
                            <a href="{{ url('gallery') }}">Gallery</a>
                        </li>
                        <li>
                            <a href="{{ url('special-projects') }}">Special Projects</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<header class="th-header header-layout5">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between align-items-center gy-2">
                <div class="col-auto">
                    <p class="header-notice">Welcome To eVAHAN</p>
                </div>
                <div class="col-auto">
                    <p class="header-notice">
                        <span class="social-title">Call Now: &nbsp;</span>
                        <a href="{{ url('tel:+919855955959') }}"><i class="fa-sharp fa-thin fa-phone-volume">&nbsp;</i>+91
                            9855955959</a>
                    </p>
                </div>
                <div class="col-auto d-none d-md-block">
                    <div class="header-social">
                        <span class="social-title">Follow Us:</span>
                        <a href="{{ url('https://www.facebook.com/people/VKARE-Retail-Ventures/100092564584872/') }}"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{ url('https://www.instagram.com/_evahan/') }}"><i class="fab fa-instagram"></i></a>
                        <a href="{{ url('https://www.youtube.com/@evahan5048') }}"><i class="fab fa-youtube"></i></a>
                        <a href="{{ url('https://twitter.com/e_VAHAN_') }}"><i class="fab fa-twitter"></i></a>
                        <a href="{{ url('https://www.linkedin.com/company/evahan/') }}"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container container-xxl">
                <div class="row gx-20 align-items-center justify-content-between">
                    <div class="col-6 col-sm-6 col-xl-2 col-xxl-3">
                        <div class="header-logo">
                            <a href="{{ url('') }}"><img src="{{ asset('assets/img/E-vahan-logo.webp') }}" alt="E-Vahan" /></a>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-xl-10 col-xxl-9">
                        <div class="row align-items-center">
                            <div class="col-sm-12 col-lg-12 col-xl-9 text-end">
                                <nav class="main-menu d-none d-xl-inline-block">
                                    <ul>
                                        <li>
                                            <a href="{{ url('') }}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('about-evsk') }}">About eVSK</a>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="{{ url('services') }}">Services</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="{{ url('evahan-suvidha-kendra') }}">eVAHAN Suvidha Kendra (eVSK)</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('automatic-testing-system') }}">Automatic Testing System (ATS)</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('automatic-driving-training-centre') }}">Automatic Driving Training Centre (ADTC)</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('smart-traffic-parking-management-systems') }}">Smart Traffic & Parking Management (STPMS)</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ url('blog') }}">Blog</a>
                                        </li>
                                        <li><a href="{{ url('contact-us') }}">Contact</a></li>
                                        <li class="menu-item-has-children">
                                            <a href="{{ url('/') }}">Pages</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="{{ url('faq') }}">FAQ</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('gallery') }}">Gallery</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('special-projects') }}">Special Projects</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <button type="button" class="th-menu-toggle d-inline-block d-xl-none">
                                    <i class="far fa-bars"></i>
                                </button>
                            </div>
                            <div class="col-xl-3 d-none d-xl-block flot-right">
                                <div class="header-button">
                                    <a href="{{ url('/') }}" class="th-btn">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
