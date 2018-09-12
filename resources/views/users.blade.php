@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Articles</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($users as $user)
                            <p><a href="/home/users/{{$user->id}}">{{$user->id}} - {{$user->email}}</a></p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
