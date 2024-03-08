@extends('layout')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Payments</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('/payments/create') }}" class="btn btn-success btn-sm" title="Add New payment">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
        <br>
        <br>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Enrollment No</th>
                        <th>Paid Date</th>
                        <th>Amount</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->enrollment->enroll_no }}</td>
                        <td>{{ $item->paid_date }}</td>
                        <td>{{ $item->amount }}</td>
                        <td>
                            <a href="{{ url('/payments/' . $item->id) }}" title="View Payment" class="btn btn-info btn-sm">
                                <i class="fa fa-eye" aria-hidden="true"></i> View
                            </a>
                            <a href="{{ url('/payments/' . $item->id . '/edit') }}" title="Edit Payment" class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </a>
                            <form method="POST" action="{{ url('/payments/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Payment" onclick="return confirm('Confirm delete?')">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                </button>
                            </form>
                            <a href="{{ url('/report/report1/' . $item->id) }}" title="Edit payment"><button class="btn btn-success">
                                <i class="fa fa-print" aria-hidden=true></i>Print</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
