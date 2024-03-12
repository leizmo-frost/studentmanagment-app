@extends('layouts.app')
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
        <label for="national_id">National Id:</label>
        <input type="text" name="national_id" id="national_id" value="{{ $teacher->national_id }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" name="address" id="address" value="{{ $teacher->address }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="tel" name="mobile" id="mobile" value="{{ $teacher->mobile }}" class="form-control" required>
    </div>
    < class="form-group">
        <label for="subject">Subject:</label>
        <input type="tel" name="subject" id="subject" value="{{ $teacher->subject }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="position">Position:</label>
        <input type="tel" name="position" id="position" value="{{ $teacher->position }}" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
</div>

@stop
