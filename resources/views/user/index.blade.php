
<div class="pull-right">
    <a class="btn btn-success" href="{{ route('user.create') }}"> Create </a>
</div>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name}}</td>
            <td>{{ $user->email}}</td>
            <td>
                <a href="{!! action('UserController@edit', $user->id) !!}" class="btn btn-block btn-primary btn-sm">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['user.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </tr>
    @endforeach
</table>