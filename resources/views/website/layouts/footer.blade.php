<footer>
    <div class="top-footer">
        <div class="mfa-container">
            <div class="section-zero">
                <div class="section-body">
                    <div class="img-div">
                        <img src="{{ asset('website/images/logo/logo-black.png') }}" alt="img" />
                    </div>

                    <div class="contact-info">
                        <div class="address">
                            <span>
                                <i class="feather icon-map-pin"></i>
                                {{ $siteSetting->site_street_address }}
                            </span>
                        </div>
                        <div class="Email">
                            <span>
                                <i class="feather icon-mail"></i>
                                {{ $siteSetting->mail_to_address }}
                            </span>
                        </div>
                        <div class="phones">
                            <a class="phone" href="tel:{{ $siteSetting->site_phone_primary }}">
                                <span>
                                    <i class="feather icon-phone"></i>
                                    {{ $siteSetting->site_phone_primary }}
                                </span>
                            </a>
                            <a class="phone" href="tel: {{ $siteSetting->site_phone_secondary }}">
                                <span>
                                    <i class="feather icon-phone"></i>
                                    {{ $siteSetting->site_phone_secondary }}
                                </span>
                            </a>
                        </div>
                    </div>

                    <ul class="social-ul">
                        @if ((string)$siteSetting->facebook_address !== '')
                            <li>
                                <a href="{{ $siteSetting->facebook_address }}" target="_blank">
                                    <i class="ion-social-facebook-outline"></i>
                                </a>
                            </li>
                        @endif
                        @if ((string)$siteSetting->twitter_address !== '')
                            <li>
                                <a href="{{ $siteSetting->twitter_address }}" target="_blank">
                                    <i class="ion-social-twitter-outline"></i>
                                </a>
                            </li>
                        @endif

                        @if ((string)$siteSetting->instagram_address !== '')
                            <li>
                                <a href="{{ $siteSetting->instagram_address }}" target="_blank">
                                    <i class="ion-social-instagram-outline"></i>
                                </a>
                            </li>
                        @endif

                        @if ((string)$siteSetting->youtube_address !== '')
                            <li>
                                <a href="{{ $siteSetting->youtube_address }}" target="_blank">
                                    <i class="ion-social-youtube-outline"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="section-one">
                <div class="section-heading">
                    <p>
                        Quick links
                    </p>
                </div>
                <div class="section-body">
                    <ul class="main-section-ul">
                        <li>
                            <a href="{{ route('index') }}">
                                <span>
                                    {{__('Home')}}
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact.us') }}">
                                <span>
                                    {{__('Contact Us')}}
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('company.listing')}}">
                                <span>
                                    Partners
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('travel.agent.listing') }}">
                                <span>
                                    {{__('Travel Agents')}}
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('traveling.to.europe') }}">
                                <span>
                                    {{__('Traveling to Europe')}}
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('youth.create') }}">
                                <span>
                                    {{__('Youth Support')}}
                                </span>
                            </a>
                        </li>
                        {{--<li>
                            <a href="#">
                                <span>
                                    FAQs
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    About us
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>
                                    Terms of use
                                </span>
                            </a>
                        </li>--}}
                    </ul>
                </div>
            </div>
            <div class="section-two">
                <div class="section-heading">
                    <p>
                        {{__('Jobs By Functional Area')}}
                    </p>
                </div>
                <div class="section-body">
                    <ul class="main-section-ul">
                        @php
                            $functionalAreas = App\FunctionalArea::getUsingFunctionalAreas(10);
                        @endphp

                        @foreach($functionalAreas as $functionalArea)
                            <li>
                                <a href="{{ route('job.list', ['functional_area_id[]' => $functionalArea->functional_area_id]) }}">
                                <span>
                                    {{$functionalArea->functional_area}}
                                </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="section-three">
                <div class="section-heading">
                    <p>
                        {{__('Jobs By Industry')}}
                    </p>
                </div>
                <div class="section-body">
                    <ul class="main-section-ul">
                        @php
                            $industries = App\Industry::getUsingIndustries(10);
                        @endphp
                        @foreach($industries as $industry)
                            <li>
                                <a href="{{ route('job.list', ['industry_id[]'=>$industry->industry_id]) }}">
                                    <span>
                                        {{$industry->industry}}
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-footer">
        <div class="mfa-container">
            <p>
                2020 &copy El Adrousi All rights reserved
            </p>
        </div>
    </div>
</footer>