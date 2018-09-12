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

                    @foreach($articles as $article)
                            <p><a href="/home/articles/{{$article->id}}">{{$article->title}} - {{$article->small_body}}</a></p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
