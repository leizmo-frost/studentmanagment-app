@extends('layouts.app')

@section('content')

<div class="card">
<div class="card-header">Add New Student</div>
<div class="card-body">
    <form action="{{ url('students') }}" method="post">
    {!! csrf_field() !!}
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="school_id">School Id</label>
        <input type="text" name="school_id" id="school_id" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="mobile">Mobile</label>
        <input type="text" name="mobile" id="mobile" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="course">Course</label>
        <input type="text" name="course" id="course" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="class">Class</label>
        <input type="text" name="class" id="class" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
</div>

@stop
