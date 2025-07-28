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
    <div class="container mt-3 mb-3" id="body">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6 mt-4 mb-4 bg-light" id="rad">
                <h2 class="text-center mt-3 text-primary">Students Edit</h2>

                <form action="/students/{{ $student->id }}" method="post" class="form">
                    @csrf
                    @method('put')
                    <table style="width:100%;">
                        <div class="mt-4">
                            <tr>
                                <td><label class="col-form-label" for="text">Admission Number:</label></td>
                                <td><input class="form-control" type="text" id="adnumber"
                                        name="admission_number"value="{{ $student->admission_number }}"></td>
                            </tr>
                            <tr>
                                <td><label class="col-form-label mt-2" for="text">Student Name:</label></td>
                                <td><input class="form-control mt-2" type="text" id="student" name="student_name"
                                        value="{{ $student->student_name }}"></td>
                            </tr>

                            <tr>
                                <td><label class="col-form-label mt-2" for="text">Fathe Name:</label></td>
                                <td><input class="form-control mt-2" type="text" id="fname" name="father_name"
                                        value="{{ $student->father_name }}"></td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="gender">Gender:</label>
                                </td>
                                <td>
                                    <select id="gender" name="gender">
                                        <option value="male" {{ $student->gender == 'male' ? 'selected' : '' }}>Male
                                        </option>
                                        <option value="female" {{ $student->gender == 'female' ? 'selected' : '' }}>
                                            Female</option>
                                        <option value="other" {{ $student->gender == 'other' ? 'selected' : '' }}>Other
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label class="col-form-label mt-2" for="text">Phone number:</label></td>
                                <td><input class="form-control mt-2" type="number" id="phone" name="phone_number"
                                        value="{{ $student->phone_number }}"></td>
                            </tr>
                            <tr>
                                <td><label class="col-form-label mt-2" for="text">NIC number:</label></td>
                                <td><input class="form-control mt-2" type="text" id="icno"
                                        name="nic_number"value="{{ $student->nic_number }}"></td>
                            </tr>
                            <tr>
                                <td><label class="col-form-label mt-2" for="text">Date of birth:</label></td>
                                <td><input class="form-control mt-2" type="text" id="date"
                                        name="date_of_birth"value="{{ $student->date_of_birth }}"></td>
                            </tr>
                            <tr>
                                <td><label class="col-form-label mt-2" for="text">Address:</label></td>
                                <td><input class="form-control mt-2" type="text" id="ad"
                                        name="address"value="{{ $student->address }}"></td>
                            </tr>
                            <tr>
                                <td><label class="col-form-label mt-2" for="text">Join Date:</label></td>
                                <td><input class="form-control mt-2" type="text" id="lname"
                                        name="join_date"value="{{ $student->join_date }}"></td>
                            </tr>
                            <tr>
                                <td><input class="btn btn-primary float-right mt-2 mb-4" type="submit"
                                        value="submit"id="button"></td>
                            </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection
