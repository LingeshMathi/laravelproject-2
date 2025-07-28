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
    <div class="container mt-4 mb-4"id="body">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6 mt-4 mb-4 bg-light" id="rad">
                <h2 class="text-center mt-3 text-primary">Create Page</h2>
                <form action="/students" method="post">
                    @csrf
                    <table>
                        <tr>
                            <th><label for="adno">Admission Number:</label></th>
                            <td> <input type="text" id="adno" name="admission_number" required></td>
                        </tr>
                        <tr>
                            <th><label for="sname">Student Name:</label></th>
                            <td> <input type="text" id="sname" name="student_name" required></td>
                        </tr>
                        <tr>
                            <th><label for="faname">Father Name:</label></th>
                            <td> <input type="text" id="faname" name="father_name" required></td>
                        </tr>
                        <tr>
                            <th><label for="gender">Gender:</label></th>
                            <td>
                                <select id="gender" name="gender" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th><label for="phone">Phone Number:</label></th>
                            <td> <input type="text" id="phone" name="phone_number" required></td>
                        </tr>
                        <tr>
                            <th><label for="icno">NIC Number:</label></th>
                            <td> <input type="text" id="icno" name="nic_number" required></td>
                        </tr>
                        <tr>
                            <th><label for="date">Date of birth:</label></th>
                            <td> <input type="date" id="date" name="date_of_birth" required></td>
                        </tr>
                        <tr>
                            <th><label for="address">Address:</label></th>
                            <td> <input type="text" id="address" name="student_address" required></td>
                        </tr>
                        <tr>
                            <th><label for="join">Join Date:</label></th>
                            <td> <input type="date" id="join" name="join_data" required></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center">
                                <input type="submit" value="Submit" class="btn btn-success mt-3">
                            </td>
                        </tr>
                    </table>


                </form>

            </div>
        </div>
    </div>
@endsection
