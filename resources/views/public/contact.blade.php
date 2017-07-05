@extends('layouts.public_master')
@section('content')
    <!-- HEADER -->
    <div class="header clearfix" id="home">
        <!-- TOPBAR -->
    @include('partials.public.topbar')

    <!-- NAVBAR -->
        @include('partials.public.navbar')

    </div>

    <!-- LIGHT SECTION -->
    <section class="lightSection clearfix pageHeader">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <div class="page-title">
                        <h2>CONTACTO</h2>
                    </div>
                </div>
                <div class="col-xs-6">
                    <ol class="breadcrumb pull-right">
                        <li>
                            <a href="index.html">Inicio</a>
                        </li>
                        <li class="active">CONTACTO</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

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
                    <div class="page-header margin-bottom">
                        <h4>FORMS</h4>
                    </div>
                    <h4 class="sub-title">Contact Forms</h4>

                    <div id="contact-form-1">
                        <form id="contactForm" data-toggle="validator" novalidate="true">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Full Name" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" placeholder="Email" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <textarea id="message" class="form-control" rows="5" placeholder="Message" required=""></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <button type="submit" id="form-submit" class="btn btn-md btn-primary-filled btn-form-submit">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="space-25">&nbsp;</div>
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