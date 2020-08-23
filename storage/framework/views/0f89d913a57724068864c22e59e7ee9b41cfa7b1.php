
<?php $__env->startSection('style'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <script>
        $(document).ready(function () {
            $('#new_country_id').on('change', function () {
                var country_id = $(this).val();
                //alert(country_id);
                if (country_id)
                {
                    $.ajax({
                        header: '<?php echo csrf_field(); ?>',
                        url: '<?php echo e(url('get-states-of-country/')); ?>' + '/' + country_id,
                        type: "GET",
                        dataType: 'json',
                        success: function (data) {
                            $('#new_state_id').empty();
                            $('#new_city_id').empty();
                            //$('#childOfChildLocation').empty();
                            $.each(data, function (key, value) {
                                //alert(value);
                                //$('#new_state_id').append('<option value="">kidoo</option>')
                                $('#new_state_id').append('<option value="' + key +'">'+ value +'</option>')
                            })
                        }
                    })
                }
            });

            $('#new_state_id').on('change', function () {
                var state_id = $(this).val();
                //alert(country_id);
                if (state_id)
                {
                    $.ajax({
                        header: '<?php echo csrf_field(); ?>',
                        url: '<?php echo e(url('get-cities-of-state/')); ?>' + '/' + state_id,
                        type: "GET",
                        dataType: 'json',
                        success: function (data) {
                            $('#new_city_id').empty();
                            //$('#childOfChildLocation').empty();
                            $.each(data, function (key, value) {
                                //alert(value);
                                //$('#new_state_id').append('<option value="">kidoo</option>')
                                $('#new_city_id').append('<option value="' + key +'">'+ value +'</option>')
                            })
                        }
                    })
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Header start -->
    <?php echo $__env->make('website.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- traveling to europe page -->
    <div class="myPage europe-page">
        <div class="header-breadcrumb">
            <div class="page-title mfa-container">
                Traveling to europe
            </div>
            <div class="breadcrumb-wrapper">
                <div class="mfa-container">
                    <ul class="breadcrumb-ul">
                        <li class="breadcrumb-li">
                            <a href="<?php echo e(url('/')); ?>">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-li active-breadcrumb">
                            Traveling to Europe
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-content">
            <!-- europe services section -->
            <div class="europe-services">
                <div class="mfa-container">
                    <div class="section-heading">
                        <h1>
                            <img src="<?php echo e(asset('website/images/europe/visa.svg')); ?>" alt="img" />
                            Visas and immigration to Europe
                        </h1>
                        <p>Visa and immigration services</p>
                    </div>

                    <div class="section-body">
                        <ul class="main-ul">
                            <li>
                                <img
                                        src="<?php echo e(asset('website/images/europe/services/travel-insurance-and-reservation.png')); ?>"
                                        alt="img"
                                />
                                <div class="li-title">
                                    Travel requirements insurance
                                </div>
                                <div class="li-body">
                                    Prepare all visa requirements for airline reservations,
                                    accommodations, photos and travel insurance
                                </div>
                            </li>
                            <li>
                                <img
                                        src="<?php echo e(asset('website/images/europe/services/visa-embassy-reservation.png')); ?>"
                                        alt="img"
                                />
                                <div class="li-title">
                                    Book an embassy appointment
                                </div>
                                <div class="li-body">
                                    Fill and send the required visa forms professionally, and
                                    set the date of the interview
                                </div>
                            </li>
                            <li>
                                <img
                                        src="<?php echo e(asset('website/images/europe/services/visa-requirements-preparation.png')); ?>"
                                        alt="img"
                                />
                                <div class="li-title">
                                    Prepare documents
                                </div>
                                <div class="li-body">
                                    Prepare all documents required to obtain, certify and
                                    translate the visa
                                </div>
                            </li>
                            <li>
                                <img src="<?php echo e(asset('website/images/europe/services/visa-free-consultation.png')); ?>"
                                        alt="img"
                                />
                                <div class="li-title">
                                    Free consultation
                                </div>
                                <div class="li-body">
                                    Specialists will help you find out what type of visa you
                                    need and what its requirements are
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ./europe services section -->

            <!-- why eladrousi section -->
            <div class="why-eladrousi">
                <div class="mfa-container">
                    <div class="section-heading">
                        <h1>
                            <img src="<?php echo e(asset('website/images/europe/travel.svg')); ?>" alt="img" />
                            Why Eladrousi for Visa and Immigration
                        </h1>
                    </div>

                    <div class="section-body">
                        <ul class="main-ul">
                            <li>
                                <img
                                        src="<?php echo e(asset('website/images/europe/why/free-visa-immigration-consultation.png')); ?>"
                                        alt="img"
                                />
                                <div class="li-title">
                                    Free and accurate consultation
                                </div>
                                <div class="li-body">
                                    30 years of experience gives us the ability to give prompt
                                    and accurate advice regarding obtaining a visa and
                                    immigration, depending on the information given by you and
                                    our knowledge of the requirements of all types of visas. We
                                    check your eligibility for all types of visas to the
                                    required country and inform you of the necessary procedures
                                </div>
                            </li>
                            <li>
                                <img
                                        src="<?php echo e(asset('website/images/europe/why/requirements-visa-immigration.png')); ?>"
                                        alt="img"
                                />
                                <div class="li-title">
                                    Prepare all requirements
                                </div>
                                <div class="li-body">
                                    We prepare and translate all required documents, submit the
                                    required visa forms, pay embassy fees on your behalf, set a
                                    reservation date with embassies, and submit all requests for
                                    entry visas such as travel insurance, airline tickets, hotel
                                    reservations, and others.
                                </div>
                            </li>
                            <li>
                                <img
                                        src="<?php echo e(asset('website/images/europe/why/quality-visa-services.png')); ?>"
                                        alt="img"
                                />
                                <div class="li-title">
                                    Top quality services
                                </div>
                                <div class="li-body">
                                    Eladrousi provides visa and immigration consultancy with
                                    high quality and high quality translation from licensed
                                    translators. It applies the highest professional standards,
                                    and is accredited by the Australian Nati authorities, and
                                    all embassies around the world and holds an ISO global
                                    quality certificate.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ./why eladrousi section -->

            <!-- stepper form -->
            <div class="mfa-container">
                <div class="stepper-form-wrapper">
                    <p class="section-heading">
                        <i class="linearicons-chart-growth"></i
                        ><span> Get a free consultation </span>
                    </p>
                    <?php echo $__env->make('website.layouts.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <form class="stepper-form" action="<?php echo e(route('traveler.store')); ?>" method="post">
                        <input type="hidden" name="type_id" value="1">
                        <?php echo csrf_field(); ?>
                        <div class="step" data-step-index="0">
                            <h1>
                                Basic Information
                            </h1>
                            <div class="field-wrapper">
                                <span class="helper-error"></span>
                                <input
                                        class="formInput"
                                        type="text"
                                        id="username"
                                        name="first_name"
                                        value="<?php echo e(old('first_name')); ?>"
                                        placeholder="Username"
                                        required
                                />
                            </div>
                            <div class="field-wrapper">
                                <span class="helper-error"></span>
                                <input class="formInput"
                                       type="email"
                                       id="email"
                                       placeholder="Email"
                                       required
                                       name="email"
                                       value="<?php echo e(old('first_name')); ?>"
                                />
                            </div>
                            <div class="field-wrapper">
                                <span class="helper-error"></span>
                                <input class="formInput"
                                       type="tel"
                                       id="phone"
                                       name="phone"
                                       value="<?php echo e(old('phone')); ?>"
                                       placeholder="Phone"
                                       required
                                />
                            </div>
                            <div class="field-wrapper">
                                <span class="helper-error"></span>
                                <input type="date" name="date_of_birth" value="<?php echo e(old('date_of_birth')); ?>" placeholder="Date" />
                            </div>
                            <div class="field-wrapper">
                                <span class="helper-error"></span>
                                <select name="gender_id" id="">
                                    <option value=""><?php echo e(__('Select Gender')); ?></option>
                                    <option value="0">Male</option>
                                    <option value="1">Female</option>
                                </select>
                            </div>
                            <div class="field-wrapper">
                                <span class="helper-error"></span>
                                <select name="marital_status_id" id="">
                                    <option value=""><?php echo e(__('Marital Status')); ?></option>
                                    <?php if($maritalStatuses): ?>
                                        <?php $__currentLoopData = $maritalStatuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="step" data-step-index="1">
                            <h1>
                                Address Information
                            </h1>
                            <div class="field-wrapper">
                                <span class="helper-error"></span>
                                <select name="country_id" id="new_country_id">
                                    <option value=""><?php echo e(__('Country')); ?></option>
                                    <?php if($countries): ?>
                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div class="field-wrapper">
                                <span class="helper-error"></span>
                                <select name="state_id" id="new_state_id">
                                    <option value=""><?php echo e(__('Select State')); ?></option>
                                </select>
                            </div>
                            <div class="field-wrapper">
                                <span class="helper-error"></span>
                                <select name="city_id" id="new_city_id">
                                    <option value=""><?php echo e(__('Select City')); ?></option>
                                </select>
                            </div>
                            <div class="field-wrapper">
                                <span class="helper-error"></span>
                                <select name="nationality_id" id="">
                                    <option value=""><?php echo e(__('Select Nationality')); ?></option>
                                    <?php if($nationalities): ?>
                                        <?php $__currentLoopData = $nationalities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="step" data-step-index="2">
                            <h1>
                                Career Information
                            </h1>
                            <div class="field-wrapper">
                                <span class="helper-error"></span>
                                <select name="functional_area_id" id="">
                                    <option value="">Select Functional Area</option>
                                    <?php if($functionalAreas): ?>
                                        <?php $__currentLoopData = $functionalAreas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div class="field-wrapper">
                                <span class="helper-error"></span>
                                <select name="industry_id" id="">
                                    <option value="">Select Industry</option>
                                    <?php if($industries): ?>
                                        <?php $__currentLoopData = $industries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                            <div class="field-wrapper">
                                <span class="helper-error"></span>
                                <select name="degree_id" id="">
                                    <option value="">Select Degree</option>
                                    <?php if($degrees): ?>
                                        <?php $__currentLoopData = $degrees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="btns__indicators">
                            <div class="btns">
                                <button type="button" class="prev-btn">Previous</button>
                                <button type="button" class="next-btn">Next</button>
                                <button type="submit" class="stepper-submit-btn">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ./stepper form -->

            
        </div>
    </div>
    <!-- ./traveling to europe page -->

    <?php echo $__env->make('website.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.layouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>