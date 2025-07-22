<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>@yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>


    @include('layout/header')
    @stack('color')
    <h1 class="h1" style="text-align: center">Yarl IT
        @if (isset($name))
            {{ $name }}
        @else
            {{ 'Yarl IT' }}
        @endif
    </h1>

    @yield('content')
    @include('layout/footer')



    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

    <script type="text/javascript" src="{{ asset('js/index.bundle.js') }}"></script>
</body>

</html>
