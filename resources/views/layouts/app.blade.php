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

    <title>{{__($seo->seo_title) }}</title>
    <meta name="Description" content="{!! $seo->seo_description !!}">
    <meta name="Keywords" content="{!! $seo->seo_keywords !!}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {!! $seo->seo_other !!}

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="{{asset('website/images/favicon.png')}}">
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Questrial'>
    {{-- <link rel="stylesheet" href="./style.css"> --}}

    <!-- Slider -->
    <!-- Slider -->
    <link href="{{asset('/')}}js/revolution-slider/css/settings.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('/')}}css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('/')}}css/mdb.css" rel="stylesheet">
    <!-- Owl carousel -->
    <link href="{{asset('/')}}css/owl.carousel.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('/')}}css/font-awesome.css" rel="stylesheet">
    <!-- nprogress -->
    <link href="{{asset('/')}}css/nprogress.css" rel="stylesheet">
    <!-- animate -->
    <link href="{{asset('/')}}css/animate.css" rel="stylesheet">
    <!-- plugin -->
    <link href="{{asset('/')}}css/plugin.css" rel="stylesheet">
    <!-- color -->
    <link href="{{asset('/')}}css/color.css" rel="stylesheet">
    <!-- Custom Style -->
    <link href="{{asset('/')}}css/main.css" rel="stylesheet">

    @if((session('localeDir', 'ltr') == 'rtl'))
    <!-- Rtl Style -->
        <link href="{{asset('/')}}css/rtl-style.css" rel="stylesheet">
    @endif

    <link href="{{ asset('/') }}admin_assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}admin_assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}admin_assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />

    <link href="{{asset('website/css/index.min.css')}}" rel="stylesheet">

    @stack('styles')
</head>

<body>
    @yield('content')
    <!-- Bootstrap's JavaScript -->
    <script src="{{asset('/')}}js/jquery.min.js"></script>
    <script src="https://support.limitlessgroup-eg.com/chat_widget.js"></script>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>


    <script src="{{asset('website/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('website/js/swiper.min.js')}}"></script>
    <script src="{{asset('website/js/aos.js')}}"></script>
    <script src="{{asset('website/js/fotorama.js')}}"></script>
    <script src="{{asset('website/js/jquery.mb.YTPlayer.min.js')}}"></script>
    <script src="{{asset('website/js/custom-select.min.js')}}"></script>
    <script src="{{asset('website/js/star-rating.min.js')}}"></script>
    <script src="{{asset('website/js/index.js')}}"></script>


    {!! NoCaptcha::renderJs() !!}
    @stack('scripts')
    <!-- Custom js -->
    <script src="{{asset('/')}}js/script.js"></script>
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