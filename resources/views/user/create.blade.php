<div class="row">

    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New User</h2>
        </div>
        @if(count($errors) >0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                    {{$err}}<br>
                    @endforeach
            </div>
            @endif
        @if(session('mess'))
            <div class="alert alert-success">
                {{session('mess')}}
            </div>
            @endif
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ action('UserController@index') }}"> Back</a>
{{--            <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>--}}
        </div>
    </div>
</div>
<form class="form-horizontal"
    action="{!! action('UserController@store') !!}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <input type="hidden" value="{{csrf_token()}}" name="_token" />
    <div class="form-group">
        <label for="name"> Name </label>
        <input type="text" class="form-control" name="name"/>
    </div>
    <div class="form-group">
        <label for="email"> Email </label>
        <input type="email" class="form-control" name="email"/>
    </div>

    <div class="form-group">
        <label for="email"> Password </label>
        <input type="password" class="form-control" name="password"/>
    </div>
    {{--<div class="form-group">--}}
        {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

        {{--<div class="col-md-6">--}}
            {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="form-group">
        <label for="tel"> Telephone </label>
        <input type="text" class="form-control" name="tel"/>
    </div>
    <div class="form-group">
        <label for="birthday"> Birthday </label>
        <input type="date" class="form-control" name="birthday"/>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </div>
    </div>

</form>