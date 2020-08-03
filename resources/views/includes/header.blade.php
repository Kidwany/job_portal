<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-12 col-12"> <a href="{{url('/')}}" class="logo"><img
                            src="{{ asset('/') }}sitesetting_images/thumb/{{ $siteSetting->site_logo }}"
                            alt="{{ $siteSetting->site_name }}" /></a>
                <div class="navbar-header navbar-light">
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                            data-target="#nav-main" aria-controls="nav-main" aria-expanded="false"
                            aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-lg-10 col-md-12 col-12 p-0 align-items-center">

                <!-- Nav start -->
                <nav class="navbar navbar-expand-lg navbar-light">

                    <div class="navbar-collapse collapse" id="nav-main">
                        <ul class="navbar-nav text-center ml-auto">
                            <li class="nav-item {{ Request::url() == route('index') ? 'active' : '' }}"><a
                                        href="{{url('/')}}" class="nav-link">{{__('Home')}}</a> </li>

                            @if(Auth::guard('company')->check())
                                <li class="nav-item"><a href="{{url('/job-seekers')}}"
                                                        class="nav-link">{{__('Seekers')}}</a> </li>
                            @else
                                <li class="nav-item"><a href="{{url('/jobs')}}" class="nav-link">{{__('Jobs')}}</a> </li>
                            @endif

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{__('Browse')}}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a href="{{route('company.listing')}}" class="dropdown-item">{{__('Companies')}}</a>
                                    <a href="{{ route('travel.agent.listing') }}" class="dropdown-item">{{__('Travel Agents')}}</a>
                                    <a href="{{ route('traveling.to.europe') }}" class="dropdown-item">{{__('Traveling to Europe')}}</a>
                                    <a href="{{ route('talented.create') }}" class="dropdown-item">{{__('Talented')}}</a>
                                    <a href="{{ route('youth.create') }}" class="dropdown-item">{{__('Youth Support')}}</a>
                                    <a href="#" class="dropdown-item">{{__('Distance Working')}}</a>
                                    <a href="#" class="dropdown-item">{{__('the exams')}}</a>
                                </div>
                            </li>


                            {{--       <li class="nav-item {{ Request::url() == route('company.listing') ? 'active' : '' }}">
                                      <a href="{{route('company.listing')}}" class="nav-link">{{__('Companies')}}</a>
                                  </li> --}}

                            {{-- @foreach($show_in_top_menu as $top_menu) @php $cmsContent = App\CmsContent::getContentBySlug($top_menu->page_slug); @endphp
                            <li class="nav-item {{ Request::url() == route('cms', $top_menu->page_slug) ? 'active' : '' }}"><a
                                href="{{ route('cms', $top_menu->page_slug) }}"
                                class="nav-link">{{ $cmsContent->page_title }}</a> </li>
                            @endforeach --}}

                            <li style="display: none;"
                                class="nav-item {{ Request::url() == route('blogs') ? 'active' : '' }}"><a
                                        href="{{ route('blogs') }}" class="nav-link">{{__('Blog')}}</a> </li>

                            <li style="display: none;"
                                class="nav-item {{ Request::url() == route('contact.us') ? 'active' : '' }}">
                                <a href="{{ route('contact.us') }}" class="nav-link">{{__('Contact us')}}</a>
                            </li>
                            {{--
                                               <li class="nav-item {{ Request::url() == route('travel.agent.listing') ? 'active' : '' }}">
                                                            <a href="{{ route('travel.agent.listing') }}"
                                                                class="nav-link">{{__('Travel Agents')}}</a>
                                                        </li>

                                                        <li class="nav-item {{ Request::url() == route('traveling.to.europe') ? 'active' : '' }}">
                                                            <a href="{{ route('traveling.to.europe') }}"
                                                                class="nav-link">{{__('Traveling to Europe')}}</a>
                                                        </li>

                                                        <li class="nav-item {{ Request::url() == route('talented.create') ? 'active' : '' }}">
                                                            <a href="{{ route('talented.create') }}"
                                                                class="nav-link">{{__('Talented')}}</a>
                                                        </li>

                                                        <li class="nav-item {{ Request::url() == route('youth.create') ? 'active' : '' }}">
                                                            <a href="{{ route('youth.create') }}"
                                                                class="nav-link">{{__('Youth Support')}}</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link">{{__('Distance Working')}}</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link">{{__('the exams')}}</a>
                                                        </li> --}}

                            <li class="nav-item {{ Request::url() == route('for.company') ? 'active' : '' }}">
                                <a href="{{route('for.company')}}" class="nav-link">{{__('For Employers')}}</a>
                            </li>


                            @if(Auth::check())
                                <li class="nav-item dropdown userbtn"><a href="#">{{Auth::user()->printUserImage()}}</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="{{route('home')}}" class="nav-link"><i
                                                        class="fa fa-tachometer" aria-hidden="true"></i> {{__('Dashboard')}}</a>
                                        </li>
                                        <li class="nav-item"><a href="{{ route('my.profile') }}" class="nav-link"><i
                                                        class="fa fa-user" aria-hidden="true"></i> {{__('My Profile')}}</a>
                                        </li>
                                        <li class="nav-item"><a href="{{ route('view.public.profile', Auth::user()->id) }}"
                                                                class="nav-link"><i class="fa fa-eye" aria-hidden="true"></i>
                                                {{__('View Public Profile')}}</a> </li>
                                        <li><a href="{{ route('my.job.applications') }}" class="nav-link"><i
                                                        class="fa fa-desktop" aria-hidden="true"></i>
                                                {{__('My Job Applications')}}</a> </li>
                                        <li class="nav-item"><a href="{{ route('logout') }}"
                                                                onclick="event.preventDefault(); document.getElementById('logout-form-header').submit();"
                                                                class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i>
                                                {{__('Logout')}}</a> </li>
                                        <form id="logout-form-header" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </ul>
                                </li>
                            @endif

                            @if(Auth::guard('company')->check())
                                <li class="nav-item postjob"><a href="{{route('post.job')}}"
                                                                class="nav-link register">{{__('Post a Job')}}</a> </li>
                                <li class="nav-item dropdown userbtn"><a
                                            href="#">{{Auth::guard('company')->user()->printCompanyImage()}}</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="{{route('company.home')}}" class="nav-link"><i
                                                        class="fa fa-tachometer" aria-hidden="true"></i> {{__('Dashboard')}}</a>
                                        </li>
                                        <li class="nav-item"><a href="{{ route('company.profile') }}" class="nav-link"><i
                                                        class="fa fa-user" aria-hidden="true"></i> {{__('Company Profile')}}</a>
                                        </li>
                                        <li class="nav-item"><a href="{{ route('post.job') }}" class="nav-link"><i
                                                        class="fa fa-desktop" aria-hidden="true"></i> {{__('Post A Job')}}</a>
                                        </li>
                                        <li class="nav-item"><a href="{{route('company.messages')}}" class="nav-link"><i
                                                        class="fa fa-envelope-o" aria-hidden="true"></i>
                                                {{__('Company Messages')}}</a></li>
                                        <li class="nav-item"><a href="{{ route('company.logout') }}"
                                                                onclick="event.preventDefault(); document.getElementById('logout-form-header1').submit();"
                                                                class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i>
                                                {{__('Logout')}}</a> </li>
                                        <form id="logout-form-header1" action="{{ route('company.logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </ul>
                                </li>
                            @endif

                            @if(Auth::guard('travel_agent')->check())
                                <li class="nav-item dropdown userbtn">
                                    <a href="#">
                                        {{Auth::guard('travel_agent')->user()->printTravelAgentImage()}}
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="{{route('travel.agent.home')}}" class="nav-link">
                                                <i class="fa fa-tachometer" aria-hidden="true"></i> {{__('Dashboard')}}</a>
                                        </li>
                                        <li class="nav-item"><a href="{{ route('travel.agent.profile') }}" class="nav-link">
                                                <i class="fa fa-user" aria-hidden="true"></i> {{__('Company Profile')}}</a>
                                        </li>
                                        <li class="nav-item"><a href="{{route('travel.agent.messages')}}" class="nav-link">
                                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                {{__('Company Messages')}}</a>
                                        </li>
                                        <li class="nav-item"><a href="{{ route('travel.agent.logout') }}"
                                                                onclick="event.preventDefault(); document.getElementById('logout-form-travel-agent').submit();"
                                                                class="nav-link">
                                                <i class="fa fa-sign-out" aria-hidden="true"></i> {{__('Logout')}}</a>
                                        </li>
                                        <form id="logout-form-travel-agent" action="{{ route('travel.agent.logout') }}"
                                              method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </ul>
                                </li>
                            @endif

                            @if(!Auth::user() && !Auth::guard('company')->user() &&
                            !Auth::guard('travel_agent')->user())
                                <li class="nav-item"><a href="{{route('login')}}" class="nav-link"><i class="fa fa-sign-in mr-2"></i>{{__('Sign in')}}  </a></li>

                                <li class="nav-item"><a href="{{route('register')}}"
                                                        class="nav-link register"><i class="fa fa-user-plus mr-2"></i>{{__('Register')}}</a> </li>
                            @endif

                            <li class="nav-item dropdown pr-1 pl-1 userbtn">
                                @if(app()->getLocale() == 'en')
                                    <a href="javascript:;"
                                       onclick="event.preventDefault(); document.getElementById('locale-form-ar').submit();"
                                       class="">
                                        <img alt="Image language" src="{{url('images/flags/ar.png')}}">
                            <li class="nav-item p-0 m-0 mt-2 pt-1 mr-3">
                                <span class="">
                                    ِعربي
                                </span>
                            </li>
                            </a>
                            <form id="locale-form-ar" action="{{ route('set.locale') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                                <input type="hidden" name="locale" value="ar" />
                                <input type="hidden" name="return_url" value="{{url()->full()}}" />
                                <input type="hidden" name="is_rtl" value="1" />
                            </form>
                            @else
                                <a href="javascript:;"
                                   onclick="event.preventDefault(); document.getElementById('locale-form-en').submit();"
                                   class="">
                                    <img alt="Image language" src="{{url('images/flags/gb.png')}}">
                                    <li class="nav-item p-0 m-0 mt-2 pt-1 ml-3">
                                        <span class="">
                                            English
                                        </span>
                                    </li>
                                </a>
                                <form id="locale-form-en" action="{{ route('set.locale') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="locale" value="en" />
                                    <input type="hidden" name="return_url" value="{{url()->full()}}" />
                                    <input type="hidden" name="is_rtl" value="0" />
                                </form>
                                @endif

                                </li>
                        </ul>

                        <!-- Nav collapes end -->

                    </div>
                    <div class="clearfix"></div>
                </nav>

                <!-- Nav end -->

            </div>
        </div>

        <!-- row end -->

    </div>

    <!-- Header container end -->

</div>