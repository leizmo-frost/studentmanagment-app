@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Student Application</h2>
        </div>
        <div class="card-body">
            <a href="{{ url('/students/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>
            <br/>
            <br/>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->mobile }}</td>
                            <td>
                                <a href="{{ url('/students/' . $student->id) }}" title="View Student">
                                    <button class="btn btn-info btn-sm">
                                        <i class="fa fa-eye" aria-hidden="true"></i> View
                                    </button>
                                </a>
                                <a href="{{ url('/students/' . $student->id . '/edit') }}" title="Edit Student">
                                    <button class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                    </button>
                                </a>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $student->id }}">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                </button>
                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteModal{{ $student->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $student->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel{{ $student->id }}">Confirm Deletion</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this student?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                <form method="POST" action="{{ url('/students/' . $student->id) }}">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Delete Modal -->
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
