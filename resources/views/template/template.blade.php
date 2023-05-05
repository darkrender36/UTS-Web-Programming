<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/template.css')}}">
    @yield('stylesheet')
    @yield('script')
</head>
<body>
    {{-- header --}}
    @include('template/header')

    {{-- navbar --}}
    @include('template/navbar')

    <div class="body">
        @yield('body')
    </div>

    {{-- footer --}}
    @include('template/footer')
</body>
</html>
