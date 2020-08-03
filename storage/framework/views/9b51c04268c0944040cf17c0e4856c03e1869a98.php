<?php $__env->startSection('content'); ?>
<!-- Header start -->
<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Header end --> 
<!-- Inner Page Title start -->
<?php echo $__env->make('includes.inner_page_title', ['page_title'=>__('Frequently asked questions')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Inner Page Title end -->
<!-- Page Title End -->
<div class="listpgWraper">
    <div class="container"> 
        <!--Question-->
        <div class="faqs">
            <div class="panel-group" id="accordion">
                <h3>&nbsp;</h3>
                <?php if(isset($faqs) && count($faqs)): ?>
                <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse<?php echo e($faq->id); ?>"><?php echo $faq->faq_question; ?></a> </h4>
                    </div>
                    <div id="collapse<?php echo e($faq->id); ?>" class="panel-collapse collapse">
                        <div class="panel-body"><?php echo $faq->faq_answer; ?></div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6"><?php echo $siteSetting->cms_page_ad; ?></div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>