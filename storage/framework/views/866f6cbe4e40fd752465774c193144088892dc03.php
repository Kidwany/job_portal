<?php echo APFrmErrHelp::showErrorsNotice($errors); ?>

<?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="form-body">
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'mail_driver'); ?>">
        <?php echo Form::label('mail_driver', 'Mail Driver', ['class' => 'bold']); ?>                    
        <?php echo Form::select('mail_driver',$mail_drivers, null, array('class'=>'form-control', 'id'=>'mail_driver')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'mail_driver'); ?>                                       
    </div>
    <br>
    <fieldset>
        <legend>SMTP Settings:</legend>    
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'mail_host'); ?>">
            <?php echo Form::label('mail_host', 'Mail Host', ['class' => 'bold']); ?>                    
            <?php echo Form::text('mail_host', null, array('class'=>'form-control', 'id'=>'mail_host', 'placeholder'=>'Mail Host')); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'mail_host'); ?>                                       
        </div>    
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'mail_port'); ?>">
            <?php echo Form::label('mail_port', 'Mail Port', ['class' => 'bold']); ?>                    
            <?php echo Form::text('mail_port', null, array('class'=>'form-control', 'id'=>'mail_port', 'placeholder'=>'Mail Port')); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'mail_port'); ?>                                       
        </div>    
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'mail_encryption'); ?>">
            <?php echo Form::label('mail_encryption', 'Mail Encryption', ['class' => 'bold']); ?>                    
            <?php echo Form::text('mail_encryption', null, array('class'=>'form-control', 'id'=>'mail_encryption', 'placeholder'=>'Mail Encryption')); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'mail_encryption'); ?>                                       
        </div>
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'mail_username'); ?>">
            <?php echo Form::label('mail_username', 'Mail Username', ['class' => 'bold']); ?>                    
            <?php echo Form::text('mail_username', null, array('class'=>'form-control', 'id'=>'mail_username', 'placeholder'=>'Mail Username')); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'mail_username'); ?>                                       
        </div>
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'mail_password'); ?>">
            <?php echo Form::label('mail_password', 'Mail Password', ['class' => 'bold']); ?>                    
            <?php echo Form::text('mail_password', null, array('class'=>'form-control', 'id'=>'mail_password', 'placeholder'=>'Mail Password')); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'mail_password'); ?>                                       
        </div>
    </fieldset>
    <br> 
    <fieldset>
        <legend>SendMail - Pretend Settings:</legend>     
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'mail_sendmail'); ?>">
            <?php echo Form::label('mail_sendmail', 'Mail Sendmail', ['class' => 'bold']); ?>                    
            <?php echo Form::text('mail_sendmail', null, array('class'=>'form-control', 'id'=>'mail_sendmail', 'placeholder'=>'Mail Sendmail')); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'mail_sendmail'); ?>                                       
        </div>
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'mail_pretend'); ?>">
            <?php echo Form::label('mail_pretend', 'Mail Pretend', ['class' => 'bold']); ?>                    
            <?php echo Form::text('mail_pretend', null, array('class'=>'form-control', 'id'=>'mail_pretend', 'placeholder'=>'Mail Pretend')); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'mail_pretend'); ?>                                       
        </div>
    </fieldset>    
    <br>
    <fieldset>
        <legend>MailGun Settings:</legend>    
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'mailgun_domain'); ?>">
            <?php echo Form::label('mailgun_domain', 'Mailgun Domain', ['class' => 'bold']); ?>                    
            <?php echo Form::text('mailgun_domain', null, array('class'=>'form-control', 'id'=>'mailgun_domain', 'placeholder'=>'Mailgun Domain')); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'mailgun_domain'); ?>                                       
        </div>
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'mailgun_secret'); ?>">
            <?php echo Form::label('mailgun_secret', 'Mailgun Secret', ['class' => 'bold']); ?>                    
            <?php echo Form::text('mailgun_secret', null, array('class'=>'form-control', 'id'=>'mailgun_secret', 'placeholder'=>'Mailgun Secret')); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'mailgun_secret'); ?>                                       
        </div>
    </fieldset>
    <br>
    <fieldset>
        <legend>Mandrill Settings:</legend>    
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'mandrill_secret'); ?>">
            <?php echo Form::label('mandrill_secret', 'Mandrill Secret', ['class' => 'bold']); ?>                    
            <?php echo Form::text('mandrill_secret', null, array('class'=>'form-control', 'id'=>'mandrill_secret', 'placeholder'=>'Mandrill Secret')); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'mandrill_secret'); ?>                                       
        </div>
    </fieldset>
    <br>
    <fieldset>
        <legend>Sparkpost Settings:</legend>    
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'sparkpost_secret'); ?>">
            <?php echo Form::label('sparkpost_secret', 'Sparkpost Secret', ['class' => 'bold']); ?>                    
            <?php echo Form::text('sparkpost_secret', null, array('class'=>'form-control', 'id'=>'sparkpost_secret', 'placeholder'=>'Sparkpost Secret')); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'sparkpost_secret'); ?>                                       
        </div>
    </fieldset>
    <br>
    <fieldset>
        <legend>AMAZON SES Settings:</legend>        
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'ses_key'); ?>">
            <?php echo Form::label('ses_key', 'SES Key', ['class' => 'bold']); ?>                    
            <?php echo Form::text('ses_key', null, array('class'=>'form-control', 'id'=>'ses_key', 'placeholder'=>'SES Key')); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'ses_key'); ?>                                       
        </div>
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'ses_secret'); ?>">
            <?php echo Form::label('ses_secret', 'SES Secret', ['class' => 'bold']); ?>                    
            <?php echo Form::text('ses_secret', null, array('class'=>'form-control', 'id'=>'ses_secret', 'placeholder'=>'SES Secret')); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'ses_secret'); ?>                                       
        </div>
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'ses_region'); ?>">
            <?php echo Form::label('ses_region', 'SES Region', ['class' => 'bold']); ?>                    
            <?php echo Form::text('ses_region', null, array('class'=>'form-control', 'id'=>'ses_region', 'placeholder'=>'SES Region')); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'ses_region'); ?>                                       
        </div>
    </fieldset>   
</div>
