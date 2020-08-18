<?php
if (!isset($seo)) {
    $seo = (object)array('seo_title' => $siteSetting->site_name, 'seo_description' => $siteSetting->site_name, 'seo_keywords' => $siteSetting->site_name, 'seo_other' => '');
}
?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="{{ (session('localeDir', 'ltr'))}}" dir="{{ (session('localeDir', 'ltr'))}}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{__($seo->seo_title) }}</title>
    <meta name="Description" content="{!! $seo->seo_description !!}">
    <meta name="Keywords" content="{!! $seo->seo_keywords !!}">

    {!! $seo->seo_other !!}

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="{{asset('website/images/favicon.png')}}">
    <link href="{{asset('website/css/index.min.css')}}" rel="stylesheet">
    @if((session('localeDir', 'ltr') == 'rtl'))
    <!-- Rtl Style -->
        <link href="{{asset('/')}}css/rtl-style.css" rel="stylesheet">
    @endif

    @yield('style')

    @stack('styles')
</head>

<body>
@yield('content')







<!-- Bootstrap's JavaScript -->
<script src="{{asset('website/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('website/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('website/js/swiper.min.js')}}"></script>
<script src="{{asset('website/js/aos.js')}}"></script>
<script src="{{asset('website/js/fotorama.js')}}"></script>
<script src="{{asset('website/js/jquery.mb.YTPlayer.min.js')}}"></script>
<script src="{{asset('website/js/custom-select.min.js')}}"></script>
<script src="{{asset('website/js/star-rating.min.js')}}"></script>
<script src="{{asset('website/js/lightgallery.js')}}"></script>
<script src="{{asset('website/js/lg-thumbnail.js')}}"></script>
<script src="https://support.limitlessgroup-eg.com/chat_widget.js"></script>
@yield('scripts')
<script src="{{asset('website/js/index.js')}}"></script>
{{--<script src="{{asset('/')}}js/jquery.min.js"></script>
<script src="{{asset('/')}}js/bootstrap.min.js"></script>
<script src="{{asset('/')}}js/popper.js"></script>
<script src="{{asset('/')}}js/nprogress.js"></script>
<script src='https://vjs.zencdn.net/5.4.6/video.js'></script>
<!-- Owl carousel -->
<script src="{{asset('/')}}js/owl.carousel.js"></script>
<script src="{{ asset('/') }}admin_assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="{{ asset('/') }}admin_assets/global/plugins/Bootstrap-3-Typeahead/bootstrap3-typeahead.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="{{ asset('/') }}admin_assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="{{ asset('/') }}admin_assets/global/plugins/jquery.scrollTo.min.js" type="text/javascript"></script>
<!-- Revolution Slider -->
<script type="text/javascript" src="{{ asset('/') }}js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>--}}
{!! NoCaptcha::renderJs() !!}

@stack('scripts')
<!-- Custom js -->
{{--<script src="{{asset('/')}}js/script.js"></script>--}}
<script type="text/JavaScript">
    $(document).ready(function(){
        $(document).scrollTo('.has-error', 2000);
    });
    function showProcessingForm(btn_id){
        $("#"+btn_id).val( 'Processing .....' );
        $("#"+btn_id).attr('disabled','disabled');
    }
</script>


</body>

</html>