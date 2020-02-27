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
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    @stack('styles')
</head>
<body>
<div class="flex-center position-ref full-height" id="app"  style=" background: #FFFFFF;">
    <div class="header">
        @include('_partials.header')
    </div>
    <div class="content px-lg-5 px-0">
        <div class="" style="position: relative;">
            @yield('content')
        </div>
    </div>
    <div class="footer mt-auto">
        @include('_partials.footer')
    </div>
</div>
</body>
<script src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{asset('js/main.js')}}"></script>
<script>
    $('.send-price').on('click',function () {
        swal.fire({
            position: 'top-end',
            icon: 'info',
            title: "Не удалось отправить писбмо!",
            showConfirmButton:false,
            timer:1500
        });
    })
</script>
@stack('scripts')

</html>
