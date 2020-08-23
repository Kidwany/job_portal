<form action="<?php echo e(route('job.list')); ?>" method="get">
	<!-- Page Title start -->
	<div class="pageSearch">
<div class="container">
				<div class="searchform">
					<div class="row">
						<div class="col-lg-9">
							<input type="text" name="search" value="<?php echo e(Request::get('search', '')); ?>" class="form-control" placeholder="<?php echo e(__('Enter Skills, job title or Location')); ?>" />
						</div>

						<div class="col-lg-3">
							<button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i> <?php echo e(__('Search Jobs')); ?></button>
						</div>

					</div>
				</div>
</div>
	</div>
	<!-- Page Title end -->
</form>
