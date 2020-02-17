<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Datkai</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
    </head>
    <body>
        <div class="flex-center position-ref full-height" id="app">
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
    <script src="{{asset('js/app.js')}}"></script>
</html>
