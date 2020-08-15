@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('website.layouts.header')
<!-- Header end -->
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title' => __('Travel Agents')])
<!-- Inner Page Title end -->

<div class="pageSearch">
    <div class="container">
        <section id="joblisting-header" role="search" class="searchform">
            <form id="top-search" method="GET" action="{{route('travel.agent.listing')}}">

                <div class="row">
                    <div class="col-12 col-lg-3 col-md-6">
                        <input type="text" name="search" value="{{Request::get('search', '')}}"
                            class="form-control search" placeholder="{{__('keywords e.g. "Google"')}}" />
                    </div>
                    <div class="col-12 col-lg-3 col-md-6">
                        {!! Form::select('country_id[]', ['' => __('Select Country')] + $countries,
                        Request::get('country_id', $siteSetting->default_country_id),
                        array('class' => 'form-control', 'id' => 'country_id')) !!}
                    </div>

                    <div class="col-12 col-lg-3 col-md-6">
                        <span id="state_dd">
                            {!! Form::select('state_id[]', ['' => __('Select State')], Request::get('state_id', null),
                            array('class'=>'form-control', 'id'=>'state_id')) !!}
                        </span>
                    </div>

                    <div class="col-12 col-lg-3 col-md-6">
                        <button type="submit" id="submit-form-top" class="btn btn-amber">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            {{__('Search Travel Agent')}}
                        </button>
                    </div>

                </div>
            </form>
        </section>
    </div>
</div>

<div class="listpgWraper">
    <div class="container">
        <ul class="row compnaieslist">
            @if($travel_agents)
            @foreach($travel_agents as $travel_agent)
            <li class="col-12 col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="compint">
                    <div class="imgwrap">
                        <a href="{{route('travel.agent.detail',$travel_agent->slug)}}">
                            {{$travel_agent->printTravelAgentImage()}}
                        </a>
                    </div>
                    <a class="h3" href="{{route('travel.agent.detail', $travel_agent->slug)}}">
                        {{$travel_agent->name}}
                    </a>
                    <div class="loctext">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        {{$travel_agent->location}}
                    </div>

                </div>
            </li>
            @endforeach
            @endif
        </ul>

        <div class="pagiWrap">
            <div class="row">
                <div class="col-md-5">
                    <div class="showreslt">
                        {{__('Showing Pages')}} : {{ $travel_agents->firstItem() }} - {{ $travel_agents->lastItem() }}
                        {{__('Total')}} {{ $travel_agents->total() }}
                    </div>
                </div>
                <div class="col-md-7 text-right">
                    @if(isset($travel_agents) && count($travel_agents))
                    {{ $travel_agents->appends(request()->query())->links() }}
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>

@include('website.layouts.footer')
@endsection
@push('styles')
<style type="text/css">
    .formrow iframe {
        height: 78px;
    }
</style>
@endpush
@push('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $(document).on('click', '#send_travel_agent_message', function () {
            var postData = $('#send-travel-agent-message-form').serialize();
            $.ajax({
                type: 'POST',
                url: "{{ route('contact.travel.agent.message.send') }}",
                data: postData,
                //dataType: 'json',
                success: function (data) {
                    response = JSON.parse(data);
                    var res = response.success;
                    if (res == 'success')
                    {
                        var errorString = '<div role="alert" class="alert alert-success">' + response.message + '</div>';
                        $('#alert_messages').html(errorString);
                        $('#send-travel-agent-message-form').hide('slow');
                        $(document).scrollTo('.alert', 2000);
                    } else {
                        var errorString = '<div class="alert alert-danger" role="alert"><ul>';
                        response = JSON.parse(data);
                        $.each(response, function (index, value) {
                            errorString += '<li>' + value + '</li>';
                        });
                        errorString += '</ul></div>';
                        $('#alert_messages').html(errorString);
                        $(document).scrollTo('.alert', 2000);
                    }
                },
            });
        });
    });
    $(document).ready(function ($) {
        $("form").submit(function () {
            $(this).find(":input").filter(function () {
                return !this.value;
            }).attr("disabled", "disabled");
            return true;
        });
        $("form").find(":input").prop("disabled", false);
    });
</script>
@include('includes.country_state_city_js')
@endpush
