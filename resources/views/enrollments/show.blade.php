@extends('layouts.app')

@section('content')

<div class="card">
<div class="card-header bg-primary text-white">Enrollment Details</div>
<div class="card-body">
    <div class="card-body">
    <h5 class="card-title">Enroll No: <span class="text-muted">{{$enrollments->enroll_no }}</span></h5>
    <p class="card-text">Batch ID: <span class="text-muted">{{ $enrollments->batch_id }}</span></p>
    <p class="card-text">Student ID: <span class="text-muted">{{ $enrollments->student_id }}</span></p>
    <p class="card-text">Join Date: <span class="text-muted">{{ $enrollments->join_date }}</span></p>
    <p class="card-text">Fee: <span class="text-muted">{{ $enrollments->fee }}</span></p>
    </div>
</div>
</div>

@endsection
