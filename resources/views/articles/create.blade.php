@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Article</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal" method="POST" action="{{route('articles.store')}}">
                        {{ csrf_field() }}
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title Article" value="" required>
                        <br>

                        <label for="">Small Body</label>
                        <textarea type="text" class="form-control" name="small_body" placeholder="Small Body Article" required></textarea>
                        <br>

                        <label for="">Body</label>
                        <textarea class="form-control" name="body" placeholder="Body Article" required></textarea>
                        <br>

                        <input class="btn btn-primary" type="submit" value="Create">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
