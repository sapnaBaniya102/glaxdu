@extends('layout.app')
@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-5 pt-100 pb-95" style="background-image:url({{ asset('frontend/img/bg/background.jpg') }});">
        <div class="container">
            <h2>Contact Us</h2>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Contact Us</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="contact-area pt-130 pb-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="contact-map mr-70">
                    <div id="map"></div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-form">
                    <div class="contact-title mb-45">
                        <h2>Stay <span>Connected</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipis do eiusmod tempor indunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <form id="contact-form" action="{{ route('message.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input name="name" placeholder="Name*" type="text">
                        <input name="email" placeholder="Email*" type="email">
                        <input name="subject" placeholder="Subject*" type="text">
                        <textarea name="details" placeholder="Message"></textarea>
                      <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-info-area bg-img pt-180 pb-140 default-overlay" style="background-image:url(assets/img/contact.jfif);">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-contact-info mb-30 text-center">
                    <div class="contact-info-icon">
                        <span><i class="fa fa-calendar-o"></i></span>
                    </div>
                    @foreach ($sites as $site)
                    @if ($site->site_key=='location')
 <p>{{ $site->site_value }}</p>
                    @endif

                    @endforeach

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-contact-info mb-30 text-center">
                    <div class="contact-info-icon">
                        <span><i class="fa fa-calendar-o"></i></span>
                    </div>
                    <div class="contact-info-phn">
                        <div class="info-phn-title">
                            <span>Phone : </span>
                        </div>
                         @foreach ($sites as $site)
                    @if ($site->site_key=='phone')
                        <div class="info-phn-number">
                            <p>{{ $site->site_value }}</p>
                        </div>
                          @endif

                    @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-contact-info mb-30 text-center">
                    <div class="contact-info-icon">
                        <span><i class="fa fa-calendar-o"></i></span>
                    </div>
                     @foreach ($sites as $site)
                    @if ($site->site_key=='email')
                    <a href="#">{{ $site->site_value }}</a>
                         @endif

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
@endsection
