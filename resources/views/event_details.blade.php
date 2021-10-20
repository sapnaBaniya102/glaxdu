@extends('layout.app')
@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url({{ asset('frontend/img/bg/background.jpg') }});">
        <div class="container">
            <h2>Event Details</h2>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Event Details</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="event-details-area pt-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="event-left-wrap mr-40">
                    <div class="event-description">
                        <div class="description-date-social mb-45">
                            <div class="description-date-time">
                                <div class="description-date">
                                    <span class="event-date">{{ $event_details->date }}</span>

                                </div>
                                <div class="description-meta-wrap">
                                    <div class="description-meta">
                                        <i class="fa fa-location-arrow"></i>
                                        <span>{{ $event_details->address }}</span>
                                    </div>
                                    <div class="description-meta">
                                        <i class="fa fa-clock-o"></i>
                                        <span>{{ $event_details->time }}</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <img src="{{ asset('uploads/files/'.$event_details->img_link) }}" alt="">
                        <h3>{{ $event_details->tittle }}</h3>
                        <p>{{ $event_details->details }}</p>
                        <div class="location-area mt-80">
                            <div id="location"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-style">


                    <div class="sidebar-recent-post mb-35">
                        <div class="sidebar-title mb-40">
                            <h4>Recent Events</h4>
                        </div>
                        <div class="recent-post-wrap">
                            @foreach ($event as $events)
   <div class="single-recent-post">
                                <div class="recent-post-img">
                                    <a href="#"><img src="{{ asset('uploads/files/'.$events->img_link) }}" alt=""></a>
                                </div>
                                <div class="recent-post-content">
                                    <h5><a href="#">{{ $events->tittle }}</a></h5>


                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
