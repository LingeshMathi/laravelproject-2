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
            <div class="col-sm-1"></div>
            <div class="col-sm-10 mt-4 mb-4 bg-light" id="rad">
                <h2 class="text-center mt-3 text-primary">Students Details</h2>
                <table class=" table table-bordered mt-4 mb-4">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th style="text-align: center" colspan="2">Action</th>
                        <th>Delete</th>
                    </tr>
                    <tr>
                        <th>01</th>
                        <td>Mathi</td>
                        <td>23</td>
                        <td>Jaffna</td>
                        <td><a href="student/10/edit">Edit</a></td>
                        <td><a href="student/10">Show</a></td>
                        <td>
                            <form action="/student/10" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th>02</th>
                        <td>Abishan</td>
                        <td>22</td>
                        <td>Mannar</td>
                        <td><a href="student/10/edit">Edit</a></td>
                        <td><a href="student/10">Show</a></td>
                        <td>
                            <form action="/student/10" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <th>03</th>
                        <td>janan</td>
                        <td>25</td>
                        <td>Jaffna</td>
                        <td><a href="student/10/edit">Edit</a></td>
                        <td><a href="student/10">Show</a></td>
                        <td>
                            <form action="/student/10" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
