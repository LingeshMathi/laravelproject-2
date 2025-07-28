
<html>
<head>
    <meta charset="utf-8">

    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <style>
        @stack('styles');
    </style>
</head>

<body>
    <div class="container mt-3 mb-3" id="body">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-14 mt-4 mb-4 bg-light" id="rad">
                <h2 class="text-center mt-3 text-primary">Students Details</h2>
                <table class=" table table-bordered mt-4 mb-4">
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

                    </tr>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->admission_number }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->father_name }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->phone_number }}</td>
                            <td>{{ $student->nic_number }}</td>
                            <td>{{ $student->address}}</td>
                            <td>{{ $student->date_of_birth }}</td>
                            <td>{{ $student->join_date }}</td>
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
</body>
</html>



