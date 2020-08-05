@if(count($errors) > 0)
    <div class="w-100">
        <div class="alert alert-danger" style="background-color: #f66e84">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif


@if(Session::has('create'))
    <div class="alert alert-success w-100">
        <h6>{{session('create')}}</h6>
    </div>
@endif

@if(Session::has('update'))
    <div class="alert alert-success w-100" >
        <h6>{{session('update')}}</h6>
    </div>
@endif


@if(Session::has('delete'))
    <div class="alert alert-success w-100">
        <h6>{{session('delete')}}</h6>
    </div>
@endif


@if(Session::has('exception'))
    <div class="alert alert-danger w-100" style="background-color: #f66e84">
        <h6>{{session('exception')}}</h6>
    </div>
@endif
