<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/intlTelInput.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Vskillza | <?= (isset($data['title']))?$data['title']:'Login Page';?></title>
</head>
<body>
    
    @yield('content')

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/intlTelInput-jquery.min.js')}}"></script>
    <script src="{{asset('js/select.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>