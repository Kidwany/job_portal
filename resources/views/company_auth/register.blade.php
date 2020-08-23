@extends('layouts.app')

@section('content') 

<!-- Header start --> 

@include('website.layouts.header')

<!-- Header end --> 

<!-- Inner Page Title start --> 

@include('includes.inner_page_title', ['page_title'=> 'Employer?'])

<!-- Inner Page Title end -->

<!-- traveling to europe page -->
<div class="myPage employer-page">
    <div class="page-content">
        <!-- europe services section -->
        <div class="page-section recruitment-section">
            <div class="mfa-container">
                <div class="section-heading">
                    <h1>
                        <img src="{{asset('website/images/employer/employer.svg')}}" alt="img" />
                        From Brand-Building to Onboarding, Leverage our AI-powered
                        Recruitment Solutions
                    </h1>
                </div>

                <div class="section-body">
                    <ul class="recruitments-ul">
                        <li>
                            <img src="{{asset('website/images/employer/recruitment/bag.svg')}}" alt="img" />
                            <div class="li-title">
                                Post a Job & Attract Relevant Applicants
                            </div>
                            <div class="li-body">
                                Post a job, define requirements & get a filtered list of
                                applicants
                            </div>

                            <a href="#">
                                Post a job now
                            </a>
                        </li>
                        <li>
                            <img
                                    src="{{asset('website/images/employer/recruitment/target.svg')}}"
                                    alt="img"
                            />
                            <div class="li-title">
                                Find Top Talent in seconds
                            </div>
                            <div class="li-body">
                                With 30+ filters at your disposal, you can quickly find the
                                right hire.
                            </div>

                            <a href="#">
                                Search CVs
                            </a>
                        </li>
                        <li>
                            <img
                                    src="{{asset('website/images/employer/recruitment/premium.svg')}}"
                                    alt="img"
                            />
                            <div class="li-title">
                                Get a Premium Company Profile
                            </div>
                            <div class="li-body">
                                Promote your employer brand on MENA's busiest marketplace
                            </div>

                            <a href="#">
                                Explore company profiles
                            </a>
                        </li>
                        <li>
                            <img src="{{asset('website/images/employer/recruitment/site.svg')}}" alt="img" />
                            <div class="li-title">
                                Launch a Branded Career Site
                            </div>
                            <div class="li-body">
                                From brand-building to onboarding, we have you covered
                            </div>

                            <a href="#">
                                Learn about talentera
                            </a>
                        </li>
                        <li>
                            <img src="{{asset('website/images/employer/recruitment/fair.svg')}}" alt="img" />
                            <div class="li-title">
                                Host a Virtual Career Fair
                            </div>
                            <div class="li-body">
                                Engage job seekers online in real- time with a Virtual
                                Career Fair
                            </div>

                            <a href="#">
                                Learn about vFairs
                            </a>
                        </li>
                        <li>
                            <img
                                    src="{{asset('website/images/employer/recruitment/video.svg')}}"
                                    alt="img"
                            />
                            <div class="li-title">
                                Evaluate Candidates with Video
                            </div>
                            <div class="li-body">
                                Send video assessments to candidates & screen smarter.
                            </div>

                            <a href="#">
                                Learn about Evalufy
                            </a>
                        </li>
                        <li>
                            <img src="{{asset('website/images/employer/recruitment/test.svg')}}" alt="img" />
                            <div class="li-title">
                                Assess Candidates with Eladrousi Tests
                            </div>
                            <div class="li-body">
                                Measure candidates objectively using our vast library of
                                tests
                            </div>

                            <a href="#">
                                Eladrousi tests
                            </a>
                        </li>
                        <li>
                            <img
                                    src="{{asset('website/images/employer/recruitment/applicant.svg')}}"
                                    alt="img"
                            />
                            <div class="li-title">
                                Simplify Hiring with an Applicant Tracking System
                            </div>
                            <div class="li-body">
                                Talentera is a leading ATS solution that makes hiring simple
                                & easy.
                            </div>

                            <a href="#">
                                Learn about Talentera
                            </a>
                        </li>
                        <li>
                            <img src="{{asset('website/images/employer/recruitment/cv.svg')}}" alt="img" />
                            <div class="li-title">
                                Capture CVs at Career Events & Walk-ins
                            </div>
                            <div class="li-body">
                                Capture CVs quickly with our lightweight tool
                            </div>

                            <a href="#">
                                Explore CV Kiosk
                            </a>
                        </li>
                        <li>
                            <img
                                    src="{{asset('website/images/employer/recruitment/board.svg')}}"
                                    alt="img"
                            />
                            <div class="li-title">
                                Onboard Employees Faster & Smarter
                            </div>
                            <div class="li-body">
                                From brand-building to onboarding, we have you covered
                            </div>

                            <a href="#">
                                Learn about afterHire
                            </a>
                        </li>
                        <li>
                            <img
                                    src="{{asset('website/images/employer/recruitment/phone.svg')}}"
                                    alt="img"
                            />
                            <div class="li-title">
                                Don't have time to recruit? Let us hire for you.
                            </div>
                            <div class="li-body">
                                Outsource your recruitment process to the expert team at
                                Bayt
                            </div>

                            <a href="#">
                                Learn about Source2Hire
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ./europe services section -->

        <!-- companies section -->
        <div class="page-section companies-section">
            <div class="mfa-container">
                <div class="section-heading">
                    <h1>
                        <img src="{{asset('website/images/employer/hire.svg')}}" alt="img" />
                        Who's Hiring on Eladrousi
                    </h1>
                </div>
                <div class="section-body">
                    <ul class="partners-ul">
                        @if($companies)
                            @foreach($companies as $company)
                                <li>
                                    <a href="{{route('company.detail',$company->slug)}}">
                                        <img src="{!! asset('company_logos/' . $company->logo) !!}" alt="img" />
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <!-- ./companies section -->
    </div>
</div>
<!-- ./traveling to europe page -->

<div class="listpgWraper">

    <div class="container">

        @include('flash::message')

        

           <div class="useraccountwrap">

                <div class="userccount">

                    <div class="userbtns">

                        <div class="titleTop">
                            <h3>Employer Sign Up!</h3>
                        </div>

                        <ul class="nav nav-tabs">

                            <?php

                            $c_or_e = old('candidate_or_employer', 'candidate');

                            ?>

                            {{--<li class="nav-item"><a class="nav-link {{($c_or_e == 'candidate')? 'active':''}}" data-toggle="tab" href="#candidate" aria-expanded="true">{{__('Candidate')}}</a></li>

                            <li class="nav-item"><a class="nav-link {{($c_or_e == 'employer')? 'active':''}}" data-toggle="tab" href="#employer" aria-expanded="false">{{__('Employer')}}</a></li>--}}

                        </ul>

                    </div>

                    <div class="tab-content">

                        <div id="candidate" class="formpanel tab-pane {{($c_or_e == 'candidate')? 'active':''}}">

                            {{--@include('website.layouts.messages')--}}
                            <form class="form-horizontal" method="POST" action="{{ route('company.register') }}">

                                {{ csrf_field() }}

                                <input type="hidden" name="candidate_or_employer" value="employer" />

                                <h3>Login Information</h3>
                                <hr>

                                <div class="formrow {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label>
                                        Email
                                    </label>
                                    <input type="email" name="email" class="form-control" required="required"
                                           placeholder="{{__('Email')}}" value="{{old('email')}}">

                                    @if ($errors->has('email')) <span class="help-block help-block-error">
                                        <strong>{{ $errors->first('email') }}</strong> </span>
                                    @endif
                                </div>

                                <div class="formrow {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label>
                                        Password
                                    </label>
                                    <input type="password" name="password" class="form-control" required="required"
                                           placeholder="{{__('Password')}}" value="">

                                    @if ($errors->has('password')) <span class="help-block help-block-error">
                                        <strong>{{ $errors->first('password') }}</strong> </span> @endif
                                </div>

                                <div class="formrow {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label>
                                        Password Confirmation
                                    </label>
                                    <input type="password" name="password_confirmation" class="form-control {{$errors->has('password_confirmation') ? 'invalid' : ''}}"
                                           required="required" placeholder="{{__('Password Confirmation')}}" value="">

                                    @if ($errors->has('password_confirmation')) <span class="help-block help-block-error">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong> </span> @endif
                                </div>

                                <h3>Company Information</h3>
                                <hr>

                                <div class="formrow {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label>
                                       Company Name
                                    </label>
                                    <input type="text" name="name" class="form-control {{$errors->has('name') ? 'invalid' : ''}}" required="required"
                                           placeholder="{{__('Name')}}" value="{{old('name')}}">

                                    @if ($errors->has('name')) <span class="help-block help-block-error">
                                        <strong>{{ $errors->first('name') }}</strong> </span> @endif
                                </div>
                                <div class="formrow {{ $errors->has('company_name') ? ' has-error' : '' }}">
                                    <label>
                                        Company Phone
                                    </label>
                                    <input type="text" name="name" class="form-control" required="required"
                                           placeholder="Enter Company Phone" value="{{old('phone')}}">

                                    @if ($errors->has('phone')) <span class="help-block help-block-error">
                                        <strong>{{ $errors->first('phone') }}</strong> </span> @endif
                                </div>

                                <div class="formrow {{ $errors->has('company_website') ? ' has-error' : '' }}">
                                    <label>
                                        Company Website
                                    </label>
                                    <input type="text" name="company_website" class="form-control" required="required"
                                           placeholder="Enter Company Website" value="{{old('company_website')}}">

                                    @if ($errors->has('company_website')) <span class="help-block help-block-error">
                                        <strong>{{ $errors->first('company_website') }}</strong> </span> @endif
                                </div>

                                <div class="formrow">
                                    <label>
                                        Country
                                    </label>
                                    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'country_id') !!}">
                                        <select name="country_id" class="form-control" id="country_id" required>
                                            <option value="">Choose Country</option>
                                            @foreach($countries as $key=>$value)
                                                <option value="{{$key}}">{{$value}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <div class="formrow">
                                    <label>
                                        Industry
                                    </label>
                                    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'industry_id') !!}">
                                        <select name="industry_id" class="form-control" id="industry_id" required>
                                            <option value="">Choose Industry</option>
                                            @foreach($industries as $key=>$value)
                                                <option value="{{$key}}">{{$value}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <div class="formrow {{ $errors->has('is_subscribed') ? ' has-error' : '' }}">
                                    @php
                                        $is_checked = '';
                                        if (old('is_subscribed', 1)) {
                                        $is_checked = 'checked="checked"';
                                        }
                                    @endphp
                                    <input type="checkbox" value="1" name="is_subscribed"
                                            {{$is_checked}} />{{__('Subscribe to newsletter')}}
                                    @if ($errors->has('is_subscribed')) <span class="help-block help-block-error">
                                        <strong>{{ $errors->first('is_subscribed') }}</strong> </span> @endif
                                </div>

                                <div class="formrow {{ $errors->has('terms_of_use') ? ' has-error' : '' }}">
                                    <input type="checkbox" value="1" name="terms_of_use" required/>
                                    <a href="{{url('terms-of-use')}}">{{__('I accept Terms of Use')}}</a>
                                    @if ($errors->has('terms_of_use')) <span class="help-block help-block-error">
                                        <strong>{{ $errors->first('terms_of_use') }}</strong> </span> @endif
                                </div>
                                <input type="submit" class="btn btn-amber" value="Join El Adrousi as a Company">
                            </form>

                        </div>

                    </div>

                    <!-- sign up form -->

                    <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> {{__('Have Account')}}? <a href="{{route('company.login')}}">{{__('Sign in')}}</a></div>

                    <!-- sign up form end--> 



                </div>

            </div>

        

    </div>

</div>

@include('website.layouts.footer')

@endsection 