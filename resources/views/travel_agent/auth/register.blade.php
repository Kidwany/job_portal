@extends('layouts.app')

@section('content')

    <!-- Header start -->

    @include('website.layouts.header')

    <!-- Header end -->

    <!-- Inner Page Title start -->

    @include('includes.inner_page_title', ['page_title'=> 'Register as Travel Agent'])

    <!-- Inner Page Title end -->

    <div class="listpgWraper">

        <div class="container">

            @include('flash::message')



            <div class="useraccountwrap">

                <div class="userccount">

                    <div class="userbtns">

                        <div class="titleTop">
                            <h3>Travel Agent Sign Up!</h3>
                        </div>

                        <ul class="nav nav-tabs">

                            <?php

                            $c_or_e = old('candidate_or_employer', 'candidate');

                            ?>

                        </ul>

                    </div>

                    <div class="tab-content">
                        <div id="candidate" class="formpanel tab-pane {{($c_or_e == 'candidate')? 'active':''}}">
                            {{--@include('website.layouts.messages')--}}
                            <form class="form-horizontal" method="POST" action="{{ url('travel-agent/register') }}">

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
                    <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> {{__('Have Account')}}? <a href="{{url('travel-agent/login')}}">{{__('Sign in')}}</a></div>
                    <!-- sign up form end-->
                </div>

            </div>



        </div>

    </div>

    @include('website.layouts.footer')

@endsection