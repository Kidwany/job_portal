<?php $__env->startSection('content'); ?>
<!-- Header start -->
<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Header end -->
<!-- Inner Page Title start -->
<?php echo $__env->make('includes.inner_page_title', ['page_title' => __('Travel Agents')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- Inner Page Title end -->

<div class="pageSearch">
    <div class="container">
        <section id="joblisting-header" role="search" class="searchform">
            <form id="top-search" method="GET" action="<?php echo e(route('travel.agent.listing')); ?>">

                <div class="row">
                    <div class="col-12 col-lg-3 col-md-6">
                        <input type="text" name="search" value="<?php echo e(Request::get('search', '')); ?>"
                            class="form-control search" placeholder="<?php echo e(__('keywords e.g. "Google"')); ?>" />
                    </div>
                    <div class="col-12 col-lg-3 col-md-6">
                        <?php echo Form::select('country_id[]', ['' => __('Select Country')] + $countries,
                        Request::get('country_id', $siteSetting->default_country_id),
                        array('class' => 'form-control', 'id' => 'country_id')); ?>

                    </div>

                    <div class="col-12 col-lg-3 col-md-6">
                        <span id="state_dd">
                            <?php echo Form::select('state_id[]', ['' => __('Select State')], Request::get('state_id', null),
                            array('class'=>'form-control', 'id'=>'state_id')); ?>

                        </span>
                    </div>

                    <div class="col-12 col-lg-3 col-md-6">
                        <button type="submit" id="submit-form-top" class="btn btn-amber">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <?php echo e(__('Search Travel Agent')); ?>

                        </button>
                    </div>

                </div>
            </form>
        </section>
    </div>
</div>

<div class="listpgWraper">
    <div class="container">
        <ul class="row compnaieslist">
            <?php if($travel_agents): ?>
            <?php $__currentLoopData = $travel_agents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $travel_agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="col-12 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="compint">
                    <div class="imgwrap">
                        <a href="<?php echo e(route('travel.agent.detail',$travel_agent->slug)); ?>">
                            <?php echo e($travel_agent->printTravelAgentImage()); ?>

                        </a>
                    </div>
                    <a class="h3" href="<?php echo e(route('travel.agent.detail', $travel_agent->slug)); ?>">
                        <?php echo e($travel_agent->name); ?>

                    </a>
                    <div class="loctext">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <?php echo e($travel_agent->location); ?>

                    </div>

                </div>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </ul>

        <div class="pagiWrap">
            <div class="row">
                <div class="col-md-5">
                    <div class="showreslt">
                        <?php echo e(__('Showing Pages')); ?> : <?php echo e($travel_agents->firstItem()); ?> - <?php echo e($travel_agents->lastItem()); ?>

                        <?php echo e(__('Total')); ?> <?php echo e($travel_agents->total()); ?>

                    </div>
                </div>
                <div class="col-md-7 text-right">
                    <?php if(isset($travel_agents) && count($travel_agents)): ?>
                    <?php echo e($travel_agents->appends(request()->query())->links()); ?>

                    <?php endif; ?>
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
        $(document).on('click', '#send_travel_agent_message', function () {
            var postData = $('#send-travel-agent-message-form').serialize();
            $.ajax({
                type: 'POST',
                url: "<?php echo e(route('contact.travel.agent.message.send')); ?>",
                data: postData,
                //dataType: 'json',
                success: function (data) {
                    response = JSON.parse(data);
                    var res = response.success;
                    if (res == 'success')
                    {
                        var errorString = '<div role="alert" class="alert alert-success">' + response.message + '</div>';
                        $('#alert_messages').html(errorString);
                        $('#send-travel-agent-message-form').hide('slow');
                        $(document).scrollTo('.alert', 2000);
                    } else {
                        var errorString = '<div class="alert alert-danger" role="alert"><ul>';
                        response = JSON.parse(data);
                        $.each(response, function (index, value) {
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
    $(document).ready(function ($) {
        $("form").submit(function () {
            $(this).find(":input").filter(function () {
                return !this.value;
            }).attr("disabled", "disabled");
            return true;
        });
        $("form").find(":input").prop("disabled", false);
    });
</script>
<?php echo $__env->make('includes.country_state_city_js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>