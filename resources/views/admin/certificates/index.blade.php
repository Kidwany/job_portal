@extends('admin.layouts.admin_layout')

@push('css')
<link rel="stylesheet" href="{{ asset('public/modules/blogs/css/blogs.css') }}">
<link href="{{ asset('css/bootstrap-multiselect.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('content')

<div class="content-wrapper">

    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            @if(session()->has('message.added'))

            <div class="alert alert-success fade in">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                {!! session('message.content') !!}
            </div>
            @endif
            @if(session()->has('message.updated'))
            <div class="alert alert-success fade in">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                {!! session('message.content') !!}
            </div>
            @endif
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN PAGE BAR -->
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="content-header">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-9">

                                    <h1>
                                        Manage Requests

                                    </h1>
                                </div>
                            </div>


                            <ul class="breadcrumb">
                                <li class="active"><a href="{{ URL::asset('/admin/list-certificate-requests')}}"><i
                                            class="fa fa-dashboard"></i> Manage
                                        Requests</a></li>
                                <li><a href="{{ URL::asset('/admin/list-certificate-requests')}}"><i class="fa fa-file-text-o"></i>
                                        Manage
                                        Requests</a></li>

                            </ul>

                        </div>


                    </section>


                    <section class="content">

                        <div class="panel-body">
                            <table class="table" id="blogTable">
                                <thead>
                                    <tr>

                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>address</th>
                                        <th>file</th>
                                        <th>Created at</th>
                                        {{--<th>Actions</th>--}}
                                    </tr>
                                    {{ csrf_field() }}
                                </thead>
                                <tbody>
                                    @foreach($requests as $request)
                                    <tr class="item{{$request->id}}">
                                        <td>{{$request->name}}</td>
                                        <td>{{$request->email}}</td>
                                        <td>{{$request->phone}}</td>
                                        <td>{{$request->address}}</td>
                                        <td><a class="text-success" download href="{{asset('certificate_files/' . $request->file)}}"><i class="fa fa-download"></i> download</a></td>
                                        <td>{{$request->created_at->diffForHumans()}}</td>
                                        {{--<td>
                                            <button id="popup" class="delete-modal btn btn-danger"
                                                onClick="delete_blog({{$request->id}});"><span class="fa fa-trash"></span>
                                                Delete</button>
                                        </td>--}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- /.panel-body -->
                    </section>
                </div>
            </div><!-- /.panel panel-default -->

            <!-- Modal form to add a form close -->




            @endsection



            @push('scripts')
            <script type="text/javascript" src="{{ asset('public/toastr/toastr.min.js') }}"></script>
            <script src="{{ asset('js/bootstrap-multiselect.js') }}"></script>
            <script src="{{ asset('modules/blogs/js/blogs.js') }}"></script>

            @endpush