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
    <div class="container mt-3 mb-3">
        <div class="row">

            <div class="col-sm-12 mt-4 mb-4 bg-light" id="rad">
                <h2 class="text-center mt-3 text-primary" id="body">Students Details</h2>
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

                            <td><a href="/students/{{ $student->id }}/edit" class="btn btn-success">Edit</a></td>
                            <td><a href="/students/{{ $student->id }}" class="btn btn-info">Show</a></td>
                            <td>
                                <form action="/students/{{ $student->id }}" method="post">
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
