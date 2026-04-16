@extends('layouts.app')
@section('style')
@endsection

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/main-banner/Latest-Blog-eVAHAN-banner.webp') }}" data-overlay="title"
        data-opacity="2">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Latest Blog eVAHAN</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Blog</li>
            </ul>
        </div>
    </div>

    <section class="th-blog-wrapper space-top space-extra-bottom">
        <div class="container th-container">
            <div class="row gy-4">

                @foreach ($getRecord as $value)
                    <div class="col-lg-6 col-xl-4">
                        <div class="th-blog blog-single has-post-thumbnail">
                            <div class="blog-imgs" style="margin: 0 0 30px 0;">
                                <a href="{{ url($value->slug) }}"><img src="{{ $value->getImage() }}"
                                        alt="Blog Image" /></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="{{ url('#') }}"><i class="fas fa-user-circle"></i>{{ $value->user_name }}</a>
                                    <a href="{{ url('#') }}"><i class="fas fa-calendar-alt"></i>{{ date('d-m-Y', strtotime($value->created_at)) }}</a>
                                    <a href="{{ url('#') }}"><i class="fas fa-tags"></i>{{ $value->category_title }}</a>
                                </div>
                                <h2 class="blog-title">
                                    <a href="{{ url($value->slug) }}">{!! strip_tags(Str::substr($value->title,0,67)) !!}</a>
                                </h2>
                                <p>
                                    {!! strip_tags(Str::substr($value->description,0,170)) !!}.....
                                </p>
                                {{-- <a href="{{ url($value->slug) }}" class="th-btn">Read Details</a> --}}
                               
                            </div>
                            <div class="blog-page-card-btn">
                                <a href="{{ url($value->slug) }}" class="th-btn">Read Details</a> 
                            </div>
                        </div>
                    </div>
                @endforeach


                <div class="th-pagination text-center">
                    {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                    {{-- <ul>
                        <li><a href="{{ url('#') }}">1</a></li>
                        <li><a href="{{ url('#') }}">2</a></li>
                        <li><a href="{{ url('#') }}">3</a></li>
                        <li>
                            <a href="{{ url('#') }}"><i class="far fa-arrow-right"></i></a>
                        </li>
                    </ul> --}}
                </div>
            </div>
           
        </div>
    </section>
@endsection

@section('script')
@endsection
