<?php if(count($errors) > 0): ?>
    <div class="w-100">
        <div class="alert alert-danger" style="background-color: #f66e84">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
<?php endif; ?>


<?php if(Session::has('create')): ?>
    <div class="alert alert-success w-100">
        <p><?php echo e(session('create')); ?></p>
    </div>
<?php endif; ?>

<?php if(Session::has('update')): ?>
    <div class="alert alert-success w-100" >
        <p><?php echo e(session('update')); ?></p>
    </div>
<?php endif; ?>


<?php if(Session::has('delete')): ?>
    <div class="alert alert-success w-100">
        <p><?php echo e(session('delete')); ?></p>
    </div>
<?php endif; ?>


<?php if(Session::has('exception')): ?>
    <div class="alert alert-danger w-100" style="background-color: #f66e84">
        <p><?php echo e(session('exception')); ?></p>
    </div>
<?php endif; ?>
