<header class="navbar navbar-sticky">
    <!-- Search-->
    <form class="site-search" method="get">
        <input type="text" name="site_search" placeholder="Type to search...">
        <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
    </form>
    <div class="site-branding">
        <div class="inner">
            <!-- Off-Canvas Toggle (#shop-categories)--><a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>
            <!-- Off-Canvas Toggle (#mobile-menu)--><a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
            <!-- Site Logo--><a class="site-logo" href="/"><img src="{{ asset('frontend/img/mdt/MDT LOGO.png') }}" alt="Mundo de Telgopor"></a>
        </div>
    </div>
    <!-- Main Navigation-->
    <nav class="site-menu">
        <ul>
            <li class="active"><a href="/"><span>Inicio</span></a>
            </li>
            <li><a href="shop-grid-ls.html"><span>Shop</span></a>
                <ul class="sub-menu">
                    <li><a href="shop-categories.html">Shop Categories</a></li>
                    <li class="has-children"><a href="shop-grid-ls.html"><span>Shop Grid</span></a>
                        <ul class="sub-menu">
                            <li><a href="shop-grid-ls.html">Grid Left Sidebar</a></li>
                            <li><a href="shop-grid-rs.html">Grid Right Sidebar</a></li>
                            <li><a href="shop-grid-ns.html">Grid No Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a href="shop-list-ls.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-list-ls.html"><span>Shop List</span></a>
                        <ul class="sub-menu">
                            <li><a href="shop-list-ls.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-list-ls.html">List Left Sidebar</a></li>
                            <li><a href="shop-list-rs.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-list-rs.html">List Right Sidebar</a></li>
                            <li><a href="shop-list-ns.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-list-ns.html">List No Sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html">Single Product</a></li>
                    <li><a href="cart.html" tppabs="http://themes.rokaux.com/unishop/v1.1/cart.html">Cart</a></li>
                    <li class="has-children"><a href="checkout-address.html" tppabs="http://themes.rokaux.com/unishop/v1.1/checkout-address.html"><span>Checkout</span></a>
                        <ul class="sub-menu">
                            <li><a href="checkout-address.html" tppabs="http://themes.rokaux.com/unishop/v1.1/checkout-address.html">Address</a></li>
                            <li><a href="checkout-shipping.html" tppabs="http://themes.rokaux.com/unishop/v1.1/checkout-shipping.html">Shipping</a></li>
                            <li><a href="checkout-payment.html" tppabs="http://themes.rokaux.com/unishop/v1.1/checkout-payment.html">Payment</a></li>
                            <li><a href="checkout-review.html" tppabs="http://themes.rokaux.com/unishop/v1.1/checkout-review.html">Review</a></li>
                            <li><a href="checkout-complete.html" tppabs="http://themes.rokaux.com/unishop/v1.1/checkout-complete.html">Complete</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="has-megamenu"><a href="#"><span>Mega Menu</span></a>
                <ul class="mega-menu">
                    <li><span class="mega-menu-title">Top Categories</span>
                        <ul class="sub-menu">
                            <li><a href="#">Men's Shoes</a></li>
                            <li><a href="#">Women's Shoes</a></li>
                            <li><a href="#">Shirts and Tops</a></li>
                            <li><a href="#">Swimwear</a></li>
                            <li><a href="#">Shorts and Pants</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>
                    </li>
                    <li><span class="mega-menu-title">Specialty Shops</span>
                        <ul class="sub-menu">
                            <li><a href="#">Junior's Shop</a></li>
                            <li><a href="#">Swim Shop</a></li>
                            <li><a href="#">Athletic Shop</a></li>
                            <li><a href="#">Outdoor Shop</a></li>
                            <li><a href="#">Luxury Shop</a></li>
                            <li><a href="#">Accessories Shop</a></li>
                        </ul>
                    </li>
                    <li>
                        <section class="promo-box" style="background-image: url({{ asset('frontendshop/img/02.jpg') }})/*tpa=http://themes.rokaux.com/unishop/v1.1/img/banners/02.jpg*/;"><span class="overlay-dark" style="opacity: .4;"></span>
                            <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                                <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                                <h3 class="text-bold text-light text-shadow">Sunglasses</h3><a class="btn btn-sm btn-primary" href="#">Shop Now</a>
                            </div>
                        </section>
                    </li>
                    <li>
                        <section class="promo-box" style="background-image: url({{ asset('frontendshop/img/03.jpg') }})/*tpa=http://themes.rokaux.com/unishop/v1.1/img/banners/03.jpg*/;">
                            <!-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute.--><span class="overlay-dark" style="opacity: .45;"></span>
                            <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                                <h3 class="text-bold text-light text-shadow">Limited Offer</h3>
                                <h4 class="text-light text-thin text-shadow">save up to 50%!</h4><a class="btn btn-sm btn-primary" href="#">Learn More</a>
                            </div>
                        </section>
                    </li>
                </ul>
            </li>
            <li><a href="account-orders.html" tppabs="http://themes.rokaux.com/unishop/v1.1/account-orders.html"><span>Account</span></a>
                <ul class="sub-menu">
                    <li><a href="account-login.html" tppabs="http://themes.rokaux.com/unishop/v1.1/account-login.html">Login / Register</a></li>
                    <li><a href="account-password-recovery.html" tppabs="http://themes.rokaux.com/unishop/v1.1/account-password-recovery.html">Password Recovery</a></li>
                    <li><a href="account-orders.html" tppabs="http://themes.rokaux.com/unishop/v1.1/account-orders.html">Orders List</a></li>
                    <li><a href="account-wishlist.html" tppabs="http://themes.rokaux.com/unishop/v1.1/account-wishlist.html">Wishlist</a></li>
                    <li><a href="account-profile.html" tppabs="http://themes.rokaux.com/unishop/v1.1/account-profile.html">Profile Page</a></li>
                    <li><a href="account-address.html" tppabs="http://themes.rokaux.com/unishop/v1.1/account-address.html">Contact / Shipping Address</a></li>
                    <li><a href="account-tickets.html" tppabs="http://themes.rokaux.com/unishop/v1.1/account-tickets.html">My Tickets</a></li>
                </ul>
            </li>
            <li><a href="blog-rs.html" tppabs="http://themes.rokaux.com/unishop/v1.1/blog-rs.html"><span>Blog</span></a>
                <ul class="sub-menu">
                    <li class="has-children"><a href="blog-rs.html" tppabs="http://themes.rokaux.com/unishop/v1.1/blog-rs.html"><span>Blog Layout</span></a>
                        <ul class="sub-menu">
                            <li><a href="blog-rs.html" tppabs="http://themes.rokaux.com/unishop/v1.1/blog-rs.html">Blog Right Sidebar</a></li>
                            <li><a href="blog-ls.html" tppabs="http://themes.rokaux.com/unishop/v1.1/blog-ls.html">Blog Left Sidebar</a></li>
                            <li><a href="blog-ns.html" tppabs="http://themes.rokaux.com/unishop/v1.1/blog-ns.html">Blog No Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="has-children"><a href="blog-single-rs.html" tppabs="http://themes.rokaux.com/unishop/v1.1/blog-single-rs.html"><span>Single Post Layout</span></a>
                        <ul class="sub-menu">
                            <li><a href="blog-single-rs.html" tppabs="http://themes.rokaux.com/unishop/v1.1/blog-single-rs.html">Post Right Sidebar</a></li>
                            <li><a href="blog-single-ls.html" tppabs="http://themes.rokaux.com/unishop/v1.1/blog-single-ls.html">Post Left Sidebar</a></li>
                            <li><a href="blog-single-ns.html" tppabs="http://themes.rokaux.com/unishop/v1.1/blog-single-ns.html">Post No Sidebar</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#"><span>Pages</span></a>
                <ul class="sub-menu">
                    <li><a href="about.html" tppabs="http://themes.rokaux.com/unishop/v1.1/about.html">About Us</a></li>
                    <li><a href="contacts.html" tppabs="http://themes.rokaux.com/unishop/v1.1/contacts.html">Contacts</a></li>
                    <li><a href="faq.html" tppabs="http://themes.rokaux.com/unishop/v1.1/faq.html">Help / FAQ</a></li>
                    <li><a href="search-results.html" tppabs="http://themes.rokaux.com/unishop/v1.1/search-results.html">Search Results</a></li>
                    <li><a href="404.html" tppabs="http://themes.rokaux.com/unishop/v1.1/404.html">404 Not Found</a></li>
                    <li><a class="text-danger" href="dev-setup.html" tppabs="http://themes.rokaux.com/unishop/v1.1/docs/dev-setup.html">Documentation</a></li>
                </ul>
            </li>
            <li class="has-megamenu"><a href="accordion.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/accordion.html"><span>Components</span></a>
                <ul class="mega-menu">
                    <li><span class="mega-menu-title">A - F</span>
                        <ul class="sub-menu">
                            <li><a href="accordion.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/accordion.html">Accordion</a></li>
                            <li><a href="alerts.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/alerts.html">Alerts</a></li>
                            <li><a href="buttons.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/buttons.html">Buttons</a></li>
                            <li><a href="cards.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/cards.html">Cards</a></li>
                            <li><a href="carousel.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/carousel.html">Carousel</a></li>
                            <li><a href="countdown.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/countdown.html">Countdown</a></li>
                            <li><a href="forms.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/forms.html">Forms</a></li>
                        </ul>
                    </li>
                    <li><span class="mega-menu-title">F - M</span>
                        <ul class="sub-menu">
                            <li><a href="gallery.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/gallery.html">Gallery</a></li>
                            <li><a href="google-maps.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/google-maps.html">Google Maps</a></li>
                            <li><a href="images.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/images.html">Images &amp; Figures</a></li>
                            <li><a href="list-group.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/list-group.html">List Group</a></li>
                            <li><a href="market-social-buttons.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/market-social-buttons.html">Market &amp; Social Buttons</a></li>
                            <li><a href="media.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/media.html">Media Object</a></li>
                            <li><a href="modal.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/modal.html">Modal</a></li>
                        </ul>
                    </li>
                    <li><span class="mega-menu-title">P - T</span>
                        <ul class="sub-menu">
                            <li><a href="pagination.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/pagination.html">Pagination</a></li>
                            <li><a href="pills.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/pills.html">Pills</a></li>
                            <li><a href="progress-bars.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/progress-bars.html">Progress Bars</a></li>
                            <li><a href="shop-items.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/shop-items.html">Shop Items</a></li>
                            <li><a href="tables.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/tables.html">Tables</a></li>
                            <li><a href="tabs.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/tabs.html">Tabs</a></li>
                            <li><a href="team.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/team.html">Team</a></li>
                        </ul>
                    </li>
                    <li><span class="mega-menu-title">T - W</span>
                        <ul class="sub-menu">
                            <li><a href="toasts.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/toasts.html">Toast Notifications</a></li>
                            <li><a href="tooltips-popovers.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/tooltips-popovers.html">Tooltips &amp; Popovers</a></li>
                            <li><a href="typography.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/typography.html">Typography</a></li>
                            <li><a href="video-player.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/video-player.html">Video Player</a></li>
                            <li><a href="widgets.html" tppabs="http://themes.rokaux.com/unishop/v1.1/components/widgets.html">Widgets</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- Toolbar-->
    <div class="toolbar">
        <div class="inner">
            <div class="tools">
                <div class="search"><i class="icon-search"></i></div>
                <div class="account"><a href="account-orders.html" tppabs="http://themes.rokaux.com/unishop/v1.1/account-orders.html"></a><i class="icon-head"></i>
                    <ul class="toolbar-dropdown">
                        <li class="sub-menu-user">
                            <div class="user-ava"><img src="{{ asset('frontendshop/img/user-ava-sm.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/account/user-ava-sm.jpg" alt="Daniel Adams">
                            </div>
                            <div class="user-info">
                                <h6 class="user-name">Daniel Adams</h6><span class="text-xs text-muted">290 Reward points</span>
                            </div>
                        </li>
                        <li><a href="account-profile.html" tppabs="http://themes.rokaux.com/unishop/v1.1/account-profile.html">My Profile</a></li>
                        <li><a href="account-orders.html" tppabs="http://themes.rokaux.com/unishop/v1.1/account-orders.html">Orders List</a></li>
                        <li><a href="account-wishlist.html" tppabs="http://themes.rokaux.com/unishop/v1.1/account-wishlist.html">Wishlist</a></li>
                        <li class="sub-menu-separator"></li>
                        <li><a href="#"> <i class="icon-unlock"></i>Logout</a></li>
                    </ul>
                </div>
                <div class="cart"><a href="cart.html" tppabs="http://themes.rokaux.com/unishop/v1.1/cart.html"></a><i class="icon-bag"></i><span class="count">3</span><span class="subtotal">$289.68</span>
                    <div class="toolbar-dropdown">
                        <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html"><img src="{{ asset('frontendshop/img/01.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/cart-dropdown/01.jpg" alt="Product"></a>
                            <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html">Unionbay Park</a><span class="dropdown-product-details">1 x $43.90</span></div>
                        </div>
                        <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html"><img src="{{ asset('frontendshop/img/02-1.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/cart-dropdown/02.jpg" alt="Product"></a>
                            <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html">Daily Fabric Cap</a><span class="dropdown-product-details">2 x $24.89</span></div>
                        </div>
                        <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html"><img src="{{ asset('frontendshop/img/03-1.jpg') }}" tppabs="http://themes.rokaux.com/unishop/v1.1/img/cart-dropdown/03.jpg" alt="Product"></a>
                            <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html" tppabs="http://themes.rokaux.com/unishop/v1.1/shop-single.html">Haan Crossbody</a><span class="dropdown-product-details">1 x $200.00</span></div>
                        </div>
                        <div class="toolbar-dropdown-group">
                            <div class="column"><span class="text-lg">Total:</span></div>
                            <div class="column text-right"><span class="text-lg text-medium">$289.68&nbsp;</span></div>
                        </div>
                        <div class="toolbar-dropdown-group">
                            <div class="column"><a class="btn btn-sm btn-block btn-secondary" href="cart.html" tppabs="http://themes.rokaux.com/unishop/v1.1/cart.html">View Cart</a></div>
                            <div class="column"><a class="btn btn-sm btn-block btn-success" href="checkout-address.html" tppabs="http://themes.rokaux.com/unishop/v1.1/checkout-address.html">Checkout</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>