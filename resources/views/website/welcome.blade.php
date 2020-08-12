@extends('website.layouts.layouts')
@section('content')
<!-- Header start -->
@include('website.layouts.header')
<!-- Header end -->

<!-- main slider seciton -->
<div class="main-slider-section">
    <!-- start home main slider -->
    <div class="slider-wrapper">
        <div class="swiper-container home-main-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div id="slider-video">
                        <div
                                id="bgndVideo"
                                class="player"
                                data-property="{videoURL:'https://youtu.be/Oi4GVxsZXKQ',containment:'#slider-video', autoPlay:true, mute:true, loop: true, startAt:0, opacity:1, showControls: false}"
                        ></div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div
                            class="slider-img"
                            style="
                            background-image: url('{{asset('website/images/home-main-slides/slide-1.webp')}}');
                        "
                    ></div>
                </div>

                <div class="swiper-slide">
                    <div
                            class="slider-img"
                            style="background-image: url('{{asset('website/images/home-main-slides/slide-1.webp')}}');"
                    ></div>
                </div>
                <div class="swiper-slide">
                    <div
                            class="slider-img"
                            style="background-image: url('{{asset('website/images/home-main-slides/slide-2.webp')}}');"
                    ></div>
                </div>
                <div class="swiper-slide">
                    <div
                            class="slider-img"
                            style="background-image: url('.{{asset('website/mages/home-main-slides/slide-3.webp')}}');"
                    ></div>
                </div>

                <!-- rtl code -->
                <!-- <div class="swiper-button-prev home-main-slider-prev">
    <span class="fontello icon-right-outline"></span>
  </div>
  <div class="swiper-button-next home-main-slider-next">
    <span class="fontello icon-left-outline"></span>
  </div> -->
                <!-- rtl code -->

                <!-- ltr code -->
                <div class="swiper-button-next home-main-slider-next">
                    <span class="linearicons-chevron-right"></span>
                </div>
                <div class="swiper-button-prev home-main-slider-prev">
                    <span class="linearicons-chevron-left"></span>
                </div>
                <!-- ltr code -->

                <div class="swiper-pagination home-main-slider-pagination"></div>
            </div>
        </div>
        <!-- end home main slider -->
    </div>

    <div class="main-slider-content">
        <div class="mfa-container">
            <div class="main-heading">
                <h1>
                    One million success stories
                </h1>
                <h1>
                    Start yours today
                </h1>
            </div>

            <div class="content-section">
                <form>
                    <div class="input-group-btn">
                        <div class="label">
                            Keywords / Job title
                        </div>
                        <div class="input-btn-group">
                            <input type="text" placeholder="Enter skils or job title" />
                            <button type="submit">
										<span>
											Search
										</span>
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 492 492"
                                >
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
                    </div>
                    <div class="all-select-groups">
                        <div class="input-label-group">
                            <div class="label">
                                Select functional area
                            </div>
                            <select class="my-select" id="functional-area">
                                <option>
                                    Select functional area
                                </option>
                                @if($functionalAreas)
                                    @foreach($functionalAreas as $key => $value)
                                        <option value="{{$key}}">
                                            {{$value}}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="input-label-group">
                            <div class="label">
                                Select country
                            </div>
                            <select class="my-select" id="country_id">
                                <option>
                                    Select country
                                </option>
                                @if($countries)
                                    @foreach($countries as $key => $value)
                                        <option value="{{$key}}">
                                            {{$value}}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="input-label-group">
                            <div class="label">
                                Select State
                            </div>
                            <select class="my-select" id="state_id">
                                <option>
                                    Select State
                                </option>
                            </select>
                        </div>
                        <div class="input-label-group">
                            <div class="label">
                                Select City
                            </div>
                            <select class="my-select" id="city_id">
                                <option>
                                    Select City
                                </option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ./main slider seciton -->

<!-- counter section -->
<div class="counter-section">
    <div class="mfa-container">
        <ul class="section-ul">
            <li data-aos="zoom-in" data-aos-duration="500" data-aos-delay="0">
                <div class="img-div">
                    <img src="{{asset('website/images/counter/hire.svg')}}" alt="img" />
                </div>
                <div class="counter-text">
                    <p class="number">
                        123,012
                    </p>
                    <p class="title">
                        Jobs Added
                    </p>
                </div>
                <div class="layout-div"></div>
            </li>
            <li data-aos="zoom-in" data-aos-duration="500" data-aos-delay="200">
                <div class="img-div">
                    <img src="{{asset('website/images/counter/portfolio.svg')}}" alt="img" />
                </div>
                <div class="counter-text">
                    <p class="number">
                        187,432
                    </p>
                    <p class="title">
                        Active Resumes
                    </p>
                </div>
                <div class="layout-div"></div>
            </li>
            <li data-aos="zoom-in" data-aos-duration="500" data-aos-delay="400">
                <div class="img-div">
                    <img src="{{asset('website/images/counter/interview.svg')}}" alt="img" />
                </div>
                <div class="counter-text">
                    <p class="number">
                        140,312
                    </p>
                    <p class="title">
                        Positions Matched
                    </p>
                </div>
                <div class="layout-div"></div>
            </li>
        </ul>
    </div>
</div>
<!-- ./counter section -->

<!-- How it works section -->
<div class="how-it-works-section">
    <div class="mfa-container">
        <div class="section-heading">
            <h2>
                <img src="{{asset('website/images/how-it-works/procedure.svg')}}" alt="img" />
                How it works
            </h2>
        </div>

        <div class="section-body">
            <ul class="main-ul">
                <li>
                    <img src="{{asset('website/images/how-it-works/h-i-w-1.png')}}"
                            alt="create account"
                    />
                    <div class="li-title">
                        Create an account
                    </div>
                    <div class="li-body">
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa
                        qui officia deserunt mollit anim id est laborum.
                    </div>
                </li>
                <li>
                    <img src="{{asset('website/images/how-it-works/h-i-w-2.png')}}" alt="img" />
                    <div class="li-title">
                        Update Profile
                    </div>
                    <div class="li-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incidid ut labore et dolore magna aliqua.
                    </div>
                </li>
                <li>
                    <img src="{{asset('website/images/how-it-works/h-i-w-3.png')}}" alt="img" />
                    <div class="li-title">
                        Search Desired Job
                    </div>
                    <div class="li-body">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.
                    </div>
                </li>
                <li>
                    <img src="{{asset('website/images/how-it-works/h-i-w-4.png')}}" alt="img" />
                    <div class="li-title">
                        Send your Resume
                    </div>
                    <div class="li-body">
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa
                        qui officia deserunt mollit anim id est laborum.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- ./ How it works section -->

<!-- Featured jobs -->
<div class="featured-jobs-section">
    <div class="mfa-container">
        <div class="section-wrapper">
            <div class="section-heading">
                <h2>
                    <img src="{{asset('website/images/icons/featured.svg')}}" alt="Best jobs" />
                    FEATURED JOBS LISTINGS
                </h2>
                <p>
                    A better career is out there. We'll help you find it. We're your
                    first step to becoming everything you want to be.
                </p>
            </div>
            <div class="section-body">
                <ul class="main-section-ul">
                    @if(isset($featuredJobs) && count($featuredJobs))
                        @foreach($featuredJobs as $featuredJob)
                            <?php $company = $featuredJob->getCompany(); ?>
                            @if(null !== $company)
                                    <li>
                                        <a href="#">
                                            <div class="img-div">
                                                <img src="{{$company->printCompanyImage()}}" alt="job image" />
                                            </div>
                                            <div class="job-desc">
                                                <div class="job-title-date">
                                                    <div class="title">
                                                        {{$featuredJob->title}}
                                                    </div>
                                                    <div class="date">
                                                        <i class="feather icon-clock"></i>
                                                        {{$featuredJob->created->diffForHumans()}}
                                                    </div>
                                                </div>
                                                <div class="location-option">
                                                    <div class="location">
                                                        <i class="feather icon-map-pin"></i>
                                                        Egypt - {{$featuredJob->getCity('city')}}
                                                    </div>
                                                    <div class="option job-badge full-time-badge">
                                                        {{$featuredJob->getJobType('job_type')}}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                            @endif
                        @endforeach
                    @endif
                </ul>
            </div>

            <a href="{{url('jobs')}}" class="all-jobs">
                View all jobs
            </a>
        </div>
    </div>
</div>
<!-- ./ Featured jobs -->

<!-- services section -->
<div class="services-section">
    <div class="section-heading mfa-container">
        <p class="main-title">
            What we offer
        </p>
    </div>

    <div class="section-body">
        <ul class="main-section-ul">
            <li>
                <a class="service-card" href="./about.html">
                    <div class="service-img">
                        <img src="{{asset('website/images/services/1.png')}}" alt="img" />
                    </div>
                    <div class="service-text">
                        <p class="service-title">
                            Recruitment
                        </p>
                        <div class="service-desc">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Sint eligendi magnam quae aspernatur modi similique
                                repellendus, earum neque adipisci quis ducimus ea quam vero
                                dolore nesciunt
                            </p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a class="service-card" href="./about.html">
                    <div class="service-img">
                        <img src="{{asset('website/images/services/2.png')}}" alt="img" />
                    </div>
                    <div class="service-text">
                        <p class="service-title">
                            Travelling to Europe
                        </p>
                        <div class="service-desc">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Sint eligendi magnam quae aspernatur modi similique
                                repellendus, earum neque adipisci quis ducimus ea quam vero
                                dolore nesciunt
                            </p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a class="service-card" href="./about.html">
                    <div class="service-img">
                        <img src="{{asset('website/images/services/3.png')}}" alt="img" />
                    </div>
                    <div class="service-text">
                        <p class="service-title">
                            Youth Support
                        </p>
                        <div class="service-desc">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Sint eligendi magnam quae aspernatur modi similique
                                repellendus, earum neque adipisci quis ducimus ea quam vero
                                dolore nesciunt
                            </p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a class="service-card" href="./about.html">
                    <div class="service-img">
                        <img src="{{asset('website/images/services/4.png')}}" alt="img" />
                    </div>
                    <div class="service-text">
                        <p class="service-title">
                            Startups Funding
                        </p>
                        <div class="service-desc">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Sint eligendi magnam quae aspernatur modi similique
                                repellendus, earum neque adipisci quis ducimus ea quam vero
                                dolore nesciunt
                            </p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a class="service-card" href="./about.html">
                    <div class="service-img">
                        <img src="{{asset('website/images/services/5.png')}}" alt="img" />
                    </div>
                    <div class="service-text">
                        <p class="service-title">
                            Remote Working
                        </p>
                        <div class="service-desc">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Sint eligendi magnam quae aspernatur modi similique
                                repellendus, earum neque adipisci quis ducimus ea quam vero
                                dolore nesciunt
                            </p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a class="service-card" href="./about.html">
                    <div class="service-img">
                        <img src="{{asset('website/images/services/6.png')}}" alt="img" />
                    </div>
                    <div class="service-text">
                        <p class="service-title">
                            Exams
                        </p>
                        <div class="service-desc">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Sint eligendi magnam quae aspernatur modi similique
                                repellendus, earum neque adipisci quis ducimus ea quam vero
                                dolore nesciunt
                            </p>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- ./ services section -->

<!-- startups section -->
<div class="startups-section">
    <div class="mfa-container">
        <div class="startups-wrapper">
            <div
                    class="section-text"
                    data-aos="fade"
                    data-aos-duration="600"
                    data-aos-delay="0"
            >
                <h2>
                    <img src="{{asset('website/images/icons/rocket.svg')}}" alt="speed up" />
                    Empowering Startups
                </h2>
                <div class="span-wrapper">
                    <i class="linearicons-quote-open"></i>
                    <span>
								We are a startup accelerator designed to support and empower the
								next generation of Egyptian entrepreneurs and contribute to the
								development of the start-up ecosystem in Egypt. Our program
								consists of two different tracks, a General track for tech
								enabled startups and a Fintech track designed for startups
								operating in the financial technologies backed by EFG-EV
								Fintech.
							</span>
                    <i class="linearicons-quote-close"></i>
                </div>
            </div>

            <img
                    data-aos="fade-up"
                    data-aos-duration="600"
                    data-aos-delay="300"
                    src="{{asset('website/images/startups/hero-fist-bump.svg')}}"
                    alt="startups"
            />
        </div>
    </div>
</div>
<!-- ./startups section -->

<!-- Looking for a job section -->
<div class="looking-job-section">
    <div class="mfa-container">
        <div class="section-wrapper">
            <img
                    data-aos="fade-up"
                    data-aos-duration="600"
                    data-aos-delay="50"
                    src="{{asset('website/images/looking-job/callto.png')}}"
                    alt="looking for a job"
            />
            <div
                    class="section-text"
                    data-aos="fade"
                    data-aos-duration="600"
                    data-aos-delay="300"
            >
                <h2>
                    Are You Looking For Job?
                </h2>
                <div class="span-wrapper">
                    <i class="linearicons-quote-open"></i>
                    <span>
								Potential employers can learn a lot about you and whether you’re
								a good fit from your answer to this question, so it’s smart to
								plan your response in advance. They will be listening for any
								red flags that may come up. For example, how do you handle
								conflict resolution? Are you likely to leave shortly after
								you’re hired? How have you contributed to the situation you’re
								looking to leave? In particular, they may become concerned if
								you say negative things about your former employer, wondering if
								you would, in turn, also say negative things about them one day.
							</span>
                    <i class="linearicons-quote-close"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./ Looking for a job section -->

<!-- Egypt 2030 -->
<div class="egypt-2030-section">
    <div class="mfa-container">
        <div class="section-wrapper">
            <img src="{{asset('website/images/egypt-2030/egypt-2030.png')}}" />
            <div class="section-text">
                <p>
                    By 2030, Egypt will witness a comprehensive renaissance,
                    leveraging its genius location and unique Egyptian personality,
                    and taking into consideration the historical phase to achieve
                    sustainable development for a better standard of living to all
                    Egyptians. Mainly depending on science, knowledge and innovation,
                    Egypt will have a competitive and diversified economic system and
                    a social system characterized by participation, solidarity, and
                    justice as well as a balanced ecosystem that preserves the human
                    and natural resources gifted to Egypt by Allah.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- ./ Egypt 2030 -->

<!-- blogs section -->
<div class="blogs-section">
    <div class="mfa-container">
        <div class="section-heading">
            <p>
                Our Latest Blogs
            </p>
        </div>

        <div class="section-body">
            <ul class="main-ul">
                @if(null!==($blogs))
                    <?php
                    $count = 1;
                    ?>
                    @foreach($blogs as $blog)
                        <?php
                        $cate_ids = explode(",", $blog->cate_id);
                        $data = DB::table('blog_categories')->whereIn('id', $cate_ids)->get();
                        $cate_array = array();
                        foreach ($data as $cat) {
                            $cate_array[] = "<a href='" . url('/blog/category/') . "/" . $cat->slug . "'>$cat->heading</a>";
                        }
                        ?>
                            <li>
                                <a href="#" class="blog-card">
                                    <div class="img-div lazy-div">
                                        @if(null!==($blog->image) && $blog->image!="")
                                            <img class="lazy" data-src="{{asset('uploads/blogs/'.$blog->image)}}" alt="{{$blog->heading}}" />
                                        @else
                                            <img src="{{asset('images/blog/1.jpg')}}" alt="{{$blog->heading}}">
                                        @endif

                                        <div class="next-lazy-img"></div>
                                    </div>
                                    <p class="blog-title">
                                        {!! str_limit($blog->content, $limit = 150, $end = '...') !!}
                                    </p>
                                </a>
                            </li>
                        @endforeach
                    @endif
            </ul>
        </div>
    </div>
</div>
<!-- ./blogs section -->

<!-- testimonials section -->
<div class="testimonials-section">
    <div class="mfa-container">
        <!-- start testimonials slider -->
        <div class="slider-wrapper">
            <div class="slider-heading">
                Our User's Success Stories
            </div>
            <div class="slider-itself">
                <div class="swiper-container testimonials-slider">
                    <div class="swiper-wrapper">
                        @if(isset($testimonials) && count($testimonials))
                            @foreach($testimonials as $testimonial)
                                <div class="swiper-slide">
                                    {{--<div class="img-div">
                                        <img src="./images/testimonials/1.jpg" alt="img" />
                                    </div>--}}

                                    <div class="content">
                                        <i class="linearicons-quote-close"></i>
                                        <p class="text">
                                            {{$testimonial->testimonial}}
                                        </p>
                                        <div class="name">
                                            {{$testimonial->testimonial_by}}
                                        </div>
                                        <i class="linearicons-quote-open"></i>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <!-- rtl code -->
                    <!-- <div class="swiper-button-prev testimonials-slider-prev">
          <span class="feather icon-chevron-right"></span>
        </div>
        <div class="swiper-button-next testimonials-slider-next">
          <span class="feather icon-chevron-left"></span>
        </div> -->
                    <!-- rtl code -->

                    <!-- ltr code -->
                    <!-- <div class="swiper-button-next testimonials-slider-next">
    <span class="linearicons-chevron-right"></span>
  </div>
  <div class="swiper-button-prev testimonials-slider-prev">
    <span class="linearicons-chevron-left"></span>
  </div> -->
                    <div class="swiper-button-next testimonials-slider-next">
                        <span class="feather icon-chevron-right"></span>
                    </div>
                    <div class="swiper-button-prev testimonials-slider-prev">
                        <span class="feather icon-chevron-left"></span>
                    </div>
                    <!-- ltr code -->

                    <!-- <div class="swiper-pagination testimonials-slider-pagination"></div> -->
                </div>
            </div>
        </div>
        <!-- end testimonials slider -->
    </div>
</div>
<!-- ./testimonials section -->

<!-- subscribe section -->
<div class="subscribe-section">
    <div class="mfa-container">
        <p class="section-title">
            Subscribe to our FREE email newsletter and discover how you can save
            money
        </p>
        <div class="section-body">
            <form action="{{ route('subscribe.newsletter')}}" class="subscribe-form" method="post">
                {{ csrf_field() }}
                <input
                        type="email"
                        name=""
                        id=""
                        placeholder="{{__('Email')}}"
                />
                <button class="subscribe-btn" type="submit">
                    <i class="linearicons-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>
</div>
<!-- ./subscribe section -->

<!-- our partners section -->
<div class="partners-section">
    <div class="section-heading">
        <p>
            Join our top companies
        </p>
    </div>
    <div class="swiper-container home-partners-slider">
        <div class="swiper-wrapper">
            @if(isset($topCompanyIds) && count($topCompanyIds))
                @foreach($topCompanyIds as $company_id_num_jobs)
                    <?php
                    $company = App\Company::where('id', '=', $company_id_num_jobs->company_id)->active()->first();
                    if (null !== $company) {
                        ?>
                        <div class="swiper-slide">
                            <div class="slider-img">
                                <img src="{!! asset('company_logos/' . $company->logo) !!}" alt="img" />
                            </div>
                        </div>
                <?php
                    }
                    ?>
                @endforeach
            @endif
        </div>
    </div>
</div>
<!-- our partners section -->

<!-- Subscribe End -->
@include('website.layouts.footer')
@endsection
@push('scripts') 
<script>
    $(document).ready(function
        ($) {
        $("form").submit(function () {
            $(this).find(":input").filter(function () {
                return !this.value;
            }).attr("disabled", "disabled");
            return true;
        });
        $("form").find(":input").prop("disabled", false);
    });
</script>
@include('includes.country_state_city_js')
@endpush
