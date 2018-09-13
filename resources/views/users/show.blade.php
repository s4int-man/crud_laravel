@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$user->email}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <h1>{{$user->email}}</h1>
                        <h2>{{$user->name}}</h2>
                        <h5>{{$user->role}}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
