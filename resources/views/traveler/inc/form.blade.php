{!!
Form::model(null, array('method' => 'post', 'route' => array('traveler.store'), 'class' => 'form', 'files' => true))
!!}

<h5>{{__('Personal Information')}}</h5>

<div class="row">
    <div class="col-md-4 col-sm-12">
        <div class="form-group {!! APFrmErrHelp::hasError($errors, 'first_name') !!}">
            <label class="py-2" for="first_name">{{__('First Name')}}</label>
            {!! Form::text('first_name', null, array('class'=>'form-control', 'id'=>'first_name',
            'placeholder'=>__('First Name'))) !!}
            {!! APFrmErrHelp::showErrors($errors, 'first_name') !!} </div>
    </div>

    <div class="col-md-4 col-sm-12">
        <div class="form-group {!! APFrmErrHelp::hasError($errors, 'last_name') !!}">
            <label class="py-2" for="last_name">{{__('Last Name')}}</label>
            {!! Form::text('last_name', null, array('class'=>'form-control', 'id' => 'last_name',
            'placeholder'=>__('Last Name'))) !!}
            {!! APFrmErrHelp::showErrors($errors, 'last_name') !!}</div>
    </div>

    <div class="col-md-4 col-sm-12">
        <div class="form-group {!! APFrmErrHelp::hasError($errors, 'email') !!}">
            <label class="py-2" for="email">{{__('Email')}}</label>
            {!! Form::text('email', null, array('class'=>'form-control', 'id'=>'email', 'placeholder'=>__('Email'))) !!}
            {!! APFrmErrHelp::showErrors($errors, 'email') !!} </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="form-group {!! APFrmErrHelp::hasError($errors, 'gender_id') !!}">
            <label class="py-2" for="gender_id">{{__('Gender')}}</label>
            {!! Form::select('gender_id', [''=>__('Select Gender')]+$genders, null, array('class'=>'form-control',
            'id'=>'gender_id')) !!}
            {!! APFrmErrHelp::showErrors($errors, 'gender_id') !!} </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="form-group {!! APFrmErrHelp::hasError($errors, 'marital_status_id') !!}">
            <label class="py-2" for="marital_status_id">{{__('Marital Status')}}</label>
            {!! Form::select('marital_status_id', [''=>__('Select Marital Status')]+$maritalStatuses, null,
            array('class'=>'form-control', 'id'=>'marital_status_id')) !!}
            {!! APFrmErrHelp::showErrors($errors, 'marital_status_id') !!} </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="form-group {!! APFrmErrHelp::hasError($errors, 'country_id') !!}">
            <label class="py-2" for="country_id">{{__('Country')}}</label>
            <?php $country_id = old('country_id', $siteSetting->default_country_id); ?>
            {!! Form::select('country_id', [''=>__('Select Country')]+$countries, $country_id,
            array('class'=>'form-control', 'id'=>'country_id')) !!}
            {!! APFrmErrHelp::showErrors($errors, 'country_id') !!} </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="form-group {!! APFrmErrHelp::hasError($errors, 'state_id') !!}">
            <label class="py-2" for="state_id">{{__('State')}}</label>
            <span id="state_dd"> {!! Form::select('state_id', [''=>__('Select State')], null,
                array('class'=>'form-control', 'id'=>'state_id')) !!} </span> {!! APFrmErrHelp::showErrors($errors,
            'state_id') !!} </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="form-group {!! APFrmErrHelp::hasError($errors, 'city_id') !!}">
            <label class="py-2" for="city_id">{{__('City')}}</label>
            <span id="city_dd"> {!! Form::select('city_id', [''=>__('Select City')], null,
                array('class'=>'form-control', 'id'=>'city_id')) !!} </span> {!! APFrmErrHelp::showErrors($errors,
            'city_id') !!} </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group {!! APFrmErrHelp::hasError($errors, 'nationality_id') !!}">
            <label class="py-2" for="nationality_id">{{__('Nationality')}}</label>
            {!! Form::select('nationality_id', [''=>__('Select Nationality')]+$nationalities, null,
            array('class'=>'form-control', 'id'=>'nationality_id')) !!}
            {!! APFrmErrHelp::showErrors($errors, 'nationality_id') !!} </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="form-group {!! APFrmErrHelp::hasError($errors, 'date_of_birth') !!}">
            <label class="py-2" for="date_of_birth">{{__('Date of Birth')}}</label>
            {!! Form::text('date_of_birth', null, array('class'=>'form-control datepicker', 'id'=>'date_of_birth',
            'placeholder'=>__('Date of Birth'), 'autocomplete'=>'off')) !!}
            {!! APFrmErrHelp::showErrors($errors, 'date_of_birth') !!} </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="form-group {!! APFrmErrHelp::hasError($errors, 'national_id_card_number') !!}">
            <label class="py-2" for="national_id_card_number">{{__('National ID Card#')}}</label>
            {!! Form::text('national_id_card_number', null, array('class'=>'form-control',
            'id'=>'national_id_card_number', 'placeholder'=>__('National ID Card#'))) !!}
            {!! APFrmErrHelp::showErrors($errors, 'national_id_card_number') !!} </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="form-group {!! APFrmErrHelp::hasError($errors, 'phone') !!}">
            <label class="py-2" for="phone">{{__('Phone')}}</label>
            {!! Form::text('phone', null, array('class'=>'form-control', 'id'=>'phone', 'placeholder'=>__('Phone'))) !!}
            {!! APFrmErrHelp::showErrors($errors, 'phone') !!} </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="form-group {!! APFrmErrHelp::hasError($errors, 'mobile_num') !!}">
            <label class="py-2" for="mobile_num">{{__('Mobile')}}</label>
            {!! Form::text('mobile_num', null, array('class'=>'form-control', 'id'=>'mobile_num',
            'placeholder'=>__('Mobile Number'))) !!}
            {!! APFrmErrHelp::showErrors($errors, 'mobile_num') !!} </div>
    </div>

    <div class="col-md-12">
        <div class="form-group {!! APFrmErrHelp::hasError($errors, 'street_address') !!}">
            <label class="py-2" for="street_address">{{__('Street Address')}}</label>
            {!! Form::textarea('street_address', null, array('class'=>'form-control', 'id'=>'street_address',
            'placeholder'=>__('Street Address'))) !!}
            {!! APFrmErrHelp::showErrors($errors, 'street_address') !!} </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <button type="submit" class="btn btn-amber">{{__('Register Now')}}
                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
            </button>
        </div>
    </div>
</div>

{!! Form::close() !!}

<hr>

@push('styles')
<style type="text/css">
    .datepicker>div {
        display: block;
    }
</style>
@endpush
@push('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        initdatepicker();
        $('#salary_currency').typeahead({
            source: function (query, process) {
                return $.get("{{ route('typeahead.currency_codes') }}", {query: query}, function (data) {
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
            $.post("{{ route('filter.lang.states.dropdown') }}", {country_id: country_id, state_id: state_id, _method: 'POST', _token: '{{ csrf_token() }}'})
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
            $.post("{{ route('filter.lang.cities.dropdown') }}", {state_id: state_id, city_id: city_id, _method: 'POST', _token: '{{ csrf_token() }}'})
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
@endpush
