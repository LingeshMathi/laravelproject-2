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
    <div class="container mt-4 mb-4"id="body">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6 mt-4 mb-4 bg-light" id="rad">
                <h2 class="text-center mt-3 text-primary">Create Page</h2>
                <form class="form" action="/student" method="post">
                    @csrf
                    <table style="width:100%;">
                        <div class="mt-4">
                            <tr>
                                <td>
                                    <label class="col-form-label" for="fname">Fistname:</label>
                                </td>
                                <td>
                                    <input class="form-control" type="text" id="fname" name="fname">
                                </td>
                            </tr>
                        </div>

                        <tr>
                            <td>
                                <label class="col-form-label mt-2" for="lname">Lastname:</label>
                            </td>
                            <td>
                                <input class="form-control mt-2" type="text" id="lname" name="lname">
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <input class="btn btn-success float-right mt-2 mb-4" type="submit" value="submit"
                                    id="button">
                            </td>
                        </tr>

                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection
