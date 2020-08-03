@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end -->
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title' => __('Traveling to Europe')])
<!-- Inner Page Title end -->
<div class="listpgWraper">
    <div class="container">


        <div class="row justify-content-center mt-5 align-items-center text-center section-home">
            <div class="col-md-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h3 class="title title-line pb-5">{{__('Visas and immigration to Europe')}}</h3>
                    <h4 class="text-muted para-desc mx-auto mb-1">{{__('Visa and immigration services')}}</h4>
                </div>

        </div>
        </div>

        <section class="row text-center mt-5" dir="rtl">
            <div class="col-md-3 col-sm-12">
                <div class="services-box">
                <img src="https://agatovisa.com/wp-content/themes/agatos/images/icons/visa-free-consultation.png"
                    alt="استشارة فيزا مجانية">
                    <div class="services-content mt-3">
                        <h3>{{__('Free consultation')}}</h3>
                        <p class="list-main-3-p">{{__('Specialists will help you find out what type of visa you need and what its requirements are')}}</p>
        
                    </div>
            </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="services-box">
                <img src="https://agatovisa.com/wp-content/themes/agatos/images/icons/visa-requirements-preparation.png"
                    alt="تحضير وثائق الفيزا">
                    <div class="services-content mt-3">
                <h3>{{__('Prepare documents')}}</h3>
                <p class="list-main-3-p">{{__('Prepare all documents required to obtain, certify and translate the visa')}}</p>
            </div>
        </div>
        </div>

            <div class="col-md-3 col-sm-12">
                <div class="services-box">
                <img src="https://agatovisa.com/wp-content/themes/agatos/images/icons/visa-embassy-reservation.png"
                    alt="Embassy Appointments Reservation">
                    <div class="services-content mt-3">
                <h3>{{__('Book an embassy appointment')}}</h3>
                <p class="list-main-3-p">{{__('Fill and send the required visa forms professionally, and set the date of the interview')}}</p>
            </div>
        </div>
        </div>

            <div class="col-md-3 col-sm-12">
                <div class="services-box">
                <img src="https://agatovisa.com/wp-content/themes/agatos/images/icons/travel-insurance-and-reservation.png"
                    alt="Travel Insurance And Reservation">
                    <div class="services-content mt-3">
                <h3>{{__('Travel requirements insurance')}}</h3>
                <p class="list-main-3-p">{{__('Prepare all visa requirements for airline reservations, accommodations, photos and travel insurance')}}</p>
            </div>
        </div>
        </div>
        </section>

        <section class="row quality text-center mt-5" dir="rtl">
            <div class="col-12 my-4">
                <div class="section-title text-center mb-4 pb-2">
                    <h3 class="title title-line pb-5">{{__('Why Eladrousi for Visa and Immigration')}}</h3>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="services-box">
                <img src="https://agatovisa.com/wp-content/themes/agatos/images/icons/quality-visa-services.png"
                    alt="خدمات فيزا وهجرة بأعلى جودة" class="img-main-3">
                    <div class="services-content mt-3">
                <h3>{{__('Top quality services')}}</h3>
                <p class="list-main-3-p">{{__('Eladrousi provides visa and immigration consultancy with high quality and high quality translation from licensed translators. It applies the highest professional standards, and is accredited by the Australian Nati authorities, and all embassies around the world and holds an ISO global quality certificate.')}}</p>
            </div>
        </div>
    </div>
            <div class="col-12 col-md-4">
                <div class="services-box">

                <img src="https://agatovisa.com/wp-content/themes/agatos/images/icons/requirements-visa-immigration.png"
                    alt=" إعداد جميع متطلبات التأشيرة" class="img-main-3">
                    <div class="services-content mt-3">

                <h3>{{__('Prepare all requirements')}}</h3>
                <p class="list-main-3-p">{{__('We prepare and translate all required documents, submit the required visa forms, pay embassy fees on your behalf, set a reservation date with embassies, and submit all requests for entry visas such as travel insurance, airline tickets, hotel reservations, and others.')}}
                </p>
            </div>
        </div>
    </div>
            <div class="col-12 col-md-4">
                <div class="services-box">

                <img src="https://agatovisa.com/wp-content/themes/agatos/images/icons/free-visa-immigration-consultation.png"
                    alt="ترجمة بأفضل جودة" class="img-main-3">
                    <div class="services-content mt-3">

                <h3>{{__('Free and accurate consultation')}}</h3>
                <p class="list-main-3-p">{{__('30 years of experience gives us the ability to give prompt and accurate advice regarding obtaining a visa and immigration, depending on the information given by you and our knowledge of the requirements of all types of visas. We check your eligibility for all types of visas to the required country and inform you of the necessary procedures')}}
                </p>
            </div>
        </div>
    </div>
        </section>

        <div class="row justify-content-center mt-5">
            <div class="col-md-10 col-sm-12 text-center py-4">
                <div class="section-title text-center mb-4 pb-2">
                    <h3 class="title title-line pb-5">{{__('Get a free consultation')}}</h3>
                </div>
            </div>
            <div class="col-md-10 col-sm-12">
                <div class="userccount">
                    <div class="formpanel mt0">
                        @include('flash::message')
                        <!-- Personal Information -->
                        @include('traveler.inc.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.footer')
@endsection
@push('styles')
<style type="text/css">
    .userccount p {
        text-align: left !important;
    }
</style>
@endpush
@push('scripts')
@include('includes.immediate_available_btn')
@endpush