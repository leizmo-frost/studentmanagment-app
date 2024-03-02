@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Add Teacher</div>
  <div class="card-body">
    <form action="{{ url('teachers') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" name="address" id="address" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="tel" name="mobile" id="mobile" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-success">Save</button>
    </form>
  </div>
</div>

@stop
