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
                        Front-End web developer
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
                                        Computer Engineer
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
                            <li>
                                <div class="years-div">
                                    2017 - 2018
                                </div>
                                <div class="li-text">
                                    <p>
                                        Ain-shams university
                                    </p>
                                    <p>
                                        Masters degree in computer engineer
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="years-div">
                                    2011 - 2016
                                </div>
                                <div class="li-text">
                                    <p>
                                        Ain-shams university
                                    </p>
                                    <p>
                                        Bachelor degree in computer engineer
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="years-div">
                                    2008 - 2011
                                </div>
                                <div class="li-text">
                                    <p>
                                        El-nozha heigh school
                                    </p>
                                    <p>
                                        <!-- Bachelor degree in computer engineer -->
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="profile-sub-section education-section">
                        <p class="section-heading">
                            <i class="ion-code-working"></i><span> Experience</span>
                        </p>
                        <ul class="education-ul">
                            <li>
                                <div class="years-div">
                                    2017 - present
                                </div>
                                <div class="li-text">
                                    <p>
                                        Eventus corp
                                    </p>
                                    <p>
                                        Front-End web developer
                                    </p>
                                    <div class="exp-desc">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Veritatis, quidem sint soluta accusantium error cupiditate
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="years-div">
                                    2014 - 2016
                                </div>
                                <div class="li-text">
                                    <p>
                                        Amazon.inc
                                    </p>
                                    <p>
                                        PHP backend developer
                                    </p>
                                    <div class="exp-desc">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Veritatis, quidem sint soluta accusantium error cupiditate
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="years-div">
                                    2011 - 2014
                                </div>
                                <div class="li-text">
                                    <p>
                                        Google Egypt
                                    </p>
                                    <p>
                                        Junior UI / UX designer
                                    </p>
                                    <div class="exp-desc">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Veritatis, quidem sint soluta accusantium error cupiditate
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="profile-sub-section portfolio-section">
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
                    </div>

                    <div class="profile-sub-section skills-section">
                        <p class="section-heading">
                            <i class="linearicons-chart-growth"></i><span> Skills</span>
                        </p>
                        <ul class="skills-wrapper">
                            <li class="skill-li">
                                Javascript
                            </li>
                            <li class="skill-li">
                                Nodejs
                            </li>
                            <li class="skill-li">
                                Reactjs
                            </li>
                            <li class="skill-li">
                                Graphql
                            </li>
                            <li class="skill-li">
                                Apollo-client
                            </li>
                            <li class="skill-li">
                                HTML5
                            </li>
                            <li class="skill-li">
                                SASS
                            </li>
                            <li class="skill-li">
                                RWD
                            </li>
                            <li class="skill-li">
                                Git
                            </li>
                            <li class="skill-li">
                                NPM
                            </li>
                            <li class="skill-li">
                                Webpack4
                            </li>
                            <li class="skill-li">
                                PHP
                            </li>
                            <li class="skill-li">
                                SQL, Monogdb
                            </li>
                        </ul>
                    </div>

                    <div class="profile-form-wrapper">
                        <p class="section-heading">
                            <i class="linearicons-chart-growth"></i
                            ><span> Contact Form</span>
                        </p>
                        <form class="mfa-form">
                            <div class="form-div">
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
                            </div>
                            <div class="form-div">
                                <label for="message">
										<span>
											Message
										</span>
                                    <!-- <textarea id="message" /> -->
                                    <textarea id="message" name="message" rows="10"></textarea>
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
                            <li>
                                <div class="review-header">
                                    <img src="{{asset('images/profile/no-image.jpg')}}" alt="img" />
                                    <div class="reviewer">
                                        <div class="name">
                                            Amazon.inc
                                        </div>
                                        <div class="rate">
                                            <ul>
                                                <li>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="review-date">
                                        Aug 10, 2020
                                    </div>
                                </div>
                                <div class="review-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Adipisci ratione earum quaerat minus, magnam neque
                                </div>
                            </li>
                            <li>
                                <div class="review-header">
                                    <img src="{{asset('website/images/profile/no-image.jpg')}}" alt="img" />
                                    <div class="reviewer">
                                        <div class="name">
                                            Amazon.inc
                                        </div>
                                        <div class="rate">
                                            <ul>
                                                <li>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="review-date">
                                        Aug 10, 2020
                                    </div>
                                </div>
                                <div class="review-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Adipisci ratione earum quaerat minus, magnam neque
                                </div>
                            </li>
                            <li>
                                <div class="review-header">
                                    <img src="{{asset('website/images/profile/no-image.jpg')}}" alt="img" />
                                    <div class="reviewer">
                                        <div class="name">
                                            Amazon.inc
                                        </div>
                                        <div class="rate">
                                            <ul>
                                                <li>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star"></i>
                                                    <i class="ion-ios-star-outline"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="review-date">
                                        Aug 10, 2020
                                    </div>
                                </div>
                                <div class="review-desc">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Adipisci ratione earum quaerat minus, magnam neque
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- ./Reviews section -->

                    <!-- rating -->
                    <div class="rating-section">
                        <p class="section-heading">
                            <i class="linearicons-star"></i><span> Leave Your Review </span>
                        </p>
                        <form class="rating-form">
                            <select class="star-rating">
                                <option value="">Select a rating</option>
                                <option value="5">Excellent</option>
                                <option value="4">Very Good</option>
                                <option value="3">Average</option>
                                <option value="2">Poor</option>
                                <option value="1">Terrible</option>
                            </select>

                            <div class="name-email">
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
                            </div>
                            <label for="your-review">
									<span>
										Your review
									</span>
                                <textarea id="your-review" name="review" rows="6"></textarea>
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