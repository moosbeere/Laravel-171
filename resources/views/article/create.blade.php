@extends('layout')
@section('content')
<form action="/article" method="post">
  @csrf
  <div class="form-group">
    <label for="date">Date</label>
    <input type="date" class="form-control" id="date" name="date">
  </div>
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="shortDesc">Shortdesc</label>
    <input type="text" class="form-control" id="shortDesc" name="shortDesc">
  </div>
  <div class="form-group">
    <label for="text">Text</label>
    <textarea name="text" id="text" cols="30" rows="10" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection