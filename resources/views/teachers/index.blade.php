@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Teacher Application</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('/teachers/create') }}" class="btn btn-primary btn-sm" title="Add New Teacher">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <br/>
            <br/>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>National Id</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Position</th>
                            <th>Subject</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($teachers as $teacher)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->national_id }}</td>
                            <td>{{ $teacher->address }}</td>
                            <td>{{ $teacher->mobile }}</td>
                            <td>{{ $teacher->subject }}</td>
                            <td>{{ $teacher->position }}</td>
                            <td>
                                <a href="{{ url('/teachers/' . $teacher->id) }}" title="View Teacher">
                                    <button class="btn btn-info btn-sm">
                                        <i class="fa fa-eye" aria-hidden="true"></i> View
                                    </button>
                                </a>
                                <a href="{{ url('/teachers/' . $teacher->id . '/edit') }}" title="Edit Teacher">
                                    <button class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                    </button>
                                </a>
                                <form method="POST" action="{{ url('/teachers' . '/' . $teacher->id) }}" accept-charset="UTF-8" style="display:inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Teacher" onclick="return confirm('Confirm delete?')">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
