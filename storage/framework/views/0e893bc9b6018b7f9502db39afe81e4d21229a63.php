<?php
if (!isset($seo)) {
    $seo = (object)array('seo_title' => $siteSetting->site_name, 'seo_description' => $siteSetting->site_name, 'seo_keywords' => $siteSetting->site_name, 'seo_other' => '');
}
?>
<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" class="<?php echo e((session('localeDir', 'ltr'))); ?>" dir="<?php echo e((session('localeDir', 'ltr'))); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo e(__($seo->seo_title)); ?></title>
    <meta name="Description" content="<?php echo $seo->seo_description; ?>">
    <meta name="Keywords" content="<?php echo $seo->seo_keywords; ?>">

<?php echo $seo->seo_other; ?>


<!-- Fav Icon -->
    <link rel="shortcut icon" href="<?php echo e(asset('/')); ?>favicon.ico">
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Questrial'>


<!-- Slider -->
    <link href="<?php echo e(asset('/')); ?>js/revolution-slider/css/settings.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo e(asset('/')); ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo e(asset('/')); ?>css/mdb.css" rel="stylesheet">
    <!-- Owl carousel -->
    <link href="<?php echo e(asset('/')); ?>css/owl.carousel.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset('/')); ?>css/font-awesome.css" rel="stylesheet">
    <!-- nprogress -->
    <link href="<?php echo e(asset('/')); ?>css/nprogress.css" rel="stylesheet">
    <!-- Custom Style -->
    <link href="<?php echo e(asset('/')); ?>css/main.css" rel="stylesheet">

<?php if((session('localeDir', 'ltr') == 'rtl')): ?>
    <!-- Rtl Style -->
        <link href="<?php echo e(asset('/')); ?>css/rtl-style.css" rel="stylesheet">
    <?php endif; ?>

    <link href="<?php echo e(asset('/')); ?>admin_assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('/')); ?>admin_assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('/')); ?>admin_assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />

    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body>
    <?php echo $__env->yieldContent('content'); ?>
    <!-- Bootstrap's JavaScript -->
    <script src="<?php echo e(asset('/')); ?>js/jquery.min.js"></script>
    <script src="<?php echo e(asset('/')); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('/')); ?>js/popper.js"></script>
    <!-- Owl carousel -->
    <script src="<?php echo e(asset('/')); ?>js/owl.carousel.js"></script>
    <script src="<?php echo e(asset('/')); ?>admin_assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="<?php echo e(asset('/')); ?>admin_assets/global/plugins/Bootstrap-3-Typeahead/bootstrap3-typeahead.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <script src="<?php echo e(asset('/')); ?>admin_assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="<?php echo e(asset('/')); ?>admin_assets/global/plugins/jquery.scrollTo.min.js" type="text/javascript"></script>
    <!-- Revolution Slider -->
    <script type="text/javascript" src="<?php echo e(asset('/')); ?>js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('/')); ?>js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    <?php echo NoCaptcha::renderJs(); ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>
    <!-- Custom js -->
    <script src="<?php echo e(asset('/')); ?>js/script.js"></script>
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