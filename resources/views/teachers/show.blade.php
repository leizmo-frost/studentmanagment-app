@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Teachers Page</div>
  <div class="card-body">
    <div class="card-body">
      <h5 class="card-title">Name : {{ $teachers->name }}</h5>
      <p class="card-text">Mobile : {{ $teachers->national_id }}</p>
      <p class="card-text">Address : {{ $teachers->address }}</p>
      <p class="card-text">Mobile : {{ $teachers->mobile }}</p>
      <p class="card-text">Mobile : {{ $teachers->subject }}</p>
      <p class="card-text">Mobile : {{ $teachers->position }}</p>
    </div>
    <hr> <!-- corrected hr tag -->
  </div>
</div>

@endsection
