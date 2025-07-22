@extends('layout.main')
@push('color')
    <style>
        .table {
            background-color: lightblue;
            padding: 20px;
            border-radius: 10px;
            margin: 20px;


        }
    </style>
@endpush
@section('content')
    {{-- <form class="frm" action="/student" method="post"> --}}
    @csrf
    <table border="1" class="table">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th style="text-align: center" colspan="2">Action</th>
            <th>Delete</th>

        </tr>
        <tr>
            <td>Mathi</td>
            <td>12</td>
            <td>Jaffna</td>
            <td><a href="student/10/edit"> edit</td>
            <td><a href="student/10">show</td>
            <td>
                <form action="/student/10" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="delete">
                </form>
            </td>

        </tr>
        <tr>
            <td>Mathi</td>
            <td>12</td>
            <td>Jaffna</td>
            <td><a href="student/10/edit"> edit</td>
            <td><a href="student/10">show</td>
            <td>
                <form action="/student/10" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="delete">
                </form>
            </td>

        </tr>
        <tr>
            <td>Mathi</td>
            <td>12</td>
            <td>Jaffna</td>
            <td><a href="student/10/edit"> edit</td>
            <td><a href="student/10">show</td>
            <td>
                <form action="/student/10" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="delete">
                </form>
            </td>


    </table>
@endsection
