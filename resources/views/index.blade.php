@extends('layout.app')
@section('content')
<div class="slider-area">
    <div class="slider-active owl-carousel">
        @foreach ($sliders as $slider)
 <div class="single-slider slider-height-1 bg-img" style="background-image:url({{ asset('uploads/files/'.$slider->img_link) }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-7 col-12 col-sm-12">
                        <div class="slider-content slider-animated-1 pt-230">
                            <h1 class="animated">{{ $slider->header }}</h1>
                            <p class="animated">{{ $slider->text }}</p>
                            <div class="slider-btn">
                                <a class="animated default-btn btn-green-color" href="{{ $slider->btnlink }}">{{ $slider->btn }}</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-single-img slider-animated-1">
                    <img class="animated" src="{{ asset('uploads/files/'.$slider->img_link) }}" alt="">
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>


<div class="about-us pt-130 pb-130">
    <div class="container">
        @foreach ($sites as $site)
        @if ($site->site_key=='welcome')
 <div class="row">

            <div class="col-lg-6 col-md-6">
                <div class="about-img default-overlay">
                    <img src="{{ asset('uploads/files/'.$site->imglink)  }}" alt="">
                    <a class="video-btn video-popup" href="https://www.youtube.com/watch?v=Knyh8cm4kJU">
                        <img class="animated" src="{{ asset('uploads/files/'.$site->imglink)  }}" alt="">
                    </a>
                </div>
            </div>
                    <div class="col-lg-6 col-md-6">
                <div class="about-content">
                    <div class="section-title section-title-green mb-30">
                        <h2>{{ $site->site_name }}</h2>
                        <p>{{ $site->site_value }}</p>
                    </div>


                </div>
            </div>
        </div>
        @endif

@endforeach

    </div>
</div>
<div class="about-us bg-img pt-130 pb-130" style="background-image:url(assets/img/grey.png);">
    <div class="container">
        @foreach ($sites as $site)
        @if ($site->site_key=='chooseus')
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
                    <a class="video-btn video-popup" href="https://www.youtube.com/watch?v=Knyh8cm4kJU">
                        <img class="animated" src="{{ asset('uploads/files/'.$site->imglink) }}" alt="">
                    </a>
                </div>
            </div>
        </div>
        @endif

        @endforeach

    </div>
</div>
<div class="event-area  default-overlay pt-130 pb-130" >
    <div class="container">
        <div class="section-title mb-75">
            <h2><span>Our</span> Event</h2>

        </div>
        <div class="event-active owl-carousel nav-style-1">
        @foreach ($events as $event)
  <div class="single-event event-white-bg">
                <div class="event-img">
                    <a href="{{ url('event_details/'.$event->id)}}"><img src="{{ asset('uploads/files/'.$event->img_link) }}" alt=""></a>
                    <div class="event-date-wrap">
                        <span class="event-date">{{ $event->date }}</span>

                    </div>
                </div>
                <div class="event-content">
                    <h3><a href="{{ url('event_details/'.$event->id)}}">{{ $event->tittle }}</a></h3>

                    <div class="event-meta-wrap">
                        <div class="event-meta">
                            <i class="fa fa-location-arrow"></i>
                            <span>{{ $event->address }}</span>
                        </div>
                        <div class="event-meta">
                            <i class="fa fa-clock-o"></i>
                            <span>{{ $event->time }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>


     <div class="fun-fact-area bg-img pt-130 pb-100" style="background-image:url({{ asset('frontend/img/grey.png') }});">
    <div class="container">
        <div class="section-title-3 section-shape-hm2-2 white-text text-center mb-100">
            <h2><span>Our</span> Achievment</h2>

        </div>
        <div class="row">
             @foreach ($sites as $site)
        @if ($site->site_key=='achievmenmt')
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-one count-white">
                    <div class="count-img">
                        <img src="{{ asset('uploads/files'.$site->imglink) }}" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">{{ $site->site_value }}</h2>
                        <span>{{ $site->site_name }}</span>
                    </div>
                </div>
            </div>
            @endif
            @endforeach

        </div>
    </div>
</div>

<div class="achievement-area pt-130 pb-115">
    <div class="container">
        <div class="section-title mb-75">
            <h2>What <span>People Say</span></h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
        </div>
        <div class="testimonial-slider-wrap mt-45">
            <div class="testimonial-text-slider">
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="assets/img/testimonial/student1.jpg">
                    </div>
                   <div class="row no-gutters">
                       <div class="ml-auto col-lg-6 col-md-6">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/testi.png);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit </p>
                                <div class="testi-info">
                                   <h5>AYESHA HOQUE</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
                <div class="testi-content-wrap">
                   <div class="testi-big-img">
                        <img alt="" src="assets/img/testimonial/testi-b3.jpg">
                    </div>
                   <div class="row no-gutters">
                        <div class="ml-auto col-lg-6 col-md-6">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/testi.png);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis</p>
                                <div class="testi-info">
                                   <h5>Tayeb Rayed</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="assets/img/testimonial/testi-b2.jpg">
                    </div>
                   <div class="row no-gutters">
                        <div class="ml-auto col-lg-6 col-md-6">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/testi.png);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui. Sed ut perspiciatis unde omnis iste natus error sit </p>
                                <div class="testi-info">
                                   <h5>Robiul siddikee</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                           </div>
                        </div>
                   </div>
                </div>
                <div class="testi-content-wrap">
                   <div class="testi-big-img">
                        <img alt="" src="assets/img/testimonial/testi-b2.jpg">
                    </div>
                    <div class="row no-gutters">
                       <div class="ml-auto col-lg-6 col-md-6">
                           <div class="testi-content bg-img default-overlay" style="background-image:url(assets/img/bg/testi.png);">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit </p>
                                <div class="testi-info">
                                   <h5>Modhu Dada</h5>
                                   <span>Students Of AMMT Department</span>
                                </div>
                                <div class="quote-style quote-right">
                                   <i class="fa fa-quote-right"></i>
                                </div>
                                <div class="testi-arrow">
                                    <img alt="" src="assets/img/icon-img/testi-icon.png">
                                </div>
                           </div>
                       </div>
                   </div>
                </div>
            </div>
            <div class="testimonial-image-slider">
                <div class="sin-testi-image">
                    <img src="assets/img/bg/teacher.jpg" alt="">
                </div>
                <div class="sin-testi-image">
                    <img src="assets/img/bg/teacher.jpg" alt="">
                </div>
                <div class="sin-testi-image">
                    <img src="assets/img/bg/teacher.jpg" alt="">
                </div>
                <div class="sin-testi-image">
                    <img src="assets/img/bg/teacher.jpg" alt="">
                </div>
            </div>
        </div>

    </div>
</div>




@endsection
