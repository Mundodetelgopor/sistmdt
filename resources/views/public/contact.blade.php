@extends('layouts.public_master')
@section('content')
    <!-- HEADER -->
    <div class="header clearfix" id="home">
        <!-- TOPBAR -->
    @include('partials.public.topbar')

    <!-- NAVBAR -->
        @include('partials.public.navbarnotonescroll')

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
                <h2>Mundo de Telgopor</h2>
                <p>Nos dedicamos a la fabricación y comercialización de productos de poliestireno expandido, tratamos de satisfacer las necesidades de nuestros clientes, dándole una atención personalizada asesorando y ofreciéndoles productos a medida. Nos comprometemos con honestidad y responsabilidad para proveer productos con calidad a un buen precio.</p>
            </div>
            <div id="forms" class="margin-bottom">
                <div class="container">
                    <div class="page-header margin-bottom">
                        <h4>CONSULTA</h4>
                    </div>
                    <h4 class="sub-title">Para dudas, comentarios o consultas, por favor complete el siguiente formulario y será respondido a la brevedad.
                        ¡Muchas gracias!</h4>

                    <div id="contact-form-1">
                        {{--<form id="contactForm" data-toggle="validator" novalidate="true">--}}
                        {!! Form::open(['route' => 'send', 'method' => 'post']) !!}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Asunto">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <textarea id="message" name="body" class="form-control" rows="5" placeholder="Mensaje" required=""></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <button type="submit" id="form-submit" class="btn btn-md btn-primary-filled btn-form-submit">Enviar</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        {{--</form>--}}
                        {!! Form::close() !!}
                    </div>

                    <div class="space-25">&nbsp;</div>
                </div>
            </div>
        </div>
    </section>

    <!-- DARK SECTION -->
    <section class="clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3>Nuestro local</h3>
                </div>
                <div class="col-xs-12" id="map-canvas" style="height: 360px;">
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