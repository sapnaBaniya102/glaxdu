@extends('layout.app')
@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url(assets/img/bg/background.jpg);">
        <div class="container">
            <h2>Message</h2>

        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Message</span></li>
            </ul>
        </div>
    </div>
</div>






<div class="achievement-area pt-130 pb-115">

 <div class="container">
      @foreach ($sites as $site)
      @if ($site->site_key=='message-from-principal')
        <div class="section-title mb-75">
            <h2>{{ $site->site_name }}</h2>

        </div>
        <div class="testimonial-slider-wrap mt-45">
            <div class="testimonial-text-slider">
                <div class="testi-content-wrap">
                    <div class="testi-big-img">
                        <img alt="" src="{{ asset('uploads/files/'.$site->imglink) }}">
                    </div>
                   <div class="row no-gutters">
                       <div class="ml-auto col-lg-6 col-md-6">
                           <div class="testi-content bg-img default-overlay" style="background-image:url({{ asset('uploads/files/'.$site->imglink) }});">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                               <p>{{ $site->site_value }}</p>

                           </div>
                       </div>
                   </div>
                </div>

            </div>

        </div>
@endif
@endforeach
    </div>


</div>
<div class="achievement-area pt-130 pb-115">
    <div class="container">
         @foreach ($sites as $site)
      @if ($site->site_key=='message-from-dean')
        <div class="section-title mb-75">
            <h2>{{ $site->site_name }}</h2>

        </div>
        <div class="testimonial-slider-wrap mt-45">
            <div class="testimonial-text-slider">
                <div class="testi-content-wrap">

                   <div class="row no-gutters">
                       <div class="ml-auto col-lg-6 col-md-6">
                           <div class="testi-content bg-img default-overlay" style="background-image:url({{ asset('uploads/files/'.$site->imglink) }});">
                                <div class="quote-style quote-left">
                                   <i class="fa fa-quote-left"></i>
                                </div>
                                <p>{{ $site->site_value }}</p>


                           </div>
                       </div>
                   </div>
                    <div class="testi-big-img">
                        <img alt="" src="{{ asset('uploads/files/'.$site->imglink) }}">
                    </div>
                </div>


            </div>

        </div>
@endif
@endforeach
    </div>
</div>

@endsection
