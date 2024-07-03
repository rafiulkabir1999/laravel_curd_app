<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}

     <!-- Link Bootstrap CSS -->
     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
     <!-- Additional CSS -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Document</title>
</head>
<body style=" margin:0 auto" class="">

    <div class="d-flex">
        @include('common.dashboardHeader')
        <div class="flex-grow-1 " style='margin-left:300px'>
            <div class="p-3 bg-secondary">header</div>
        <div class="p-4" style="width:100%;min-height:95vh">
            @yield('content')
        </div>
        <p class="bg-secondary" style="text-align:center; ;padding:10px;color:white">This is Footer</p>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Additional scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>