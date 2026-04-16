@extends('layouts.app')
@section('style')
@endsection

@section('content')

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/main-banner/Frequently-Asked-Question-banner.webp') }}" data-overlay="title"
        data-opacity="2">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Shipping & Refund Policy</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Shipping & Refund Policy</li>
            </ul>
        </div>
    </div>

    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-12">
                    {{-- <h3 class="single-title">
                        eVAHAN Suvidha Kendra Service Shipping & Refund Policy
                    </h3> --}}
                    <div class="service-content">
                        <p class="mb-30 text-justify">
                            For International buyers, orders are shipped and delivered through registered international courier companies and/or
                            International speed post only. For domestic buyers, orders are shipped through registered domestic courier companies and
                            /or speed post only. Orders are shipped within 6-8 days or as per the delivery date agreed at the time of order
                            confirmation and delivering of the shipment subject to Courier Company / post office norms. VKARE RETAIL VENTURES
                            PRIVATE LIMITED is not liable for any delay in delivery by the courier company / postal authorities and only guarantees
                            to hand over the consignment to the courier company or postal authorities within 6-8 days from the date of the order and
                            payment or as per the delivery date agreed at the time of order confirmation. Delivery of all orders will be to the
                            address provided by the buyer. Delivery of our services will be confirmed on your mail ID as specified during
                            registration. For any issues in utilizing our services you may contact our helpdesk on 9855955959 or contact@e-vahan.com
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
@endsection
