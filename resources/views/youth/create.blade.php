@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end -->
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title' => __('Youth Support')])
<!-- Inner Page Title end -->
<div class="listpgWraper">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-10 col-sm-12">

                <div class="userccount">
                    <div class="formpanel mt0"> 
                        @include('flash::message')
                        <!-- Personal Information -->
                        @include('youth.inc.form')
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