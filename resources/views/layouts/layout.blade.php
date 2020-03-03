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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    @stack('styles')
</head>
<body>
<div class="flex-center position-ref full-height" id="app"  style="background: #FFFFFF;">
    <div class="header">
        @include('_partials.header')
    </div>
    <div class="content px-lg-5 px-0 mt-responsive">
        <div class="" style="position: relative;overflow: hidden;">
            @yield('content')
        </div>
    </div>
    <div class="footer mt-auto">
        @include('_partials.footer')
    </div>
</div>
{{--<div class="position-fixed" style="bottom: 0;right: 0;">--}}
{{--    <button class="getPrice" data-toggle="modal" data-target="#getPrice" data-id="" style="max-width: 244px;height: 47px;background: #F9BB68;border-radius: 10px; border: none;"><i class="fa fa-phone" aria-hidden="true"></i></button>--}}
{{--</div>--}}
<div>
    <span id="popup__toggle2">
        <div class="circlephone2" style="transform-origin: center;"></div>
        <div class="circle-fill2" style="transform-origin: center;"></div>
        <div class="img-circle2" style="transform-origin: center;">
            <div class="img-circleblock2 d-flex align-items-center" style="transform-origin: center; background-color: #3AAA35;">
                <a  data-toggle="modal" data-target="#getPrice" data-id="">
                    <i class="fa fa-phone"></i>
                </a>
            </div>
        </div>
    </span>
</div>
</body>
<script src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@stack('scripts')
<script>
    $(document).ready(function(){
        $(".menu").on("click","a", function (event) {
            event.preventDefault();
            var id  = $(this).attr('href');
            if(Object.entries($(id)).length!=0){
                var top = $(id).offset().top;
                $('body,html').animate({scrollTop: top-150}, 1500);
            }else{
                let pathname = (window.location.origin);
                console.log(pathname+'/'+id);
                window.location = pathname+'/'+id;
            }
        });
    });
</script>
<script>
    $('.getPrice').on('click',function (e) {
        let btn = $(e.currentTarget);
        if(btn.attr('data-id')){
            $('#getPrice').find('.modal-title').html("Узнать цену");
        }else{
            $('#getPrice').find('.modal-title').html("Обратный звонок");
        }
        $('#getPrice').find('#product-id').val(btn.attr('data-id'));
    });
</script>
</html>
