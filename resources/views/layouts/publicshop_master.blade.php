<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
@include('partials.publicshop.header')

@include('partials.publicshop.style')

</head>

<!-- Body-->
<body>
<!-- Google Tag Manager (noscript)-->
<noscript>
    <iframe src="ns.html-id=GTM-T4DJFPZ" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
</noscript>
<!-- Template Customizer-->
@include('partials.publicshop.customizer')
<!-- Off-Canvas Category Menu-->
@include('partials.publicshop.categorymenu')
<!-- Off-Canvas Mobile Menu-->
@include('partials.publicshop.mobilemenu')
<!-- Topbar-->
@include('partials.publicshop.topbar')
<!-- Navbar-->
<!-- Remove ".navbar-sticky" class to make navigation bar scrollable with the page.-->
@include('partials.publicshop.navbar')
<!-- Off-Canvas Wrapper-->
<div class="offcanvas-wrapper">
    @yield('content')

    <!-- Site Footer-->
    @include('partials.publicshop.footer')
</div>
<!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
<!-- Backdrop-->
<div class="site-backdrop"></div>
@include('partials.publicshop.script')
</body>
</html>



