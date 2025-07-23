@extends('layout.main')
@push('styles')
    #body{
    background-color:#77BEF0;
    border-radius:15px;
    }
    #rad {
    border-radius:15px;
    }
    table{
    width:100%;

    }
@endpush
@section('content')
    <div class="container mt-3 mb-3"id="body">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6 mt-3 mb-3 bg-light"id="rad">
                <h2 class="text-center mt-3 text-primary">Show Student</h2>

                <table class="table">
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Address</th>
                    </tr>
                    <tr class=" border-bottom">
                        <td>Janan</td>
                        <td>12</td>
                        <td>Jaffna</td>
                    </tr>
                </table>

                <button class="btn btn-primary mb-3 "><a href="/student">Back</a></button>
            </div>
        </div>
    </div>
@endsection
