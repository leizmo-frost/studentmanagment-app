@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Edit Teacher</div>
  <div class="card-body">
    <form action="{{ url('teachers/' .$teacher->id) }}" method="post">
      @csrf
      @method("PATCH")
      <input type="hidden" name="id" value="{{ $teacher->id }}" />
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $teacher->name }}" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" name="address" id="address" value="{{ $teacher->address }}" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="tel" name="mobile" id="mobile" value="{{ $teacher->mobile }}" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-success">Update</button>
    </form>
  </div>
</div>

@stop
