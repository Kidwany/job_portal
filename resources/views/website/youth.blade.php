@extends('website.layouts.layouts')
@section('style')
    <style>
        #new_state_id, #new_city_id
        {
            width: 100%;
            background: #eee;
            border-radius: 2px;
            padding: 12px 22px;
            display: block;
            transition: border-radius .2s ease-out;
            cursor: text;
            position: relative;
            font-size: 14px;
            border: none;
        }
    </style>
@endsection

@section('scripts')

    <script>
        $(document).ready(function () {
            $('#new_country_id').on('change', function () {
                var country_id = $(this).val();
                //alert(country_id);
                if (country_id)
                {
                    $.ajax({
                        header: '@csrf',
                        url: '{{url('get-states-of-country/')}}' + '/' + country_id,
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
                        header: '@csrf',
                        url: '{{url('get-cities-of-state/')}}' + '/' + state_id,
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
@endsection
@section('content')
    <!-- Header start -->
    @include('website.layouts.header')

    <!-- Youth page -->
    <div class="myPage youth-page">
        <div class="header-breadcrumb">
            <div class="page-title mfa-container">
                Youth support
            </div>
            <div class="breadcrumb-wrapper">
                <div class="mfa-container">
                    <ul class="breadcrumb-ul">
                        <li class="breadcrumb-li">
                            <a href="{{url('/')}}">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-li active-breadcrumb">
                            Youth support
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-content">
            <!-- youth support services section -->
            <div class="europe-services youth-support-section">
                <div class="mfa-container">
                    <div class="section-heading">
                        <h1>
                            <img src="{{asset('website/images/youth-support/youth.svg')}}" alt="img" />
                            Youth support services
                        </h1>
                    </div>

                    <div class="section-body">
                        <ul class="main-ul">
                            <li>
                                <img
                                        src="{{asset('website/images/youth-support/online-learning.svg')}}"
                                        alt="img"
                                />
                                <div class="li-title">
                                    Educational Support
                                </div>
                                <div class="li-body">
                                    young people are supported to improve their educational
                                    attainment, make progress and achieve their goals throughout
                                    their learning journey.
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('website/images/youth-support/skills.svg')}}" alt="img" />
                                <div class="li-title">
                                    Skills Support
                                </div>
                                <div class="li-body">
                                    young people will feel safe and are happier as a result of
                                    the interventions and support they receive
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('website/images/youth-support/effort.svg')}}" alt="img" />
                                <div class="li-title">
                                    Physical and emotional support
                                </div>
                                <div class="li-body">
                                    Feel positive, and are supported to make informed choices
                                    and understand the impact of harmful risky behaviours
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ./youth support services section -->

            <!-- stepper form -->
            <div class="mfa-container">
                <div class="stepper-form-wrapper">
                    <p class="section-heading">
                        <i class="linearicons-chart-growth"></i
                        ><span> Personal Information</span>
                    </p>
                    @include('website.layouts.messages')
                    <form class="mfa-form stepper-form" onsubmit="submit()" method="post" action="{{route('traveler.store')}}">
                        @csrf
                        <input type="hidden" name="type_id" value="3">
                        <div class="form-step">
                            <div class="form-div">
                                <label for="username">
										<span>
											Username
										</span>
                                    <input
                                            class="formInput"
                                            type="text"
                                            id="username"
                                            name="first_name"
                                            value="{{old('first_name')}}"
                                            required
                                    />
                                    <i class="feather icon-user"></i>
                                </label>
                            </div>
                            <div class="form-div">
                                <label for="email">
										<span>
											{{__('Email')}}
										</span>
                                    <input class="formInput" type="email" id="email" required name="email" value="{{old('first_name')}}" />
                                    <i class="feather icon-mail"></i>
                                </label>
                            </div>
                            <div class="form-div">
                                <label for="phone">
										<span>
											{{__('Phone')}}
										</span>
                                    <input
                                            class="formInput"
                                            type="tel"
                                            id="phone"
                                            name="phone"
                                            value="{{old('phone')}}"
                                            required
                                    />
                                    <i class="feather icon-phone"></i>
                                </label>
                            </div>

                            <div class="form-div">
                                <label>
										<span>
											<!-- Date of birth -->
										</span>
                                    <input class="formInput" type="date" name="date_of_birth" value="{{old('date_of_birth')/*->format('Y-m-d')*/}}" required />
                                </label>
                            </div>
                            <div class="form-div">
									<span>
										{{__('Select Gender')}}
									</span>
                                <select
                                        class="formInput my-select"
                                        name="gender_id"
                                        id="gender"
                                        required
                                >
                                    <option>
                                        {{__('Select Gender')}}
                                    </option>
                                    <option value="0">Male</option>
                                    <option value="1">Female</option>
                                </select>
                            </div>
                            <div class="form-div">
									<span>
										{{__('Marital Status')}}
									</span>
                                <select class="formInput my-select" name="marital_status_id" required>
                                    <option>
                                        {{__('Select Marital Status')}}
                                    </option>
                                    @if($maritalStatuses)
                                        @foreach($maritalStatuses as $key=>$value)
                                            <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="form-step">


                            <div class="form-div">
									<span>
										{{__('Country')}}
									</span>
                                <select class="formInput my-select" name="country_id" required id="new_country_id">
                                    <option>
                                        {{__('Select Country')}}
                                    </option>
                                    @if($countries)
                                        @foreach($countries as $key=>$value)
                                            <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-div">
									<span>
										{{__('State')}}
									</span>
                                <select class="form-control" id="new_state_id" name="state_id">
                                    <option>{{__('Select State')}}</option>
                                </select>
                            </div>

                            <div class="form-div">
									<span>
										{{__('City')}}
									</span>
                                <select class="form-control" id="new_city_id" name="city_id">
                                    <option>{{__('Select City')}}</option>
                                </select>
                            </div>

                            <div class="form-div">
									<span>
										{{__('Nationality')}}
									</span>
                                <select
                                        class="formInput my-select"
                                        name="nationality_id"
                                        required
                                >
                                    <option>
                                        {{__('Select Nationality')}}
                                    </option>
                                    @if($nationalities)
                                        @foreach($nationalities as $key=>$value)
                                            <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-step">
                            <div class="form-div">
									<span>
										Functional Area
									</span>
                                <select class="formInput my-select" name="functional_area_id" required>
                                    <option>
                                        Select Functional Area
                                    </option>
                                    @if($functionalAreas)
                                        @foreach($functionalAreas as $key=>$value)
                                            <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-div">
									<span>
										Industry
									</span>
                                <select
                                        class="formInput my-select"
                                        name="industry_id"
                                        required
                                >
                                    <option>
                                        Select Industry
                                    </option>
                                    @if($industries)
                                        @foreach($industries as $key=>$value)
                                            <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-div">
									<span>
										Degree
									</span>
                                <select
                                        class="formInput my-select"
                                        name="degree_id"
                                        required
                                >
                                    <option>
                                        Select Degree Level
                                    </option>
                                    @if($degrees)
                                        @foreach($degrees as $key=>$value)
                                            <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            {{--<div class="form-div">
                                <label for="address">
										<span>
											Adress
										</span>
                                    <input class="formInput" type="text" id="adress" required />
                                    <i class="feather icon-map-pin"></i>
                                </label>
                            </div>
                            <div class="form-div">
                                <label for="idcard">
										<span>
											National ID Card#
										</span>
                                    <input class="formInput" type="text" id="idcard" required />
                                    <i class="feather icon-codepen"></i>
                                </label>
                            </div>--}}
                        </div>
                        <div class="formBtns">
                            <button class="prevBtn">Previous</button>
                            <button class="nextBtn">Next</button>
                            <button class="submitBtn" type="submit">Submit</button>
                        </div>

                        <div class="step-indicators">
                            <span class="step-indicator"></span>
                            <span class="step-indicator"></span>
                            <span class="step-indicator"></span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ./stepper form -->
        </div>
    </div>
    <!-- ./Youth page -->

    @include('website.layouts.footer')
@endsection
