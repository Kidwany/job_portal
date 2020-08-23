@extends('website.layouts.layouts')
@section('content')
    <!-- Header start -->
    @include('website.layouts.header')

    @php
        $company = $job->getCompany();
    @endphp

    <!-- Job details page -->
    <div class="myPage">
        <div class="header-breadcrumb">
            <div class="page-title mfa-container">
                {{__('Job Detail')}}
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
                            {{__('Job Detail')}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-content jobDetailsContent">
            <div class="searchWrapper">
                <div class="mfa-container">
                    <form class="searchJob" action="{{route('job.list')}}" method="{{__('Search Jobs')}}">
                        <div class="input-btn-group">
                            <input
                                    type="text"
                                    name="search"
                                    value="{{Request::get('search', '')}}"
                                    placeholder="{{__('Enter Skills, job title or Location')}}"
                            />
                            <button type="submit">
									<span>
										{{__('Search Jobs')}}
									</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492 492">
                                    <defs></defs>
                                    <title>Asset 3</title>
                                    <g id="Layer_2" data-name="Layer 2">
                                        <g id="Layer_1-2" data-name="Layer 1">
                                            <path
                                                    class="cls-1"
                                                    d="M144.84,389.59a240.34,240.34,0,0,1-42.43-42.43L8.75,440.83a30,30,0,0,0,42.43,42.42Z"
                                            />
                                            <path
                                                    class="cls-2"
                                                    d="M102.41,347.16a240.34,240.34,0,0,0,42.43,42.43L173.38,361A201.19,201.19,0,0,1,131,318.62Z"
                                            />
                                            <path
                                                    class="cls-2"
                                                    d="M131,318.61A201,201,0,0,0,173.39,361h0A199.1,199.1,0,0,0,292,400c110.46,0,200-89.54,200-200S402.46,0,292,0,92,89.54,92,200a199.08,199.08,0,0,0,39,118.62Z"
                                            />
                                            <circle class="cls-1" cx="293" cy="200" r="164" />
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mfa-container">
                <div class="detailsWrapper">
                    <div class="leftDetails">
                        <div class="topDetails">
                            <div class="topDiv">
                                <div class="noLogo">
                                    <p class="title">
                                        {{$job->title}}
                                    </p>
                                    <div class="company__location">
                                        <a href="#" class="companyTitle">
                                            {{$company->name}}
                                        </a>
                                        <div class="location">
                                            @if((bool)$job->is_freelance)
                                                Freelance
                                            @else
                                               {{$job->getLocation()}}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="jobTime">
                                        Posted {{$job->created_at->diffForHumans()}}
                                    </div>
                                </div>
                                <div class="companyLogo">
                                    <img src="{!! asset('company_logos/' . $company->logo) !!}" alt="img" />
                                </div>
                            </div>
                            <div class="bottomDiv">
                                <a href="#" class="applyLink">
                                    Apply for Job
                                </a>
                                <div class="positionsCount">
                                    <span>{{$job->num_of_positions}}</span>
                                    <span> Open Positions</span>
                                </div>
                            </div>
                        </div>

                        <div class="secondDetails">
                            <div class="aboutJobDiv">
                                <div class="title">
                                    About the Job
                                </div>
                                <div class="jobDesc">
                                    <p>
                                        {!! $job->description !!}
                                    </p>
                                    {{--<ul>
                                        <li>
                                            Identifies design problems and devise elegant solutions.
                                        </li>
                                        <li>
                                            Takes a user-centered design approach and rapidly test
                                            and iterate designs.
                                        </li>
                                        <li>
                                            Adds to the engineering team's culture of high code
                                            quality.
                                        </li>
                                        <li>
                                            Participates in the estimation of new features and
                                            components.
                                        </li>
                                        <li>
                                            Implement tasks following functional specifications.
                                        </li>
                                        <li>
                                            Takes smart risks and champion new ideas.
                                        </li>
                                    </ul>--}}
                                </div>
                            </div>

                            <div class="gridTable">
                                <ul class="gridUl">
                                    <li>
                                        <div class="cellTitle">
                                            {{__('Experience')}}:
                                        </div>
                                        <div class="cellBody">
                                            {{$job->getJobExperience('job_experience')}}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cellTitle">
                                            {{__('Career Level')}}:
                                        </div>
                                        <div class="cellBody">
                                            {{$job->getCareerLevel('career_level')}}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="cellTitle">
                                            {{__('Type')}}:
                                        </div>
                                        <div class="cellBody">
                                            {{$job->getJobType('job_type')}}
                                        </div>
                                    </li>
                                    @if(!(bool)$job->hide_salary)
                                        <li>
                                            <div class="cellTitle">
                                                Salary:
                                            </div>
                                            <div class="cellBody">
                                                <strong>{{$job->salary_from.' '.$job->salary_currency}} - {{$job->salary_to.' '.$job->salary_currency}}</strong>
                                            </div>
                                        </li>
                                    @endif

                                    <li>
                                        <div class="cellTitle">
                                            Vacancies:
                                        </div>
                                        <div class="cellBody">
                                            {{$job->num_of_positions}} open positions
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            {{--<div class="jobRolesDiv">
                                <div class="title">
                                    Job Roles:
                                </div>
                                <ul class="rolesUl">
                                    <li>
                                        IT/Software Development
                                    </li>
                                    <li>
                                        Engineering - Telecom/Technology
                                    </li>
                                </ul>
                            </div>--}}
                        </div>

                        <div class="thirdDetails">
                            <div class="skillsDiv">
                                <div class="title">
                                    Skills:
                                </div>
                                <ul class="skillsUl">
                                    {!!$job->getJobSkillsList()!!}
                                </ul>
                            </div>
                        </div>

                        <div class="fourthDetails">
                            <div class="benefitsDiv">
                                <div class="title">
                                    Benefits:
                                </div>
                                <div class="benefitsDesc">
                                    <p>
                                        {!! $job->benefits !!}
                                    </p>
                                    {{--<ul>
                                        <li>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Animi,
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Non recusandae deserunt soluta voluptatibus quas ad
                                                iure! Consequatur, porro.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                accusantium dicta. Voluptate unde accusantium eaque ut
                                                provident id autem et.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Animi,
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                Non recusandae deserunt soluta voluptatibus quas ad
                                                iure! Consequatur, porro.
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                accusantium dicta. Voluptate unde accusantium eaque ut
                                                provident id autem et.
                                            </p>
                                        </li>
                                    </ul>--}}
                                </div>
                            </div>
                        </div>

                        <div class="moreBtns">
                            @if(Auth::check() && Auth::user()->isFavouriteJob($job->slug))
                                <a href="{{route('remove.from.favourite', $job->slug)}}" class="addToFav">
                                    <i class="feather icon-minus"></i>
                                    Remove From favourites
                                </a>
                            @else
                                <a href="{{route('add.to.favourite', $job->slug)}}" class="addToFav">
                                    <i class="feather icon-plus"></i>
                                    Add to favourites
                                </a>
                            @endif
                            <a href="{{route('report.abuse', $job->slug)}}" class="reportBtn">
                                <i class="feather icon-alert-triangle"></i>
                                {{__('Report Abuse')}}
                            </a>
                        </div>
                    </div>

                    <div class="rightDetails">
                        <div class="aboutCompany">
                            <div class="title">
                                About this Company
                            </div>
                            <div class="aboutBody">
                                <a href="{{route('company.detail',$company->slug)}}" class="imgDiv">
                                    <img src="{!! asset('company_logos/' . $company->logo) !!}" alt="img" />
                                    <div class="title__count">
                                        <div class="compTitle">
                                            {{$company->name}}
                                            @if($company->isOnline())
                                                <small style="color: lightseagreen; font-weight: 200; font-size: 12px"> online</small>
                                            @else
                                                <small style="color: orangered; font-weight: 200; font-size: 12px"> offline</small>
                                            @endif
                                        </div>
                                        <div class="positionsCount">
                                            <span>{{App\Company::countNumJobs('company_id', $company->id)}} </span>
                                            <span> Open Positions</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="noLogo">
                                    <div class="location">
                                        <i class="feather icon-map-pin"></i>
                                        {{$company->getLocation()}}
                                    </div>

                                    <p class="compDesc">
                                        {{str_limit(strip_tags($company->description), 250, '...')}}
                                        <a href="{{route('company.detail',$company->slug)}}">
                                            <span> Read More</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="relatedJobs">
                            <div class="title">
                                Find Related Jobs
                            </div>
                            <ul class="relatedJobsUl">
                                @if(isset($relatedJobs) && count($relatedJobs))
                                    @foreach($relatedJobs as $relatedJob)
                                        <?php $relatedJobCompany = $relatedJob->getCompany(); ?>
                                        @if(null !== $relatedJobCompany)
                                                <li>
                                                    <span>- </span>
                                                    <a href="{{route('job.detail', [$relatedJob->slug])}}">
                                                        {{$relatedJob->title}}
                                                    </a>
                                                </li>
                                            @endif
                                    @endforeach
                                @endif
                            </ul>
                        </div>

                        <div class="companyLocation">
                            <div class="title">
                                <i class="feather icon-map-pin"></i>
                                Company Location
                            </div>
                            {!!$company->map!!}
                            {{--<iframe
                                    src="{!!$company->map!!}"
                                    width="100%"
                                    height="320"
                                    frameborder="0"
                                    style="border: 0;"
                                    allowfullscreen=""
                                    aria-hidden="false"
                                    tabindex="0"
                            ></iframe>--}}
                        </div>

                        <div class="emailToFriend">
                            <div class="title">
                                <i class="feather icon-mail"></i>
                                Email to Friend
                            </div>
                            @include('flash::message')
                            <form class="mfa-form share-friend-form" action="{{route('email.to.friend', $job->slug)}}" method="post">
                                @csrf
                                <div class="form-div">
                                    <input type="hidden" name="job_url" value="{{route('job.detail', $job->slug)}}">
                                </div>
                                <div class="form-div">
                                    <label for="friend-name">
											<span>
												Friends Name
											</span>
                                        <input type="text" id="friend-name" required name="friend_name" value="{{old('friend_name')}}"/>
                                        <i class="feather icon-user"></i>
                                    </label>
                                    @if ($errors->has('friend_name')) <span class="help-block"> <strong>{{ $errors->first('friend_name') }}</strong> </span> @endif
                                </div>
                                <div class="form-div">
                                    <label for="friend-email">
											<span>
												Friends Email
											</span>
                                        <input type="text" id="friend-email" required name="friend_email" value="{{old('friend_email')}}"/>
                                        <i class="feather icon-mail"></i>
                                    </label>
                                    @if ($errors->has('friend_email')) <span class="help-block"> <strong>{{ $errors->first('friend_email') }}</strong> </span> @endif
                                </div>
                                <div class="form-div">
                                    <label for="your-name">
											<span>
												Your Name
											</span>
                                        @if(Auth::check())
                                            <input type="text" id="your-name" required name="your_name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}"/>
                                        @else
                                            <input type="text" id="your-name" required name="your_name" value="{{old('your_name')}}"/>
                                        @endif

                                        <i class="feather icon-user"></i>
                                    </label>
                                    @if ($errors->has('your_name')) <span class="help-block"> <strong>{{ $errors->first('your_name') }}</strong> </span> @endif
                                </div>
                                <div class="form-div">
                                    <label for="your-email">
											<span>
												Your Email
											</span>
                                        @if(Auth::check())
                                            <input type="text" id="your-email" required name="your_email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}"/>
                                        @else
                                            <input type="text" id="your-email" required name="your_email" value="{{old('your_email')}}"/>
                                        @endif
                                        <i class="feather icon-mail"></i>
                                    </label>
                                    @if ($errors->has('your_email')) <span class="help-block"> <strong>{{ $errors->first('your_email') }}</strong> </span> @endif
                                </div>
                                <button type="submit">
										<span>
											Send now
											<i class="feather icon-send"></i>
										</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ./Job details page -->

    @include('website.layouts.footer')
@endsection
