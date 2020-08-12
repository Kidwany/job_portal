
<div class="eladrousi-main-content">
    <div class="eladrousi-main-section eladrousi-plain-services-full">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="eladrousi-fancy-title">
                        <h2>What We Have</h2>
                        <p>A better career is out there. We'll help you find it to use.</p>
                    </section>
                    <div class="eladrousi-plain-services">
                        <ul class="row">
                            <li class="col-md-4">
                                <i class="eladrousi-icon eladrousi-curriculum"></i>
                                <h2>CV Search</h2>
                                <p>Amet, consectetur adipiscing elit. Sed eu ante eget nisl convallis tempus. Phasellus ante lectus,
                                    tincidunt tincidunt dui a, rhoncus interdum est.</p>
                            </li>
                            <li class="col-md-4">
                                <i class="eladrousi-icon eladrousi-building"></i>
                                <h2>Recruiter Profiles</h2>
                                <p>Adipiscing elit sed eu ante eget nisl convallis tempus. Phasellus ante lectus, tincidunt
                                    tincidunt dui a, rhoncus interdum est.</p>
                            </li>
                            <li class="col-md-4">
                                <i class="eladrousi-icon eladrousi-briefcase-1"></i>
                                <h2>Advertise a Job</h2>
                                <p>Sit amet consectetur adipiscing elit. Sed eu ante eget nisl convallis tempus. Phasellus ante
                                    lectus, tincidunt tincidunt dui a, rhoncus interdum est.</p>
                            </li>
                            <li class="col-md-4">
                                <i class="eladrousi-icon eladrousi-office2"></i>
                                <h2>For Agencies</h2>
                                <p>Over the coming years Ismail worked with a number of remittance businesses as well as
                                    international policy makers.</p>
                            </li>
                            <li class="col-md-4">
                                <i class="eladrousi-icon eladrousi-handshake"></i>
                                <h2>Display jobs</h2>
                                <p>And because we understand the importance of staying connected, Nimble enables people to send
                                    mobile airtime top-ups.</p>
                            </li>
                            <li class="col-md-4">
                                <i class="eladrousi-icon eladrousi-search-1"></i>
                                <h2>Temp Search</h2>
                                <p>Millions of us now rely on Mobile Money services instead of bank accounts, so we offer transfers
                                    directly to them.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="eladrousi-main-section eladrousi-packages-priceplane-full">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="eladrousi-fancy-title">
                        <h2>Plans that grow with your business</h2>
                        <p>A better career is out there. We'll help you find it to use.</p>
                    </section>
                </div>
                @foreach($packages as $package)
                    <div class="col-md-4">
                        <div class="eladrousi-packages-priceplane active">
                            <h2>{{$package->package_title}}</h2>
                            <div class="packages-priceplane-price">
                                <strong><small>{{ $siteSetting->default_currency_code }}</small>{{$package->package_price}}</strong>
                                <span>Per month</span>
                            </div>
                            <ul>
                                <li><i class="eladrousi-icon eladrousi-check-square"></i> {{__('Can post jobs')}} : {{$package->package_num_listings}}</li>
                                <li><i class="eladrousi-icon eladrousi-check-square"></i> {{__('Package Duration')}} : {{$package->package_num_days}} {{__('Days')}}</li>
                                {{--<li><i class="eladrousi-icon eladrousi-check-square"></i> Job displayed for 20 days</li>
                                <li><i class="eladrousi-icon eladrousi-check-square"></i> Premium Support 24/7</li>--}}
                            </ul>
                            @if($package->package_price > 0)
                                @if((bool)$siteSetting->is_paypal_active)
                                    <p>
                                        <a href="{{route('order.package', $package->id)}}"><i class="fa fa-cc-paypal" aria-hidden="true"></i> {{__('pay with paypal')}}</a>
                                    </p>
                                @endif
                                @if((bool)$siteSetting->is_stripe_active)
                                    <a href="{{route('stripe.order.form', [$package->id, 'new'])}}"><i class="fa fa-cc-stripe" aria-hidden="true"></i> Pay with Credit Card</a>
                                @endif

                            @else
                                <a href="{{route('order.free.package', $package->id)}}" class="eladrousi-packages-priceplane-btn">Subscribe</a>
                            @endif

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="eladrousi-main-section eladrousi-partner-slider-full">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <section class="eladrousi-fancy-title">
                        <h2>Find the one that’s right for you.</h2>
                        <p>A better career is out there. We'll help you find it to use.</p>
                    </section>
                    <div class="eladrousi-partner-slider">
                        <div class="eladrousi-partner-slider-layer"><a href="#"><img src="{{asset('assets/images/partner-logo-1.png')}}"
                                                                                     alt=""></a></div>
                        <div class="eladrousi-partner-slider-layer"><a href="#"><img src="{{asset('assets/images/partner-logo-2.png')}}"
                                                                                     alt=""></a></div>
                        <div class="eladrousi-partner-slider-layer"><a href="#"><img src="{{asset('assets/images/partner-logo-3.png')}}"
                                                                                     alt=""></a></div>
                        <div class="eladrousi-partner-slider-layer"><a href="#"><img src="{{asset('assets/images/partner-logo-4.png')}}"
                                                                                     alt=""></a></div>
                        <div class="eladrousi-partner-slider-layer"><a href="#"><img src="{{asset('assets/images/partner-logo-5.png')}}"
                                                                                     alt=""></a></div>
                        <div class="eladrousi-partner-slider-layer"><a href="#"><img src="{{asset('assets/images/partner-logo-6.png')}}"
                                                                                     alt=""></a></div>
                        <div class="eladrousi-partner-slider-layer"><a href="#"><img src="{{asset('assets/images/partner-logo-3.png')}}"
                                                                                     alt=""></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>