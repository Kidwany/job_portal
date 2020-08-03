<?php $__env->startSection('content'); ?>
<!-- Header start -->
<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Header end --> 
<!-- Inner Page Title start -->
<?php echo $__env->make('includes.inner_page_title', ['page_title'=>$cmsContent->page_title], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Inner Page Title end -->
<div class="about-wraper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo e($cmsContent->page_title); ?></h2>
                <p><?php echo $cmsContent->page_content; ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6"><?php echo $siteSetting->cms_page_ad; ?></div>
            <div class="col-md-3"></div>
        </div>
    </div>  
</div>
<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>