@extends('layouts.app')

@section('content')

<div class="card">
<div class="card-header">Edit Page</div>
<div class="card-body">

    <form action="{{ url('payments/' . $payment->id) }}" method="post">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" value="{{ $payment->id }}">
        <label for="enrollment_id">Enrollment_No</label><br>
        <select name="enrollment_id" id="enrollment_id" class="form-control">
        @foreach($payments as $id => $enroll_no)
            <option value="{{ $id }}">{{ $enroll_no }}</option>
        @endforeach
        </select><br>
        <label for="paid_date">Paid Date</label><br>
        <input type="text" name="paid_date" id="paid_date" value="{{ $payment->paid_date }}" class="form-control"><br>
        <label for="amount">Amount</label><br>
        <input type="text" name="amount" id="amount" value="{{ $payment->amount }}" class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
    </form>

</div>
</div>

@stop
