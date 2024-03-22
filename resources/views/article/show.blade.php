@extends('layout')
@section('content')
    <div class="card" style="width: 67rem;">
    <div class="card-body">
        <h5 class="card-title">{{$article->name}}</h5>
        <p class="card-text">{{$article->desc}}</p>
        <div class="btn-toolbar">
            <a href="/article/{{$article->id}}/edit" class="btn btn-primary mr-3">Edit article</a>
            <form action="/article/{{$article->id}}" method="post">
                @method("DELETE")
                @csrf
                <button type="submit" class="btn btn-warning">Delete article</button>
            </form>
        </div>
        
    </div>
    </div>
    <div class="card mt-2 mb-2">
    <div class="card-header text-center">
    <h4>Comments</h4>
            <form action="/comment" method="post">
                @csrf
                <input type="hidden" name="article_id" value="{{$article->id}}">
                <div class="form-group">
                    <label for="exampleInputTitle">Title</label>
                    <input type="text" class="form-control" id="exampleInputTitle" name="title">
                </div>
                <div class="form-group">
                    <label for="exampleInput>Description">Description</label>
                    <input type="text" class="form-control" id="exampleInputTitle" name="text">
                </div>
                <button type="submit" class="btn btn-primary">Create comment</button>
            </form>
    @foreach($comments as $comment)
    <div class="card mt-2" style="width: 67rem;">
    <div class="card-body">
        <h5 class="card-title">{{$comment->title}}</h5>
        <p class="card-text">{{$comment->text}}</p>
        @can('comment', $comment)
        <div class="btn-toolbar">
            <a href="/article/{{$article->id}}/edit" class="btn btn-primary mr-3">Edit article</a>
            <form action="/article/{{$article->id}}" method="post">
                @method("DELETE")
                @csrf
                <button type="submit" class="btn btn-warning">Delete article</button>
            </form>
        </div>
        @endcan
        
    </div>
    </div>
    @endforeach
    </div>
    </div>
    
@endsection