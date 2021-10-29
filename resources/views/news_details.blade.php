@extends('layout.app')
@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url({{ asset('frontend/img/bg/background.jpg') }});">
        <div class="container">
            <h2>News Details</h2>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="{{ url('index') }} ">Home</a> <span><i class="fa fa-angle-double-right"></i>News Details</span></li>
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
                                    <span class="event-date">{{ $news_details->date }}</span>

                                </div>

                            </div>

                        </div>
                        <img src="{{ asset('uploads/files/'.$news_details->imglink) }}" alt="">
                        <h3>{{ $news_details->title }}</h3>
                        <p>{{ $news_details->details }}</p>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-style">
                    <div class="sidebar-search mb-40">
                        <div class="sidebar-title mb-40">
                            <h4>Search</h4>
                        </div>
                        <form>
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                    <div class="sidebar-recent-post mb-35">
                        <div class="sidebar-title mb-40">
                            <h4>Recent News</h4>
                        </div>
                        <div class="recent-post-wrap">
                            @foreach ($newses as $news)
 <div class="single-recent-post">
                                <div class="recent-post-img">
                                    <a href="#"><img src="{{ asset('uploads/files/'.$news->imglink) }}" alt=""></a>
                                </div>
                                <div class="recent-post-content">
                                    <h5><a href="#">{{ $news->title }}</a></h5>
                                    <span>{{ $news->category }}</span>
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
