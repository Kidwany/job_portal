<?php $__env->startSection('content'); ?>
<!-- Header start -->
<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Header end -->
<!-- Inner Page Title start -->
<?php echo $__env->make('includes.inner_page_title', ['page_title' => __('Youth Support')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Inner Page Title end -->
<div class="listpgWraper">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-10 col-sm-12">

                <div class="userccount">
                    <div class="formpanel mt0"> 
                        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <!-- Personal Information -->
                        <?php echo $__env->make('youth.inc.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
<style type="text/css">
    .userccount p {
        text-align: left !important;
    }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
<?php echo $__env->make('includes.immediate_available_btn', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>