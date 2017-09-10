@extends('layouts.publicshop_master')
@section('content')
    <div class="page-title">
        <div class="container">
            <div class="column">
                <h1>Contacto</h1>
            </div>
            <div class="column">
                <ul class="breadcrumbs">
                    <li><a href="index.html">Inicio</a>
                    </li>
                    <li class="separator">&nbsp;</li>
                    <li>Contacto <a class="hidden-md-down" href="tel:00331697720"><i class="icon-bell"></i>&nbsp; (54 261) 445 3501</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container padding-bottom-2x mb-2">
        <div class="row">
            <div class="col-md-12">
                <h1>Consulta</h1>
                <p class="lead"><strong>Para dudas, comentarios o consultas</strong> por favor complete el siguiente
                    formulario y será respondido a la brevedad. ¡Muchas gracias!</p>

                @isset($result)
                    @component('components.alert')
                        {{$result}}
                    @endcomponent
                @endisset

                {!! Form::open(['route' => 'send', 'method' => 'post']) !!}
                <div class="form-group row margin-top-1x">
                    <label class="col-2 col-form-label" for="text-input">Nombre</label>
                    <div class="col-10">
                        <input class="form-control" type="text" id="name" name="name" placeholder="Nombre" required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label" for="email-input">Email</label>
                    <div class="col-10">
                        <input class="form-control" type="email" id="email" name="email" placeholder="email@example.com"
                               required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label" for="text-input">Asunto</label>
                    <div class="col-10">
                        <input class="form-control" type="text" id="subject" name="subject"
                               placeholder="Presupuesto, info, dudas etc." required="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label" for="textarea-input">Mensaje</label>
                    <div class="col-10">
                        <textarea class="form-control" id="message" name="body" rows="5" placeholder="Consulta"
                                  required=""></textarea>
                    </div>
                </div>
                <div class="text-right">
                    <button class="btn btn-secondary" type="submit" id="form-submit">Enviar</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <hr class="margin-top-2x">
        <div class="row margin-top-2x">
            <div class="col-md-7">
                <div class="display-3 text-muted opacity-75 mb-30">Local</div>
            </div>
            <div class="col-md-5">
                <ul class="list-icon">
                    <li><i class="icon-mail"></i><a class="navi-link" href="mailto:info@mundodetelgopor.com">info@mundodetelgopor.com</a></li>
                    <li><i class="icon-bell"></i>(54 261) 445 3501</li>
                    <li><i class="icon-clock"></i>8 a 20 hs.</li>
                </ul>
            </div>
        </div>
        <hr class="margin-top-2x">
        <div class="row margin-top-2x">
            <div class="col-md-7">
                <div class="display-3 text-muted opacity-75 mb-30">Fabrica</div>
            </div>
            <div class="col-md-5">
                <ul class="list-icon">
                    <li><i class="icon-mail"></i><a class="navi-link" href="mailto:support@unishop.com">info@mundodetelgopor.com</a></li>
                    <li><i class="icon-bell"></i>00 33 169 7720</li>
                    <li><i class="icon-clock"></i>8 a 20 hs.</li>
                </ul>
            </div>
        </div>

        <h3 class="margin-top-3x text-center mb-30">Local</h3>
        <div class="col-md-12 col-sm-6">
            <div class="card mb-30">
                <div class="google-map" id="map-canvas" style="height: 360px;">
            </div>
            <div class="card-body">
                <ul class="list-icon">
                    <li><i class="icon-map"></i> O´Brien 249 San José - Guaymallén - Mendoza - Arg.</li>
                    <li><i class="icon-bell"></i>(54 261) 445 3501</li>
                    <li><i class="icon-mail"></i><a class="navi-link" href="mailto:info@mundodetelgopor.com">info@mundodetelgopor.com</a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
@stop