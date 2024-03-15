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

<form action="/article" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputDate">Date public</label>
        <input type="date" class="form-control" id="exampleInputDate" name="date">
  </div>
  <div class="form-group">
    <label for="exampleInputTitle">Title</label>
    <input type="text" class="form-control" id="exampleInputTitle" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInput>Description">Description</label>
    <input type="desc" class="form-control" id="exampleInputDescription" name="desc">
  </div>
  <button type="submit" class="btn btn-primary">Create article</button>
</form>
@endsection