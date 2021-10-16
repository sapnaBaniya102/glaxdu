@extends('layout.app')
@section('content')

<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url({{ asset('frontend/img/bg/background.jpg') }});">
        <div class="container">
            <h2>Event </h2>
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

<div class="row">

    <div class="col-md-9 col-sm-12">

        <div class="event-area pt-130 pb-130">
            <div class="container">
                <div class="row">
                    @foreach ($Events as $event)
  <div class="col-lg-4 col-md-6">
                        <div class="single-event mb-55 event-gray-bg">
                            <div class="event-img">
                                <a href="{{ url('event_details/'.$event->id)}}"><img src="{{ asset('uploads/files/'.$event->img_link) }}" alt=""></a>
                                <div class="event-date-wrap" >
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
                    </div>
                    @endforeach


                </div>
                <div class="pro-pagination-style text-center mt-25">
                    <ul>
                        <li><a class="prev" href="#"><i class="fa fa-angle-double-left"></i></a></li>
                        <li><a class="active" href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a class="next" href="#"><i class="fa fa-angle-double-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
         <div class="sidebar-search mb-40 m-5">
                            <div class="sidebar-title mb-40">
                                <h4>Search</h4>
                            </div>
                            <form>
                                <input type="text" placeholder="Search">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
        </div>
    </div>
</div>

@endsection
