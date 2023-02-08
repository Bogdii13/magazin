@extends('layouts.app')
@section('content')
    <div class="bg-light p-4 rounded">
        <h1>Users</h1>
        <div class="lead">
            Manage your users here.
            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right">Add new user</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col" width="1%">#</th>
                <th scope="col" width="15%">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col" width="10%">Action</th>
                <th scope="col" width="1%" colspan="3"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-warning btnsm">Show</a></td>
                    <td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btnsm">Edit</a></td>
                    <td>
    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex">
            {!! $users->links() !!}
        </div>
    </div>
@endsection
