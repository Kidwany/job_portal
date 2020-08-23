@extends('website.layouts.layouts')
@section('content')
    <!-- Header start -->
    @include('website.layouts.header')
    <!-- Header end -->

    <!-- Certificate page -->
    <div class="myPage">
        <div class="header-breadcrumb">
            <div class="page-title mfa-container">
                Certificate Translate and Registration
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
                            Certificate Translate
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-content certificateContent">
            <div class="mfa-container">
                <div class="certificate-section">
                    <div class="section-heading">
                        <h1>
                            <img src="{{asset('website/images/certificates/medal.svg')}}" alt="img" />
                            Certificate Translate and Registration
                        </h1>
                        <p>
                            Register your company from the comfort of your house or office.
                        </p>
                    </div>

                    <div class="sectionBody">
                        <ul class="stepsUl">
                            <li class="singleStep">
                                <div class="stepNumber">
                                    1
                                </div>
                                <div class="stepBody">
                                    <div class="stepTitle">
                                        Submit your application online
                                    </div>
                                    <div class="stepDesc">
                                        <ul>
                                            <li>
                                                <p>
                                                    Select your company type above and complete the
                                                    online application.
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    You’ll receive a confirmation email with a reference
                                                    number for payment.
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    To speed up your registration, please use the
                                                    reference number when making payment.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="singleStep">
                                <div class="stepNumber">
                                    2
                                </div>
                                <div class="stepBody">
                                    <div class="stepTitle">
                                        All registration documents will be lodged with the
                                        Registrar
                                    </div>
                                    <div class="stepDesc">
                                        <ul>
                                            <li>
                                                <p>
                                                    Select your company type above and complete the
                                                    online application.
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    The first available company name will be reserved.
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    The company application with the approved name and
                                                    supporting documents will be filed for registration.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="singleStep">
                                <div class="stepNumber">
                                    3
                                </div>
                                <div class="stepBody">
                                    <div class="stepTitle">
                                        The company registration certificate will be emailed to
                                        you
                                    </div>
                                    <div class="stepDesc">
                                        <ul>
                                            <li>
                                                <p>
                                                    You’ll receive the COR14.3 company registration
                                                    certificate via email from us.
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    All company registration documents will be available
                                                    to download in our confirmation email
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    You can apply for a Tax Clearance Certificate (good
                                                    standing or tender).
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="registeration-section">
                    <div class="section-heading">
                        <h1>
                            <img src="{{asset('website/images/certificates/email.svg')}}" alt="img" />
                            Contact Us
                        </h1>
                    </div>

                    <div class="sectionBody">
                        @include('website.layouts.messages')
                        <form class="mfa-form" action="{{ url('certificate/store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-div">
                                <label for="name">
										<span>
											Full Name
										</span>
                                    <input type="text" id="name" required name="name" value="{{old('name')}}"/>
                                    <i class="feather icon-user"></i>
                                </label>
                            </div>
                            <div class="form-div">
                                <label for="email">
										<span>
											Email
										</span>
                                    <input type="text" id="email" required name="email" value="{{old('email')}}"/>
                                    <i class="feather icon-mail"></i>
                                </label>
                            </div>
                            <div class="form-div">
                                <label for="phone">
										<span>
											Phone number
										</span>
                                    <input type="tel" id="phone" required name="phone" value="{{old('phone')}}"/>
                                    <i class="feather icon-phone"></i>
                                </label>
                            </div>
                            <div class="form-div">
                                <label for="address">
										<span>
											Your address
										</span>
                                    <input type="text" id="address" required name="address" value="{{old('address')}}"/>
                                    <i class="feather icon-map"></i>
                                </label>
                            </div>
                            <div class="fileWrapper">
                                <input type="file" name="file"/>
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
    <!-- ./certificate page -->


    <!-- Header start -->
    @include('website.layouts.footer')
    <!-- Header end -->
@endsection