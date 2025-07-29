@extends('layout.main')
@push('styles')
    #body{
    background-color:#77BEF0;
    border-radius:15px;
    }
    #rad {
    border-radius:15px;
    }
@endpush

@section('content')
    <div class="container mt-3 mb-3"id="body">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6 mt-3 mb-3 bg-light"id="rad">
                <h2 class="text-center mt-3 text-primary">Show Sthudent</h2>

                <table class="table">
                    <tr>
                        <th>AdmissionNumber</th>
                        <td>{{ $student->admission_number }}</td>
                    </tr>
                    <tr class=" border-bottom">
                        <th>Sthudent Name</th>
                        <td> {{ $student->student_name }}</td>
                    </tr>
                    <tr>
                        <th>Father Name</th>
                        <td>{{ $student->father_name }}</td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>{{ $student->gender }}</td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <td>{{ $student->phone_number }}</td>
                    </tr>
                    <tr>
                        <th>NIC number</th>
                        <td>{{ $student->nic_number }}</td>
                    </tr>
                    <tr>
                        <th>Date of Birth</th>
                        <td>{{ $student->date_of_birth }}</td>
                    </tr>
                    <tr>
                        <th>Address></th>
                        <td>{{ $student->student_address }}</td>
                    </tr>
                    <tr>
                        <th>Join Date</th>
                        <td>{{ $student->join_data }}</td>
                    </tr>
                </table>





                
                <hr color="red">
                <h1 align="center">Subjects Details</h1>
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
                        </tr>
                    @endforeach
                </table>
                <button class="btn mb-3 "><a href="/students">Back</a></button>
            </div>
        </div>
    </div>
@endsection
