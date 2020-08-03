<?php $__env->startSection('content'); ?>
<div class="page-content-wrapper"> 
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content" style="background-color:#eef1f5;"> 
        <!-- BEGIN PAGE HEADER-->     
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li> <a href="index.html">Home</a> <i class="fa fa-circle"></i> </li>
                <li> <span><?php echo e($siteSetting->site_name); ?> Admin Panel</span> </li>
            </ul>
        </div>
        <!-- END PAGE BAR --> 
        <!-- BEGIN PAGE TITLE-->
        <h3 class="page-title"> <?php echo e($siteSetting->site_name); ?> Admin Panel <small><?php echo e($siteSetting->site_name); ?> Admin Panel</small> </h3>
        <!-- END PAGE TITLE--> 
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"> <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                        <div class="visual"> <i class="fa fa-user"></i> </div>
                        <div class="details">
                            <div class="number"> <span data-counter="counterup" data-value="1349"><?php echo e($totalTodaysUsers); ?></span> </div>
                            <div class="desc"> Todays Users </div>
                        </div>
                    </a> </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"> <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                        <div class="visual"> <i class="fa fa-user"></i> </div>
                        <div class="details">
                            <div class="number"> <span data-counter="counterup" data-value="1349"><?php echo e($totalActiveUsers); ?></span> </div>
                            <div class="desc"> Active Users </div>
                        </div>
                    </a> </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"> <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                        <div class="visual"> <i class="fa fa-user"></i> </div>
                        <div class="details">
                            <div class="number"> <span data-counter="counterup" data-value="1349"><?php echo e($totalVerifiedUsers); ?></span> </div>
                            <div class="desc"> Verified Users </div>
                        </div>
                    </a> </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"> <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                        <div class="visual"> <i class="fa fa-list"></i> </div>
                        <div class="details">
                            <div class="number"> <span data-counter="counterup" data-value="1349"><?php echo e($totalTodaysJobs); ?></span> </div>
                            <div class="desc"> Todays Jobs </div>
                        </div>
                    </a> </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"> <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                        <div class="visual"> <i class="fa fa-list"></i> </div>
                        <div class="details">
                            <div class="number"> <span data-counter="counterup" data-value="1349"><?php echo e($totalActiveJobs); ?></span> </div>
                            <div class="desc"> Active Jobs </div>
                        </div>
                    </a> </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"> <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                        <div class="visual"> <i class="fa fa-list"></i> </div>
                        <div class="details">
                            <div class="number"> <span data-counter="counterup" data-value="1349"><?php echo e($totalFeaturedJobs); ?></span> </div>
                            <div class="desc"> Featured Jobs </div>
                        </div>
                    </a> </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption"> <i class="icon-share font-dark hide"></i> <span class="caption-subject font-dark bold uppercase">Recent Registered Users</span> </div>
                    </div>
                    <div class="portlet-body">
                        <div class="slimScrol">
                            <ul class="feeds">
                                <?php $__currentLoopData = $recentUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recentUser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info"> <i class="fa fa-check"></i> </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"><a href="<?php echo e(route('edit.user', $recentUser->id)); ?>"> <?php echo e($recentUser->name); ?> (<?php echo e($recentUser->email); ?>) </a>  - <i class="fa fa-home" aria-hidden="true"></i> <?php echo e($recentUser->getLocation()); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <div class="scroller-footer">
                            <div class="btn-arrow-link pull-right"> <a href="<?php echo e(route('list.users')); ?>">See All Users</a> <i class="icon-arrow-right"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption"> <i class="icon-share font-dark hide"></i> <span class="caption-subject font-dark bold uppercase">Recent Jobs</span> </div>
                    </div>
                    <div class="portlet-body">
                        <div class="slimScrol">
                            <ul class="feeds">
                                <?php $__currentLoopData = $recentJobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recentJob): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <div class="col1">
                                        <div class="cont">
                                            <div class="cont-col1">
                                                <div class="label label-sm label-info"> <i class="fa fa-check"></i> </div>
                                            </div>
                                            <div class="cont-col2">
                                                <div class="desc"><a href="<?php echo e(route('edit.job', $recentJob->id)); ?>"> <?php echo e(str_limit($recentJob->title, 50)); ?> </a>  - <i class="fa fa-list" aria-hidden="true"></i> <?php echo e($recentJob->getCompany('name')); ?> - <i class="fa fa-home" aria-hidden="true"></i> <?php echo e($recentJob->getLocation()); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                  
                            </ul>
                        </div>
                        <div class="scroller-footer">
                            <div class="btn-arrow-link pull-right"> <a href="<?php echo e(route('list.jobs')); ?>">See All Jobs</a> <i class="icon-arrow-right"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY --> 
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
    $(function () {
        $('.slimScrol').slimScroll({
            height: '250px',
            railVisible: true,
            alwaysVisible: true
        });
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>