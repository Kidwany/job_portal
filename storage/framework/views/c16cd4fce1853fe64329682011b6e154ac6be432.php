
<?php $__env->startSection('content'); ?>
    <!-- Header start -->
    <?php echo $__env->make('website.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Header end -->
    <!-- Inner Page Title start -->
    <?php echo $__env->make('includes.inner_page_title', ['page_title'=>__('Companies')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Inner Page Title end -->

    <!-- partners page -->
    <div class="partners-page">
        <div class="mfa-container">
            <!-- start partners section -->
            <div class="partners-section">
                <a href="#" class="horiz-adv">
                    <img src="<?php echo e(asset('website/images/partners/2.webp')); ?>" alt="adv" />
                </a>

                <div class="section-heading">
                    <p>
                        Partners
                    </p>
                </div>
                <div class="partners-layout">
                    <ul class="partners-ul">

                        <?php if($companies): ?>
                            <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="partnerCard">
                                    <a href="<?php echo e(route('company.detail',$company->slug)); ?>" class="card-wrapper">
                                        <div class="img-div lazy-div">
                                            <img
                                                    class="lazy"
                                                    data-src="<?php echo asset('company_logos/' . $company->logo); ?>"
                                                    alt="img"
                                            />
                                            <div class="next-lazy-img"></div>
                                        </div>
                                        <div class="partnerContent">
                                            <p class="pTitle">
                                                <?php echo e($company->name); ?>

                                                <?php if($company->isOnline()): ?>
                                                    <small style="color: lightseagreen; font-weight: 200; font-size: 12px"> online</small>
                                                    <?php else: ?>
                                                    <small style="color: orangered; font-weight: 200; font-size: 12px"> offline</small>
                                                <?php endif; ?>

                                            </p>
                                            <div class="jobs__rating">
                                                <div class="jobsCount"><strong><?php echo e(App\Company::countNumJobs('company_id', $company->id)); ?></strong> Jobs</div>
                                                <ul class="partnerRating">
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star-outline"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </ul>
                    <ul class="paginationUl">
                        <li class="pageItem">
                            <a class="pageLink" href="<?php echo e($companies->previousPageUrl()); ?>">Previous</a>
                        </li>
                        <?php for($i=1; $i <= $companies->lastPage(); $i++): ?>
                            <li class="pageItem <?php echo e($i == $companies->currentPage() ? 'active' : ''); ?>">
                                <a class="pageLink" href="?page=<?php echo e($i); ?>"><?php echo e($i); ?></a>
                            </li>
                        <?php endfor; ?>

                        <li class="pageItem">
                            <a class="pageLink" href="<?php echo e($companies->nextPageUrl()); ?>">Next</a>
                        </li>
                    </ul>
                </div>

                <a href="#" class="horiz-adv">
                    <img src="<?php echo e(asset('website/images/partners/2.webp')); ?>" alt="adv" />
                </a>
            </div>
            <!-- end partners section -->
        </div>
    </div>
    <!-- ./partners page -->


    <!-- Header start -->
    <?php echo $__env->make('website.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Header end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>