@extends('website.layouts.layouts')
@section('content')
    <!-- Header start -->
    @include('website.layouts.header')
    <!-- Header end -->
    <!-- Inner Page Title start -->
    @include('includes.inner_page_title', ['page_title'=>__('Companies')])
    <!-- Inner Page Title end -->


    <!-- partners page -->
    <div class="partners-page">
        <div class="mfa-container">
            <!-- start partners section -->
            <div class="partners-section">
                <div class="section-heading">
                    <p>
                        Partners
                    </p>
                </div>
                <div class="partners-layout">
                    <div class="partners-ul">
                        @if($companies)
                            @foreach($companies as $company)
                                <li>
                                    <div class="card-wrapper">
                                        <div class="img-div lazy-div">
                                            <img class="lazy"
                                                 data-src="{!! asset('company_logos/' . $company->logo) !!}"
                                                 alt="img"
                                            />
                                            <div class="next-lazy-img"></div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <!-- end partners section -->
        </div>
    </div>
    <!-- ./partners page -->


    <!-- Header start -->
    @include('website.layouts.footer')
    <!-- Header end -->
@endsection