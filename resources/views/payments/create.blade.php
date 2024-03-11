@extends('layout')

@section('content')

<div class="card">
<div class="card-header">Payment Page</div>
<div class="card-body">
    <form action="{{ url('payments') }}" method="post">
    @csrf
    <label for="enrollment_id">Enrollment_No</label><br>
    <select name="enrollment_id" id="enrollment_id" class="form-control">
        @foreach($payments as $id => $enroll_no)
        <option value="{{ $id }}">{{ $enroll_no }}</option>
        @endforeach
    </select><br>

    <label for="paid_date">Paid Date</label><br>
    <input type="date" name="paid_date" id="paid_date" class="form-control"><br>

    <label for="amount">Amount</label><br>
    <input type="text" name="amount" id="amount" class="form-control"><br>

    <input type="submit" value="Save" class="btn btn-success"><br>
    </form>
</div>
</div>

@stop
