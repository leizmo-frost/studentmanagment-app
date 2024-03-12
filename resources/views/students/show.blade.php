@extends('layouts.app')
@section('content')

<div class="card">
<div class="card-header">Student Details</div>
<div class="card-body">
    <h5 class="card-title">Name: {{ $student->name }}</h5>
    <p class="card-text">Mobile: {{ $student->school_id }}</p>
    <p class="card-text">Address: {{ $student->address }}</p>
    <p class="card-text">Mobile: {{ $student->mobile }}</p>
    <p class="card-text">Mobile: {{ $student->course }}</p>
    <p class="card-text">Mobile: {{ $student->class }}</p>
</div>
</div>

@endsection
