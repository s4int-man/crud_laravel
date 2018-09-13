@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a class="btn btn-primary" href="{{route('users.create')}}">Create User</a>
                    <table class="table table-striped">
                        <thead>
                            <th>Email</th>
                            <th>Name</th>
                            <th class="text-right">Action</th>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td><a href="{{route('users.show', $user)}}">{{$user->email}}</a></td>
                                <td>{{$user->name}}</td>
                                <td><a href="{{route('users.edit', $user)}}">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
