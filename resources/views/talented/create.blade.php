@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end -->
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title' => __('Talented')])
<!-- Inner Page Title end -->
<div class="listpgWraper">


    <div class="talented mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{asset('/')}}images/create.png" alt="" />
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="titleTop">
                        <h3>{{__('Find talented people')}} </h3>
                    </div>
                    <p>{{__('The true wealth of any society is human wealth, and talented students and talented students come at the  top of that wealth due to their importance in facing the challenges of the times, so searching for them and caring for them and achieving the best means to invest their talents is what matters to all societies so that their scientific, technical and economic standing among the countries of the world rises.')}}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h3 class="title title-line pb-5">{{__('Are you talented? Register now')}}</h3>
                </div>
            </div>

            <div class="col-md-10 col-sm-12">
                <div class="userccount">
                    <div class="formpanel mt0">
                        @include('flash::message')
                        <!-- Personal Information -->
                        @include('talented.inc.form')
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
@include('includes.country_state_city_js')
@endpush
