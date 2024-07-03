<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}

     <!-- Link Bootstrap CSS -->
     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
     <!-- Additional CSS -->
     <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>Document</title>
</head>
<body style=" margin:0 auto" class="">

    <div class="d-flex">
        @include('common.dashboardHeader')
        <div class="flex-grow-1 " style='margin-left:300px'>
            <div class="p-3 text-white" style="background:#00652e">header</div>
        <div class="p-4" style="width:100%;min-height:95vh">
            @yield('content')
        </div>
       <div class="d-flex justify-content-between  text-xs border align-items-center p-4" style="background:white;background#00652e">
        <p class="text-secondary m-0" style="font-size:13px">© Minister Hi-Tech Park Limited {{ now()->year }}, All Rights Reserved. Developed by <a class="text-decoration-none text-secondary icon-link icon-link-hover" href="https://trendsbird.com/">Trends Bird Limited</a></p>
      <img src="/image/icon/Banner-2.png" alt="">  
    </div>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Additional scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>