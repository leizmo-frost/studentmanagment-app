@extends('layout')
@section('content')


<div class="card">
  <div class="card-header">Teachers Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $Teachers->name }}</h5>
        <p class="card-text">Address : {{ $Teachers->address }}</p>
        <p class="card-text">Mobile : {{ $Teachers->mobile }}</p>
  </div>

    </hr>

  </div>
</div>
@endsection
