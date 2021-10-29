@extends('layout.app')
@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url({{ asset('frontend/img/bg/background.jpg') }});">
        <div class="container">
            <h2>Course</h2>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="{{ url('index') }}">Home</a> <span><i class="fa fa-angle-double-right"></i>Course</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="course-area bg-img pt-130">
     @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
    <div class="container">
        <div class="section-title mb-75 course-mrg-small">
            <h2> <span>All Courses</h2>

        </div>
        <div class="course-slider-active-3">
            @foreach ($course as $courses)
 <div class="single-course">
                <div class="course-img">
                    <a href="{{ url('course_details/'.$courses->id)}}"><img class="animated" src="{{ asset('uploads/files/'.$courses->imglink) }}" alt=""></a>

                </div>
                <div class="course-content">
                    <h4><a href="{{ url('course_details/'.$courses->id)}}">{{ $courses->name }}</a></h4>

                </div>
                <div class="course-position-content">
                    <div class="credit-duration-wrap">

                        <div class="sin-credit-duration">
                            <i class="fa fa-clock-o"></i>
                            <span>Duration: {{ $courses->duration }}</span>
                        </div>
                    </div>
                    <div class="course-btn">
                        <a class="default-btn" href="{{ url('course_details/'.$courses->id)}}">APPLY NOW</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    {{ $course->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
