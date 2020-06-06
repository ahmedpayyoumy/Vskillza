<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/intlTelInput.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Vskillza</title>
</head>
<body>
    
    @include('site_pages.components.header')

    @include('site_pages.components.intro')

    @include('site_pages.components.tabs')

    @include('site_pages.components.services')


    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/intlTelInput-jquery.min.js')}}"></script>
    <script src="{{asset('js/select.js')}}"></script>
</body>
</html>