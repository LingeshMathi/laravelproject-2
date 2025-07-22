@extends('layout.main')
@push('color')
    <style>
        .frm {
            background-color: rgb(230, 221, 173);
            padding: 20px;
            border-radius: 10px;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>

@endpush
@section('content')
    <form class="frm" action="/student" method="post">
        @csrf
        <table border="1" class="table">
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
            </tr>
            <tr>
                <td>Mathi</td>
                <td>12</td>
                <td>Jaffna</td>
            </tr>
        </table>
       <button><a href="/student">back</a></button>
    </form>
@endsection
