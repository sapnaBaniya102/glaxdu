@extends('layout.app')
@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url({{ asset('frontend/img/bg/background.jpg') }});">
        <div class="container">
            <h2>Teachers</h2>

        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Teachers</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            @foreach ($teachers as $teacher)
<div class="col-lg-4 col-md-6">
                <div class="single-event mb-55 event-gray-bg">
                    <div class="event-img">
                        <a href="{{ url('teacher_details/'.$teacher->id) }}"><img src="{{ asset('uploads/files/'.$teacher->img_link) }}" alt=""></a>

                    </div>
                    <div class="event-content">
                        <h3><a href="{{ url('teacher_details/'.$teacher->id) }}">{{ $teacher->name }}</a></h3>
                        <h4><a href="{{ url('teacher_details/'.$teacher->id) }}">Position:{{ $teacher->post }}</a></h4>

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

@endsection
