@extends('website.layouts.layouts')
@section('content')
    <!-- Header start -->
    @include('website.layouts.header')

    <div class="profile-page">
        <div
                class="profile-cover"
                style="background-image: url('{{asset('website/images/profile/profile-cover.jpg')}}');"
        ></div>

        <div class="mfa-container">
            <div class="profile-wrapper">
                <div class="profile-img-card">
                    <div class="img-div">
                        <img src="{{asset('user_images/' . $user->image)}}" alt="no image" />
                    </div>
                    <div class="username">
                        {{$user->getName()}}
                    </div>
                    <h1 class="job-title">
                        {{$user->job_title ? $user->job_title : 'No Job Title'}}
                    </h1>
                    <div class="static-rating">
                        <ul class="rating-ul">
                            <li>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star"></i>
                                <i class="ion-ios-star-outline"></i>
                            </li>
                        </ul>
                    </div>
                    <a class="telephone-link" href="tel:{{!empty($user->phone) ? $user->phone : ''}}">
                        @if(!empty($user->phone))
                            {{$user->phone}}
                        @endif
                    </a>
                    <a class="telephone-link" href="tel:{{!empty($user->mobile_num) ? $user->mobile_num : ''}}">
                        @if(!empty($user->mobile_num))
                            {{$user->mobile_num}}
                        @endif
                    </a>
                    <div class="address-div">
                        {{$user->getLocation()}}
                    </div>
                    <div class="salary-div">Salary: <span>{{$user->current_salary}} {{$user->salary_currency}}</span>/ Monthly</div>
                    <div class="joined-div">Joined since <span>{{$user->created_at->format('M d, Y')}}</span></div>
                    <div class="age-div">Age: <span>{{$user->getAge()}} Years</span></div>

                    <ul class="user-social">
                        <li>
                            <a href="#" class="linkedin-link">
                                <i class="ion-social-linkedin-outline"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="twitter-link">
                                <i class="ion-social-twitter-outline"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="facebook-link">
                                <i class="ion-social-facebook-outline"></i>
                            </a>
                        </li>
                    </ul>
                    <a href="{{asset('cvs/'.$profileCv->cv_file)}}" class="download-cv">
                        {{__('Download CV')}}
                    </a>
                </div>

                <div class="main-profile-section">
                    <div class="profile-sub-section about-section">
                        <p class="section-heading">
                            <i class="linearicons-user"></i>
                            <span> {{$user->getName()}}</span>
                        </p>
                        <ul class="sub-section-ul">
                            <li>
                                <div class="img-div">
                                    <img src="{{asset('website/images/profile/about/graduation.svg')}}"
                                            alt="graduation"
                                    />
                                </div>
                                <div class="li-text">
                                    <p>
                                        Academic Level
                                    </p>
                                    <p>
                                        {{$user->getIndustry('industry')}}
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="img-div">
                                    <img
                                            src="{{asset('website/images/profile/about/restroom.svg')}}"
                                            alt="gender"
                                    />
                                </div>
                                <div class="li-text">
                                    <p>
                                        Gender
                                    </p>
                                    <p>
                                        {{$user->getGender('gender')}}
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="img-div">
                                    <img
                                            src="{{asset('website/images/profile/about/experience.svg')}}"
                                            alt="experience"
                                    />
                                </div>
                                <div class="li-text">
                                    <p>
                                        Experience
                                    </p>
                                    <p>
                                        {{$user->getJobExperience('job_experience')}}
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="img-div">
                                    <img
                                            src="{{asset('website/images/profile/about/payment.svg')}}"
                                            alt="salary"
                                    />
                                </div>
                                <div class="li-text">
                                    <p>
                                        Salary
                                    </p>
                                    <p>
                                        {{$user->current_salary}} {{$user->salary_currency}}
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="profile-sub-section description-section">
                        <p class="section-heading">
                            <i class="linearicons-document"></i><span> Description</span>
                        </p>
                        <p class="desc-p">
                            {{$user->getProfileSummary('summary')}}
                        </p>
                    </div>

                    <div class="profile-sub-section education-section">
                        <p class="section-heading">
                            <img
                                    src="{{asset('website/images/profile/about/graduation.svg')}}"
                                    alt="hat"
                            /><span> {{__('Education')}}</span>
                        </p>
                        <ul class="education-ul">
                            @if($user->profileEducation->count())
                                @foreach($user->profileEducation as $education)
                                    <li>
                                        <div class="years-div">
                                            {{$education->date_completion}}
                                        </div>
                                        <div class="li-text">
                                            <p>
                                                {{$education->institution}}
                                            </p>
                                            <p>
                                                {{$education->degree_title}}
                                            </p>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>

                    <div class="profile-sub-section education-section">
                        <p class="section-heading">
                            <i class="ion-code-working"></i><span> Experience</span>
                        </p>
                        <ul class="education-ul">
                            @if($user->profileExperience->count())
                                @foreach($user->profileExperience as $experience)
                                    <li>
                                        <div class="years-div">
                                            {{$experience->date_start->format('Y')}} -
                                            {{$experience->date_end ? $experience->date_end->format('Y') : 'Present'}}
                                        </div>
                                        <div class="li-text">
                                            <p>
                                                {{$experience->company}}
                                            </p>
                                            <p>
                                                {{$experience->title}}
                                            </p>
                                            <div class="exp-desc">
                                                {{$experience->description}}
                                            </div>
                                        </div>
                                    </li>

                                @endforeach
                            @endif
                        </ul>
                    </div>

                    {{--<div class="profile-sub-section portfolio-section">
                        <p class="section-heading">
                            <i class="linearicons-file-charts"></i><span> Portfolio</span>
                        </p>
                        <div class="gallery-layout">
                            <div class="mfa-gallery">
                                <a href="#">
                                    <div class="img-div lazy-div">
                                        <img
                                                class="lazy"
                                                data-src="{{asset('website/images/profile/portfolio/1.webp')}}"
                                        />
                                        <div class="next-lazy-img"></div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="img-div lazy-div">
                                        <img
                                                class="lazy"
                                                data-src="{{asset('website/images/profile/portfolio/2.webp')}}"
                                        />
                                        <div class="next-lazy-img"></div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="img-div lazy-div">
                                        <img
                                                class="lazy"
                                                data-src="{{asset('website/images/profile/portfolio/3.webp')}}"
                                        />
                                        <div class="next-lazy-img"></div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="img-div lazy-div">
                                        <img
                                                class="lazy"
                                                data-src="{{asset('website/images/profile/portfolio/4.webp')}}"
                                        />
                                        <div class="next-lazy-img"></div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="img-div lazy-div">
                                        <img
                                                class="lazy"
                                                data-src="{{asset('website/images/profile/portfolio/5.webp')}}"
                                        />
                                        <div class="next-lazy-img"></div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="img-div lazy-div">
                                        <img
                                                class="lazy"
                                                data-src="{{asset('website/images/profile/portfolio/2.webp')}}"
                                        />
                                        <div class="next-lazy-img"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>--}}

                    <div class="profile-sub-section skills-section">
                        <p class="section-heading">
                            <i class="linearicons-chart-growth"></i><span> Skills</span>
                        </p>
                        <ul class="skills-wrapper">
                            @if($user->profileSkills->count())
                                @foreach($user->profileSkills as $skill)
                                    <li class="skill-li">
                                        {{$skill->jobSkill->job_skill}}
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>

                    <div class="profile-form-wrapper">
                        <p class="section-heading">
                            <i class="linearicons-chart-growth"></i
                            ><span> Contact Form</span>
                        </p>
                        @include('flash::message')
                        <form class="mfa-form" action="{{route('company.send-message-to-seeker')}}" method="post">
                            @csrf
                            <input type="hidden" name="seeker_id" value="{{$user->id}}">
                            {{--<div class="form-div">
                                <label for="username">
										<span>
											Username
										</span>
                                    <input type="text" id="username" />
                                    <i class="feather icon-user"></i>
                                </label>
                            </div>
                            <div class="form-div">
                                <label for="email">
										<span>
											Email
										</span>
                                    <input type="text" id="email" />
                                    <i class="feather icon-mail"></i>
                                </label>
                            </div>--}}
                            <div class="form-div">
                                <label for="message">
										<span>
											Message
										</span>
                                    <!-- <textarea id="message" /> -->
                                    <textarea id="message" name="message" rows="10">{{old('message')}}</textarea>
                                    <i class="feather icon-message-square"></i>
                                </label>
                            </div>
                            <button type="submit">
									<span>
										Send now
										<i class="feather icon-send"></i>
									</span>
                            </button>
                        </form>
                    </div>

                    <!-- Reviews section -->
                    <div class="reviews-section">
                        <ul class="all-reviews-ul">
                            @if($user->profileReviews->count())
                                @foreach($user->profileReviews as $review)
                                    <li>
                                        <div class="review-header">
                                            <img src="{{asset('company_logos/' . $review->company->logo)}}" alt="img" />
                                            <div class="reviewer">
                                                <div class="name">
                                                    {{$review->company->name}}
                                                </div>
                                                <div class="rate">
                                                    <ul>
                                                        <li>
                                                            @for($i=1; $i<=$review->rate; $i++)
                                                                <i class="ion-ios-star"></i>
                                                            @endfor
                                                            @for($i=0; $i<5 - $review->rate; $i++)
                                                                <i class="ion-ios-star-outline"></i>
                                                            @endfor
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="review-date">
                                                {{$review->created_at->format('M d, Y')}}
                                            </div>
                                        </div>
                                        <div class="review-desc">
                                            {{$review->review}} {{$review->rate}}
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <!-- ./Reviews section -->

                    <!-- rating -->
                    <div class="rating-section">
                        <p class="section-heading">
                            <i class="linearicons-star"></i><span> Leave Your Review </span>
                        </p>
                        <form class="rating-form" action="{{url('profile-review')}}" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <select class="star-rating" name="rate">
                                <option value="">Select a rating</option>
                                <option value="5">Excellent</option>
                                <option value="4">Very Good</option>
                                <option value="3">Average</option>
                                <option value="2">Poor</option>
                                <option value="1">Terrible</option>
                            </select>

                            {{--<div class="name-email">
                                <label for="name">
										<span>
											Your name
										</span>
                                    <input type="text" id="name" />
                                </label>
                                <label for="your-email">
										<span>
											Email Address
										</span>
                                    <input type="text" id="your-email" />
                                </label>
                            </div>--}}
                            <label for="your-review">
									<span>
										Your review
									</span>
                                <textarea id="your-review" name="review" rows="6">{{old('review')}}</textarea>
                            </label>

                            <button type="submit">
									<span>
										Send now
										<i class="feather icon-send"></i>
									</span>
                            </button>
                        </form>
                    </div>
                    <!-- ./rating -->
                </div>
            </div>
        </div>
    </div>

    <!-- Header start -->
    @include('website.layouts.footer')
    <!-- Header end -->
@endsection