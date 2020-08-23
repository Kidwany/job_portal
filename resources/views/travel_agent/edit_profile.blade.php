@extends('layouts.app')
@section('content') 
<!-- Header start --> 
@include('website.layouts.header')
<!-- Header end --> 
<!-- Inner Page Title start --> 
@include('includes.inner_page_title', ['page_title'=>__('Travel Agent Profile')]) 
<!-- Inner Page Title end -->
<div class="listpgWraper">
    <div class="container">
        <div class="row">
            @include('includes.travel_agent.dashboard_menu')

            <div class="col-md-9 col-sm-8"> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="userccount">
                            <div class="formpanel mt0"> @include('flash::message') 
                                <!-- Personal Information -->
                                @include('travel_agent.inc.profile')
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