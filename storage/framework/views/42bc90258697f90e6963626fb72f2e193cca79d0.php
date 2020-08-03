<?php echo Form::model(null, array('method' => 'post', 'route' => array('talented.store'), 'class' => 'form', 'files' => true)); ?>


<h5><?php echo e(__('Personal Information')); ?></h5>

<div class="row">
    <div class="col-md-4 col-sm-12">
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'first_name'); ?>">
            <label class="py-2" for="first_name"><?php echo e(__('First Name')); ?></label>
            <?php echo Form::text('first_name', null, array('class'=>'form-control', 'id'=>'first_name',
            'placeholder'=>__('First Name'))); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'first_name'); ?> </div>
    </div>

    <div class="col-md-4 col-sm-12">
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'last_name'); ?>">
            <label class="py-2" for="last_name"><?php echo e(__('Last Name')); ?></label>
            <?php echo Form::text('last_name', null, array('class' => 'form-control', 'id' => 'last_name',
            'placeholder' => __('Last Name'))); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'last_name'); ?></div>
    </div>

    <div class="col-md-4 col-sm-12">
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'email'); ?>">
            <label class="py-2" for="email"><?php echo e(__('Email')); ?></label>
            <?php echo Form::text('email', null, array('class'=>'form-control', 'id'=>'email',
             'placeholder' => __('Email'))); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'email'); ?> </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'gender_id'); ?>">
            <label class="py-2" for="gender_id"><?php echo e(__('Gender')); ?></label>
            <?php echo Form::select('gender_id', [''=>__('Select Gender')]+$genders, null, array('class'=>'form-control',
            'id'=>'gender_id')); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'gender_id'); ?> </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'marital_status_id'); ?>">
            <label class="py-2" for="marital_status_id"><?php echo e(__('Marital Status')); ?></label>
            <?php echo Form::select('marital_status_id', [''=>__('Select Marital Status')]+$maritalStatuses, null,
            array('class'=>'form-control', 'id'=>'marital_status_id')); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'marital_status_id'); ?> </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'country_id'); ?>">
            <label class="py-2" for="country_id"><?php echo e(__('Country')); ?></label>
            <?php $country_id = old('country_id', $siteSetting->default_country_id); ?>
            <?php echo Form::select('country_id', [''=>__('Select Country')]+$countries, $country_id,
            array('class'=>'form-control', 'id'=>'country_id')); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'country_id'); ?> </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'state_id'); ?>">
            <label class="py-2" for="state_id"><?php echo e(__('State')); ?></label>
            <span id="state_dd"> <?php echo Form::select('state_id', [''=>__('Select State')], null,
                array('class'=>'form-control', 'id'=>'state_id')); ?> </span> <?php echo APFrmErrHelp::showErrors($errors,
            'state_id'); ?> </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'city_id'); ?>">
            <label class="py-2" for="city_id"><?php echo e(__('City')); ?></label>
            <span id="city_dd"> <?php echo Form::select('city_id', [''=>__('Select City')], null,
                array('class'=>'form-control', 'id'=>'city_id')); ?> </span> <?php echo APFrmErrHelp::showErrors($errors,
            'city_id'); ?> </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'nationality_id'); ?>">
            <label class="py-2" for="nationality_id"><?php echo e(__('Nationality')); ?></label>
            <?php echo Form::select('nationality_id', [''=>__('Select Nationality')]+$nationalities, null,
            array('class'=>'form-control', 'id'=>'nationality_id')); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'nationality_id'); ?> </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'date_of_birth'); ?>">
            <label class="py-2" for="date_of_birth"><?php echo e(__('Date of Birth')); ?></label>
            <?php echo Form::text('date_of_birth', null, array('class'=>'form-control datepicker', 'id'=>'date_of_birth',
            'placeholder'=>__('Date of Birth'), 'autocomplete'=>'off')); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'date_of_birth'); ?> </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'national_id_card_number'); ?>">
            <label class="py-2" for="national_id_card_number"><?php echo e(__('National ID Card#')); ?></label>
            <?php echo Form::text('national_id_card_number', null, array('class'=>'form-control',
            'id'=>'national_id_card_number', 'placeholder'=>__('National ID Card#'))); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'national_id_card_number'); ?> </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'phone'); ?>">
            <label class="py-2" for="phone"><?php echo e(__('Phone')); ?></label>
            <?php echo Form::text('phone', null, array('class'=>'form-control', 'id'=>'phone', 'placeholder'=>__('Phone'))); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'phone'); ?> </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'mobile_num'); ?>">
            <label class="py-2" for="mobile_num"><?php echo e(__('Mobile')); ?></label>
            <?php echo Form::text('mobile_num', null, array('class'=>'form-control', 'id'=>'mobile_num',
            'placeholder'=>__('Mobile Number'))); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'mobile_num'); ?> </div>
    </div>

    <div class="col-md-12">
        <div class="form-group <?php echo APFrmErrHelp::hasError($errors, 'street_address'); ?>">
            <label class="py-2" for="street_address"><?php echo e(__('Street Address')); ?></label>
            <?php echo Form::textarea('street_address', null, array('class'=>'form-control', 'id'=>'street_address',
            'placeholder'=>__('Street Address'))); ?>

            <?php echo APFrmErrHelp::showErrors($errors, 'street_address'); ?> </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <button type="submit" class="btn btn-amber"><?php echo e(__('Register Now')); ?>

                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            </button>
        </div>
    </div>
</div>

<?php echo Form::close(); ?>

<hr>

<?php $__env->startPush('styles'); ?>
<style type="text/css">
    .datepicker>div {
        display: block;
    }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
    $(document).ready(function () {
        initdatepicker();
        $('#salary_currency').typeahead({
            source: function (query, process) {
                return $.get("<?php echo e(route('typeahead.currency_codes')); ?>", {query: query}, function (data) {
                    console.log(data);
                    data = $.parseJSON(data);
                    return process(data);
                });
            }
        });

        $('#country_id').on('change', function (e) {
            e.preventDefault();
            filterStates(0);
        });
        $(document).on('change', '#state_id', function (e) {
            e.preventDefault();
            filterCities(0);
        });
        filterStates(<?php echo old('state_id'); ?>);

        /*******************************/
        var fileInput = document.getElementById("image");
        fileInput.addEventListener("change", function (e) {
            var files = this.files
            showThumbnail(files)
        }, false)
        function showThumbnail(files) {
            $('#thumbnail').html('');
            for (var i = 0; i < files.length; i++) {
                var file = files[i]
                var imageType = /image.*/
                if (!file.type.match(imageType)) {
                    console.log("Not an Image");
                    continue;
                }
                var reader = new FileReader()
                reader.onload = (function (theFile) {
                    return function (e) {
                        $('#thumbnail').append('<div class="fileattached"><img height="100px" src="' + e.target.result + '" > <div>' + theFile.name + '</div><div class="clearfix"></div></div>');
                    };
                }(file))
                var ret = reader.readAsDataURL(file);
            }
        }
    });

    function filterStates(state_id)
    {
        var country_id = $('#country_id').val();
        if (country_id != '') {
            $.post("<?php echo e(route('filter.lang.states.dropdown')); ?>", {country_id: country_id, state_id: state_id, _method: 'POST', _token: '<?php echo e(csrf_token()); ?>'})
                    .done(function (response) {
                        $('#state_dd').html(response);
                        filterCities(<?php echo old('city_id'); ?>);
                    });
        }
    }
    function filterCities(city_id)
    {
        var state_id = $('#state_id').val();
        if (state_id != '') {
            $.post("<?php echo e(route('filter.lang.cities.dropdown')); ?>", {state_id: state_id, city_id: city_id, _method: 'POST', _token: '<?php echo e(csrf_token()); ?>'})
                    .done(function (response) {
                        $('#city_dd').html(response);
                    });
        }
    }
    function initdatepicker() {
        $(".datepicker").datepicker({
            autoclose: true,
            format: 'yyyy-m-d'
        });
    }
</script>
<?php $__env->stopPush(); ?>
