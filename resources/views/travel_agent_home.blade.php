@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('website.layouts.header')
<!-- Header end -->
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title'=>__('Dashboard')])
<!-- Inner Page Title end -->
<div class="listpgWraper">
    <div class="container">@include('flash::message')
        <div class="row"> @include('includes.travel_agent.dashboard_menu')
            <div class="col-md-9 col-sm-8"> 
                @include('includes.travel_agent.dashboard_stats')
            </div>
        </div>
    </div>
</div>
@include('website.layouts.footer')
@endsection
@push('scripts')
@include('includes.immediate_available_btn')
@endpush