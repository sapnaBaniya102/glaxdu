@extends('layout.app')
@section('content')

<!-- Hero Slider -->
<div id="home" class="hero-slider owl-carousel owl-theme">
    @foreach ($sliders as $slider)
    <div class="single-hs-item item-bg1" style="background-image:url({{ asset('uploads/files/'.$slider->img_link) }});">
        <div class="d-table">
            <div class="d-tablecell">
                <div class="hero-text">
                    <h1>{{ $slider->header }}</h1>
                    <p>L{{ $slider->text }}</p>
                    <div class="slider-btn">
                    <a href="{{ $slider->btnlink }}" class="custom-btn1">{{ $slider->btn }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
<!-- End Hero Slider -->


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
                    <a href="{{ url('event_details/'.$event->id)}}"><img src="{{ asset('uploads/files/'.$event->img_link) }}" alt="" style="width:50; height:200px"></a>
                    <div class="event-date-wrap">
                        <span class="event-date">{{ $event->date }}</span>

                    </div>
                </div>
                <div class="event-content">
                    <h3><a href="{{ url('event_details/'.$event->id)}}">{{ Illuminate\Support\Str::words($event->tittle, 5, '...')  }}</a></h3>

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





@endsection
