@extends('layout.app')
@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{ asset('frontend/img/bg/background.jpg') }});">
        <div class="container">
            <h2>Gallery</h2>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a> <span><i class="fa fa-angle-double-right"></i>Gallery</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-12">
               <h1 class="title " style="color:green; text-align:center;" >Our Gallery</h1>
                <div class="shop-bottom-area mt-30">
                    <div class="tab-content jump">
                        <div id="shop-1" class="tab-pane active">
                            <div class="row">
                                @foreach ($galleries as $gallery)
 <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-30">
                                        <div class="product-img">
                                            <a href="#"><img src="{{ asset('uploads/files/'.$gallery->img_link) }}" alt=""></a>

                                            <div class="product-action">

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="pro-pagination-style text-center mt-30">
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
