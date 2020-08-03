<!--Footer-->

<div class="row justify-content-center my-3">
    <div class="col-auto">
        <div class="card p-2">
            {!! $siteSetting->above_footer_ad !!}
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<div class="footerWrap">
    <div class="container">
        <div class="row justify-content-center">

            <!--About Us start -->
            <div class="col-md-3 col-6">
                <h5>{{__('Contact Us')}}</h5>
                <div class="address">{{ $siteSetting->site_street_address }}</div>
                <div class="email">
                    <a href="mailto:{{ $siteSetting->mail_to_address }}">
                        {{ $siteSetting->mail_to_address }}
                    </a>
                </div>
                <div class="phone">
                    <a href="tel:{{ $siteSetting->site_phone_primary }}">
                        {{ $siteSetting->site_phone_primary }}
                    </a>
                </div>
                <!-- Social Icons -->
                <div class="social">
                    @include('includes.footer_social')
                </div>
                <!-- Social Icons end -->

            </div>
            <!--About us End -->
            <!--Quick Links start -->
            <div class="col-md-2 col-6">
                <h5>{{__('Quick Links')}}</h5>
                <!--Quick Links menu Start-->
                <ul class="quicklinks">
                    <li><a href="{{ route('index') }}">{{__('Home')}}</a></li>
                    <li><a href="{{ route('contact.us') }}">{{__('Contact Us')}}</a></li>
                    <li class="postad"><a href="{{ route('post.job') }}">{{__('Post a Job')}}</a></li>
                    <li><a href="{{ route('faq') }}">{{__('FAQs')}}</a></li>
                    @foreach($show_in_footer_menu as $footer_menu)
                    @php
                    $cmsContent = App\CmsContent::getContentBySlug($footer_menu->page_slug);
                    @endphp

                    <li class="{{ Request::url() == route('cms', $footer_menu->page_slug) ? 'active' : '' }}"><a
                            href="{{ route('cms', $footer_menu->page_slug) }}">{{ $cmsContent->page_title }}</a></li>
                    @endforeach
                </ul>
            </div>
            <!--Quick Links end -->

            <!--Jobs start -->
            <div class="col-md-3 col-6">
                <h5>{{__('Jobs By Functional Area')}}</h5>
                <!--Quick Links menu Start-->
                <ul class="quicklinks">
                    @php
                    $functionalAreas = App\FunctionalArea::getUsingFunctionalAreas(10);
                    @endphp
                    @foreach($functionalAreas as $functionalArea)
                    <li>
                        <a
                            href="{{ route('job.list', ['functional_area_id[]' => $functionalArea->functional_area_id]) }}">
                            {{$functionalArea->functional_area}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!--Jobs end -->

            <!--Jobs By Industry start -->
            <div class="col-md-3 col-6">
                <h5>{{__('Jobs By Industry')}}</h5>
                <!--Industry menu Start-->
                <ul class="quicklinks">
                    @php
                    $industries = App\Industry::getUsingIndustries(10);
                    @endphp
                    @foreach($industries as $industry)
                    <li>
                        <a href="{{ route('job.list', ['industry_id[]'=>$industry->industry_id]) }}">
                            {{$industry->industry}}
                        </a>
                    </li>
                    @endforeach
                </ul>
                <!--Industry menu End-->
                <div class="clear"></div>
            </div>
            <!--Jobs By Industry end -->

        </div>

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-12">
                        <div class="bttxt h5">

                            {{__('Copyright')}} &copy; <a href="https://eladrousi.net/">{{date('Y')}}
                                {{ $siteSetting->site_name }}</a>.
                            {{__('All Rights Reserved')}}.
                            {{-- __('Design by')}}: <a href="{{url('/')}}http://graphicriver.net/user/ecreativesol"
                                target="_blank">eCreativeSolutions</a> --}}
                        </div>
                    </div>
                    <div class="col-md-4 col-9">
                        <div class="paylogos"><img src="{{asset('/')}}images/payment.png" alt="" /></div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!--Copyright-->

</div>
<!--Footer end-->