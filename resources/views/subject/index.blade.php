@extends('layout.main')
@push('styles')
@endpush

@section('content')
    <div class="container mt-3 mb-3" id="body">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-14 mt-4 mb-4 bg-light" id="rad">
                <h2 class="text-center mt-3 text-primary">Subject Details</h2>
                <table class=" table table-bordered mt-4 mb-4">
                    <tr>
                        <th>Subject Name</th>
                        <th>Subject index</th>
                        <th>Subject Order Number</th>
                        <th>Subject Type</th>


                    </tr>
                    @foreach ($subjects as $subject)
                        <tr>
                            <td>{{ $subject->subject_name }}</td>
                            <td>{{ $subject->subject_index }}</td>
                            <td>{{ $subject->subject_number }}</td>
                            <td>{{ $subject->subject_type }}</td>

                            <td><a href="/subjects/{{ $subject->id }}/edit" class="btn btn-success">Edit</a></td>
                            <td><a href="/subjects/{{ $subject->id }}" class="btn btn-info">Show</a></td>
                            <td>
                                <form action="/subjects/{{ $subject->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
@endsection
