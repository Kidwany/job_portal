@extends('layouts.app')
@section('content')
<!-- Header start -->
@include('website.layouts.header')
<!-- Header end -->
<!-- Inner Page Title start -->
@include('includes.inner_page_title', ['page_title'=>__('Travel Agent Detail')])
<!-- Inner Page Title end -->
<div class="listpgWraper">
    <div class="container">
        @include('flash::message')
        <!-- Job Header start -->
        <div class="job-header">
            <div class="jobinfo">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <!-- Candidate Info -->
                        <div class="candidateinfo">
                            <div class="userPic"><a
                                    href="{{route('travel.agent.detail',$travel_agent->slug)}}">{{$travel_agent->printTravelAgentImage()}}</a>
                            </div>
                            <div class="title">{{$travel_agent->name}}</div>
                            <div class="desi">{{$travel_agent->getIndustry('industry')}}</div>
                            <div class="loctext"><i class="fa fa-history" aria-hidden="true"></i>
                                {{__('Member Since')}}, {{$travel_agent->created_at->format('M d, Y')}}</div>
                            <div class="loctext"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                {{$travel_agent->location}}</div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <!-- Candidate Contact -->
                        @if(!Auth::user() && !Auth::guard('travel_agent')->user())
                        <h5>Login to View contact details</h5>
                        <a href="{{route('login')}}" class="btn btn-amber">Login</a>
                        @else
                        <div class="candidateinfo">
                            @if(!empty($travel_agent->phone))
                            <div class="loctext"><i class="fa fa-phone" aria-hidden="true"></i> <a
                                    href="tel:{{$travel_agent->phone}}">{{$travel_agent->phone}}</a></div>
                            @endif
                            @if(!empty($travel_agent->email))
                            <div class="loctext"><i class="fa fa-envelope" aria-hidden="true"></i> <a
                                    href="mailto:{{$travel_agent->email}}">{{$travel_agent->email}}</a></div>
                            @endif
                            @if(!empty($travel_agent->website))
                            <div class="loctext"><i class="fa fa-globe" aria-hidden="true"></i> <a
                                    href="{{$travel_agent->website}}" target="_blank">{{$travel_agent->website}}</a>
                            </div>
                            @endif
                            <div class="cadsocial"> {!!$travel_agent->getSocialNetworkHtml()!!} </div>
                        </div>
                        @endif

                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="jobButtons">
                {{--
                <a href="{{route('report.abuse.travel.agent', $travel_agent->slug)}}" class="btn report"><i
                    class="fa fa-exclamation-triangle" aria-hidden="true"></i> {{__('Report Abuse')}}</a>
                --}}
                <a href="javascript:;" onclick="send_message()" class="btn btn-amber"><i class="fa fa-envelope"
                        aria-hidden="true"></i> {{__('Send Message')}}</a> </div>
        </div>

        <!-- Job Detail start -->
        <div class="row">
            <div class="col-md-8">
                <!-- About Employee start -->
                <div class="job-header">
                    <div class="contentbox">
                        <h3>{{__('About Travel Agent')}}</h3>
                        <p>{!! $travel_agent->description !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Travel Agent Detail start -->
                <div class="job-header">
                    <div class="jobdetail">
                        <h3>{{__('Travel Agent Detail')}}</h3>
                        <ul class="jbdetail">
                            <li class="row">
                                <div class="col-md-8 col-xs-8">{{__('Is Email Verified')}}</div>
                                <div class="col-md-4 col-xs-4">
                                    <span>{{((bool)$travel_agent->verified)? 'Yes':'No'}}</span>
                                </div>
                            </li>
                            <li class="row">
                                <div class="col-md-8 col-xs-8">{{__('Total Employees')}}</div>
                                <div class="col-md-4 col-xs-4"><span>{{$travel_agent->no_of_employees}}</span></div>
                            </li>
                            <li class="row">
                                <div class="col-md-8 col-xs-8">{{__('Established In')}}</div>
                                <div class="col-md-4 col-xs-4"><span>{{$travel_agent->established_in}}</span></div>
                            </li>
                        </ul>
                    </div>
                </div>

                @if(!empty($travel_agent->map))
                <!-- Google Map start -->
                <div class="job-header">
                    <div class="jobdetail">{!!$travel_agent->map!!}</div>
                </div>
                @endif

            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="sendmessage" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <form action="" id="send-form">
                @csrf
                <input type="hidden" name="company_id" id="company_id" value="{{$travel_agent->id}}">
                <div class="modal-header">
                    <h4 class="modal-title">{{__('Send Message')}}</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <textarea class="form-control" name="message" id="message" cols="10" rows="7"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-elegant" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
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
    $(document).ready(function() {
    $(document).on('click', '#send_travel_agent_message', function() {
        var postData = $('#send-travel-agent-message-form').serialize();
        $.ajax({
            type: 'POST',
            url: "{{ route('contact.travel.agent.message.send') }}",
            data: postData,
            //dataType: 'json',
            success: function(data) {
                response = JSON.parse(data);
                var res = response.success;
                if (res == 'success') {
                    var errorString = '<div role="alert" class="alert alert-success">' +
                        response.message + '</div>';
                    $('#alert_messages').html(errorString);
                    $('#send-travel-agent-message-form').hide('slow');
                    $(document).scrollTo('.alert', 2000);
                } else {
                    var errorString = '<div class="alert alert-danger" role="alert"><ul>';
                    response = JSON.parse(data);
                    $.each(response, function(index, value) {
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

function send_message() {
    const el = document.createElement('div')
    el.innerHTML =
        "{{__('Please')}} <a class='btn Register' href='{{route('login')}}' onclick='set_session()'>{{__('Login')}}</a> {{__('as a Candidate and try again')}}."
    @if(Auth::check())
    $('#sendmessage').modal('show');
    @else
    swal({
        title: "{{__('You are not Logged in')}}",
        content: el,
        icon: "warning",
        button: "OK",
    });
    @endif
}
if ($("#send-form").length > 0) {
    $("#send-form").validate({
        validateHiddenInputs: true,
        ignore: "",

        rules: {
            message: {
                required: true,
                maxlength: 5000
            },
        },
        messages: {

            message: {
                required: "Message is required",
            }

        },
        submitHandler: function(form) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            @if(null !== (Auth::user()))
            $.ajax({
                url: "{{route('submit-message')}}",
                type: "POST",
                data: $('#send-form').serialize(),
                success: function(response) {
                    $("#send-form").trigger("reset");
                    $('#sendmessage').modal('hide');
                    swal({
                        title: "Success",
                        text: response["msg"],
                        icon: "success",
                        button: "OK",
                    });
                }
            });
            @endif
        }
    })
}
</script>
@endpush