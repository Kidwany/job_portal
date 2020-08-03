<?php $__env->startSection('content'); ?>
<!-- Header start -->
<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Header end -->
<!-- Inner Page Title start -->
<?php echo $__env->make('includes.inner_page_title', ['page_title' => __('Talented')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Inner Page Title end -->
<div class="listpgWraper">


    <div class="talented mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?php echo e(asset('/')); ?>images/create.png" alt="" />
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="titleTop">
                        <h3><?php echo e(__('Find talented people')); ?> </h3>
                    </div>
                    <p><?php echo e(__('The true wealth of any society is human wealth, and talented students and talented students come at the  top of that wealth due to their importance in facing the challenges of the times, so searching for them and caring for them and achieving the best means to invest their talents is what matters to all societies so that their scientific, technical and economic standing among the countries of the world rises.')); ?>

                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h3 class="title title-line pb-5"><?php echo e(__('Are you talented? Register now')); ?></h3>
                </div>
            </div>

            <div class="col-md-10 col-sm-12">
                <div class="userccount">
                    <div class="formpanel mt0">
                        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <!-- Personal Information -->
                        <?php echo $__env->make('talented.inc.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
<?php echo $__env->make('includes.country_state_city_js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>