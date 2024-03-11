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
        <label for="school_id">School Id</label>
        <input type="text" name="school_id" id="school_id" value="{{ $student->school_id }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="{{ $student->address }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="mobile">Mobile</label>
        <input type="text" name="mobile" id="mobile" value="{{ $student->mobile }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="course">Course</label>
        <input type="text" name="course" id="course" value="{{ $student->course }}" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="class">Class</label>
        <input type="text" name="class" id="class" value="{{ $student->class }}" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
</div>

@stop
