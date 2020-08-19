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
                <a href="#" class="horiz-adv">
                    <img src="{{asset('website/images/partners/2.webp')}}" alt="adv" />
                </a>

                <div class="section-heading">
                    <p>
                        Partners
                    </p>
                </div>
                <div class="partners-layout">
                    <ul class="partners-ul">

                        @if($companies)
                            @foreach($companies as $company)
                                <li class="partnerCard">
                                    <a href="{{route('company.detail',$company->slug)}}" class="card-wrapper">
                                        <div class="img-div lazy-div">
                                            <img
                                                    class="lazy"
                                                    data-src="{!! asset('company_logos/' . $company->logo) !!}"
                                                    alt="img"
                                            />
                                            <div class="next-lazy-img"></div>
                                        </div>
                                        <div class="partnerContent">
                                            <p class="pTitle">
                                                {{$company->name}}
                                                @if($company->isOnline())
                                                    <small style="color: lightseagreen; font-weight: 200; font-size: 12px"> online</small>
                                                    @else
                                                    <small style="color: orangered; font-weight: 200; font-size: 12px"> offline</small>
                                                @endif

                                            </p>
                                            <div class="jobs__rating">
                                                <div class="jobsCount"><strong>{{App\Company::countNumJobs('company_id', $company->id)}}</strong> Jobs</div>
                                                <ul class="partnerRating">
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star-outline"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        @endif

                    </ul>
                    <ul class="paginationUl">
                        <li class="pageItem">
                            <a class="pageLink" href="{{$companies->previousPageUrl()}}">Previous</a>
                        </li>
                        @for($i=1; $i <= $companies->lastPage(); $i++)
                            <li class="pageItem {{$i == $companies->currentPage() ? 'active' : ''}}">
                                <a class="pageLink" href="?page={{$i}}">{{$i}}</a>
                            </li>
                        @endfor

                        <li class="pageItem">
                            <a class="pageLink" href="{{$companies->nextPageUrl()}}">Next</a>
                        </li>
                    </ul>
                </div>

                <a href="#" class="horiz-adv">
                    <img src="{{asset('website/images/partners/2.webp')}}" alt="adv" />
                </a>
            </div>
            <!-- end partners section -->
        </div>
    </div>
    <!-- ./partners page -->


    <!-- Header start -->
    @include('website.layouts.footer')
    <!-- Header end -->
@endsection