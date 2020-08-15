<!-- <body> -->
<!-- start header -->
<div class="header-md">
    <div class="logo-lines">
        <div class="mfa-container">
            <div class="block-wrapper">
                <div class="lines hamburger hamburger--elastic">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
                <div class="logo-img">
                    <a href="{{url('/')}}">
                        <img src="{{ asset('website/images/logo/logo-black.png') }}" alt="img" style="max-width: initial !important;"/>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- main links dropdown -->
    <div class="main-header-md-ul-div">
        <div class="img-ul-div">
            <a class="logo-img">
                <img src="{{ asset('website/images/logo/logo-black.png') }}" alt="img" style="max-width: initial !important;"/>
            </a>
            <ul class="main-header-md-ul">
                <li class="active-li">
                    <a href="{{url('/')}}">
                        <span>
                            {{__('Home')}}
                        </span>
                    </a>
                </li>

                @if(Auth::guard('company')->check())
                    <li>
                        <a href="{{url('/job-seekers')}}">
                        <span>
                            {{__('Seekers')}}
                        </span>
                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{url('/jobs')}}">
                        <span>
                            {{__('Jobs')}}
                        </span>
                        </a>
                    </li>
                @endif

                <li>
                    <a href="{{route('company.listing')}}">
                        <span>
                            Partners
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('travel.agent.listing') }}">
                        <span>
                            {{__('Travel Agents')}}
                        </span>
                    </a>
                </li>


                @if(Auth::check())
                    <li class="drop-li">
                        <a href="#" class="drop-a">
                        <span>
                            Profile
                        </span>
                            <i class="ion-plus-round drop-i"></i>
                        </a>
                        <ul class="dropped-ul">
                            <li>
                                <a href="{{route('home')}}">
                                <span>
                                    {{__('Dashboard')}}
                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('my.profile') }}">
                                <span>
                                    {{__('My Profile')}}
                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('view.public.profile', Auth::user()->id) }}">
                                <span>
                                     {{__('View Public Profile')}}
                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('my.job.applications') }}">
                                <span>
                                     {{__('My Job Applications')}}
                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-header').submit();">
                                <span>
                                     {{__('Logout')}}
                                </span>
                                </a>
                            </li>
                            <form id="logout-form-header" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </ul>
                    </li>
                @endif

                @if(Auth::guard('company')->check())
                    <li class="drop-li">
                        <a href="#" class="drop-a">
                        <span>
                            Company Profile
                        </span>
                            <i class="ion-plus-round drop-i"></i>
                        </a>
                        <ul class="dropped-ul">
                            <li>
                                <a href="{{route('company.home')}}">
                                <span>
                                    {{__('Dashboard')}}
                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('company.profile') }}">
                                <span>
                                    {{__('Company Profile')}}
                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('post.job') }}">
                                <span>
                                     {{__('Post A Job')}}
                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('company.messages')}}">
                                <span>
                                     {{__('Company Messages')}}
                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('company.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-header1').submit();">
                                <span>
                                     {{__('Logout')}}
                                </span>
                                </a>
                            </li>
                            <form id="logout-form-header1" action="{{ route('company.logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </ul>
                    </li>
                @endif

                @if(Auth::guard('travel_agent')->check())
                    <li class="drop-li">
                        <a href="#" class="drop-a">
                        <span>
                            Agent Profile
                        </span>
                            <i class="ion-plus-round drop-i"></i>
                        </a>
                        <ul class="dropped-ul">
                            <li>
                                <a href="{{route('travel.agent.home')}}">
                                <span>
                                    {{__('Dashboard')}}
                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('travel.agent.profile') }}">
                                <span>
                                    {{__('Company Profile')}}
                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('travel.agent.messages')}}">
                                <span>
                                     {{__('Company Messages')}}
                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('travel.agent.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-header1').submit();">
                                <span>
                                     {{__('Logout')}}
                                </span>
                                </a>
                            </li>
                            <form id="logout-form-header1" action="{{ route('travel.agent.logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </ul>
                    </li>
                @endif

                <li class="drop-li toBeClonedLi">
                    <a href="#" class="drop-a">
                        <span>
                            Solutions
                        </span>
                        <i class="ion-plus-round drop-i"></i>
                    </a>
                    <ul class="dropped-ul">
                        <li>
                            <a href="{{url('traveling-to-europe')}}">
                                <span>
                                    Traveling to Europe
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('talented')}}">
                                <span>
                                    Are you talented?
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('youth')}}">
                                <span>
                                    Youth support
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="http://freelance.limitlessgroup-eg.com" target="_blank">
                                <span>
                                    Remote working
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    Exams
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    LMS
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    Study aboard
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    Build your cv
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                @if(!Auth::user() && !Auth::guard('company')->user() && !Auth::guard('travel_agent')->user())
                    <li>
                        <a href="{{url('company/register')}}">
                        <span>
                            Employer?
                        </span>
                        </a>
                    </li>
                    <li class="loginLi">
                        <a href="{{route('login')}}">
                            <i class="feather icon-log-in"></i>
                            {{__('Sign in')}}
                        </a>
                    </li>
                    <li class="signupLi">
                        <a href="{{route('register')}}">
                            <i class="feather icon-user-plus"></i>
                            Sign Up
                        </a>
                    </li>
                    <li class="langLi">
                        <a href="#">
                            <img src="{{asset('website/images/icons/sa.svg')}}" alt="Arabic" />
                        </a>
                    </li>

                @endif
            </ul>
        </div>
    </div>
</div>

<div class="header-lg">
    <div class="header-lg-top">
        <div class="mfa-container">
            <div class="block-wrapper">
                <div class="phone-social-links">
                    <div class="notification-div">
                        <span class="title-span">
                            Hiring Open:
                        </span>
                        Are you a driven and motivated 1st line IT Support Engineer?
                    </div>
                    <ul class="social-ul">
                        <li>
                            <a href="#" class="facebook-link">
                                <i class="ion-social-facebook-outline"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="twitter-link">
                                <i class="ion-social-twitter-outline"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="instagram-link">
                                <i class="ion-social-instagram-outline"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="sanpchat-link">
                                <i class="ion-social-snapchat-outline"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-lg-bottom">
        <div class="mfa-container">
            <div class="block-wrapper">
                <div class="logo-img">
                    <a href="{{url('/')}}">
                        <img src="{{ asset('website/images/logo/logo-black.png') }}" alt="img" style="max-width: initial !important;"/>
                    </a>
                </div>
                <div class="header-lg-ul-div"></div>
            </div>
        </div>
    </div>
</div>

<div class="fixed-sub-nav">
    <!-- cloned ul goes here -->
</div>
<!-- end header -->