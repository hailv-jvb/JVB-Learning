<div class="container">
    <form method="post" action="{{action('UserController@update', $user->id)}}">
        <div class="form-group row">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="name" name="name" value="{{$user->name}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="email" name="email" value="{{$user->email}}">
            </div>
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
        <div class="form-group row">
            <div class="col-md-2"></div>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>

    </form>
</div>