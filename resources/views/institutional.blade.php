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
                            <img src="{{ asset('frontend/img/home/banner-slider/plancha1.jpg') }}" alt="slider-image" style="width: 781px; height: 416px;">
                        </div>

                        <div class="tp-caption rs-caption-2 sft"
                             data-hoffset="0"
                             data-y="119"
                             data-speed="800"
                             data-start="2000"
                             data-easing="Back.easeInOut"
                             data-endspeed="300">
                            Placa de Telgopor
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
                                A TU MEDIDA<br>
                           <!-- <small>Spring / Summer 2016</small>-->
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
                            <span class="page-scroll">
                                <a href="#" class="btn primary-btn">Consultar<i class="glyphicon glyphicon-chevron-right"></i></a>
                            </span>
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
                            <img src="{{ asset('frontend/img/home/banner-slider/product-img9.jpg') }}" alt="slider-image">
                        </div>

                        <div class="tp-caption rs-caption-2 sft text-center"
                             data-x="center"
                             data-y="50"
                             data-speed="800"
                             data-start="2000"
                             data-easing="Back.easeInOut"
                             data-endspeed="300">
                            Liviano y resistente
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
                            Embalaje para tus botellas
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
                            <span class="page-scroll">
                                <a href="#" class="btn btn-xl primary-btn">Consultar<i class="glyphicon glyphicon-chevron-right"></i></a>
                            </span>
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
                            Losetas
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
                            Aislante Termico <br>
                            y Acustico <br>
                          <!--  <small>Spring / Summer 2016</small> -->
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
                            <span class="page-scroll">
                                <a href="#" class="btn primary-btn">Consultar<i class="glyphicon glyphicon-chevron-right"></i></a>
                            </span>
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
            <iframe width="510" height="287" src="https://www.youtube.com/embed/ON9wFdPdQl8" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="col-sm-6 col-sm-pull-6 col-xs-12">
            <p class="lead">Siendo el Telgopor un material inocuo, de olor y sabor neutros, que no favorece el crecimiento de hongos y bacterias, es el más indicado para emplearse en la protección, transporte y comercialización de cualquier producto.</p>
            <p class="lead">Proveemos embalajes a medida a todo tipo de industrias. Entre ellas: industria alimenticia, electrónica, automotriz, equipamiento médico, cristalería, laboratorios, metalmecánica, etc.</p>
            <ul class="unorder-list lists">
                <li>Liviano</li>
                <li>Aislante térmico</li>
                <li>Correcta resistencia al esfuerzo cortante</li>
                <li>Ecológico</li>
               
            </ul>
        </div>
    </div>
        <!-- FEATURE COLLECTION SECTION -->
        <div class="row featuredCollection version2">
            <div class="col-xs-12">
                <div class="page-header">
                    <h4>PRODUCTOS DESTACADOS</h4>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="owl-carousel featuredCollectionSlider">
                    <div class="slide">
                        <div class="productImage clearfix text-left">
                            <a href="single-product.html"><img src="{{ asset('frontend/img/home/featured-collection/plancha1.jpg') }}" alt="Product Image"></a>
                        </div>
                        <div class="productCaption clearfix text-right">
                            <h3><a href="single-product.html">PLACAS POLIESTIRENO EXPANDIDO (EPS)</a></h3>
                            <p>Cortes a medidas según la necesidad del cliente</p>                           
                            <a href="single-product.html" class="btn btn-border">Consultar</a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="productImage clearfix text-right pull-right">
                            <a href="single-product.html"><img src="{{ asset('frontend/img/home/featured-collection/img14.jpg') }}" alt="Product Image"></a>
                        </div>
                        <div class="productCaption clearfix text-left pull-left">
                            <h3><a href="single-product.html">EMBALAJE PARA BOTELLAS</a></h3>
                            <p>Embalajes a medida para envíos seguros</p>
                            <a href="single-product.html" class="btn btn-border">Consultar</a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="productImage clearfix text-left">
                            <a href="single-product.html"><img src="{{ asset('frontend/img/home/featured-collection/product-img1.png') }}" alt="Product Image"></a>
                        </div>
                        <div class="productCaption clearfix text-right">
                            <h3><a href="single-product.html">Losetas</a></h3>
                            <p>Material de la mejor calidad</p>
                            <a href="single-product.html" class="btn btn-border">Consultar</a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="productImage clearfix text-right pull-right">
                            <a href="single-product.html"><img src="{{ asset('frontend/img/home/featured-collection/product-img2.png') }}" alt="Product Image"></a>
                        </div>
                        <div class="productCaption clearfix text-left pull-left">
                            <h3><a href="single-product.html">Molduras</a></h3>
                            <p>Fácil colocación, Excelente terminación y Económica!</p>
                            <a href="single-product.html" class="btn btn-border">Consultar</a>
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
                    <li class="active"><a data-toggle="tab" href="#menu1">Mas Vendidos</a></li>
                <!--    <li><a data-toggle="tab" href="#menu2">Top Rated</a></li> -->
                <!--    <li><a data-toggle="tab" href="#menu3">On Sale</a></li> -->
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
                                            <img src="{{ asset('frontend/img/home/featured-product/img12.jpg') }}" alt="featured-product-img" height="280px">
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
                                        <h5><a href="single-product.html">EMBALAJES</a></h5>
                                        <h3>$199</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="imageBox">
                                    <div class="productImage clearfix">
                                        <a href="single-product.html">
                                            <img src="{{ asset('frontend/img/home/featured-product/img1.jpg') }}" alt="featured-product-img" height="280px">
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
                                        <h5><a href="single-product.html">Molduras</a></h5>
                                        <h3>$199</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="imageBox">
                                    <div class="productImage clearfix">
                                        <a href="single-product.html">
                                            <img src="{{ asset('frontend/img/home/featured-product/img5.jpg') }}" alt="featured-product-img" height="280px">
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
                                        <h5><a href="single-product.html">Losetas</a></h5>
                                        <h3>$199</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="imageBox">
                                    <div class="productImage clearfix">
                                        <a href="single-product.html">
                                            <img src="{{ asset('frontend/img/home/featured-product/img2.jpg') }}" alt="featured-product-img" height="280px">
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
                                        <h5><a href="single-product.html">Placas para cielo raso</a></h5>
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
                                        <h5><a href="single-product.html">Embalaje para botellas</a></h5>
                                        <h3>$199</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="imageBox">
                                    <div class="productImage clearfix">
                                        <a href="single-product.html">
                                            <img src="{{ asset('frontend/img/home/featured-product/img12.jpg') }}" alt="featured-product-img">
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
                                        <h5><a href="single-product.html">Placas de Poliestireno expandido (EPS)</a></h5>
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
                                            <img src="{{ asset('frontend/img/home/featured-product/img12.jpg') }}" alt="featured-product-img">
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
    <!--    <div class="row featuredCollection version2 margin-bottom" id="advantage">
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
                        Aislante térmico
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
                        Amortiguador de impactos
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
        </div> -->

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
                    <h4>Envios a todo el pais</h4>
                    <span>Envios gratis en el gran Mendoza</span>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="box text-center">
                    <i class="fa fa-money" aria-hidden="true"></i>
                    <h4>Paga Online</h4>
                    <span>Paga de forma segura en cuotas</span>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="box text-center">
                    <i class="fa fa-headphones" aria-hidden="true"></i>
                    <h4>Atencion Personalizada</h4>
                    <span>Asesorate para cualquier consulta</span>
                </div>
            </div>
        </div>

        <!-- ABOUT SECTION -->
        <div class="aboutSection text-center section fp-auto-height" id="about">
            <h2>Mundo de Telgopor</h2>
            <p>Nos dedicamos a la fabricación y comercialización de productos de poliestireno expandido, tratamos de satisfacer las necesidades de nuestros clientes, dándole una atención personalizada asesorando y ofreciéndoles productos a medida. Nos comprometemos con honestidad y responsabilidad para proveer productos con calidad a un buen precio.</p>
        </div>
    </div>
</section>

<!-- INSTAGRAM SECTION -->
<section class="instagramSection clearfix">
    <div class="image-gallery">
        <img src="{{ asset('frontend/img/home/home-gallery/cartel-img1.jpg') }}" alt="Image" height="280px">
    </div>
    <div class="image-gallery">
        <img src="{{ asset('frontend/img/home/home-gallery/interior-img6.jpg') }}" alt="Image" height="280px">
        
    </div>
    <div class="image-gallery">
        <img src="{{ asset('frontend/img/home/home-gallery/ins-img10.jpg') }}" alt="Image" height="280px">
    </div>
    <div class="image-gallery">
        <img src="{{ asset('frontend/img/home/home-gallery/ins-img9.jpg') }}" alt="Image" height="280px">
    </div>
    <div class="image-gallery">
        <img src="{{ asset('frontend/img/home/home-gallery/ins-img8.jpg') }}" alt="Image" height="280px">
    </div>
    <div class="image-gallery">
        <img src="{{ asset('frontend/img/home/home-gallery/ins-img7.jpg') }}" alt="Image" height="280px">
    </div>
</section>
@stop

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            $(document).on("scroll", onScroll);

            //smoothscroll
            $('a[href^="#"]').on('click', function (e) {
                e.preventDefault();
                $(document).off("scroll");

                $('a[id^="menu"]').each(function () {
                    $(this).parent().removeClass('active');
                })
                $(this).parent().addClass('active');

                var target = this.hash,
                    menu = target;
                $target = $(target);
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top-150
                }, 500, 'swing', function () {
                    window.location.hash = target;
                    $(document).on("scroll", onScroll);
                });
            });
        });

        function onScroll(event){
            var scrollPos = $(document).scrollTop()+150;
            $('#menu-nav a').each(function () {
                var currLink = $(this);
                var refElement = $(currLink.attr("href"));

                if (refElement.position() !== undefined){
                    if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                        $('#menu-nav ul li a').parent().removeClass("active");
                        currLink.parent().addClass("active");
                    }
                    else{
                        currLink.parent().removeClass("active");
                    }
                }
            });
        }
    </script>
@stop