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
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(__($seo->seo_title)); ?></title>
    <meta name="Description" content="<?php echo $seo->seo_description; ?>">
    <meta name="Keywords" content="<?php echo $seo->seo_keywords; ?>">

    <?php echo $seo->seo_other; ?>


    <!-- Fav Icon -->
    <link rel="shortcut icon" href="<?php echo e(asset('website/images/favicon.png')); ?>">
    <link href="<?php echo e(asset('website/css/index.min.css')); ?>" rel="stylesheet">
    <?php if((session('localeDir', 'ltr') == 'rtl')): ?>
    <!-- Rtl Style -->
        <link href="<?php echo e(asset('/')); ?>css/rtl-style.css" rel="stylesheet">
    <?php endif; ?>

    <?php echo $__env->yieldContent('style'); ?>

    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body>
<?php echo $__env->yieldContent('content'); ?>







<!-- Bootstrap's JavaScript -->
<script src="<?php echo e(asset('website/js/jquery-3.4.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('website/js/jquery.waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('website/js/swiper.min.js')); ?>"></script>
<script src="<?php echo e(asset('website/js/aos.js')); ?>"></script>
<script src="<?php echo e(asset('website/js/fotorama.js')); ?>"></script>
<script src="<?php echo e(asset('website/js/jquery.mb.YTPlayer.min.js')); ?>"></script>
<script src="<?php echo e(asset('website/js/custom-select.min.js')); ?>"></script>
<script src="<?php echo e(asset('website/js/star-rating.min.js')); ?>"></script>
<script src="<?php echo e(asset('website/js/lightgallery.js')); ?>"></script>
<script src="<?php echo e(asset('website/js/lg-thumbnail.js')); ?>"></script>
<script src="https://support.limitlessgroup-eg.com/chat_widget.js"></script>
<?php echo $__env->yieldContent('scripts'); ?>
<script src="<?php echo e(asset('website/js/index.js')); ?>"></script>

<?php echo NoCaptcha::renderJs(); ?>


<?php echo $__env->yieldPushContent('scripts'); ?>
<!-- Custom js -->

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