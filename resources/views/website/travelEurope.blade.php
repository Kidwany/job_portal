@extends('website.layouts.layouts')
@section('content')
    <!-- Header start -->
    @include('website.layouts.header')

    <!-- traveling to europe page -->
    <div class="myPage europe-page">
        <div class="header-breadcrumb">
            <div class="page-title mfa-container">
                Traveling to europe
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
                            Traveling to Europe
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-content">
            <!-- europe services section -->
            <div class="europe-services">
                <div class="mfa-container">
                    <div class="section-heading">
                        <h1>
                            <img src="{{asset('website/images/europe/visa.svg')}}" alt="img" />
                            Visas and immigration to Europe
                        </h1>
                        <p>Visa and immigration services</p>
                    </div>

                    <div class="section-body">
                        <ul class="main-ul">
                            <li>
                                <img
                                        src="{{asset('website/images/europe/services/travel-insurance-and-reservation.png')}}"
                                        alt="img"
                                />
                                <div class="li-title">
                                    Travel requirements insurance
                                </div>
                                <div class="li-body">
                                    Prepare all visa requirements for airline reservations,
                                    accommodations, photos and travel insurance
                                </div>
                            </li>
                            <li>
                                <img
                                        src="{{asset('website/images/europe/services/visa-embassy-reservation.png')}}"
                                        alt="img"
                                />
                                <div class="li-title">
                                    Book an embassy appointment
                                </div>
                                <div class="li-body">
                                    Fill and send the required visa forms professionally, and
                                    set the date of the interview
                                </div>
                            </li>
                            <li>
                                <img
                                        src="{{asset('website/images/europe/services/visa-requirements-preparation.png')}}"
                                        alt="img"
                                />
                                <div class="li-title">
                                    Prepare documents
                                </div>
                                <div class="li-body">
                                    Prepare all documents required to obtain, certify and
                                    translate the visa
                                </div>
                            </li>
                            <li>
                                <img src="{{asset('website/images/europe/services/visa-free-consultation.png')}}"
                                        alt="img"
                                />
                                <div class="li-title">
                                    Free consultation
                                </div>
                                <div class="li-body">
                                    Specialists will help you find out what type of visa you
                                    need and what its requirements are
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ./europe services section -->

            <!-- why eladrousi section -->
            <div class="why-eladrousi">
                <div class="mfa-container">
                    <div class="section-heading">
                        <h1>
                            <img src="{{asset('website/images/europe/travel.svg')}}" alt="img" />
                            Why Eladrousi for Visa and Immigration
                        </h1>
                    </div>

                    <div class="section-body">
                        <ul class="main-ul">
                            <li>
                                <img
                                        src="{{asset('website/images/europe/why/free-visa-immigration-consultation.png')}}"
                                        alt="img"
                                />
                                <div class="li-title">
                                    Free and accurate consultation
                                </div>
                                <div class="li-body">
                                    30 years of experience gives us the ability to give prompt
                                    and accurate advice regarding obtaining a visa and
                                    immigration, depending on the information given by you and
                                    our knowledge of the requirements of all types of visas. We
                                    check your eligibility for all types of visas to the
                                    required country and inform you of the necessary procedures
                                </div>
                            </li>
                            <li>
                                <img
                                        src="{{asset('website/images/europe/why/requirements-visa-immigration.png')}}"
                                        alt="img"
                                />
                                <div class="li-title">
                                    Prepare all requirements
                                </div>
                                <div class="li-body">
                                    We prepare and translate all required documents, submit the
                                    required visa forms, pay embassy fees on your behalf, set a
                                    reservation date with embassies, and submit all requests for
                                    entry visas such as travel insurance, airline tickets, hotel
                                    reservations, and others.
                                </div>
                            </li>
                            <li>
                                <img
                                        src="{{asset('website/images/europe/why/quality-visa-services.png')}}"
                                        alt="img"
                                />
                                <div class="li-title">
                                    Top quality services
                                </div>
                                <div class="li-body">
                                    Eladrousi provides visa and immigration consultancy with
                                    high quality and high quality translation from licensed
                                    translators. It applies the highest professional standards,
                                    and is accredited by the Australian Nati authorities, and
                                    all embassies around the world and holds an ISO global
                                    quality certificate.
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ./why eladrousi section -->

            <!-- stepper form -->
            <div class="mfa-container">
                <div class="stepper-form-wrapper">
                    <p class="section-heading">
                        <i class="linearicons-chart-growth"></i
                        ><span> Get a free consultation </span>
                    </p>
                    <form class="mfa-form stepper-form" onsubmit="submit()">
                        <div class="form-step">
                            <div class="form-div">
                                <label for="username">
										<span>
											Username
										</span>
                                    <input
                                            class="formInput"
                                            type="text"
                                            id="username"
                                            required
                                    />
                                    <i class="feather icon-user"></i>
                                </label>
                            </div>
                            <div class="form-div">
                                <label for="email">
										<span>
											Email
										</span>
                                    <input class="formInput" type="email" id="email" required />
                                    <i class="feather icon-mail"></i>
                                </label>
                            </div>
                            <div class="form-div">
                                <label for="phone">
										<span>
											Phone number
										</span>
                                    <input
                                            class="formInput"
                                            type="number"
                                            id="phone"
                                            required
                                    />
                                    <i class="feather icon-phone"></i>
                                </label>
                            </div>
                            <div class="form-div">
                                <label>
										<span>
											<!-- Date of birth -->
										</span>
                                    <input class="formInput" type="date" required />
                                </label>
                            </div>
                        </div>

                        <div class="form-step">
                            <div class="form-div">
									<span>
										Select gender
									</span>
                                <select class="formInput" name="gender" id="gender" required>
                                    <option>
                                        Select gender
                                    </option>
                                    <option value="0">Male</option>
                                    <option value="1">Female</option>
                                </select>
                            </div>
                            <div class="form-div">
									<span>
										Marital Status
									</span>
                                <select class="formInput" name="marital" required>
                                    <option>
                                        Select Marital Status
                                    </option>
                                    <option value="0">Divorced</option>
                                    <option value="1">Married</option>
                                    <option value="2">Separated</option>
                                    <option value="3">Single</option>
                                    <option value="4">Widow/er</option>
                                </select>
                            </div>
                            <div class="form-div">
									<span>
										Country
									</span>
                                <select class="formInput" name="coutnry" required>
                                    <option>
                                        Select Coutnry
                                    </option>
                                    <option value="0">Saudi Arabi</option>
                                    <option value="1">Egypt</option>
                                    <option value="2">Separated</option>
                                    <option value="3">Single</option>
                                    <option value="4">Widow/er</option>
                                </select>
                            </div>
                            <div class="form-div">
									<span>
										State
									</span>
                                <select class="formInput" name="state" required>
                                    <option>
                                        Select State
                                    </option>
                                    <option value="0">State one</option>
                                    <option value="1">state two</option>
                                    <option value="2">Separated</option>
                                    <option value="3">Single</option>
                                    <option value="4">Widow/er</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-step">
                            <div class="form-div">
									<span>
										Select City
									</span>
                                <select class="formInput" name="city" required>
                                    <option>
                                        Select City
                                    </option>
                                    <option value="0">Male</option>
                                    <option value="1">Female</option>
                                </select>
                            </div>
                            <div class="form-div">
									<span>
										Nationality
									</span>
                                <select class="formInput" name="nationality" required>
                                    <option>
                                        Select Nationality
                                    </option>
                                    <option value="0">Saudi Arabi</option>
                                    <option value="1">Egypt</option>
                                    <option value="2">Separated</option>
                                    <option value="3">Single</option>
                                    <option value="4">Widow/er</option>
                                </select>
                            </div>
                            <div class="form-div">
									<span>
										Industry
									</span>
                                <select class="formInput" name="nationality" required>
                                    <option>
                                        Select Industry
                                    </option>
                                    <option value="0">Saudi Arabi</option>
                                    <option value="1">Egypt</option>
                                    <option value="2">Separated</option>
                                    <option value="3">Single</option>
                                    <option value="4">Widow/er</option>
                                </select>
                            </div>
                            <div class="form-div">
                                <label for="address">
										<span>
											Adress
										</span>
                                    <input class="formInput" type="text" id="adress" required />
                                    <i class="feather icon-map-pin"></i>
                                </label>
                            </div>
                            <div class="form-div">
                                <label for="idcard">
										<span>
											National ID Card#
										</span>
                                    <input class="formInput" type="text" id="idcard" required />
                                    <i class="feather icon-codepen"></i>
                                </label>
                            </div>
                        </div>
                        <div class="formBtns">
                            <button class="prevBtn">Previous</button>
                            <button class="nextBtn">Next</button>
                        </div>

                        <div class="step-indicators">
                            <span class="step-indicator"></span>
                            <span class="step-indicator"></span>
                            <span class="step-indicator"></span>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ./stepper form -->
        </div>
    </div>
    <!-- ./traveling to europe page -->

    @include('website.layouts.footer')
@endsection
