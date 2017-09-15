@extends('layouts.publicshop_master')
@section('content')
    <!-- Page Content-->
    <!-- Main Slider-->
    <section class="hero-slider" style="background-image: url({{ asset('frontendshop/img/main-bg.jpg') }});">
        <div class="owl-carousel large-controls dots-inside owl-loaded owl-drag" data-owl-carousel="{ "nav": true, "dots": true, "loop": true, "autoplay": true, "autoplayTimeout": 7000 }">
            <div class="item">
                <div class="container padding-top-3x">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                            <div class="from-bottom">
                                <img class="d-inline-block w-200 mb-4" src="{{ asset('frontendshop/img/logo01.png') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/hero-slider/logo01.png" alt="Converse">
                                <div class="h2 text-body text-normal mb-2 pt-1">Placa de Telgopor a medida</div>
                                <div class="h2 text-body text-normal mb-4 pb-1">por sólo <span class="text-bold">$59.99</span></div>
                            </div><a class="btn btn-primary scale-up delay-1" href="shop-single.html">Consultar</a>
                        </div>
                        <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="{{ asset('frontendshop/img/banner_plancha2.png') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/hero-slider/01.png" alt="Chuck Taylor All Star II"></div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container padding-top-3x">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                            <div class="from-bottom"><img class="d-inline-block w-150 mb-4" src="{{ asset('frontendshop/img/logo02.png') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/hero-slider/logo02.png" alt="Puma">
                                <div class="h2 text-body text-normal mb-2 pt-1">Embalaje para tus botellas</div>
                                <div class="h2 text-body text-normal mb-4 pb-1">desde <span class="text-bold">$37.99</span></div>
                            </div><a class="btn btn-primary scale-up delay-1" href="shop-grid-ls.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-grid-ls.html">Consultar</a>
                        </div>
                        <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="{{ asset('frontendshop/img/banner_plancha3.png') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/hero-slider/02.png" alt="Puma Backpack"></div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container padding-top-3x">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
                            <div class="from-bottom"><img class="d-inline-block mb-4" src="{{ asset('frontendshop/img/logo03.png') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/hero-slider/logo03.png" style="width: 125px;" alt="Motorola">
                                <div class="h2 text-body text-normal mb-2 pt-1">Losetas aislante termico y acustico</div>
                                <div class="h2 text-body text-normal mb-4 pb-1">por sólo <span class="text-bold">$299.99</span></div>
                            </div><a class="btn btn-primary scale-up delay-1" href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html">Consultar</a>
                        </div>
                        <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="{{ asset('frontendshop/img/banner_plancha4.png') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/hero-slider/03.png" alt="Moto 360"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="container padding-top-1x padding-bottom-1x">
        <div class="row align-items-center padding-top-2x padding-bottom-2x">
            <div class="col-md-12 order-md-1 text-md-center text-center">
                <div class="mt-30 hidden-md-up"></div>
                <h1>Mundo de Telgopor.</h1>
                <p class="lead">Nos dedicamos a la fabricación y comercialización de productos de poliestireno expandido, tratamos de satisfacer las necesidades de nuestros clientes, dándole una atención personalizada asesorando y ofreciéndoles productos a medida. Nos comprometemos con honestidad y responsabilidad para proveer productos con calidad a un buen precio.</p>
            </div>
        </div>
    </section>
    <!-- Product-->
    <section class="container padding-top-1x">
        <div class="row">
            <div class="col-md-5 order-md-2">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ON9wFdPdQl8?rel=0" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="col-md-7 order-md-1 text-md-left text-center">
                <div class="mt-30 hidden-md-up"></div>
                <h2>Producto.</h2>
                <p>Siendo el Telgopor un material inocuo, de olor y sabor neutros, que no favorece el crecimiento de hongos y bacterias, es el más indicado para emplearse en la protección, transporte y comercialización de cualquier producto.</p>
                <p>Proveemos embalajes a medida a todo tipo de industrias. Entre ellas: industria alimenticia, electrónica, automotriz, equipamiento médico, cristalería, laboratorios, metalmecánica, etc.</p>
                <ul class="list-icon">
                    <li> <i class="icon-check text-success"></i>Liviano.</li>
                    <li> <i class="icon-check text-success"></i>Aislante térmico.</li>
                    <li> <i class="icon-check text-success"></i>Correcta resistencia al esfuerzo cortante.</li>
                    <li> <i class="icon-check text-success"></i>Ecológico.</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Top Categories-->
    <section class="container padding-top-3x">
        <h3 class="text-center mb-30">Productos destacados</h3>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-grid-ls.html">
                        <div class="inner">
                            <div class="main-img"><img src="{{ asset('frontendshop/img/01-1.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/categories/01.jpg" alt="Category"></div>
                            <div class="thumblist"><img src="{{ asset('frontendshop/img/02-2.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/categories/02.jpg" alt="Category"><img src="{{ asset('frontendshop/img/03-2.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/categories/03.jpg" alt="Category"></div>
                        </div></a>
                    <div class="card-body text-center">
                        <h4 class="card-title">Clothing</h4>
                        <p class="text-muted">Starting from $49.99</p><a class="btn btn-outline-primary btn-sm" href="shop-grid-ls.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-grid-ls.html">View Products</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-grid-ls.html">
                        <div class="inner">
                            <div class="main-img"><img src="{{ asset('frontendshop/img/04.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/categories/04.jpg" alt="Category"></div>
                            <div class="thumblist"><img src="{{ asset('frontendshop/img/05.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/categories/05.jpg" alt="Category"><img src="{{ asset('frontendshop/img/06.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/categories/06.jpg" alt="Category"></div>
                        </div></a>
                    <div class="card-body text-center">
                        <h4 class="card-title">Shoes</h4>
                        <p class="text-muted">Starting from $56.00</p><a class="btn btn-outline-primary btn-sm" href="shop-grid-ls.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-grid-ls.html">View Products</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card mb-30"><a class="card-img-tiles" href="shop-grid-ls.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-grid-ls.html">
                        <div class="inner">
                            <div class="main-img"><img src="{{ asset('frontendshop/img/07.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/categories/07.jpg" alt="Category"></div>
                            <div class="thumblist"><img src="{{ asset('frontendshop/img/08.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/categories/08.jpg" alt="Category"><img src="{{ asset('frontendshop/img/09.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/categories/09.jpg" alt="Category"></div>
                        </div></a>
                    <div class="card-body text-center">
                        <h4 class="card-title">Bags</h4>
                        <p class="text-muted">Starting from $27.00</p><a class="btn btn-outline-primary btn-sm" href="shop-grid-ls.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-grid-ls.html">View Products</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--<!-- Promo #1-->--}}
    {{--<section class="container-fluid padding-top-3x">--}}
        {{--<div class="row justify-content-center">--}}
            {{--<div class="col-xl-5 col-lg-6 mb-30">--}}
                {{--<div class="rounded bg-faded position-relative padding-top-3x padding-bottom-3x"><span class="product-badge text-danger" style="top: 24px; left: 24px;">Limited Offer</span>--}}
                    {{--<div class="text-center">--}}
                        {{--<h3 class="h2 text-normal mb-1">New</h3>--}}
                        {{--<h2 class="display-2 text-bold mb-2">Sunglasses</h2>--}}
                        {{--<h4 class="h3 text-normal mb-4">collection at discounted price!</h4>--}}
                        {{--<div class="countdown mb-3" data-date-time="11/30/2017 12:00:00">--}}
                            {{--<div class="item">--}}
                                {{--<div class="days">00</div><span class="days_ref">Days</span>--}}
                            {{--</div>--}}
                            {{--<div class="item">--}}
                                {{--<div class="hours">00</div><span class="hours_ref">Hours</span>--}}
                            {{--</div>--}}
                            {{--<div class="item">--}}
                                {{--<div class="minutes">00</div><span class="minutes_ref">Mins</span>--}}
                            {{--</div>--}}
                            {{--<div class="item">--}}
                                {{--<div class="seconds">00</div><span class="seconds_ref">Secs</span>--}}
                            {{--</div>--}}
                        {{--</div><br><a class="btn btn-primary margin-bottom-none" href="#">View Offers</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-xl-5 col-lg-6 mb-30" style="min-height: 270px;">--}}
                {{--<div class="img-cover rounded" style="background-image: url({{ asset('frontendshop/img/home01.jpg') }})/*tpa=http://themes.rokaux.com/unishop/v1.1/img/banners/home01.jpg*/;"></div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<!-- Promo #2-->--}}
    {{--<section class="container-fluid">--}}
        {{--<div class="row justify-content-center">--}}
            {{--<div class="col-xl-10 col-lg-12">--}}
                {{--<div class="fw-section rounded padding-top-4x padding-bottom-4x" style="background-image: url({{ asset('frontendshop/img/home02.jpg') }})/*tpa=http://themes.rokaux.com/unishop/v1.1/img/banners/home02.jpg*/;"><span class="overlay rounded" style="opacity: .35;"></span>--}}
                    {{--<div class="text-center">--}}
                        {{--<h3 class="display-4 text-normal text-white text-shadow mb-1">Old Collection</h3>--}}
                        {{--<h2 class="display-2 text-bold text-white text-shadow">HUGE SALE!</h2>--}}
                        {{--<h4 class="d-inline-block h2 text-normal text-white text-shadow border-default border-left-0 border-right-0 mb-4">at our outlet stores</h4><br><a class="btn btn-primary margin-bottom-none" href="contacts.html" tppabs="http://themes.rokaux.com/unishop/v1.1/contacts.html">Locate Stores</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- Featured Products Carousel-->
    <section class="container padding-top-3x padding-bottom-1x">
        <h3 class="text-center mb-30">Más Vendidos</h3>
        <div class="owl-carousel" data-owl-carousel="{ &quot;nav&quot;: false, &quot;dots&quot;: true, &quot;margin&quot;: 30, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}} }">
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card">
                    <div class="product-badge text-danger">22% Off</div><a class="product-thumb" href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html"><img src="{{ asset('frontendshop/img/09-1.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/products/09.jpg" alt="Product"></a>
                    <h3 class="product-title"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html">Rocket Dog</a></h3>
                    <h4 class="product-price">
                        <del>$44.95</del>$34.99
                    </h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card">
                    <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star"></i>
                    </div><a class="product-thumb" href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html"><img src="{{ asset('frontendshop/img/03-3.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/products/03.jpg" alt="Product"></a>
                    <h3 class="product-title"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html">Oakley Kickback</a></h3>
                    <h4 class="product-price">$155.00</h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card"><a class="product-thumb" href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html"><img src="{{ asset('frontendshop/img/12.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/products/12.jpg" alt="Product"></a>
                    <h3 class="product-title"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html">Vented Straw Fedora</a></h3>
                    <h4 class="product-price">$49.50</h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card">
                    <div class="rating-stars"><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i><i class="icon-star filled"></i>
                    </div><a class="product-thumb" href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html"><img src="{{ asset('frontendshop/img/11.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/products/11.jpg" alt="Product"></a>
                    <h3 class="product-title"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html">Top-Sider Fathom</a></h3>
                    <h4 class="product-price">$90.00</h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card"><a class="product-thumb" href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html"><img src="{{ asset('frontendshop/img/04-1.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/products/04.jpg" alt="Product"></a>
                    <h3 class="product-title"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html">Waist Leather Belt</a></h3>
                    <h4 class="product-price">$47.00</h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product-->
            <div class="grid-item">
                <div class="product-card">
                    <div class="product-badge text-danger">50% Off</div><a class="product-thumb" href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html"><img src="{{ asset('frontendshop/img/01-2.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/products/01.jpg" alt="Product"></a>
                    <h3 class="product-title"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html">Unionbay Park</a></h3>
                    <h4 class="product-price">
                        <del>$99.99</del>$49.99
                    </h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip" title="Whishlist"><i class="icon-heart"></i></button>
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Product" data-toast-message="successfuly added to cart!">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--<!-- Product Widgets-->--}}
    {{--<section class="container padding-bottom-2x">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-4 col-sm-6">--}}
                {{--<div class="widget widget-featured-products">--}}
                    {{--<h3 class="widget-title">Top Sellers</h3>--}}
                    {{--<!-- Entry-->--}}
                    {{--<div class="entry">--}}
                        {{--<div class="entry-thumb"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html"><img src="{{ asset('frontendshop/img/01-3.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/widget/01.jpg" alt="Product"></a></div>--}}
                        {{--<div class="entry-content">--}}
                            {{--<h4 class="entry-title"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html">Oakley Kickback</a></h4><span class="entry-meta">$155.00</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- Entry-->--}}
                    {{--<div class="entry">--}}
                        {{--<div class="entry-thumb"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html"><img src="{{ asset('frontendshop/img/03-4.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/widget/03.jpg" alt="Product"></a></div>--}}
                        {{--<div class="entry-content">--}}
                            {{--<h4 class="entry-title"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html">Vented Straw Fedora</a></h4><span class="entry-meta">$49.50</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- Entry-->--}}
                    {{--<div class="entry">--}}
                        {{--<div class="entry-thumb"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html"><img src="{{ asset('frontendshop/img/04-2.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/widget/04.jpg" alt="Product"></a></div>--}}
                        {{--<div class="entry-content">--}}
                            {{--<h4 class="entry-title"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html">Big Wordmark Tote</a></h4><span class="entry-meta">$29.99</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4 col-sm-6">--}}
                {{--<div class="widget widget-featured-products">--}}
                    {{--<h3 class="widget-title">New Arrivals</h3>--}}
                    {{--<!-- Entry-->--}}
                    {{--<div class="entry">--}}
                        {{--<div class="entry-thumb"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html"><img src="{{ asset('frontendshop/img/05-1.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/widget/05.jpg" alt="Product"></a></div>--}}
                        {{--<div class="entry-content">--}}
                            {{--<h4 class="entry-title"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html">Union Park</a></h4><span class="entry-meta">$49.99</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- Entry-->--}}
                    {{--<div class="entry">--}}
                        {{--<div class="entry-thumb"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html"><img src="{{ asset('frontendshop/img/06-1.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/widget/06.jpg" alt="Product"></a></div>--}}
                        {{--<div class="entry-content">--}}
                            {{--<h4 class="entry-title"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html">Cole Haan Crossbody</a></h4><span class="entry-meta">$200.00</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- Entry-->--}}
                    {{--<div class="entry">--}}
                        {{--<div class="entry-thumb"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html"><img src="{{ asset('frontendshop/img/07-1.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/widget/07.jpg" alt="Product"></a></div>--}}
                        {{--<div class="entry-content">--}}
                            {{--<h4 class="entry-title"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html">Skagen Holst Watch</a></h4><span class="entry-meta">$145.00</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-4 col-sm-6">--}}
                {{--<div class="widget widget-featured-products">--}}
                    {{--<h3 class="widget-title">Best Rated</h3>--}}
                    {{--<!-- Entry-->--}}
                    {{--<div class="entry">--}}
                        {{--<div class="entry-thumb"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html"><img src="{{ asset('frontendshop/img/08-1.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/widget/08.jpg" alt="Product"></a></div>--}}
                        {{--<div class="entry-content">--}}
                            {{--<h4 class="entry-title"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html">Jordan's City Hoodie</a></h4><span class="entry-meta">$65.00</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- Entry-->--}}
                    {{--<div class="entry">--}}
                        {{--<div class="entry-thumb"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html"><img src="{{ asset('frontendshop/img/09-2.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/widget/09.jpg" alt="Product"></a></div>--}}
                        {{--<div class="entry-content">--}}
                            {{--<h4 class="entry-title"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html">Palace Shell Track Jacket</a></h4><span class="entry-meta">$36.99</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- Entry-->--}}
                    {{--<div class="entry">--}}
                        {{--<div class="entry-thumb"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html"><img src="{{ asset('frontendshop/img/10.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/shop/widget/10.jpg" alt="Product"></a></div>--}}
                        {{--<div class="entry-content">--}}
                            {{--<h4 class="entry-title"><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html">Off the Shoulder Top</a></h4><span class="entry-meta">$128.00</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<!-- Popular Brands-->--}}
    {{--<section class="bg-faded padding-top-3x padding-bottom-3x">--}}
        {{--<div class="container">--}}
            {{--<h3 class="text-center mb-30 pb-2">Popular Brands</h3>--}}
            {{--<div class="owl-carousel owl-loaded owl-drag" data-owl-carousel="{"nav": false, "dots": true, "margin": 30, "responsive": {"0":{"items":1},"576":{"items":2},"768":{"items":3},"991":{"items":4},"1200":{"items":4}} }">--}}
            {{--<div class="owl-carousel owl-loaded owl-drag" data-owl-carousel="{ 'nav': false, 'dots': false, 'loop': true, 'autoplay': true, 'autoplayTimeout': 4000, 'responsive': {'0':{'items':2}, '470':{'items':3},'630':{'items':4},'991':{'items':5},'1200':{'items':6}} }">--}}
                {{--<img class="d-block w-110 opacity-75 m-auto" src="{{ asset('frontendshop/img/01-1.png') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/brands/01.png" alt="Adidas">--}}
                {{--<img class="d-block w-110 opacity-75 m-auto" src="{{ asset('frontendshop/img/02-1.png') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/brands/02.png" alt="Brooks">--}}
                {{--<img class="d-block w-110 opacity-75 m-auto" src="{{ asset('frontendshop/img/03-1.png') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/brands/03.png" alt="Valentino">--}}
                {{--<img class="d-block w-110 opacity-75 m-auto" src="{{ asset('frontendshop/img/04.png') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/brands/04.png" alt="Nike">--}}
                {{--<img class="d-block w-110 opacity-75 m-auto" src="{{ asset('frontendshop/img/05.png') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/brands/05.png" alt="Puma">--}}
                {{--<img class="d-block w-110 opacity-75 m-auto" src="{{ asset('frontendshop/img/06.png') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/brands/06.png" alt="New Balance">--}}
                {{--<img class="d-block w-110 opacity-75 m-auto" src="{{ asset('frontendshop/img/07.png') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/brands/07.png" alt="Dior"></div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- Services-->
    <section class="container padding-top-1x padding-bottom-2x">
        <h3 class="text-center mb-30 pb-2">Servicios</h3>
        <div class="row">
            <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="{{ asset('frontendshop/img/01-2.png') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/services/01.png" alt="Shipping">
                <h6>Free Worldwide Shipping</h6>
                <p class="text-muted margin-bottom-none">Free shipping for all orders over $100</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="{{ asset('frontendshop/img/02-2.png') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/services/02.png" alt="Money Back">
                <h6>Money Back Guarantee</h6>
                <p class="text-muted margin-bottom-none">We return money within 30 days</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="{{ asset('frontendshop/img/03-2.png') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/services/03.png" alt="Support">
                <h6>24/7 Customer Support</h6>
                <p class="text-muted margin-bottom-none">Friendly 24/7 customer support</p>
            </div>
            <div class="col-md-3 col-sm-6 text-center mb-30"><img class="d-block w-90 img-thumbnail rounded-circle mx-auto mb-3" src="{{ asset('frontendshop/img/04-1.png') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/services/04.png" alt="Payment">
                <h6>Secure Online Payment</h6>
                <p class="text-muted margin-bottom-none">We posess SSL / Secure Certificate</p>
            </div>
        </div>
    </section>
@stop

