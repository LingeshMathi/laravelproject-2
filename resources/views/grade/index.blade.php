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
            <div class="col-sm-14 mt-4 mb-4 bg-light" id="rad">
                <h2 class="text-center mt-3 text-primary">Grade Details</h2>
                <table class=" table table-bordered mt-4 mb-4">
                    <tr>
                        <th>Grade Name</th>
                        <th>Grade Color</th>
                        <th>Grade Order Number</th>
                        <th>Grade Group</th>


                    </tr>
                    @foreach ($grades as $grade)
                        <tr>
                            <td>{{ $grade->grade_name }}</td>
                            <td>{{ $grade->grade_color }}</td>
                            <td>{{ $grade->grade_number }}</td>
                            <td>{{ $grade->grade_group }}</td>

                            <td><a href="/grades/{{ $grade->id }}/edit" class="btn btn-success">Edit</a></td>
                            <td><a href="/grades/{{ $grade->id }}" class="btn btn-info">Show</a></td>
                            <td>
                                <form action="/grades/{{ $grade->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
@endsection
