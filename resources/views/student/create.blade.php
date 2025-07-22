
@extends('layout.main')
@push('color')
    <style>
       .form {
           background-color: rgb(104, 141, 106);
           padding: 20px;
           border-radius: 10px;
           margin: auto;
           width: 50%;
           height: 200px;
       }
    </style>
@section('content')
    <form class="form" action="/student" method="post">
        @csrf
        <label for="fname">Fistname:</label>
        <input type="text" id="name" name="fname"><br><br>

        <label for="lname">Lastname:</label>
        <input type="text" id="name" name="lname"><br>

        <input type="submit" value="Submit">
    </form>
   @endsection

