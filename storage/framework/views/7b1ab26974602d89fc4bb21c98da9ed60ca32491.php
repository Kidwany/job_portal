<?php $__env->startSection('content'); ?> 

<!-- Header start --> 

<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

<!-- Header end --> 

<!-- Inner Page Title start --> 

<?php echo $__env->make('includes.inner_page_title', ['page_title'=>__('Register')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

<!-- Inner Page Title end -->

<div class="listpgWraper">

    <div class="container">

        <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        

           <div class="useraccountwrap">

                <div class="userccount">

                    <div class="userbtns">

                        <div class="titleTop">
                            <h3>Employer Sign Up!</h3>
                        </div>

                        <ul class="nav nav-tabs">

                            <?php

                            $c_or_e = old('candidate_or_employer', 'candidate');

                            ?>

                            

                        </ul>

                    </div>

                    <div class="tab-content">

                        <div id="candidate" class="formpanel tab-pane <?php echo e(($c_or_e == 'candidate')? 'active':''); ?>">

                            <form class="form-horizontal" method="POST" action="<?php echo e(route('company.register')); ?>">

                                <?php echo e(csrf_field()); ?>


                                <input type="hidden" name="candidate_or_employer" value="employer" />

                                <h3>Login Information</h3>
                                <hr>
                                

                                

                                

                                <div class="formrow <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                    <label>
                                        Email
                                    </label>
                                    <input type="email" name="email" class="form-control" required="required"
                                           placeholder="<?php echo e(__('Email')); ?>" value="<?php echo e(old('email')); ?>">

                                    <?php if($errors->has('email')): ?> <span class="help-block help-block-error">
                                        <strong><?php echo e($errors->first('email')); ?></strong> </span>
                                    <?php endif; ?>
                                </div>

                                <div class="formrow <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                    <label>
                                        Password
                                    </label>
                                    <input type="password" name="password" class="form-control" required="required"
                                           placeholder="<?php echo e(__('Password')); ?>" value="">

                                    <?php if($errors->has('password')): ?> <span class="help-block help-block-error">
                                        <strong><?php echo e($errors->first('password')); ?></strong> </span> <?php endif; ?>
                                </div>

                                <div class="formrow <?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                                    <label>
                                        Password Confirmation
                                    </label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                           required="required" placeholder="<?php echo e(__('Password Confirmation')); ?>" value="">

                                    <?php if($errors->has('password_confirmation')): ?> <span class="help-block help-block-error">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong> </span> <?php endif; ?>
                                </div>

                                <h3>Company Information</h3>
                                <hr>

                                <div class="formrow <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                                    <label>
                                       Company Name
                                    </label>
                                    <input type="text" name="name" class="form-control" required="required"
                                           placeholder="<?php echo e(__('Name')); ?>" value="<?php echo e(old('name')); ?>">

                                    <?php if($errors->has('name')): ?> <span class="help-block help-block-error">
                                        <strong><?php echo e($errors->first('name')); ?></strong> </span> <?php endif; ?>
                                </div>
                                <div class="formrow <?php echo e($errors->has('company_name') ? ' has-error' : ''); ?>">
                                    <label>
                                        Company Phone
                                    </label>
                                    <input type="text" name="name" class="form-control" required="required"
                                           placeholder="Enter Company Phone" value="<?php echo e(old('phone')); ?>">

                                    <?php if($errors->has('phone')): ?> <span class="help-block help-block-error">
                                        <strong><?php echo e($errors->first('phone')); ?></strong> </span> <?php endif; ?>
                                </div>

                                <div class="formrow <?php echo e($errors->has('company_website') ? ' has-error' : ''); ?>">
                                    <label>
                                        Company Website
                                    </label>
                                    <input type="text" name="company_website" class="form-control" required="required"
                                           placeholder="Enter Company Website" value="<?php echo e(old('company_website')); ?>">

                                    <?php if($errors->has('company_website')): ?> <span class="help-block help-block-error">
                                        <strong><?php echo e($errors->first('company_website')); ?></strong> </span> <?php endif; ?>
                                </div>

                                <div class="formrow">
                                    <label>
                                        Country
                                    </label>
                                    <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'country_id'); ?>">
                                        <?php $country_id = old('country_id', $siteSetting->default_country_id); ?>
                                        <?php echo Form::select('country_id', [''=>__('Select Country')]+$countries, $country_id,
                                        array('class'=>'form-control', 'id'=>'country_id')); ?>

                                        <?php echo APFrmErrHelp::showErrors($errors, 'country_id'); ?>

                                    </div>
                                </div>

                                <div class="formrow">
                                    <label>
                                        Industry
                                    </label>
                                    <div class="formrow <?php echo APFrmErrHelp::hasError($errors, 'industry_id'); ?>">
                                        <?php echo Form::select('industry_id', [''=>__('Select Industry')]+$industries, null, array('class'=>'form-control', 'id'=>'industry_id')); ?>

                                        <?php echo APFrmErrHelp::showErrors($errors, 'industry_id'); ?>

                                    </div>
                                </div>

                                <div class="formrow <?php echo e($errors->has('is_subscribed') ? ' has-error' : ''); ?>">
                                    <?php
                                        $is_checked = '';
                                        if (old('is_subscribed', 1)) {
                                        $is_checked = 'checked="checked"';
                                        }
                                    ?>
                                    <input type="checkbox" value="1" name="is_subscribed"
                                            <?php echo e($is_checked); ?> /><?php echo e(__('Subscribe to newsletter')); ?>

                                    <?php if($errors->has('is_subscribed')): ?> <span class="help-block help-block-error">
                                        <strong><?php echo e($errors->first('is_subscribed')); ?></strong> </span> <?php endif; ?>
                                </div>

                                <div class="formrow <?php echo e($errors->has('terms_of_use') ? ' has-error' : ''); ?>">
                                    <input type="checkbox" value="1" name="terms_of_use" />
                                    <a href="<?php echo e(url('terms-of-use')); ?>"><?php echo e(__('I accept Terms of Use')); ?></a>
                                    <?php if($errors->has('terms_of_use')): ?> <span class="help-block help-block-error">
                                        <strong><?php echo e($errors->first('terms_of_use')); ?></strong> </span> <?php endif; ?>
                                </div>
                                <input type="submit" class="btn btn-amber" value="Join El Adrousi as a Company">
                            </form>

                        </div>

                        <div id="employer" class="formpanel tab-pane fade <?php echo e(($c_or_e == 'employer')? 'active':''); ?>">

                            <form class="form-horizontal" method="POST" action="<?php echo e(route('company.register')); ?>">

                                <?php echo e(csrf_field()); ?>


                                <input type="hidden" name="candidate_or_employer" value="employer" />

                                <div class="formrow<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">

                                    <input type="text" name="name" class="form-control" required="required" placeholder="<?php echo e(__('Name')); ?>" value="<?php echo e(old('name')); ?>">

                                    <?php if($errors->has('name')): ?> <span class="help-block"> <strong><?php echo e($errors->first('name')); ?></strong> </span> <?php endif; ?> </div>

                                <div class="formrow<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">

                                    <input type="email" name="email" class="form-control" required="required" placeholder="<?php echo e(__('Email')); ?>" value="<?php echo e(old('email')); ?>">

                                    <?php if($errors->has('email')): ?> <span class="help-block"> <strong><?php echo e($errors->first('email')); ?></strong> </span> <?php endif; ?> </div>

                                <div class="formrow<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">

                                    <input type="password" name="password" class="form-control" required="required" placeholder="<?php echo e(__('Password')); ?>" value="">

                                    <?php if($errors->has('password')): ?> <span class="help-block"> <strong><?php echo e($errors->first('password')); ?></strong> </span> <?php endif; ?> </div>

                                <div class="formrow<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">

                                    <input type="password" name="password_confirmation" class="form-control" required="required" placeholder="<?php echo e(__('Password Confirmation')); ?>" value="">

                                    <?php if($errors->has('password_confirmation')): ?> <span class="help-block"> <strong><?php echo e($errors->first('password_confirmation')); ?></strong> </span> <?php endif; ?> </div>

                                    <div class="formrow<?php echo e($errors->has('is_subscribed') ? ' has-error' : ''); ?>">

    <?php

	$is_checked = '';

	if (old('is_subscribed', 1)) {

		$is_checked = 'checked="checked"';

	}

	?>

                                    

                                    <input type="checkbox" value="1" name="is_subscribed" <?php echo e($is_checked); ?> /><?php echo e(__('Subscribe to news letter')); ?>


                                    <?php if($errors->has('is_subscribed')): ?> <span class="help-block"> <strong><?php echo e($errors->first('is_subscribed')); ?></strong> </span> <?php endif; ?> </div>

                                <div class="formrow<?php echo e($errors->has('terms_of_use') ? ' has-error' : ''); ?>">

                                    <input type="checkbox" value="1" name="terms_of_use" />

                                    <a href="<?php echo e(url('terms-of-use')); ?>"><?php echo e(__('I accept Terms of Use')); ?></a>



                                    <?php if($errors->has('terms_of_use')): ?> <span class="help-block"> <strong><?php echo e($errors->first('terms_of_use')); ?></strong> </span> <?php endif; ?> </div>

                            

                                <input type="submit" class="btn" value="<?php echo e(__('Register')); ?>">

                            </form>

                        </div>

                    </div>

                    <!-- sign up form -->

                    <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> <?php echo e(__('Have Account')); ?>? <a href="<?php echo e(route('company.login')); ?>"><?php echo e(__('Sign in')); ?></a></div>

                    <!-- sign up form end--> 



                </div>

            </div>

        

    </div>

</div>

<?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>