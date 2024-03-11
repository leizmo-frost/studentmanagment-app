@extends('layout')

@section('content')

<div class="card">
<div class="card-header">Edit Page</div>
<div class="card-body">

    <form action="{{ url('batches/' . $batch->id) }}" method="post">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" value="{{ $batch->id }}">
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" value="{{ $batch->name }}" class="form-control"><br>
        <label for="course_id">Course Name</label><br>
        <input type="text" name="course_id" id="course_id" value="{{ $batch->course_id }}" class="form-control"><br>
        <label for="start_date">Start Date</label><br>
        <input type="text" name="start_date" id="start_date" value="{{ $batch->start_date }}" class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
    </form>

</div>
</div>

@stop
