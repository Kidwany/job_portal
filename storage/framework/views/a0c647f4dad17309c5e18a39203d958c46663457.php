<?php echo APFrmErrHelp::showErrorsNotice($errors); ?>

<?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="form-body">        
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'mailchimp_api_key'); ?>">
        <?php echo Form::label('mailchimp_api_key', 'MailChimp API Key', ['class' => 'bold']); ?>                    
        <?php echo Form::textarea('mailchimp_api_key', null, array('class'=>'form-control', 'id'=>'mailchimp_api_key', 'placeholder'=>'MailChimp API Key')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'mailchimp_api_key'); ?>                                       
    </div>    
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'mailchimp_list_name'); ?>">
        <?php echo Form::label('mailchimp_list_name', 'MailChimp List Name', ['class' => 'bold']); ?>                    
        <?php echo Form::textarea('mailchimp_list_name', null, array('class'=>'form-control', 'id'=>'mailchimp_list_name', 'placeholder'=>'MailChimp List Name')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'mailchimp_list_name'); ?>                                       
    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'mailchimp_list_id'); ?>">
        <?php echo Form::label('mailchimp_list_id', 'MailChimp List ID', ['class' => 'bold']); ?>                    
        <?php echo Form::textarea('mailchimp_list_id', null, array('class'=>'form-control', 'id'=>'mailchimp_list_id', 'placeholder'=>'MailChimp List ID')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'mailchimp_list_id'); ?>                                       
    </div>    
</div>
