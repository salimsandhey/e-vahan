<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    {{-- <title>{{ $title }}</title> --}}
    <title>{{ !empty($title) ? $title : '' }}</title>
    {{-- @if (!@empty($meta_title))
    <meta content="{{ $meta_title }}" name="meta_title" />
    @endif

    @if (!@empty($meta_description))
    <meta content="{{ $meta_description }}" name="meta_description" />
    @endif

    @if (!@empty($meta_keywords))
    <meta content="{{ $meta_keywords }}" name="meta_keywords" />
    @endif --}}
    <meta name="author" content="eVAHAN" />
    <meta name="title" content="eVAHAN Suvidha Kendra Service" />
    <meta name="description" content="eVAHAN Suvidha Kendra Service" />
    <meta name="keywords" content="eVAHAN Suvidha Kendra Service" />
    <meta name="google-site-verification" content="NYfZp0MixAQQrciRZsO4FY0WsprdxYHapwEqs41CTas" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicons/favicon.png') }}" rel="icon" type="image/png" />

    <link rel="canonical" hreflang="en-us" href="https://e-vahan.com/" />

    <link rel="preconnect" href="{{ url('https://fonts.googleapis.com') }}" />
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" crossorigin />
    <link
        href="{{ url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Radio+Canada:wght@300;400;500;600;700&display=swap') }}"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.datetimepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0GS2GK2RFX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-0GS2GK2RFX');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KLJFJ25V');
    </script>
    <!-- End Google Tag Manager -->

    @yield('style')

</head>

<body class="home4">


    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')


    <!-- WhatsApp Icon area start -->
    <div class="whatsapp-chat">
        <a target="_blank" href="https://wa.me/+919855955959?text=I'm%20interested%20in%20your%20eVAHAN%20Services">
            <img src="{{ asset('assets/img/icon-img/whatsapp-icon.png') }}" alt="whatsap-logo">
        </a>
    </div>
    <!-- WhatsApp Icon area end -->


    <!-- back to top area start -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="
                transition: stroke-dashoffset 10ms linear 0s;
                stroke-dasharray: 307.919, 307.919;
                stroke-dashoffset: 307.919;
              ">
            </path>
        </svg>
    </div>
    <!-- back to top area end -->


    <!-- Do not remove this --- Analytics Tracking code starts -->
    <script id="wf_anal"
        src="{{ url('https://crm.zohopublic.in/crm/WebFormAnalyticsServeServlet?rid=23c8fba577f8f39e82b5c3b0366379e274a8ba93d0e74e8ecef1dad8c07364ccd72c8688140b48746dbaf417d827f8b6gidfbf05b92d5c93ec9352cb928aada85cb5774c4d6bdf20775409025bc969e20b7gideb3d9e6ac08cc45d148a55823627b0945ca401999abce27b45775486e6e7a93bgide1df2ef131e4ae4a1ab544b4ccf8493dc40b74ac73b1c840cd3624b85d0c33c8&tw=5cd7564622b0db13d969e838199adf723bbbd7059265c5f56f21a734208aa682') }}">
    </script>
    <!-- Do not remove this --- Analytics Tracking code ends. -->


    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KLJFJ25V" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

</body>

</html>
