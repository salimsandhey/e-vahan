@extends('layouts.app')
@section('style')
@endsection

@section('content')

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/main-banner/Blog-new.jpg') }}" data-overlay="title"
        data-opacity="2">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">{{ $getRecord->title }}</h1>
            <ul class="breadcumb-menu">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Details</li>
            </ul>
        </div>
    </div>

    <section class="th-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-60">
                <div class="col-lg-8">
                    <div class="th-blog blog-single style2">
                        <div class="blog-img">
                            @if (!empty($getRecord->getImage()))
                            <img src="{{ $getRecord->getImage() }}" alt="Featured Blog Image" />
                            @endif

                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="{{ url('#') }}"><i class="fas fa-user"></i>{{ $getRecord->user_name }}</a>
                                <a href="{{ url('#') }}"><i class="far fa-calendar-alt"></i>{{ date('d-m-Y', strtotime($getRecord->created_at)) }}</a>
                                <a href="{{ url('#') }}"><i class="fas fa-tags"></i>{{ $getRecord->category_title }}</a>
                            </div>
                            {{-- <h2 class="blog-title">
                                {{ $getRecord->title }}
                            </h2> --}}

                            {!! $getRecord->description !!}

                            {{-- <blockquote class="blockquote-content">
                                <p>
                                    “IT IS A LONG FACT THAT A READER WILL BE DISTRACTED BY THE
                                    READABLE CONTENT OF A PAGE WHEN AT ITS LAYOUT.”
                                </p>
                                <cite class="block-cite">Michel Clarck</cite>
                            </blockquote> --}}


                        </div>
                        {{-- <div class="share-links clearfix style2">
                            <div class="row justify-content-between">
                                <div class="col-md-auto">
                                    @if (!empty($getRecord->getTag->count()))
                                        <span class="share-links-title">Tags:</span>
                                        <div class="tagcloud">
                                            @foreach ($getRecord->getTag as $tag)
                                                <a href="{{ url('#') }}">{{ $tag->name }}</a>
                                            @endforeach

                                        </div>
                                    @endif

                                </div>
                                <div class="col-md-auto text-xl-end">
                                    <span class="share-links-title">FOLLOW US:</span>
                                    <ul class="social-links">
                                        <li>
                                            <a href="{{ url('https://www.facebook.com/people/VKARE-Retail-Ventures/100092564584872/') }}" target="_blank"><i
                                                    class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{ url('https://www.instagram.com/vkareretailventures/') }}" target="_blank"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{ url('https://www.youtube.com/@evahan5048') }}" target="_blank"><i class="fab fa-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{ url('https://twitter.com/') }}" target="_blank"><i
                                                    class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="{{ url('https://linkedin.com/') }}" target="_blank"><i
                                                    class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="blog-author">
                            <div class="auhtor-img">
                                <img src="{{ asset('assets/img/blog/blog-author.jpg') }}" alt="Blog Author Image" />
                            </div>
                            <div class="media-body">
                                <h3 class="author-name">
                                    <a class="text-inherit" href="{{ url('#') }}">Michel Clarck</a>
                                </h3>
                                <p class="author-text">
                                    Optimize resource eveling innoation whereas visionary value.
                                    Compellingly engage extensible process with business process
                                    improvements.
                                </p>
                                <ul class="social-links">
                                    <li>
                                        <a href="{{ url('https://facebook.com/') }}" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ url('https://twitter.com/') }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ url('https://linkedin.com/') }}" target="_blank"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ url('https://instagram.com/') }}" target="_blank"><i
                                                class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}

                        {{-- <div class="blog-navigation style2">
                            <a href="{{ url('#') }}" class="nav-btn prev"><img src="{{ asset('assets/img/blog/blog-nav-3.jpg') }}"
                                    alt="blog img" class="nav-img" />
                                <span class="nav-text">Previous Post</span> </a><a href="{{ url('#') }}" class="blog-btn"><i
                                    class="fa-solid fa-grid"></i></a>
                            <a href="{{ url('#') }}" class="nav-btn next"><img src="{{ asset('assets/img/blog/blog-nav-4.jpg') }}"
                                    alt="blog img" class="nav-img" />
                                <span class="nav-text">Next Post</span></a>
                        </div> --}}

                        {{-- <div class="th-comment-form style2">
                            <div class="form-title">
                                <h3 class="blog-inner-title h3">Leave a Comment</h3>
                                <p class="form-text">
                                    Your email address will not be published. Required fields
                                    are marked *
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Your Name*" class="form-control" />
                                    <i class="fal fa-user"></i>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="text" placeholder="Your Email*" class="form-control" />
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="col-12 form-group">
                                    <input type="text" placeholder="Website" class="form-control" />
                                    <i class="fal fa-globe"></i>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea placeholder="Write a Comment*" class="form-control"></textarea>
                                    <i class="fal fa-pencil"></i>
                                </div>
                                <div class="col-12 form-group mb-0">
                                    <button class="th-btn">Post Comment</button>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4 ps-lg-2">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <form action="{{ url('blog') }}" method="GET" class="search-form">
                                <input name="q" type="text" placeholder="Search..." required />
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                @foreach ($getRecentPosts as $recent)
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ url($recent->slug) }}">
                                            @if (!empty($recent->getImage()))
                                            <img src="{{ $recent->getImage() }}" alt="Featured Blog Image" />
                                            @endif
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="{{ url('#') }}"><i class="fal fa-user-circle"></i>Vikram Jhanji</a>
                                            <a class="pl-20" href="{{ url('#') }}"><i class="fas fa-calendar-alt"></i>{{ date('d-m-Y',
                                                strtotime($recent->created_at)) }}</a>
                                        </div>
                                        <h4 class="post-title">
                                            <a class="text-inherit" href="{{ url($recent->slug) }}">{!!
                                                strip_tags(Str::substr($recent->title,0,55)) !!}...</a>
                                        </h4>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="widget widget_categories">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                               @foreach ($getCategory as $category)
                                    <li>
                                        <a href="{{ url('#') }}">{{ $category->title }}</a>
                                        <span class="badge badge-primry badge-pill">{{ $category->totalBlog() }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title"> Tags</h3>
                            @if (!empty($getRecord->getTag->count()))
                                <div class="tagcloud">
                                    @foreach ($getRecord->getTag as $tag)
                                    <a href="{{ url('blog?q='.$tag->name) }}">{{ $tag->name }}</a>
                                    @endforeach
                                </div>
                            @endif
                        </div>


                        <div class="widget">
                            <h3 class="widget_title">Related Posts</h3>
                            <div class="recent-post-wrap">
                                @foreach ($getRelatedPosts as $related)
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ url($related->slug) }}">
                                            @if (!empty($related->getImage()))
                                            <img src="{{ $related->getImage() }}" alt="Featured Blog Image" />
                                            @endif
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="{{ url('#') }}"><i class="fal fa-user-circle"></i>Vikram Jhanji</a>
                                            <a class="pl-20" href="{{ url('#') }}"><i class="fas fa-calendar-alt"></i>{{ date('d-m-Y',
                                                strtotime($related->created_at)) }}</a>
                                        </div>
                                        <h4 class="post-title">
                                            <a class="text-inherit" href="{{ url($related->slug) }}">{!!
                                                strip_tags(Str::substr($related->title,0,55)) !!}...</a>
                                        </h4>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="widget widget_offer style2">
                            <div class="offer-banner">
                                <div class="banner-logo">
                                    <div class="th-video01 wow fadeInLeft">
                                        <a href="{{ url('assets/video/about-evsk-video.mp4') }}" class="play-btn style2 popup-video"><i
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



@endsection

@section('script')
@endsection
