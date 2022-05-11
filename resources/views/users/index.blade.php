@extends('app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Users Management</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Roles</th>
            @hasanyrole('Super-Admin|admin')
            <th width="280px">Action</th>
            @endhasanyrole
        </tr>
        @foreach ($users as $key => $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if (!empty($user->getRoleNames()))
                        @foreach ($user->getRoleNames() as $v)
                            <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                    @endif
                </td>
                @hasanyrole('Super-Admin|admin')
                <td>
                    <a class="btn btn-info" href="{{ route('users.show', $user->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Edit</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                      <button type="submit" name="destroy" class="btn btn-primary">Delete</button></form>
                    </td>
                    @endhasanyrole
                {{-- @endcan --}}

            </tr>
        @endforeach
    </table>
@endsection
