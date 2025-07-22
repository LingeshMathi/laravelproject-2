
@extends('layout.main')
@push('color')
    <style>
        .form {
            background-color: lightblue;
            padding: 20px;
            border-radius: 10px;
            margin: 20px;
        }
    </style>

@endpush
@section('content')
    <form action="/student/10" method="post" class="form">

        @csrf
        @method('put')
        <label for="fname">Fistname:</label>
        <input type="text" id="fname" name="fname"><br><br>

        <label for="lname">Lastname:</label>
        <input type="text" id="lname" name="lname"><br>

        <input type="submit" value="submit"><br>

    </form>

   @endsection

