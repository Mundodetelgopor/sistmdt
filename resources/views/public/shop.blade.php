@extends('layouts.public_master')
@section('content')
    <!-- HEADER -->
    <div class="header clearfix" id="home">
        <!-- TOPBAR -->
    @include('partials.public.topbar')

    <!-- NAVBAR -->
        @include('partials.public.navbarnotonescroll')

    </div>

    <!-- BANNER -->
    <div class="bannercontainer bannerV2">
        <div class="fullscreenbanner-container">
            <div class="fullscreenbanner-bg">
            </div>
            <div class="container">
                <div class="slider-caption">
                    <div class="caption caption1">
                        <a href="">
                            <img src="{{ asset('frontend/img/home/banner-slider/caption1.png') }}" alt="slider-image">
                        </a>
                    </div>
                    <div class="caption caption2">
                        <a href="">
                            <img src="{{ asset('frontend/img/home/banner-slider/caption2.png') }}" alt="slider-image">
                        </a>
                    </div>
                    <div class=" caption caption3">
                        <a href="">
                            <img src="{{ asset('frontend/img/home/banner-slider/caption3.png') }}" alt="slider-image">
                        </a>
                    </div>
                    <div class="caption caption4">
                        <a href="">
                            <img src="{{ asset('frontend/img/home/banner-slider/caption4.png') }}" alt="slider-image">
                        </a>
                    </div>
                    <div class="slider-caption-info text-center">
                        <div class="caption-info-inner text-center">
                            <div class="h2 text-center">
                                Proximente
                            </div>
                            <div class="border text-center">
                            </div>
                            <div class="para text-center">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim .
                            </div>
                            <div class="slider-button text-center">
                                <a href="#" class="btn primary-btn">Subscribe<i class="glyphicon glyphicon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN CONTENT SECTION -->
    <section class="mainContent clearfix">
        <div class="container">
            <!-- ABOUT SECTION -->
            <div class="aboutSection text-center">
                <h2>Bigbag theme</h2>
                <p>Commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque  totam rem aperiam eaque ipsa quae ab illo</p>
            </div>
            <div id="forms" class="margin-bottom">
                <div class="container">

                    <div class="row">
                        <div class="col-sm-12">
                            <div id="newsletter">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                    <span class="input-group-btn">
                                    <button class="btn btn-md btn-primary-filled btn-newsletter" type="button">Subscribe</button>
                                    </span>
                                </div><!-- /input-group -->

                            </div><!-- / newsletter -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DARK SECTION -->
    <section class="darkSection clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3>Our Store Locations</h3>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="thumbnail">
                        <div class="caption">
                            <h5>New York</h5>
                            <address>
                                Krakovská 1307/22, 110 00 N,Y <br>
                                Vězeňská 910/2, 110 00 N,Y-Staré  <br>
                                Město Na Hřebenkách 2, 150 00  <br>
                                N,Y
                            </address>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="thumbnail">
                        <div class="caption">
                            <h5>Paris</h5>
                            <address>
                                Bebelpl. 1, 10117 Paris <br>
                                Jablonskistraße 16, 10405 Paris <br>
                                Rigaer Str. 9, 10247 Paris
                            </address>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="thumbnail">
                        <div class="caption">
                            <h5>New York</h5>
                            <address>
                                Krakovská 1307/22, 110 00 N,Y <br>
                                Vězeňská 910/2, 110 00 N,Y-Staré  <br>
                                Město Na Hřebenkách 2, 150 00  <br>
                                N,Y
                            </address>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="thumbnail">
                        <div class="caption">
                            <h5>Paris</h5>
                            <address>
                                Bebelpl. 1, 10117 Paris <br>
                                Jablonskistraße 16, 10405 Paris <br>
                                Rigaer Str. 9, 10247 Paris
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHITE SECTION -->
    <section class="whiteSection clearfix aboutPeople">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                </div>
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