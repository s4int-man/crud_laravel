@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Article</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <h1>{{$article->title}}</h1>
                        @if ($article->image)
                            <img src="$article->image">
                        @endif
                        <h2>{{$article->small_body}}</h2>
                        <h5>{{$article->body}}</h5>
                        <button class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
