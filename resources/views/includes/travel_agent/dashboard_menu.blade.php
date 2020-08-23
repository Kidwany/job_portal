<div class="col-md-3 col-sm-4">
    <div class="usernavwrap">
        <ul class="usernavdash">
            <li class="active"><a href="{{route('travel.agent.home')}}"><i class="fa fa-tachometer" aria-hidden="true"></i>
                    {{__('Dashboard')}}</a></li>
            <li><a href="{{ route('travel.agent.profile') }}"><i class="fa fa-pencil" aria-hidden="true"></i>
                    {{__('Edit Profile')}}</a></li>
            <li><a href="{{ route('travel.agent.detail', Auth::guard('travel_agent')->user()->slug) }}"><i class="fa fa-user"
                        aria-hidden="true"></i> Show Public Profile</a></li>

            <li><a href="{{route('travel.agent.messages')}}"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                    {{__('Travel Agent Messages')}}</a></li>
            
            <li><a href="{{ route('travel.agent.logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                        class="fa fa-sign-out" aria-hidden="true"></i> {{__('Logout')}}</a>
                <form id="logout-form" action="{{ route('travel.agent.logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">{!! $siteSetting->dashboard_page_ad !!}</div>
    </div>
</div>