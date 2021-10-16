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
                        <div id="shop-2" class="tab-pane">
                            <div class="shop-list-wrap mb-30">
                                <div class="shop-list-img">
                                    <a href="single-product.html"><img src="assets/img/product/pro-3.jpg" alt=""></a>
                                </div>
                                <div class="shop-list-content">
                                    <h4><a href="single-product.html">Color Box</a></h4>
                                    <span>$500</span>
                                    <div class="review-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>Etiam cursus ex non pellentesque laoreet. Donec et faucibus ipsum. Sed get blandit orciplacerat elit. Mauris molestie quis ante eget dapib. Suspendisse fringilla posuere sem eu suscipit. Suspendisse non enim in nisi convallis gravida. In vehicula on telit.Suspendisse non enim in nisi convallis gravida posuere sem eu suscipit. In vehicula on telit.</p>
                                    <div class="product-action-list">
                                        <ul>
                                            <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                            <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30">
                                <div class="shop-list-img">
                                    <a href="single-product.html"><img src="assets/img/product/pro-2.jpg" alt=""></a>
                                </div>
                                <div class="shop-list-content">
                                    <h4><a href="single-product.html">Color Box</a></h4>
                                    <span>$500</span>
                                    <div class="review-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>Etiam cursus ex non pellentesque laoreet. Donec et faucibus ipsum. Sed get blandit orciplacerat elit. Mauris molestie quis ante eget dapib. Suspendisse fringilla posuere sem eu suscipit. Suspendisse non enim in nisi convallis gravida. In vehicula on telit.Suspendisse non enim in nisi convallis gravida posuere sem eu suscipit. In vehicula on telit.</p>
                                    <div class="product-action-list">
                                        <ul>
                                            <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                            <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30">
                                <div class="shop-list-img">
                                    <a href="single-product.html"><img src="assets/img/product/pro-5.jpg" alt=""></a>
                                </div>
                                <div class="shop-list-content">
                                    <h4><a href="single-product.html">Color Box</a></h4>
                                    <span>$500</span>
                                    <div class="review-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>Etiam cursus ex non pellentesque laoreet. Donec et faucibus ipsum. Sed get blandit orciplacerat elit. Mauris molestie quis ante eget dapib. Suspendisse fringilla posuere sem eu suscipit. Suspendisse non enim in nisi convallis gravida. In vehicula on telit.Suspendisse non enim in nisi convallis gravida posuere sem eu suscipit. In vehicula on telit.</p>
                                    <div class="product-action-list">
                                        <ul>
                                            <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                            <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30">
                                <div class="shop-list-img">
                                    <a href="single-product.html"><img src="assets/img/product/pro-6.jpg" alt=""></a>
                                </div>
                                <div class="shop-list-content">
                                    <h4><a href="single-product.html">Color Box</a></h4>
                                    <span>$500</span>
                                    <div class="review-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>Etiam cursus ex non pellentesque laoreet. Donec et faucibus ipsum. Sed get blandit orciplacerat elit. Mauris molestie quis ante eget dapib. Suspendisse fringilla posuere sem eu suscipit. Suspendisse non enim in nisi convallis gravida. In vehicula on telit.Suspendisse non enim in nisi convallis gravida posuere sem eu suscipit. In vehicula on telit.</p>
                                    <div class="product-action-list">
                                        <ul>
                                            <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                            <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="shop-list-wrap mb-30">
                                <div class="shop-list-img">
                                    <a href="single-product.html"><img src="assets/img/product/pro-10.jpg" alt=""></a>
                                </div>
                                <div class="shop-list-content">
                                    <h4><a href="single-product.html">Color Box</a></h4>
                                    <span>$500</span>
                                    <div class="review-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>Etiam cursus ex non pellentesque laoreet. Donec et faucibus ipsum. Sed get blandit orciplacerat elit. Mauris molestie quis ante eget dapib. Suspendisse fringilla posuere sem eu suscipit. Suspendisse non enim in nisi convallis gravida. In vehicula on telit.Suspendisse non enim in nisi convallis gravida posuere sem eu suscipit. In vehicula on telit.</p>
                                    <div class="product-action-list">
                                        <ul>
                                            <li><a title="Add To Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a></li>
                                            <li><a title="Compare" href="#"><i class="fa fa-random"></i></a></li>
                                            <li><a title="Wishlist" href="#"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
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
