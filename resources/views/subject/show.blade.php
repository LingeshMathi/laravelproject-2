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

                
                <hr color="red">
                <h1 align="center">Students Details</h1>

                <table class="table table-responsive mt-4 mb-4">
                    <tr>
                        <th>Admission Number</th>
                        <th>Student Name</th>
                        <th>Student Father Name</th>
                        <th>Gender</th>
                        <th>Phone Number</th>
                        <th>NIC number</th>
                        <th>Address</th>
                        <th>Date of birth</th>
                        <th>join date</th>
                        <th>Student Grade</th>

                    </tr>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->admission_number }}</td>
                            <td>{{ $student->student_name }}</td>
                            <td>{{ $student->father_name }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->phone_number }}</td>
                            <td>{{ $student->nic_number }}</td>
                            <td>{{ $student->student_address }}</td>
                            <td>{{ $student->date_of_birth }}</td>
                            <td>{{ $student->join_data }}</td>
                            <td>{{ $student->grade->grade_group }}</td>
                        </tr>
                    @endforeach
                </table>
                <button class="btn mb-3 "><a href="/subjects">Back</a></button>
            </div>
        </div>
    </div>
@endsection
