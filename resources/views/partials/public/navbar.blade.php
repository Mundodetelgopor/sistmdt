<nav class="navbar navbar-main navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index-v1.html"><img src="{{ asset('frontend/img/mdt-logo.png') }}" width="180" height="80" alt="logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown active">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inicio</a>
                </li>
                <li class="dropdown megaDropMenu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="300" data-close-others="true" aria-expanded="false">Producto</b></a>
                    <ul class="dropdown-menu row">
                        <li class="col-sm-3 col-xs-12">
                            <ul class="list-unstyled">
                                <li>Products Grid View</li>
                                <li><a href="product-grid-left-sidebar.html">Products Sidebar Left</a></li>
                                <li><a href="product-grid-right-sidebar.html">Products Sidebar Right</a></li>
                                <li><a href="product-grid-3-col-filter.html">Products 3 Columns V1</a></li>
                                <li><a href="product-grid-3-col.html">Products 3 Columns V2</a></li>
                                <li><a href="product-grid-4-col.html">Products 4 Columns</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3 col-xs-12">
                            <ul class="list-unstyled">
                                <li>Products List View</li>
                                <li><a href="product-list-left-sidebar.html">Products Sidebar Left</a></li>
                                <li><a href="product-list-right-sidebar.html">Products Sidebar Right</a></li>
                                <li class="listHeading">Others</li>
                                <li><a href="single-product.html">Single Product</a></li>
                                <li><a href="cart-page.html">Cart Page</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3 col-xs-12">
                            <ul class="list-unstyled">
                                <li>Checkout</li>
                                <li><a href="checkout-step-1.html">Step 1 - Address</a></li>
                                <li><a href="checkout-step-2.html">Step 2 - Shipping</a></li>
                                <li><a href="checkout-step-3.html">Step 3 - Payment</a></li>
                                <li><a href="checkout-step-4.html">Step 4 - Payment</a></li>
                                <li><a href="checkout-complete.html">Order Complete</a></li>
                            </ul>
                        </li>
                        <li class="col-sm-3 col-xs-12">
                            <a href="#" class="menu-photo"><img src="img/menu-photo.jpg" alt="menu-img"></a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ventajas</a>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicios</a>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Somos</a>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contacto</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>