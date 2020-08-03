<div class="section greybg">
    <div class="container">
        <div class="topsearchwrap">
			<div class="tabswrap">
				<div class="row">
					<div class="col-md-4"><h3><?php echo e(__('Browse Jobs By')); ?></h3></div>
					<div class="col-md-8">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
						  <li class="nav-item"><a data-toggle="tab" href="#byfunctional" class="nav-link active" aria-expanded="true"><?php echo e(__('Functional Area')); ?></a></li>
						  <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#bycities" aria-expanded="false"><?php echo e(__('Cities')); ?></a></li>
						  <li class="nav-item"><a data-toggle="tab" href="#byindustries" class="nav-link" aria-expanded="false"><?php echo e(__('Industries')); ?></a></li>
						</ul>
					</div>
				</div>
			
			</div>
				
			<div class="tab-content" id="jobsby">				
				<div class="tab-pane fade show active" id="byfunctional" role="tabpanel" aria-labelledby="byfunctional-tab">
					<div class="srchbx">				
                <!--Categories start-->
               
                <div class="srchint">
                    <ul class="row catelist">
                        <?php if(isset($topFunctionalAreaIds) && count($topFunctionalAreaIds)): ?> <?php $__currentLoopData = $topFunctionalAreaIds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $functional_area_id_num_jobs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $functionalArea = App\ FunctionalArea::where('functional_area_id', '=', $functional_area_id_num_jobs->functional_area_id)->lang()->active()->first();
                        ?> <?php if(null !== $functionalArea): ?>

                        <li class="col-md-4 col-sm-6"><a href="<?php echo e(route('job.list', ['functional_area_id[]'=>$functionalArea->functional_area_id])); ?>" title="<?php echo e($functionalArea->functional_area); ?>"><?php echo e($functionalArea->functional_area); ?> <span>(<?php echo e($functional_area_id_num_jobs->num_jobs); ?>)</span></a>
                        </li>

                        <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
                    </ul>
                    <!--Categories end-->
                </div>
            </div>
				</div>
				
					<div class="tab-pane fade show" id="bycities" role="tabpanel" aria-labelledby="bycities-tab">
					<div class="srchbx">
                <!--Cities start-->
                
                <div class="srchint">
                    <ul class="row catelist">
                        <?php if(isset($topCityIds) && count($topCityIds)): ?> <?php $__currentLoopData = $topCityIds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city_id_num_jobs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $city = App\ City::getCityById($city_id_num_jobs->city_id);
                        ?> <?php if(null !== $city): ?>

                        <li class="col-md-3 col-sm-4 col-xs-6"><a href="<?php echo e(route('job.list', ['city_id[]'=>$city->city_id])); ?>" title="<?php echo e($city->city); ?>"><?php echo e($city->city); ?> <span>(<?php echo e($city_id_num_jobs->num_jobs); ?>)</span></a>
                        </li>

                        <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
                    </ul>
                    <!--Cities end-->
                </div>
            </div>
				</div>
				
					<div class="tab-pane fade show" id="byindustries" role="tabpanel" aria-labelledby="byindustries-tab">
					<div class="srchbx">
                <!--Categories start-->
               
                <div class="srchint">
                    <ul class="row catelist">					
                        <?php if(isset($topIndustryIds) && count($topIndustryIds)): ?> <?php $__currentLoopData = $topIndustryIds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $industry_id => $num_jobs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $industry = App\ Industry::where('industry_id', '=', $industry_id)->lang()->active()->first();
                        ?> <?php if(null !== $industry): ?>
                        <li class="col-md-4 col-sm-6"><a href="<?php echo e(route('job.list', ['industry_id[]'=>$industry->industry_id])); ?>" title="<?php echo e($industry->industry); ?>"><?php echo e($industry->industry); ?> <span>(<?php echo e($num_jobs); ?>)</span></a>
                        </li>
                        <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <?php endif; ?>
                    </ul>
                    <!--Categories end-->
                </div>
            </div>				
				</div>
			</div>
			

            

            

            
        </div>
    </div>
</div>