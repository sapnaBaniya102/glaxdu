@extends('layout.app')
@section('content')

<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url({{ asset('frontend/img/bg/background.jpg') }});">
        <div class="container">
            <h2>Blog </h2>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Blog </span></li>
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
                        @foreach ($blogs as $blog)
  <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="single-blog mb-30">
                                <div class="blog-img">
                                    <a href="{{ url('blog_details/'.$blog->id)}}"><img src="{{ asset('uploads/files/'. $blog->img_link) }}" alt=""></a>
                                </div>
                                <div class="blog-content-wrap">
                                    <span>{{ $blog->category }}</span>
                                    <div class="blog-content">
                                        <h4><a href="{{ url('blog_details/'.$blog->id)}}">{{ $blog->tittle }}</a></h4>
                                        <p>{{ $blog->text }}</p>
                                        <div class="blog-meta">

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                {{ $blogs->links() }}
                            </div>
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
                        <form action="{{ route('blogSearch') }}" method="GET">
                            <input type="text" name="search" required/>
                            <button type="submit">Search</button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
