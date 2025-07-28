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
                <h2 class="text-center mt-3 text-primary"> Grade Create</h2>

                <form action="/grades" method="post" class="form">
                    @csrf

                    <table style="width:100%;">
                        <div class="mt-4">
                            <tr>
                                <td><label class="col-form-label" for="text">Grade Name:</label></td>
                                <td><input class="form-control" type="text" id="grade_name"name="grade_name"> </td>
                            </tr>
                            <tr>
                                <td><label class="col-form-label mt-2" for="text">Grade Color:</label></td>
                                <td><input class="form-control mt-2" type="text" id="grade_color" name="grade_color">
                                </td>
                            </tr>

                            <tr>
                                <td><label class="col-form-label mt-2" for="text">Grade Order Number:</label></td>
                                <td><input class="form-control mt-2" type="text" id="grade_number" name="grade_number">
                                </td>
                            </tr>
                            <tr>
                                <td><label class="col-form-label mt-2" for="text">Grade Group:</label></td>
                                <td><input class="form-control mt-2" type="text" id="grade_group"name="grade_group"></td>
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
