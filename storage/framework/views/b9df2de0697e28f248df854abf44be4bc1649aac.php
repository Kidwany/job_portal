<?php $__env->startSection('content'); ?>
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="form-horizontal login-form" role="form" novalidate="novalidate" method="POST" action="<?php echo e(route('admin.login')); ?>">
        <?php echo e(csrf_field()); ?>

        <h3 class="form-title font-green">Sign In</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> Enter Email and password. </span>
        </div>
        <?php if($errors->has('email')): ?>
        <div class="alert alert-danger">
            <button class="close" data-close="alert"></button>
            <span><?php echo e($errors->first('email')); ?></span>
        </div>
        <?php endif; ?>
        <?php if($errors->has('password')): ?>
        <div class="alert alert-danger">
            <button class="close" data-close="alert"></button>
            <span><?php echo e($errors->first('password')); ?></span>
        </div>
        <?php endif; ?>                
        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">E-Mail Address</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Email Address" name="email" value="<?php echo e(old('email')); ?>" />                   
        </div>
        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="password" name="password" />  
        </div>
        <div class="form-actions">
            <button type="submit" class="btn green uppercase">Login</button>
            <label class="rememberme check">
                <input type="checkbox" name="remember" />Remember </label>
            <a class="forget-password" href="<?php echo e(route('admin.password.request')); ?>">Forgot Password?</a>
        </div>                                
    </form>
    <!-- END LOGIN FORM -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.login_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>