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
        <p>{{session('create')}}</p>
    </div>
@endif

@if(Session::has('update'))
    <div class="alert alert-success w-100" >
        <p>{{session('update')}}</p>
    </div>
@endif


@if(Session::has('delete'))
    <div class="alert alert-success w-100">
        <p>{{session('delete')}}</p>
    </div>
@endif


@if(Session::has('exception'))
    <div class="alert alert-danger w-100" style="background-color: #f66e84">
        <p>{{session('exception')}}</p>
    </div>
@endif
