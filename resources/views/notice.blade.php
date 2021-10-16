@extends('layout.app')
@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url({{ asset('frontend/img/bg/background.jpg') }});">
        <div class="container">
            <h2>Examination Notice</h2>

        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Examination Notice</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="blog-all-wrap mr-40">
                    <div class="row">
                        @foreach ($notices as $notice)
   <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="single-blog mb-30">

                                <div class="blog-content-wrap">
                                    <span>{{ $notice->category }}</span>
                                    <div class="blog-content">
                                        <h4><a href="{{ url('notice_details/'.$notice->id) }}">{{ $notice->heading }}</a></h4>


                                    </div>
                                    <div class="blog-date">
                                        <a href="{{ url('notice_details/'.$notice->id) }}"><i class="fa fa-calendar-o"></i>{{$notice->date}}</a>
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


                    <div class="sidebar-category mb-40">
                        <div class="sidebar-title mb-40">
                            <h4>Category</h4>
                        </div>
                        <div class="category-list">
                            <ul>
                                 @foreach ($notices as $notice)
                                  <li><a href="#">{{ $notice->category }}</a></li>
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
