@extends('layout')

@section('content')

<div class="card">
  <div class="card-header">Courses Page</div>
  <div class="card-body">

    <div class="card-body">
      <h5 class="card-title">Name: {{ $course->name }}</h5>
      <p class="card-text">Syllabus: {{ $course->syllabus }}</p>
      <p class="card-text">Duration: {{ $course->duration }}</p>
    </div>

  </div>
</div>

@endsection
