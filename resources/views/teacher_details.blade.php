@extends('layout.app')
@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url({{ asset('frontend/img/bg/background.jpg') }});">
        <div class="container">
            <h2>Teacher Details</h2>

        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Teacher Details</span></li>
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

                        <img src="{{ asset('uploads/files/'.$teacher_detail->img_link) }}" alt="">
                        <h3>{{ $teacher_detail->name }}</h3>
                        <p>{{ $teacher_detail->details }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-style">




                    <div class="sidebar-recent-course-wrap ">
                        <div class="sidebar-title mb-30  ">
                            <h4>My Courses</h4>
                        </div>

                        <div class="sidebar-recent-course">
                             @foreach ($courses as $course)
                            <div class="sin-sidebar-recent-course">
                                <div class="sidebar-recent-course-img">
                                    <a href="{{ url('course_details/'.$course->id)}}"><img src="{{ asset('uploads/files/'.$course->imglink) }}" alt=""></a>
                                </div>
                                <div class="sidebar-recent-course-content">
                                    <h4><a href="#">{{ Illuminate\Support\Str::words($course->name, 3, '...') }}</a></h4>
                                    <ul>

                                        <li class="duration-color">Duration :{{ $course->duration }}</li>
                                    </ul>

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
<br><br><br>
@endsection
