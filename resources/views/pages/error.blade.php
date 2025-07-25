@extends('layout.main')
{{-- @section('color', 'green') --}}
@push('color')
<style>
    .h1{
        background-color:rgb(102, 47, 255)
    }
</style>
@endpush

@section('title', 'Error')
@section('content')
    <section class="wrap__section">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-sm-10 col-md-8 col-lg-7 m-auto text-center">
                    <div class="error_text">
                        <div class="img">
                            <img src="{{ asset('images/error.jpg') }}" alt="error">
                        </div>
                        <h4>OOOps ! Sorry Page Not Found</h4>
                        <p>The page you are looking for does not exist.It may have been moved, or removed altogether.
                        </p>
                        <a class="btn btn-primary" href="/">go home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
