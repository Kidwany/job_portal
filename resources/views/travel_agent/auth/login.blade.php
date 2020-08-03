@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end -->
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title'=>__('Login')])
<!-- Inner Page Title end -->
<div class="listpgWraper">
    <div class="container">
        @include('flash::message')

        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                <div class="userccount">
                    <div class="userbtnsLogin">
                        <ul class="nav nav-tabs">
                            @php
                                $c_or_e = old('candidate_or_employer', 'candidate', 'travelAgent');
                            @endphp
                            <li class="nav-item"><a class="nav-link {{($c_or_e == 'candidate')? 'active':''}}"
                                data-toggle="tab" href="#candidate" aria-expanded="true">{{__('Candidate')}}</a></li>
                            <li class="nav-item"><a class="nav-link {{($c_or_e == 'employer')? 'active':''}}"
                                data-toggle="tab" href="#employer" aria-expanded="false">{{__('Employer')}}</a></li>
                            <li class="nav-item"><a class="nav-link {{($c_or_e == 'travelAgent')? 'active':''}}"
                                data-toggle="tab" href="#travelAgent" aria-expanded="false">{{__('Travel Agents')}}</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        
                        <div id="candidate" class="formpanel tab-pane {{($c_or_e == 'candidate')? 'active':''}}">
                            <div class="socialLogin">
                                <h5>{{__('Login with')}}</h5>
                                <a href="{{ url('login/jobseeker/facebook')}}" class="fb"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a><a href="{{ url('login/jobseeker/twitter')}}"
                                    class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="candidate_or_employer" value="candidate" />
                                <div class="formpanel">
                                    <div class="formrow {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input id="email" type="email" class="form-control" name="email"
                                            value="{{ old('email') }}" required autofocus
                                            placeholder="{{__('Email Address')}}">
                                        @if ($errors->has('email'))
                                        <span class="help-block help-block-error">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="formrow {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <input id="password" type="password" class="form-control" name="password" value=""
                                            required placeholder="{{__('Password')}}">
                                        @if ($errors->has('password'))
                                        <span class="help-block help-block-error">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <input type="submit" class="btn btn-amber" value="{{__('Login')}}">
                                </div>
                                <!-- login form  end-->
                            </form>
                            <!-- sign up form -->
                            <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> {{__('New User')}}{{__('?')}} <a
                                    href="{{route('register')}}">{{__('Register Here')}}</a></div>
                            <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i>
                                {{__('Forgot Your Password')}}{{__('?')}} <a
                                    href="{{ route('password.request') }}">{{__('Click here')}}</a></div>
                            <!-- sign up form end-->
                        </div>
                        
                        <div id="employer" class="formpanel tab-pane fade {{($c_or_e == 'employer')? 'active':''}}">
                            <div class="socialLogin">
                                <h5>{{__('Login with')}}</h5>
                                <a href="{{ url('login/employer/facebook')}}" class="fb"><i class="fa fa-facebook"
                                        aria-hidden="true"></i></a> <a href="{{ url('login/employer/twitter')}}"
                                    class="tw"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                            <form class="form-horizontal" method="POST" action="{{ route('company.login') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="candidate_or_employer" value="employer" />
                                <div class="formpanel">
                                    <div class="formrow {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input id="email" type="email" class="form-control" name="email"
                                            value="{{ old('email') }}" required autofocus
                                            placeholder="{{__('Email Address')}}">
                                        @if ($errors->has('email'))
                                        <span class="help-block help-block-error">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="formrow {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <input id="password" type="password" class="form-control" name="password" value=""
                                            required placeholder="{{__('Password')}}">
                                        @if ($errors->has('password'))
                                        <span class="help-block help-block-error">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <input type="submit" class="btn btn-amber" value="{{__('Login')}}">
                                </div>
                                <!-- login form  end-->
                            </form>
                            <!-- sign up form -->
                            <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> {{__('New User')}}{{__('?')}} <a
                                    href="{{route('register')}}">{{__('Register Here')}}</a></div>
                            <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i>
                                {{__('Forgot Your Password')}}{{__('?')}} <a
                                    href="{{ route('company.password.request') }}">{{__('Click here')}}</a></div>
                            <!-- sign up form end-->
                        </div>

                        <div id="travelAgent" class="formpanel tab-pane fade {{($c_or_e == 'travelAgent')? 'active':''}}">
                            <div class="socialLogin">
                                <h5>{{__('Login with')}}</h5>
                                <a href="#{{ url('login/travel-agent/facebook')}}" class="fb">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a> 
                                <a href="#{{ url('login/travel-agent/twitter')}}" class="tw">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </div>
                            <form class="form-horizontal" method="POST" action="{{ route('travel.agent.login') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="candidate_or_employer" value="travelAgent" />
                                <div class="formpanel">
                                    <div class="formrow {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input id="email" type="email" class="form-control" name="email"
                                            value="{{ old('email') }}" required autofocus
                                            placeholder="{{__('Email Address')}}">
                                        @if ($errors->has('email'))
                                        <span class="help-block help-block-error">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="formrow {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <input id="password" type="password" class="form-control" name="password" value=""
                                            required placeholder="{{__('Password')}}">
                                        @if ($errors->has('password'))
                                        <span class="help-block help-block-error">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <input type="submit" class="btn btn-amber" value="{{__('Login')}}">
                                </div>
                                <!-- login form  end-->
                            </form>
                            <!-- sign up form -->
                            <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i> {{__('New User')}}{{__('?')}} <a
                                    href="{{route('register')}}">{{__('Register Here')}}</a></div>
                            <div class="newuser"><i class="fa fa-user" aria-hidden="true"></i>
                                {{__('Forgot Your Password')}}{{__('?')}} <a
                                    href="{{ route('travel.agent.password.request') }}">{{__('Click here')}}</a></div>
                            <!-- sign up form end-->
                        </div>

                    </div>
                    <!-- login form -->

                </div>
            </div>
        </div>

    </div>
</div>
@include('includes.footer')
@endsection