<?php if(!Auth::user() && !Auth::guard('company')->user()): ?>
	<div class="emploginbox">
		<div class="container">
			<div class="titleTop">
				<div class="subtitle"><?php echo e(__('Are You Looking For Candidates!')); ?></div>
				<h3><?php echo e(__('Post a Job Today')); ?>  </h3>
				<h4><?php echo e(__('and hire the right Candidates')); ?></h4>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nunc ex, maximus vel felis ut, vestibulum tristique enim. Proin eu nulla est. Maecenas tempor euismod suscipit. Sed at libero ante. Vestibulum nec odio lacus.</p>
			<div class="">
				<a type="button" class="btn btn-amber waves-effect waves-light" href="<?php echo e(route('register')); ?>">
					<?php echo e(__('Post a Job')); ?>

				</a>
			</div>
		</div>
	</div>
<?php endif; ?>