<?php echo APFrmErrHelp::showErrorsNotice($errors); ?>

<?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="form-body">        
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'nocaptcha_sitekey'); ?>">
        <?php echo Form::label('nocaptcha_sitekey', 'Sitekey', ['class' => 'bold']); ?>                    
        <?php echo Form::text('nocaptcha_sitekey', null, array('class'=>'form-control', 'id'=>'nocaptcha_sitekey', 'placeholder'=>'Sitekey')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'nocaptcha_sitekey'); ?>                                       
    </div>    
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'nocaptcha_secret'); ?>">
        <?php echo Form::label('nocaptcha_secret', 'Secret', ['class' => 'bold']); ?>                    
        <?php echo Form::text('nocaptcha_secret', null, array('class'=>'form-control', 'id'=>'nocaptcha_secret', 'placeholder'=>'Secret')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'nocaptcha_secret'); ?>                                       
    </div>    
</div>
