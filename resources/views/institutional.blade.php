@extends('layouts.public_master')
@section('content')
<!-- HEADER -->
<div class="header clearfix" id="home">
    <!-- TOPBAR -->
    @include('partials.public.topbar')

    <!-- NAVBAR -->
    @include('partials.public.navbar')

 </div>

<!-- BANNER -->
<div class="bannercontainer bannerV1">
        <div class="fullscreenbanner-container">
        <div class="fullscreenbanner">
            <ul>
                <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" data-title="Slide 1">
                    <img src="{{ asset('frontend/img/home/banner-slider/slider-bg.jpg') }}" alt="slidebg1"
                         data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                    <div class="slider-caption slider-captionV1 container">

                        <div class="tp-caption rs-caption-1 sft start"
                             data-hoffset="0"
                             data-x="370"
                             data-y="54"
                             data-speed="800"
                             data-start="1500"
                             data-easing="Back.easeInOut"
                             data-endspeed="300">
                            <img src="{{ asset('frontend/img/home/banner-slider/plancha1.jpg') }}" alt="slider-image"
                                 style="width: 781px; height: 416px;">
                        </div>

                        <div class="tp-caption rs-caption-2 sft"
                             data-hoffset="0"
                             data-y="119"
                             data-speed="800"
                             data-start="2000"
                             data-easing="Back.easeInOut"
                             data-endspeed="300">
                            Canvas Sneaker
                        </div>

                        <div class="tp-caption rs-caption-3 sft"
                             data-hoffset="0"
                             data-y="185"
                             data-speed="1000"
                             data-start="3000"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             data-captionhidden="off">
                            Exclusive to <br>
                            BigBag <br>
                            <small>Spring / Summer 2016</small>
                        </div>
                        <div class="tp-caption rs-caption-4 sft"
                             data-hoffset="0"
                             data-y="320"
                             data-speed="800"
                             data-start="3500"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             data-captionhidden="off">
                            <span class="page-scroll"><a href="#" class="btn primary-btn">Buy Now<i
                                            class="glyphicon glyphicon-chevron-right"></i></a></span>
                        </div>
                    </div>
                </li>
                <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="1000" data-title="Slide 2">
                    <img src="{{ asset('frontend/img/home/banner-slider/slider-bg.jpg') }}" alt="slidebg"
                         data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                    <div class="slider-caption slider-captionV1 container captionCenter">
                        <div class="tp-caption rs-caption-1 sft start text-center"
                             data-x="center"
                             data-y="228"
                             data-speed="800"
                             data-start="1500"
                             data-easing="Back.easeInOut"
                             data-endspeed="300">
                            <img src="{{ asset('frontend/img/home/banner-slider/plancha2.jpg') }}" alt="slider-image">
                        </div>

                        <div class="tp-caption rs-caption-2 sft text-center"
                             data-x="center"
                             data-y="50"
                             data-speed="800"
                             data-start="2000"
                             data-easing="Back.easeInOut"
                             data-endspeed="300">
                            Exclusive to BigBag
                        </div>

                        <div class="tp-caption rs-caption-3 sft text-center"
                             data-x="center"
                             data-y="98"
                             data-speed="1000"
                             data-start="3000"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             data-captionhidden="off">
                            Canvas Sneaker
                        </div>

                        <div class="tp-caption rs-caption-4 sft text-center"
                             data-x="center"
                             data-y="156"
                             data-speed="800"
                             data-start="3500"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             data-captionhidden="off">
                            <span class="page-scroll"><a href="#" class="btn primary-btn">Buy Now<i
                                            class="glyphicon glyphicon-chevron-right"></i></a></span>
                        </div>
                    </div>
                </li>
                <li data-transition="slidehorizontal" data-slotamount="5" data-masterspeed="700" data-title="Slide 3">
                    <img src="{{ asset('frontend/img/home/banner-slider/slider-bg.jpg') }}" alt="slidebg"
                         data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                    <div class="slider-caption slider-captionV1 container">
                        <div class="tp-caption rs-caption-1 sft start"
                             data-hoffset="0"
                             data-y="85"
                             data-speed="800"
                             data-start="1500"
                             data-easing="Back.easeInOut"
                             data-endspeed="300">
                            <img src="{{ asset('frontend/img/home/banner-slider/plancha3.jpg') }}" alt="slider-image">
                        </div>

                        <div class="tp-caption rs-caption-2 sft "
                             data-hoffset="0"
                             data-y="119"
                             data-x="800"
                             data-speed="800"
                             data-start="2000"
                             data-easing="Back.easeInOut"
                             data-endspeed="300">
                            Canvas Sneaker
                        </div>

                        <div class="tp-caption rs-caption-3 sft"
                             data-hoffset="0"
                             data-y="185"
                             data-x="800"
                             data-speed="1000"
                             data-start="3000"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             data-captionhidden="off">
                            Exclusive to <br>
                            BigBag <br>
                            <small>Spring / Summer 2016</small>
                        </div>

                        <div class="tp-caption rs-caption-4 sft"
                             data-hoffset="0"
                             data-y="320"
                             data-x="800"
                             data-speed="800"
                             data-start="3500"
                             data-easing="Power4.easeOut"
                             data-endspeed="300"
                             data-endeasing="Power1.easeIn"
                             data-captionhidden="off">
                            <span class="page-scroll"><a href="#" class="btn primary-btn">Buy Now<i
                                            class="glyphicon glyphicon-chevron-right"></i></a></span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- MAIN CONTENT SECTION -->
<section class="mainContent clearfix">
    <div class="container">
        <!-- PRODUCTS SECTION -->
        <div class="row aboutUsInfo featuredCollection version2" id="product">
        <div class="col-xs-12">
            <div class="page-header">
                <h3>Producto</h3>
            </div>
        </div>
        <div class="col-sm-6 col-sm-push-6 col-xs-12">
            <img src="{{ asset('frontend/img/about-us/title-img.jpg') }}" alt="about-us-img">
        </div>
        <div class="col-sm-6 col-sm-pull-6 col-xs-12">
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Mauris lobortis augue ex, ut faucibus nisi mollis ac. Sed volutpat scelerisque ex ut ullamcorper. Cras at velit quis sapien dapibus laoreet a id odio. Sed sit amet accumsan ante, eu congue metus. Aenean eros tortor, cursus quis feugiat sed, vestibulum vel purus. Etiam aliquam turpis quis blandit finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec porttitor placerat lectus, facilisis ornare leo tincidunt vel. Duis rutrum felis felis, eget malesuada massa tincidunt a.</p>
            <ul class="unorder-list lists">
                <li>Neque porro quisquam est,</li>
                <li>qui dolorem ipsum quia dolor sit amet, </li>
                <li>consectetur, adipisci velit, sed quia</li>
                <li>non numquam eius modi tempora incidunt </li>
                <li>ut labore et dolore magnam aliquam</li>
            </ul>
        </div>
    </div>
        <!-- FEATURE COLLECTION SECTION -->
        <div class="row featuredCollection version2">
            <div class="col-xs-12">
                <div class="page-header">
                    <h4>Featured Products</h4>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="owl-carousel featuredCollectionSlider">
                    <div class="slide">
                        <div class="productImage clearfix text-left">
                            <a href="single-product.html"><img src="{{ asset('frontend/img/home/featured-collection/product-img1.png') }}" alt="Product Image"></a>
                        </div>
                        <div class="productCaption clearfix text-right">
                            <h3><a href="single-product.html">for women’s</a></h3>
                            <p>Lorem ipsum dolor sit ameit</p>
                            <a href="single-product.html" class="btn btn-border">Shop Now</a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="productImage clearfix text-right pull-right">
                            <a href="single-product.html"><img src="{{ asset('frontend/img/home/featured-collection/product-img2.png') }}" alt="Product Image"></a>
                        </div>
                        <div class="productCaption clearfix text-left pull-left">
                            <h3><a href="single-product.html">for men’s</a></h3>
                            <p>Lorem ipsum dolor sit ameit</p>
                            <a href="single-product.html" class="btn btn-border">Shop Now</a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="productImage clearfix text-left">
                            <a href="single-product.html"><img src="{{ asset('frontend/img/home/featured-collection/product-img1.png') }}" alt="Product Image"></a>
                        </div>
                        <div class="productCaption clearfix text-right">
                            <h3><a href="single-product.html">for women’s</a></h3>
                            <p>Lorem ipsum dolor sit ameit</p>
                            <a href="single-product.html" class="btn btn-border">Shop Now</a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="productImage clearfix text-right pull-right">
                            <a href="single-product.html"><img src="{{ asset('frontend/img/home/featured-collection/product-img2.png') }}" alt="Product Image"></a>
                        </div>
                        <div class="productCaption clearfix text-left pull-left">
                            <h3><a href="single-product.html">for men’s</a></h3>
                            <p>Lorem ipsum dolor sit ameit</p>
                            <a href="single-product.html" class="btn btn-border">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURE PRODUCT SECTION -->
        <div class="row featuredProducts version2 margin-bottom">
        <div class="col-xs-12">
            <div class="tabCommon">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#menu1">New Araivals</a></li>
                    <li><a data-toggle="tab" href="#menu2">Top Rated</a></li>
                    <li><a data-toggle="tab" href="#menu3">On Sale</a></li>
                </ul>
                <div class="tab-bottom">
                </div>
                <div class="tab-content">
                    <div id="menu1" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-sm-3 col-xs-12">
                                <div class="imageBox">
                                    <div class="productImage clearfix">
                                        <a href="single-product.html">
                                            <img src="{{ asset('frontend/img/home/featured-product/product-img3.jpg') }}" alt="featured-product-img">
                                        </a>
                                        <div class="productMasking">
                                            <ul class="list-inline btn-group" role="group">
                                                <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="productCaption clearfix">
                                        <h5><a href="single-product.html">Mauris efficitur</a></h5>
                                        <h3>$199</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="imageBox">
                                    <div class="productImage clearfix">
                                        <a href="single-product.html">
                                            <img src="{{ asset('frontend/img/home/featured-product/product-img4.jpg') }}" alt="featured-product-img">
                                        </a>
                                        <div class="productMasking">
                                            <ul class="list-inline btn-group" role="group">
                                                <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="productCaption clearfix">
                                        <h5><a href="single-product.html">Mauris efficitur</a></h5>
                                        <h3>$199</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="imageBox">
                                    <div class="productImage clearfix">
                                        <a href="single-product.html">
                                            <img src="{{ asset('frontend/img/home/featured-product/product-img5.jpg') }}" alt="featured-product-img">
                                        </a>
                                        <div class="productMasking">
                                            <ul class="list-inline btn-group" role="group">
                                                <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="productCaption clearfix">
                                        <h5><a href="single-product.html">Mauris efficitur</a></h5>
                                        <h3>$199</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="imageBox">
                                    <div class="productImage clearfix">
                                        <a href="single-product.html">
                                            <img src="{{ asset('frontend/img/home/featured-product/product-img6.jpg') }}" alt="featured-product-img">
                                        </a>
                                        <div class="productMasking">
                                            <ul class="list-inline btn-group" role="group">
                                                <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="productCaption clearfix">
                                        <h5><a href="single-product.html">Mauris efficitur</a></h5>
                                        <h3>$199</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-3 col-xs-12">
                                <div class="imageBox">
                                    <div class="productImage clearfix">
                                        <a href="single-product.html">
                                            <img src="{{ asset('frontend/img/home/featured-product/product-img6.jpg') }}" alt="featured-product-img">
                                        </a>
                                        <div class="productMasking">
                                            <ul class="list-inline btn-group" role="group">
                                                <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="productCaption clearfix">
                                        <h5><a href="single-product.html">Mauris efficitur</a></h5>
                                        <h3>$199</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="imageBox">
                                    <div class="productImage clearfix">
                                        <a href="single-product.html">
                                            <img src="{{ asset('frontend/img/home/featured-product/product-img5.jpg') }}" alt="featured-product-img">
                                        </a>
                                        <div class="productMasking">
                                            <ul class="list-inline btn-group" role="group">
                                                <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="productCaption clearfix">
                                        <h5><a href="single-product.html">Mauris efficitur</a></h5>
                                        <h3>$199</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="imageBox">
                                    <div class="productImage clearfix">
                                        <a href="single-product.html">
                                            <img src="{{ asset('frontend/img/home/featured-product/product-img4.jpg') }}" alt="featured-product-img">
                                        </a>
                                        <div class="productMasking">
                                            <ul class="list-inline btn-group" role="group">
                                                <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="productCaption clearfix">
                                        <h5><a href="single-product.html">Mauris efficitur</a></h5>
                                        <h3>$199</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="imageBox">
                                    <div class="productImage clearfix">
                                        <a href="single-product.html">
                                            <img src="{{ asset('frontend/img/home/featured-product/product-img3.jpg') }}" alt="featured-product-img">
                                        </a>
                                        <div class="productMasking">
                                            <ul class="list-inline btn-group" role="group">
                                                <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="productCaption clearfix">
                                        <h5><a href="single-product.html">Mauris efficitur</a></h5>
                                        <h3>$199</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <div class="row">
                            <div class="col-sm-3 col-xs-12">
                                <div class="imageBox">
                                    <div class="productImage clearfix">
                                        <a href="single-product.html">
                                            <img src="{{ asset('frontend/img/home/featured-product/product-img5.jpg') }}" alt="featured-product-img">
                                        </a>
                                        <div class="productMasking">
                                            <ul class="list-inline btn-group" role="group">
                                                <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="productCaption clearfix">
                                        <h5><a href="single-product.html">Mauris efficitur</a></h5>
                                        <h3>$199</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="imageBox">
                                    <div class="productImage clearfix">
                                        <a href="single-product.html">
                                            <img src="{{ asset('frontend/img/home/featured-product/product-img3.jpg') }}" alt="featured-product-img">
                                        </a>
                                        <div class="productMasking">
                                            <ul class="list-inline btn-group" role="group">
                                                <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="productCaption clearfix">
                                        <h5><a href="single-product.html">Mauris efficitur</a></h5>
                                        <h3>$199</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="imageBox">
                                    <div class="productImage clearfix">
                                        <a href="single-product.html">
                                            <img src="{{ asset('frontend/img/home/featured-product/product-img6.jpg') }}" alt="featured-product-img">
                                        </a>
                                        <div class="productMasking">
                                            <ul class="list-inline btn-group" role="group">
                                                <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="productCaption clearfix">
                                        <h5><a href="single-product.html">Mauris efficitur</a></h5>
                                        <h3>$199</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="imageBox">
                                    <div class="productImage clearfix">
                                        <a href="single-product.html">
                                            <img src="{{ asset('frontend/img/home/featured-product/product-img4.jpg') }}" alt="featured-product-img">
                                        </a>
                                        <div class="productMasking">
                                            <ul class="list-inline btn-group" role="group">
                                                <li><a data-toggle="modal" href=".login-modal" class="btn btn-default"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="cart-page.html" class="btn btn-default"><i class="fa fa-shopping-cart"></i></a></li>
                                                <li><a data-toggle="modal" href=".quick-view" class="btn btn-default"><i class="fa fa-search"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="productCaption clearfix">
                                        <h5><a href="single-product.html">Mauris efficitur</a></h5>
                                        <h3>$199</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- VENTAJAS SECTION -->
        <div class="row featuredCollection version2 margin-bottom" id="advantage">
            <div class="col-xs-12">
                <div class="page-header">
                    <h4>Ventajas</h4>
                </div>
                <div class="owl-carousel testimonialSlider">

                    <div class="slide">
                        <div class="testimonial-inner">
                            <div class="testimonialImage text-center">
                                <img src="{{ asset('frontend/img/home/testimonial/testimonial-img1.png') }}" alt="Image">
                            </div>
                            <div class="testimonialText">
                      <span class="product-rating">
                        Ventajas 1
                      </span>
                                <div class="testimonial-content">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia consequuntur magni dolores eos qui rationVe voluptatem sequi nesciunt. Neque
                                        porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                                    <div class="author-img">
                                        <img src="{{ asset('frontend/img/home/testimonial/author1.png') }}" alt="Image">
                                    </div>
                                    <cite>Sarah Smith</cite>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="testimonial-inner">
                            <div class="testimonialImage text-center">
                                <img src="{{ asset('frontend/img/home/testimonial/testimonial-img1.png') }}" alt="Image">
                            </div>
                            <div class="testimonialText">
                      <span class="product-rating">
                        Ventajas 2
                      </span>
                                <div class="testimonial-content">
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                                        quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                                        porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                                    <div class="author-img">
                                        <img src="{{ asset('frontend/img/home/testimonial/author1.png') }}" alt="Image">
                                    </div>
                                    <cite>Sarah Smith</cite>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- SERVICES -->
        <div class="row features version2 margin-bottom section fp-auto-height" id="services">
            <div class="col-xs-12">
                <div class="page-header">
                    <h4>Servicios</h4>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="box text-center">
                    <i class="fa fa-truck" aria-hidden="true"></i>
                    <h4>Free Shipping </h4>
                    <span>Excepteur sint occaecat cupidatat.</span>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="box text-center">
                    <i class="fa fa-money" aria-hidden="true"></i>
                    <h4>100% money back</h4>
                    <span>Excepteur sint occaecat cupidatat.</span>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="box text-center">
                    <i class="fa fa-headphones" aria-hidden="true"></i>
                    <h4>24/7 support</h4>
                    <span>Excepteur sint occaecat cupidatat.</span>
                </div>
            </div>
        </div>

        <!-- ABOUT SECTION -->
        <div class="aboutSection text-center section fp-auto-height" id="about">
            <h2>Mundo de Telgopor</h2>
            <p>Commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque totam rem aperiam eaque ipsa quae ab illo</p>
        </div>
    </div>
</section>

<!-- INSTAGRAM SECTION -->
<section class="instagramSection clearfix">
    <div class="image-gallery">
        <img src="{{ asset('frontend/img/home/home-gallery/ins-img1.jpg') }}" alt="Image">
    </div>
    <div class="image-gallery">
        <img src="{{ asset('frontend/img/home/home-gallery/ins-img2.jpg') }}" alt="Image">
    </div>
    <div class="image-gallery">
        <img src="{{ asset('frontend/img/home/home-gallery/ins-img3.jpg') }}" alt="Image">
    </div>
    <div class="image-gallery">
        <img src="{{ asset('frontend/img/home/home-gallery/ins-img4.jpg') }}" alt="Image">
    </div>
    <div class="image-gallery">
        <img src="{{ asset('frontend/img/home/home-gallery/ins-img5.jpg') }}" alt="Image">
    </div>
    <div class="image-gallery">
        <img src="{{ asset('frontend/img/home/home-gallery/ins-img6.jpg') }}" alt="Image">
    </div>
</section>
@stop