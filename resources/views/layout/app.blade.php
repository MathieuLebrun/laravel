<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Connection</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
</head>
<body>
    @include('partials.navbar')
    <hr>
    <div >
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>