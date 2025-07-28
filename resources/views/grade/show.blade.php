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
            <div class="col-sm-4"></div>
            <div class="col-sm-14 mt-4 mb-4 bg-light" id="rad">
                <h2 class="text-center mt-3 text-primary">Grade Details</h2>
                <table class=" table table-bordered mt-4 mb-4">
                    <tr>
                        <th>Grade Name</th>
                        <td>{{ $grade->grade_name }}</td>
                    </tr>
                    <tr>
                        <th>Grade Color</th>
                        <td>{{ $grade->grade_color }}</td>
                    </tr>
                    <tr>
                        <th>Grade Order Number</th>
                        <td>{{ $grade->grade_number }}</td>
                    </tr>
                    <tr>
                        <th>Grade Group</th>
                        <td>{{ $grade->grade_group }}</td>
                    </tr>
                </table>
                <button class="btn mb-3 "><a href="/grades">Back</a></button>
            </div>
        </div>
    </div>
@endsection
