@extends('layout.app')
@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url({{ asset('frontend/img/bg/background.jpg') }});">
        <div class="container">
            <h2>Course details</h2>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="{{ url('index') }}">Home</a> <span><i class="fa fa-angle-double-right"></i>Course details</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="course-details-area pt-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="course-left-wrap mr-40">
                    <div class="apply-area">
                        <img src="{{ asset('uploads/files/'.$course_detail->imglink) }}" alt="">
                        <div class="course-apply-btn">
                            <a href="#" class="default-btn">APPLY NOW</a>
                        </div>
                    </div>
                    <div class="course-tab-list nav pt-40 pb-25 mb-35">
                        <a class="active" href="#course-details-1" data-toggle="tab" >
                            <h4>Over View  </h4>
                        </a>

                    </div>
                    <div class="tab-content jump">
                        <div class="tab-pane active" id="course-details-1">
                            <div class="over-view-content">
                                <h4>COURSE  DETAILS</h4>
                                <h5>Course Name : {{ $course_detail->name }}</h5>
                                <p>{{ $course_detail->text }}</p>
                                <div class="over-view-list">

                                </div>
                                <div class="course-details-img">
                                    <img src="assets/img/course/chemestry.jfif" alt="">
                                </div>
                                <div class="course-summary-wrap">
                                    <div class="single-course-summary">
                                        <h4>Total Students</h4>
                                        <span><i class="fa fa-user"></i>{{ $course_detail->student }}</span>
                                    </div>
                                    <div class="single-course-summary">
                                        <h4>Course Duration</h4>
                                        <span><i class="fa fa-clock-o"></i>{{ $course_detail->duration }}</span>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="related-course pt-70">
                        <div class="related-title mb-45 mrg-bottom-small">
                            <h3>Related Course</h3>

                        </div>
                        <div class="related-slider-active">
                           @foreach ($courses as $course)
                           @if ($course->category==$course_detail->category)
 <div class="single-course">
                                <div class="course-img">
                                    <a href="#"><img class="animated" src="{{ asset('uploads/files/'.$course->imglink) }}" alt=""></a>
                                </div>
                                <div class="course-content">
                                    <h4><a href="#">{{ Illuminate\Support\Str::words($course->name, 3, '...')  }}</a></h4>

                                </div>
                                <div class="course-position-content">
                                    <div class="credit-duration-wrap">

                                        <div class="sin-credit-duration">
                                            <i class="fa fa-clock-o"></i>
                                            <span>Duration :{{ $course->duration }}</span>
                                        </div>
                                    </div>
                                    <div class="course-btn">
                                        <a class="default-btn" href="#">APPLY NOW</a>
                                    </div>
                                </div>
                            </div>
                           @endif

                           @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="sidebar-style sidebar-res-mrg-none">


                    <div class="sidebar-category mb-40">
                        <div class="sidebar-title mb-40">
                            <h4>Course Category</h4>
                        </div>
                        <div class="category-list">
                            <ul>
                                @foreach ($categories as $category)
 <li><a href="{{ url('courses/'.$category->c_id) }}">{{ Illuminate\Support\Str::words($category->c_name, 6, '...') }}</a></li>
                                @endforeach


                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
