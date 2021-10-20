@extends('layout.app')
@section('content')

<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url({{ asset('frontend/img/bg/background.jpg') }});">
        <div class="container">
            <h2>News </h2>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Events</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <div class="row">
                    @foreach ($newses as $news)
 <div class="col-lg-6 col-md-6">
                            <div class="single-event mb-55 event-gray-bg">
                                <div class="event-img">
                                    <a href="{{ url('news_details/'.$news->id) }}"><img src="{{ asset('uploads/files/'.$news->imglink) }}" alt=""></a>
                                </div>
                                <div class="event-content">
                                    <h3><a href="{{ url('news_details/'.$news->id) }}">{{ $news->title }}</a></h3>
                                    <p>{{ $news->text }}</p>
                                    <div class="event-meta-wrap">

                                        <div class="blog-date event-meta ">
                                                    <a href="blog-details.php"><i class="fa fa-calendar-o"></i>{{ $news->date }}</a>
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>


            <div class="col-md-3 ">

                <div class="sidebar-style">
                    <div class="sidebar-search mb-40">
                        <div class="sidebar-title mb-40">
                            <h4>Search</h4>
                        </div>
                        <form action="{{ route('newsSearch') }}" method="GET">
                            <input type="text" name="search" required/>
                            <button type="submit">Search</button>
                        </form>
                    </div>

                    <div class="sidebar-recent-post mb-35">
                        <div class="sidebar-title mb-40">
                            <h4>Recent Events</h4>
                        </div>
                        <div class="recent-post-wrap">
                            @foreach ($newses as $news)
 <div class="single-recent-post">
                                <div class="recent-post-img">
                                    <a href="{{ url('news_details/'.$news->id) }}"><img src="{{ asset('uploads/files/'.$news->imglink) }}" alt=""></a>
                                </div>
                                <div class="recent-post-content">
                                    <h5><a href="{{ url('news_details/'.$news->id) }}">{{ $news->title }}</a></h5>
                                    <span>{{ $news->category }}</span>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    {{ $newses->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
