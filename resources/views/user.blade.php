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

                        <h3>Name: {{$user->name}}</h3>
                        <h3>E-mail: {{$user->email}}</h3>
                        <h3>Role: {{$user->role}}</h3>
                        <button class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
