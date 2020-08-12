@if($packages->count())

    <div class="eladrousi-main-section eladrousi-additional-priceplane-full">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <section class="eladrousi-fancy-title">
                        <h2>Buy Additional Job Packages</h2>
                        <p>30 Day Money Back Guarantee. 100% satisfied or your money back. Neque porro quisquam est, qui
                            dolorem.</p>
                    </section>
                </div>
                @foreach($packages as $package)
                    <div class="col-md-4">
                        <div class="eladrousi-additional-priceplane">
                            <h2>{{$package->package_title}}</h2>
                            <span><strong>$</strong>{{$package->package_price}} <small>Per month</small></span>
                            <ul>
                                <li>{{__('Can post jobs')}} : {{$package->package_num_listings}}</li>
                                <li>{{__('Package Duration')}} : {{$package->package_num_days}} {{__('Days')}}</li>
                                {{--<li>Job displayed for 20 days</li>
                                <li>Premium Support 24/7</li>--}}
                            </ul>
                            <div class="clearfix"></div>
                            @if((bool)$siteSetting->is_paypal_active)
                                <p>
                                    <a href="{{route('order.upgrade.package', $package->id)}}"><i class="fa fa-cc-paypal" aria-hidden="true"></i> {{__('pay with paypal')}}</a>
                                </p>
                            @endif
                            @if((bool)$siteSetting->is_stripe_active)
                                <a href="{{route('stripe.order.form', [$package->id, 'upgrade'])}}" class="eladrousi-additional-priceplane-btn">
                                    <i class="fa fa-cc-stripe" aria-hidden="true"></i>
                                    Pay with Credit Card
                                </a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



{{--<div class="paypackages">
    <!---four-paln-->
    <div class="four-plan">
        <h3>{{__('Upgrade Package')}}</h3>
        <div class="row"> @foreach($packages as $package)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="boxes">
                    <li class="plan-name">{{$package->package_title}}</li>
                    <li>
                        <div class="main-plan">
                            <div class="plan-price1-1">$</div>
                            <div class="plan-price1-2">{{$package->package_price}}</div>
                            <div class="clearfix"></div>
                        </div>
                    </li>
                    <li class="plan-pages">{{__('Can post jobs')}} : {{$package->package_num_listings}}</li>
                    <li class="plan-pages">{{__('Package Duration')}} : {{$package->package_num_days}} {{__('Days')}}</li>
                    @if((bool)$siteSetting->is_paypal_active)
                        <p>
                            <a href="{{route('order.upgrade.package', $package->id)}}"><i class="fa fa-cc-paypal" aria-hidden="true"></i> {{__('pay with paypal')}}</a>
                        </p>
                    @endif
                    @if((bool)$siteSetting->is_stripe_active)
                        <a href="{{route('stripe.order.form', [$package->id, 'upgrade'])}}"><i class="fa fa-cc-stripe" aria-hidden="true"></i> Pay with Credit Card</a>
                    @endif
                </ul>
            </div>
            @endforeach </div>
    </div>
    <!---end four-paln--> 
</div>--}}
@endif



