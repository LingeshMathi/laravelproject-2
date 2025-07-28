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
                        <td>{{ $subject->subject_name }}</td>
                    </tr>
                    <tr>
                        <th>Subject index</th>
                        <td>{{ $subject->subject_index }}</td>
                    </tr>
                    <tr>
                        <th>Subject Order Number</th>
                        <td>{{ $subject->subject_number }}</td>
                    </tr>
                    <tr>
                        <th>Subject Type</th>
                        <td>{{ $subject->subject_type }}</td>

                    </tr>

                </table>
                 <button class="btn mb-3 "><a href="/subjects">Back</a></button>
            </div>
        </div>
    </div>
@endsection
