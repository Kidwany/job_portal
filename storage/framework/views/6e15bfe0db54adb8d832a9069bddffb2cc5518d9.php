<?php $__env->startSection('content'); ?>
    <!-- Header start -->
    <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Header end -->
    <!-- Inner Page Title start -->
    <?php echo $__env->make('includes.inner_page_title', ['page_title'=>__('Companies')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Inner Page Title end -->

    <div class="pageSearch">
        <div class="container">
            <section id="joblisting-header" role="search" class="searchform">
                <form id="top-search" method="GET" action="<?php echo e(route('company.listing')); ?>">
                    <div class="row">
                        <div class="col-lg-9">
                            <input type="text" name="search" value="<?php echo e(Request::get('search', '')); ?>"
                                   class="form-control search" placeholder="<?php echo e(__('keywords e.g. "Google"')); ?>" />
                        </div>
                        <div class="col-lg-3">
                            <button type="submit" id="submit-form-top" class="btn btn-amber"><i class="fa fa-search"
                                                                                                aria-hidden="true"></i> <?php echo e(__('Search Company')); ?></button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>


    <div class="listpgWraper">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-2 d-none d-md-block">
                    <div class="row justify-content-center">
                        <div class="col-md-auto col-auto">
                            <?php echo $siteSetting->dashboard_page_ad; ?>

                        </div>
                        <div class="col-md-auto col-auto mt-md-4">
                            <?php echo $siteSetting->dashboard_page_ad; ?>


                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <ul class="row compnaieslist">
                        <?php if($companies): ?>
                            <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="compint">
                                        <div class="imgwrap"><a
                                                    href="<?php echo e(route('company.detail',$company->slug)); ?>"><?php echo e($company->printCompanyImage()); ?></a>
                                        </div>
                                        <h3><a href="<?php echo e(route('company.detail',$company->slug)); ?>"><?php echo e($company->name); ?></a></h3>
                                        <div class="loctext"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <?php echo e($company->location); ?>

                                        </div>
                                        <div class="curentopen"><i class="fa fa-black-tie" aria-hidden="true"></i>
                                            <?php echo e(__('Current jobs')); ?> :
                                            <?php echo e($company->countNumJobs('company_id',$company->id)); ?></div>
                                    </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </ul>
                    <div class="pagiWrap">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="showreslt">
                                    <?php echo e(__('Showing Pages')); ?> : <?php echo e($companies->firstItem()); ?> - <?php echo e($companies->lastItem()); ?>

                                    <?php echo e(__('Total')); ?> <?php echo e($companies->total()); ?>

                                </div>
                            </div>
                            <div class="col-md-7 text-right">
                                <?php if(isset($companies) && count($companies)): ?>
                                    <?php echo e($companies->appends(request()->query())->links()); ?>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-0">
                    <div class="row justify-content-center">
                        <div class="col-md-auto col-auto">
                            <?php echo $siteSetting->dashboard_page_ad; ?>

                        </div>
                        <div class="col-md-auto col-auto mt-md-4">
                            <?php echo $siteSetting->dashboard_page_ad; ?>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('styles'); ?>
    <style type="text/css">
        .formrow iframe {
            height: 78px;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        $(document).ready(function () {
            $(document).on('click', '#send_company_message', function () {
                var postData = $('#send-company-message-form').serialize();
                $.ajax({
                    type: 'POST',
                    url: "<?php echo e(route('contact.company.message.send')); ?>",
                    data: postData,
                    //dataType: 'json',
                    success: function (data)
                    {
                        response = JSON.parse(data);
                        var res = response.success;
                        if (res == 'success')
                        {
                            var errorString = '<div role="alert" class="alert alert-success">' + response.message + '</div>';
                            $('#alert_messages').html(errorString);
                            $('#send-company-message-form').hide('slow');
                            $(document).scrollTo('.alert', 2000);
                        } else
                        {
                            var errorString = '<div class="alert alert-danger" role="alert"><ul>';
                            response = JSON.parse(data);
                            $.each(response, function (index, value)
                            {
                                errorString += '<li>' + value + '</li>';
                            });
                            errorString += '</ul></div>';
                            $('#alert_messages').html(errorString);
                            $(document).scrollTo('.alert', 2000);
                        }
                    },
                });
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>