@extends('layout')
@section('content')

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>
                {{$error}}
            </li>
            @endforeach
        </ul>
    </div>
    @endif

<form action="/article/{{$article->id}}" method="post">
    @csrf
    @method("PUT")
    <div class="form-group">
        <label for="exampleInputDate">Date public</label>
        <input type="date" class="form-control" id="exampleInputDate" name="date" value="{{$article->date}}">
  </div>
  <div class="form-group">
    <label for="exampleInputTitle">Title</label>
    <input type="text" class="form-control" id="exampleInputTitle" name="name" value="{{$article->name}}">
  </div>
  <div class="form-group">
    <label for="exampleInput>Description">Description</label>
    <input type="desc" class="form-control" id="exampleInputDescription" name="desc" value="{{$article->desc}}">
  </div>
  <button type="submit" class="btn btn-primary">Update article</button>
</form>
@endsection