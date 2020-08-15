<div class="myPage europe-page">
    <div class="header-breadcrumb">
        <div class="page-title mfa-container">
            {{$page_title}}
        </div>
        <div class="breadcrumb-wrapper">
            <div class="mfa-container">
                <ul class="breadcrumb-ul">
                    <li class="breadcrumb-li">
                        <a href="{{url('/')}}">
                            {{__('Home')}}
                        </a>
                    </li>
                    <li class="breadcrumb-li active-breadcrumb">
                        {{$page_title}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>




{{--
<div class="pageTitle">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <h1 class="page-heading">{{$page_title}}</h1>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="breadCrumb"><a href="{{route('index')}}">{{__('Home')}}</a> / <span>{{$page_title}}</span></div>
            </div>
        </div>
    </div>
</div>--}}
