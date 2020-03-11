<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Datkai</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{!! asset('storage/images/'.$settings->logo) !!}">
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
    <div class="content px-lg-5 px-0 mt-responsive" id="main-layout">
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
<div class="backdrop position-fixed d-none" onclick="closeNav();" style="width:100%; height: 100vh; background-color: rgba(0,0,0,0.26); top:0%; left:0%; z-index: 99999999;"></div>
<div>
    <span id="popup__toggle2" onclick="openNav()">
        <div class="circlephone2" style="transform-origin: center;"></div>
        <div class="circle-fill2" style="transform-origin: center;"></div>
        <div class="img-circle2" style="transform-origin: center;">
            <div class="img-circleblock2 d-flex align-items-center" style="transform-origin: center; background-color: #3AAA35;">
                <a >
                    <i class="fa fa-phone"></i>
                </a>
            </div>
        </div>
    </span>
    <div id="mySidenav" class="sidenav d-md-block" style="z-index: 99999999;">
        <div class="mo-one">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a class="sf-medium pl-5 item-min-b text-ce-mo my-5 d-flex justify-content-between" href=""><img src="{!! asset('storage/images/'.$settings->logo) !!}" alt=""><span class="pt-3 pr-3" style="color: #BCBCBC;">{!! $settings->name !!}</span></a>
            <a class="sf-medium pl-5 item-min-b men-mo mo-when so-mo mt-5" href="{!! $settings->two_gis !!}" target="_blank"><img src="{!! asset('storage/images/3-2 (1).png') !!}" style="    padding-right: 4%;position: relative;top: 3px;" alt="Datkai KG">Посмотреть на карте</a>
            <a class="sf-medium pl-5 item-min-b men-mo mo-zvon so-mo getPrice" data-toggle="modal" data-target="#getPrice" data-id=""><img src="{!! asset('storage/images/4-2.png') !!}" style="    padding-right: 4%;position: relative;top: 3px;" alt="Datkai KG">Обратный звонок</a>
            <a class="sf-medium pl-5 item-min-b men-mo mo-wha so-mo" href="https://api.whatsapp.com/send?phone={!! $settings->whatsapp !!}"><img src="{!! asset('storage/images/2-2.png') !!}" style="    padding-right: 4%;position: relative;top: 3px;" alt="Datkai">WhatsApp</a>
        </div>
        <div class="mo-two">

            <a class="sf-medium item-min-b men-mo" style="text-align: center;padding: 0px 0px 0px 0px!important;font-weight: 900;color: #fff;">Адрес компании:</a>
            <a class="sf-medium item-min-b men-mo" style="font-size:15px;text-align: center;padding: 0;color: white;" ><img src="{!! asset('storage/images/0.png') !!}" style="padding-right: 2%;" alt="Datkai">г. Бишкек, ул.
                Армейская, 150</a>
            <div class="soc-mo">
                <a class="sf-medium item-min-b men-mo" style="padding: 4%;align-items: center;background: #598ec5;
text-align: center;width: 50%;color: #fff;font-size: 15px; margin: auto;" href="{!! $settings->instagram !!}">INSTAGRAM</a>
                <a class="sf-medium item-min-b men-mo" style="padding: 4%;align-items: center;background: #7e8593;
            text-align: center;width: 50%;color: #fff;font-size: 15px; margin: auto;" href="{!! $settings->facebook !!}">FACEBOOK</a>
            </div>
        </div>
    </div>
</div>

</body>
<script src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@stack('scripts')

<script>
    $('.getPrice').on('click', e =>{
        let btn = $(e.currentTarget);
        console.log(btn.attr('data-id'));
        if(btn.attr('data-id')){
            $('#getPrice').find('.modal-title').html("Узнать цену");
        }else{
            $('#getPrice').find('.modal-title').html("Обратный звонок");
        }
        $('#getPrice').find('#product-id').val(btn.attr('data-id'));
    });

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

</html>
