<?php echo APFrmErrHelp::showErrorsNotice($errors); ?>

<?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="form-body">        
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'facebook_address'); ?>">
        <?php echo Form::label('facebook_address', 'Facebook Address', ['class' => 'bold']); ?>                    
        <?php echo Form::text('facebook_address', null, array('class'=>'form-control', 'id'=>'facebook_address', 'placeholder'=>'Facebook Address')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'facebook_address'); ?>                                       
    </div>    
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'google_plus_address'); ?>">
        <?php echo Form::label('google_plus_address', 'Google+ Address', ['class' => 'bold']); ?>                    
        <?php echo Form::text('google_plus_address', null, array('class'=>'form-control', 'id'=>'google_plus_address', 'placeholder'=>'Google+ Address')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'google_plus_address'); ?>                                       
    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'pinterest_address'); ?>">
        <?php echo Form::label('pinterest_address', 'Pinterest Address', ['class' => 'bold']); ?>                    
        <?php echo Form::text('pinterest_address', null, array('class'=>'form-control', 'id'=>'pinterest_address', 'placeholder'=>'Pinterest Address')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'pinterest_address'); ?>                                       
    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'twitter_address'); ?>">
        <?php echo Form::label('twitter_address', 'Twitter Address', ['class' => 'bold']); ?>                    
        <?php echo Form::text('twitter_address', null, array('class'=>'form-control', 'id'=>'twitter_address', 'placeholder'=>'Twitter Address')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'twitter_address'); ?>                                       
    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'instagram_address'); ?>">
        <?php echo Form::label('instagram_address', 'Instagram Address', ['class' => 'bold']); ?>                    
        <?php echo Form::text('instagram_address', null, array('class'=>'form-control', 'id'=>'instagram_address', 'placeholder'=>'Instagram Address')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'instagram_address'); ?>                                       
    </div>    
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'linkedin_address'); ?>">
        <?php echo Form::label('linkedin_address', 'Linkedin Address', ['class' => 'bold']); ?>                    
        <?php echo Form::text('linkedin_address', null, array('class'=>'form-control', 'id'=>'linkedin_address', 'placeholder'=>'Linkedin Address')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'linkedin_address'); ?>                                       
    </div>    
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'youtube_address'); ?>">
        <?php echo Form::label('youtube_address', 'Youtube Address', ['class' => 'bold']); ?>                    
        <?php echo Form::text('youtube_address', null, array('class'=>'form-control', 'id'=>'youtube_address', 'placeholder'=>'Youtube Address')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'youtube_address'); ?>                                       
    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'tumblr_address'); ?>">
        <?php echo Form::label('tumblr_address', 'Tumblr Address', ['class' => 'bold']); ?>                    
        <?php echo Form::text('tumblr_address', null, array('class'=>'form-control', 'id'=>'tumblr_address', 'placeholder'=>'Tumblr Address')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'tumblr_address'); ?>                                       
    </div>
    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'flickr_address'); ?>">
        <?php echo Form::label('flickr_address', 'Flickr Address', ['class' => 'bold']); ?>                    
        <?php echo Form::text('flickr_address', null, array('class'=>'form-control', 'id'=>'flickr_address', 'placeholder'=>'Flickr Address')); ?>

        <?php echo APFrmErrHelp::showErrors($errors, 'flickr_address'); ?>                                       
    </div>
</div>
