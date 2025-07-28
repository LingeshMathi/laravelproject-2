@extends('layout.main')
@push('styles')
@endpush

@section('content')
    <div class="container mt-3 mb-3" id="body">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6 mt-4 mb-4 bg-light" id="rad">
                <h2 class="text-center mt-3 text-primary"> Subject Create</h2>

                <form action="/subjects" method="post" class="form">
                    @csrf

                    <table style="width:100%;">
                        <div class="mt-4">
                            <tr>
                                <td><label class="col-form-label" for="text">subject Name:</label></td>
                                <td><input class="form-control" type="text" id="subject_name"name="subject_name"> </td>
                            </tr>
                            <tr>
                                <td><label class="col-form-label mt-2" for="text">subject Index:</label></td>
                                <td><input class="form-control mt-2" type="text" id="subject_index" name="subject_index">
                                </td>
                            </tr>

                            <tr>
                                <td><label class="col-form-label mt-2" for="text">subject Order Number:</label></td>
                                <td><input class="form-control mt-2" type="text" id="subject_number" name="subject_number">
                                </td>
                            </tr>
                            <tr>
                                <td><label class="col-form-label mt-2" for="text">subject Type:</label></td>
                                <td><input class="form-control mt-2" type="text" id="subject_type"name="subject_type"></td>
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
