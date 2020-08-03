<?php echo APFrmErrHelp::showErrorsNotice($errors); ?>

<?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="form-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'image'); ?>">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;"> <img src="<?php echo e(asset('/')); ?>admin_assets/no-image.png" alt="" /> </div>
                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                    <div> <span class="btn default btn-file"> <span class="fileinput-new"> Site Logo </span> <span class="fileinput-exists"> Change </span> <?php echo Form::file('image', null, array('id'=>'image')); ?> </span> <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a> </div>
                </div>
                <?php echo APFrmErrHelp::showErrors($errors, 'image'); ?> </div>
        </div>
        <?php if(isset($siteSetting)): ?>
        <div class="col-md-6">
            <?php echo e(ImgUploader::print_image("sitesetting_images/thumb/$siteSetting->site_logo")); ?>        
        </div>    
        <?php endif; ?>  
    </div>
    
    
    <div class="row">
        <div class="col-md-6">
            <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'favicon'); ?>">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;"> <img src="<?php echo e(asset('/')); ?>admin_assets/no-image.png" alt="" /> </div>
                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 16px; max-height: 16px;"> </div>
                    <div> <span class="btn default btn-file"> <span class="fileinput-new"> Favicon </span> <span class="fileinput-exists"> Change </span> <?php echo Form::file('favicon', null, array('id'=>'favicon')); ?> </span> <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a> </div>
                </div>
                <span id="name-error" class="help-block help-block-error">The favicon must be a file of type/extension ".ico"</span>
            </div>
        </div>
        <?php if(isset($siteSetting)): ?>
        <div class="col-md-6">
            <?php echo e(ImgUploader::print_image("favicon.ico")); ?>        
        </div>    
        <?php endif; ?>  
    </div>
    
    
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'site_name'); ?>">
        <?php echo Form::label('site_name', 'Site Name', ['class' => 'bold']); ?>                    
        <?php echo Form::text('site_name', null, array('class'=>'form-control', 'id'=>'site_name', 'placeholder'=>'Site Name')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'site_name'); ?>                                       
    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'site_slogan'); ?>">
        <?php echo Form::label('site_slogan', 'Site Slogan', ['class' => 'bold']); ?>                    
        <?php echo Form::text('site_slogan', null, array('class'=>'form-control', 'id'=>'site_slogan', 'placeholder'=>'Site Slogan')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'site_slogan'); ?>                                       
    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'site_phone_primary'); ?>">
        <?php echo Form::label('site_phone_primary', 'Primary Phone#', ['class' => 'bold']); ?>                    
        <?php echo Form::text('site_phone_primary', null, array('class'=>'form-control', 'id'=>'site_phone_primary', 'placeholder'=>'Primary Phone#')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'site_phone_primary'); ?>                                       
    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'site_phone_secondary'); ?>">
        <?php echo Form::label('site_phone_secondary', 'Secondary Phone#', ['class' => 'bold']); ?>                    
        <?php echo Form::text('site_phone_secondary', null, array('class'=>'form-control', 'id'=>'site_phone_secondary', 'placeholder'=>'Secondary Phone#')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'site_phone_secondary'); ?>                                       
    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'mail_from_address'); ?>">
        <?php echo Form::label('mail_from_address', 'From Email Address', ['class' => 'bold']); ?>                    
        <?php echo Form::text('mail_from_address', null, array('class'=>'form-control', 'id'=>'mail_from_address', 'placeholder'=>'From Email Address')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'mail_from_address'); ?>                                       
    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'mail_from_name'); ?>">
        <?php echo Form::label('mail_from_name', 'From Email Name', ['class' => 'bold']); ?>                    
        <?php echo Form::text('mail_from_name', null, array('class'=>'form-control', 'id'=>'mail_from_name', 'placeholder'=>'From Email Name')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'mail_from_name'); ?>                                       
    </div>    
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'mail_to_address'); ?>">
        <?php echo Form::label('mail_to_address', 'To Email Address', ['class' => 'bold']); ?>                    
        <?php echo Form::text('mail_to_address', null, array('class'=>'form-control', 'id'=>'mail_to_address', 'placeholder'=>'To Email Address')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'mail_to_address'); ?>                                       
    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'mail_to_name'); ?>">
        <?php echo Form::label('mail_to_name', 'To Email Name', ['class' => 'bold']); ?>                    
        <?php echo Form::text('mail_to_name', null, array('class'=>'form-control', 'id'=>'mail_to_name', 'placeholder'=>'To Email Name')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'mail_to_name'); ?>                                       
    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'default_country_id'); ?>">
        <?php echo Form::label('default_country_id', 'Default Country', ['class' => 'bold']); ?>                    
        <?php echo Form::select('default_country_id',$countries, null, array('class'=>'form-control', 'id'=>'default_country_id')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'default_country_id'); ?>                                       
    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'country_specific_site'); ?>">
        <?php echo Form::label('country_specific_site', 'Make site specific to this Country?', ['class' => 'bold']); ?>        <div class="radio-list">
            <label class="radio-inline"><?php echo Form::radio('country_specific_site', 1, true, ['id' => 'country_specific_site_yes']); ?> Yes </label>
            <label class="radio-inline"><?php echo Form::radio('country_specific_site', 0, null, ['id' => 'country_specific_site_no']); ?> No </label>
        </div>
        <?php echo APFrmErrHelp::showErrors($errors, 'country_specific_site'); ?>                                       
    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'default_currency_code'); ?>">
        <?php echo Form::label('default_currency_code', 'Default Currency Code', ['class' => 'bold']); ?>                    
        <?php echo Form::select('default_currency_code',$currency_codes, null, array('class'=>'form-control', 'id'=>'default_currency_code')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'default_currency_code'); ?>                                       
    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'site_street_address'); ?>">
        <?php echo Form::label('site_street_address', 'Street Address', ['class' => 'bold']); ?>                    
        <?php echo Form::textarea('site_street_address', null, array('class'=>'form-control', 'id'=>'site_street_address', 'placeholder'=>'Street Address')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'site_street_address'); ?>                                       
    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'site_google_map'); ?>">
        <?php echo Form::label('site_google_map', 'Site Google Map', ['class' => 'bold']); ?>                    
        <?php echo Form::textarea('site_google_map', null, array('class'=>'form-control', 'id'=>'site_google_map', 'placeholder'=>'Site Google Map')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'site_google_map'); ?>                                       
    </div>
</div>
