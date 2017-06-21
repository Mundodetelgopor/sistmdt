<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('partials.public.header')

    @include('partials.public.style')

</head>

<body class="body-wrapper">
<!--=== option Switcher ===-->
    @include('partials.public.option')
<!--/option-switcher-->

<div class="main-wrapper">
    @yield('content')

    <!-- FOOTER -->
    @include('partials.public.footer')
</div>

<!-- LOGIN MODAL -->
@include('partials.public.login_modal')

<!-- SIGN UP MODAL -->
@include('partials.public.signup_modal')

<!-- PORDUCT QUICK VIEW MODAL -->
@include('partials.public.productquick_modal')

@include('partials.public.script')

</body>
</html>