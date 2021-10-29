@extends('layout.app')
@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url({{ asset('frontend/img/bg/background.jpg') }});">
        <div class="container">
            <h2>Blog Details</h2>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="{{ url('index') }}">Home</a> <span><i class="fa fa-angle-double-right"></i>Blog Details</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="blog-details-wrap mr-40">
                    <div class="blog-details-top">
                        <img src="{{ asset('uploads/files/'.$blog_details->img_link) }}" alt="">
                        <div class="blog-details-content-wrap">
                            <div class="b-details-meta-wrap">
                                <div class="b-details-meta">

                                </div>
                                <span>{{ $blog_details->category }}</span>
                            </div>
                            <h3>{{ $blog_details->tittle }}</h3>
                            <p>{{ $blog_details->details }}</p>
                            <blockquote>
                                <i class="quote-top fa fa-quote-left"></i>
                            {{ $blog_details->text }}
                                <i class="quote-bottom fa fa-quote-right"></i>
                            </blockquote>

                        </div>
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
                            <h4>Recent Blogs</h4>
                        </div>
                        <div class="recent-post-wrap">
                            @foreach ($blogs as $blog)
  <div class="single-recent-post">
                                <div class="recent-post-img">
                                    <a href="{{ url('blog_details/'.$blog->id)}}"><img src="{{ asset('uploads/files/'.$blog->img_link) }}" alt=""></a>
                                </div>
                                <div class="recent-post-content">
                                    <h5><a href="#">{{ Illuminate\Support\Str::words($blog->tittle, 3, '...') }}</a></h5>
                                    <span>{{ $blog->category }}</span>

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
