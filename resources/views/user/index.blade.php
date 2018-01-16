
    {{--<a href="" class="dropdown-toggle" data-toggle="dropdown"> TTT <b class="caret"></b></a>--}}
    <ul class="dropdown-menu">
        <li><a href="{{url('testlogout')}}"> Logout </a></li>
    </ul>

<div class="pull-right">
    {{--<a class="btn btn-success" href="{{ route('user.create') }}"> Create </a>--}}
    <a class="btn btn-success" href="{{ action('UserController@create') }}"> Create </a>
</div>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Birthday</th>
        <th>Action</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name}}</td>
            <td>{{ $user->email}}</td>
            <td>{{ $user->tel}}</td>
            <td>{{ $user->birthday}}</td>
            <td>
                <a href="{!! action('UserController@edit', $user->id) !!}" class="btn btn-block btn-primary btn-sm">Edit</a>
{{--            {!! Form::open(['method' => 'DELETE','route' => ['user.destroy', $user->id],'style'=>'display:inline']) !!}--}}
            {!! Form::open(['method' => 'DELETE','action' => ['UserController@destroy',$user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            </td>
        </tr>
    @endforeach

</table>