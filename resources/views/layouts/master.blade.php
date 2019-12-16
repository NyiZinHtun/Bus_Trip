<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bus Trip</title>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="{{ url('css/seat.css') }}">
    <link rel="stylesheet" href="{{ url('css/jquery.timepicker.css') }}">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ url('js/jquery.js') }}"></script>
    <script src="{{ url('js/jquery.timepicker.min.js') }}"></script>
     @yield('scripts')
</body>
</html>