@extends('layouts.app')
@section('content') 
<!-- Header start --> 
@include('website.layouts.header')
<!-- Header end --> 
<!-- Inner Page Title start --> 
@include('includes.inner_page_title', ['page_title'=>__('Company Profile')]) 
<!-- Inner Page Title end -->
<div class="listpgWraper">
    <div class="container">
        <div class="row">
            @include('includes.company_dashboard_menu')

            <div class="col-md-9 col-sm-8">
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <p>Profile Strength (Average)</p>
                        <p>{{$profile_strength}}%</p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-{{\App\Helpers\MiscHelper::ProgressBarClass($profile_strength)}}" role="progressbar" style="width: {{$profile_strength}}%" aria-valuenow="{{$profile_strength}}" aria-valuemin="0" aria-valuemax="100">{{$profile_strength}}%</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="userccount">
                            <div class="formpanel mt0"> @include('flash::message') 
                                <!-- Personal Information -->
                                @include('company.inc.profile')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('website.layouts.footer')
@endsection
@push('styles')
<style type="text/css">
    .userccount p{ text-align:left !important;}
</style>
@endpush