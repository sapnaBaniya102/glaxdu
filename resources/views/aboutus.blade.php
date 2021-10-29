@extends('layout.app')
@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{ asset('frontend/img/bg/background.jpg') }});">
        <div class="container">
            <h2>About Us</h2>

        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="{{ url('index') }}">Home</a> <span><i class="fa fa-angle-double-right"></i> About Page</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="about-us pt-130 pb-130">
    <div class="container">
@foreach ($sites as $site)
        @if ($site->site_key=='introduction')
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about-content">
                    <div class="section-title section-title-green mb-30">
                        <h2>{{ $site->site_name }}</h2>
                        <p>{{ $site->site_value }}</p>
                    </div>


                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about-img default-overlay">
                    <img src="{{ asset('uploads/files/'.$site->imglink) }}" alt="">
                    <a class="video-btn video-popup" href="#">
                        <img class="animated" src="assets/img/icon-img/video.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        @endif
@endforeach
    </div>
</div>


<div class="achievement-area pt-130 pb-115">
    <div class="container">
        <div class="section-title mb-75">
            <h2>Objectives</span></h2>

        </div>
        <div class="testimonial-slider-wrap mt-45">
            <div class="testimonial-text-slider">
                @foreach ($sites as $site)
        @if ($site->site_key=='objective')
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="{{ asset('uploads/files/'.$site->imglink) }}">
                    </div>
                   <div class="row no-gutters">
                       <div class="ml-auto col-lg-6 col-md-6">
                           <div class="testi-content bg-img default-overlay" style="background-image:url({{ asset('uploads/files/'.$site->imglink) }});">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>{{ $site->site_value }}</p>



                           </div>
                       </div>
                   </div>
                </div>
                @endif
                @endforeach

            </div>

        </div>

    </div>
</div>
<div class="blog-event-area pt-130 pb-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title-3 mb-45 mrg-bottom-small">
                    <h2>Mission</h2>

                </div>
                <div class="event-active-2 ">
                    @foreach ($sites as $site)
@if ($site->site_key=='mission')
      <div class="single-event single-event-2">
                        <div class="event-img">
                            <a href="#"><img src="{{ asset('uploads/files/'.$site->imglink) }}" alt=""></a>

                        </div>
                        <div class="event-content">
                            <h3><a href="#">{{ $site->site_name }}</a></h3>
                            <p>{{ $site->site_value }}</p>
                            <div class="event-meta-wrap">

                            </div>
                        </div>
                    </div>
@endif
                    @endforeach

                </div>
            </div>
            <div class="col-lg-6">
                <div class="section-title-3 mb-45 ml-70">
                    <h2>Vision</h2>

                </div>

                <div class="event-active-2 ml-70">
                    @foreach ($sites as $site)
@if ($site->site_key=='vision')
                    <div class="single-event single-event-2">
                        <div class="event-img">
                            <a href="#"><img src="{{ asset('uploads/files/'.$site->imglink) }}" alt=""></a>

                        </div>
                        <div class="event-content">
                            <h3><a href="#">{{ $site->site_name }}</a></h3>
                            <p>{{ $site->site_value }}</p>
                            <div class="event-meta-wrap">

                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
