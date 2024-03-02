@extends('layout')

@section('content')

<div class="card">
  <div class="card-header">Edit Student</div>
  <div class="card-body">
    <form action="{{ url('students/' . $student->id) }}" method="post">
      {!! csrf_field() !!}
      @method("PATCH")
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $student->name }}" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="{{ $student->address }}" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="mobile">Mobile</label>
        <input type="text" name="mobile" id="mobile" value="{{ $student->mobile }}" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-success">Update</button>
    </form>
  </div>
</div>

@stop
