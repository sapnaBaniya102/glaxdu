@extends('layout.app')
@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url(assets/img/bg/background.jpg);">
        <div class="container">
            <h2>Planning</h2>

        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Planning</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="about-us pt-130 pb-130">
    <div class="container">
        @foreach ($sites as $site)
        @if ($site->site_key=='introduction')
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about-content">
                    <div class="section-title section-title-green mb-30">
                        <h2>{{ $site->site_name }}</h2>
                        <p>{{ $site->site_value }}</p>
                    </div>


                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about-img default-overlay">
                    <img src="{{ asset('uploads/files/'.$site->imglink) }}" alt="">
                    <a class="video-btn video-popup" href="https://www.youtube.com/watch?v=Knyh8cm4kJU">
                        <img class="animated" src="{{ asset('uploads/files/'.$site->imglink) }}" alt="">
                    </a>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
<!----Programs---->


@endsection
