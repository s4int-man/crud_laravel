@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal" method="POST" action="{{route('users.update', $user)}}">
                        <input type="hidden" name="_method" value="put">
                        {{ csrf_field() }}
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email" value="{{$user->email}}" required>
                        <br>

                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{$user->name}}" required>
                        <br>

                        <label for="">Role</label>
                        <select class="form-control" name="role">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                        <br>

                        <input class="btn btn-primary" type="submit" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
