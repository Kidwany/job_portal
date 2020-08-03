<?php echo APFrmErrHelp::showErrorsNotice($errors); ?>

<?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="form-body">
    <fieldset>
        <legend>Home Page Slider:</legend>
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'is_slider_active'); ?>">
            <?php echo Form::label('is_slider_active', 'Is Home Page Slider active?', ['class' => 'bold']); ?>

            <div class="radio-list">
                <label class="radio-inline"><?php echo Form::radio('is_slider_active', 1, null, ['id' => 'is_slider_active_yes']); ?> Yes </label>
                <label class="radio-inline"><?php echo Form::radio('is_slider_active', 0, true, ['id' => 'is_slider_active_no']); ?> No </label>
            </div>
            <?php echo APFrmErrHelp::showErrors($errors, 'is_slider_active'); ?>

        </div>        
    </fieldset>

</div>
