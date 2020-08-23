<ul class="row profilestat">

    <li class="col-md-4 col-6">
        <div class="inbox"> <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <h6><a href="{{route('travel.agent.messages')}}">{{Auth::guard('travel_agent')->user()->countCompanyMessages()}}</a></h6>
            <strong>{{__('Messages')}}</strong> 
        </div>
    </li>
</ul>