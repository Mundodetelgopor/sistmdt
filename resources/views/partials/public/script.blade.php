<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
{!! Html::script('frontend/plugins/jquery-ui/jquery-ui.js') !!}
{!! Html::script('frontend/plugins/bootstrap/js/bootstrap.min.js') !!}
{!! Html::script('frontend/plugins/rs-plugin/js/jquery.themepunch.tools.min.js') !!}
{!! Html::script('frontend/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js') !!}
{!! Html::script('frontend/plugins/owl-carousel/owl.carousel.js') !!}
{!! Html::script('frontend/plugins/selectbox/jquery.selectbox-0.1.3.min.js') !!}
{!! Html::script('frontend/plugins/countdown/jquery.syotimer.js') !!}
{!! Html::script('frontend/plugins/smoothscroll/SmoothScroll.min.js') !!}
{!! Html::script('frontend/options/optionswitcher.js') !!}
{!! Html::script('frontend/js/custom.js') !!}

<script type="text/javascript">
    $(document).ready(function () {
        $(document).on("scroll", onScroll);

        //smoothscroll
        $('a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            $(document).off("scroll");

            $('a[id^="menu"]').each(function () {
                $(this).parent().removeClass('active');
            })
            $(this).parent().addClass('active');

            var target = this.hash,
                menu = target;
            $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top+2
            }, 500, 'swing', function () {
                window.location.hash = target;
                $(document).on("scroll", onScroll);
            });
        });
    });

    function onScroll(event){
        var scrollPos = $(document).scrollTop();
        $('#menu-nav a').each(function () {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));

            if (refElement.position() !== undefined){
                if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                    $('#menu-nav ul li a').parent().removeClass("active");
                    currLink.parent().addClass("active");
                }
                else{
                    currLink.parent().removeClass("active");
                }
            }
        });
    }
</script>


















