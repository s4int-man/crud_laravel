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
                    @if(Auth::user()->role == "admin")
                    <a class="btn btn-primary" href="{{route('articles.create')}}">Create Article</a>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <th>Title</th>
                            <th>Small text</th>
                            @if(Auth::user()->role == "admin")
                                <th class="text-right">Action</th>
                            @endif
                        </thead>
                        <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td><a href="{{route('articles.show', $article)}}">{{$article->title}}</a></td>
                                <td>{{$article->small_body}}</td>
                                @if(Auth::user()->role == "admin")
                                    <td><a href="{{route('articles.edit', $article)}}">Edit</a></td>
                                @endif
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
