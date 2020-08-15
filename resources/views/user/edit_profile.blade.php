@extends('layouts.app')
@section('content') 
<!-- Header start --> 
@include('website.layouts.header')
<!-- Header end --> 
<!-- Inner Page Title start --> 
@include('includes.inner_page_title', ['page_title'=>__('My Profile')]) 
<!-- Inner Page Title end -->
<div class="listpgWraper">
    <div class="container">
        <div class="row">
            @include('includes.user_dashboard_menu')

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

                <div class="userccount">
                    <div class="formpanel mt0"> @include('flash::message')
                    <!-- Personal Information -->
                        @include('user.inc.profile')
                    </div>
                </div>
						
                <div class="userccount">
                    <div class="formpanel mt0">
                        <!-- Personal Information -->
                        @include('user.inc.summary')
                    </div>
                </div>
						
                <div class="userccount">
                    <div class="formpanel mt0">
                        <!-- Personal Information -->
                        @include('user.forms.cv.cvs')
                        @include('user.forms.project.projects')
                        @include('user.forms.experience.experience')
                        @include('user.forms.education.education')
                        @include('user.forms.skill.skills')
                        @include('user.forms.language.languages')
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
@push('scripts')
    @include('includes.immediate_available_btn')
@endpush