<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
{!! Html::script('frontendshop/js/vendor.min.js') !!}
{{--<script src="vendor.min.js" tppabs="http://themes.rokaux.com/unishop/v1.1/js/vendor.min.js"></script>--}}
{!! Html::script('frontendshop/js/scripts.min.js') !!}
{{--<script src="scripts.min.js" tppabs="http://themes.rokaux.com/unishop/v1.1/js/scripts.min.js"></script>--}}
<!-- Customizer scripts-->
{!! Html::script('frontendshop/js/customizer.min.js') !!}
{{--<script src="customizer.min.js" tppabs="http://themes.rokaux.com/unishop/v1.1/customizer/customizer.min.js"></script>--}}

<!-- Google Maps javascript -->
{!! Html::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyD7VgE3JDBxYMCNCQv7KHwbWBuev4icljg') !!}
{!! Html::script('frontend/plugins/google.map.config.js') !!}
@yield('script')


















