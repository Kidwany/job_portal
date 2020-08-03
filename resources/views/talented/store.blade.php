@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('includes.header')
<!-- Header end -->
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title' => __('Talented')])
<!-- Inner Page Title end -->

<div class="inner-page">
    <div class="container">
        <div class="contact-wrap">
            <div class="title"> <span>&nbsp;</span>
                <h2>{{__('Thanks for being awesome')}}</h2>
                <p>
                    {{__('Talk to you soon')}}<br />
                    {{ $siteSetting->site_name }}
                </p>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')
@endsection
