@extends('layouts.layout')

@push('styles')
    <style>
        .main-carousel-h2{
            font-size: 20px;
            line-height: 55px;
            color: #222222;
        }
        .header-30{
            font-size: 30px;
            line-height: 37px;
            text-align: center;
            color: #222222;
        }
        .c-pointer{
            cursor: pointer!important;
        }
        .header-30-desc{
            font-size: 18px;
            line-height: 22px;
            text-align: center;
            color: #222222;
        }
        .product-desc{
            font-size: 18px;
            line-height: 22px;
            color: #222222;
        }

        .responsive-img{
            width: 85%;
            height: 85%;
            object-fit: cover;
        }
        .news-content{
            background: #FFFFFF;
            box-shadow: 10px 15px 25px rgba(0, 0, 0, 0.05);
        }
        .footer-headline{
            font-size: 18px;
            line-height: 22px;
            color: #878787;
        }
        .advantages-text{
            font-size: 18px;
            line-height: 22px;
            color: #222222;
        }
        .prevBtn-news{
            position: absolute;
            top: 625%;
            right: 0%;
            z-index: 999999;
        }
        .nextBtn-news{
            position: absolute;
            top: 625%;
            left: 0%;
            z-index: 999999;
        }
        .prevBtn-single{
            position: absolute;
            top: 800%;
            right: 0%;
            z-index: 999999;
        }
        .nextBtn-single{
            position: absolute;
            top: 800%;
            left: 0%;
            z-index: 999999;
        }
        .prevBtn-main{
            position: absolute;
            left: 60%;
            top:100%;
            z-index: 999999;
        }
        .nextBtn-main{
            position: absolute;
            left: 35%;
            top: 100%;
            z-index: 999999;
        }
        .allAssortment{
            position: absolute;
            z-index: 999999;
        }
        .allAssortment{

        }
        .main-carousel .slick-dots{
            text-align: left;
        }
        .catalog:hover .product-desc{
            color:#F3AC4D!important;
            text-decoration: underline;
        }
        .catalog:hover button{
            position: absolute;
            bottom: 20%;
            display: block!important;
        }
        .new-product .new-mark{
            display: block!important;
            position: absolute;
            top: 0%;
            left: -1.5%;
        }
        .product{
            background: #FFFFFF;
            box-shadow: 10px 15px 25px rgba(0, 0, 0, 0.05);
            border-radius: 20px;
            z-index: 11;
        }
        .product:hover .overlay{
            display: block!important;
            position: absolute; /* Sit on top of the page content */ /* Hidden by default */
            width: 100%; /* Full width (cover the whole page) */
            height: 100%; /* Full height (cover the whole page) */
            top: 0;
            left: 0;
            background: linear-gradient(180deg, rgba(196, 196, 196, 0) 0%, rgba(231, 179, 109, 0.734272) 60.72%, #F3AC4D 100%);
            z-index: 2;
            border-radius: 20px;
            cursor: pointer;
        }
        .product:hover .spec{
            position: absolute; /* Sit on top of the page content */ /* Hidden by default */
            bottom:20%;
            z-index: 3;
            display: block!important;
        }
        .btn-view{
            background: #FFFFFF;
            color: #F3AC4D;
            width: 100%;
            border-radius: 10px;
        }
        .btn-view a{
            text-decoration: none;
            color: #F3AC4D;
        }
        .tableware{
            background: #FFFFFF;
            box-shadow: 10px 15px 25px rgba(0, 0, 0, 0.05);
        }
        .main-carousel div{
            outline: none!important;
            overflow: hidden;
            position: relative;
        }

        @media only screen and (min-width: 1000px) {
            .section-4-bg-img{
                background-image: url("/images/Group 90.png");
                background-repeat: no-repeat;
                background-position: left center;
                background-size: cover;
                border-radius: 50px;
                padding-left: 10px;
                padding-right: 10px;
            }
            .main-carousel-h2{
                font-size: 45px;
            }
        }
    </style>
@endpush
@section('content')
    <div class='mt-2' style="max-height:713px;">
        <div class="prevNextButton-main position-relative" style="height: 30px;">
            <a class="nextBtn-main c-pointer">
                <img src="{{asset("images/Arrow 1.png")}}" alt="">
            </a>
            <a class="prevBtn-main c-pointer ml-auto">
                <img src="{{asset("images/Arrow 2.png")}}" alt="">
            </a>
        </div>
        <div class="buttons position-relative">
            <a href="/catalog">
                <button class="px-2 allAssortment" style="max-width: 244px;height: 47px;border:1px solid #F3AC4D;border-radius: 10px;color:#F3AC4D;background-color: transparent;">Посмотреть весь ассортимент</button>
            </a>
        </div>
        <div class="main-carousel pr-0" style="max-height: 713px;">
            <div class="d-flex justify-content-between align-items-center">
                <div class="col-4">
                    <h2 class="mf-bold main-carousel-h2" >Удобно. <br> Надежно. <br> Безопасно.</h2>
                </div>
                <div class="col-8 background-carousel-image overflow-hidden d-flex justify-content-end" style="max-height: 713px;">
                    <img src="{{asset('images/image 11.png')}}" alt="" style="width: 80%;">
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="col-4">
                    <h2 class="mf-bold main-carousel-h2" >Удобно. <br> Надежно. <br> Безопасно.</h2>
                </div>
                <div class="col-8 background-carousel-image overflow-hidden d-flex justify-content-end" style="max-height: 713px;">
                    <img src="{{asset('images/image 11.png')}}" alt="" style="width: 80%;">
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="col-4">
                    <h2 class="mf-bold main-carousel-h2" >Удобно. <br> Надежно. <br> Безопасно.</h2>
                </div>
                <div class="col-8 background-carousel-image overflow-hidden d-flex justify-content-end" style="max-height: 713px;">
                    <img src="{{asset('images/image 11.png')}}" alt="" style="width: 80%;">
                </div>
            </div>
        </div>
    </div>
    <div class="section-2 my-5 overflow-hidden">
        <div class="d-flex justify-content-center mt-5">
            <div class="col-3 px-0 d-none d-lg-block" style="transform: translateY(-20%);z-index:10;"><img src="{{asset('images/leftArt.png')}}" alt=""></div>
            <div class="col-lg-6 col-md-12 text-center">
                <h2 class="header-30 mf-bold  mt-5 mt-lg-0">Что производим?</h2>
                <p class="header-30-desc mf-light mt-5">
                    ОсОО «Даткай Кей Джи» - это динамично развивающаяся компания, ежегодно расширяющая производство и ассортимент выпускаемой продукции
                </p>
            </div>
            <div class="col-3 px-0 text-right mt-4 d-none d-lg-block"><img src="{{asset('images/rightArt.png')}}" alt=""></div>
        </div>
        <div class="row justify-content-center" style="flex-wrap: wrap;">
            <div class="col-lg-3 col-md-4 col-sm-6 text-center px-0 catalog c-pointer row justify-content-center">
                <img class="responsive-img" src="{{asset('images/product1.png')}}" alt="">
                <a href="/catalog">
                <button class="main-p-btn px-4 d-none" style="max-width: 244px;height: 47px;background: #F9BB68;border-radius: 10px; border: none;">Посмотреть каталог</button>
                <p class="product-desc mf-medium mt-3">одноразовая посуда</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 text-center px-0 catalog c-pointer row justify-content-center">
                <img class="responsive-img" src="{{asset('images/product2.png')}}" alt="">
                <a href="/catalog#halofiber">
                    <button class="main-p-btn px-4 d-none" style="max-width: 244px;height: 47px;background: #F9BB68;border-radius: 10px; border: none;">Посмотреть каталог</button>
                    <p class="product-desc mf-medium mt-3">Синтепон/халофайбер</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 text-center px-0 catalog c-pointer row justify-content-center">
                <img class="responsive-img" src="{{asset('images/product3.png')}}" alt="">
                <a href="/catalog#oil">
                    <button class="main-p-btn px-4 d-none" style="max-width: 244px;height: 47px;background: #F9BB68;border-radius: 10px; border: none;">Посмотреть каталог</button>
                    <p class="product-desc mf-medium mt-3">Растительное масло</p>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 text-center px-0 catalog c-pointer row justify-content-center">
                <img class="responsive-img" src="{{asset('images/product4.png')}}" alt="">
                <a href="/catalog#servcies">
                    <button class="main-p-btn px-4 d-none" style="max-width: 244px;height: 47px;background: #F9BB68;border-radius: 10px; border: none;">Посмотреть каталог</button>
                    <p class="product-desc mf-medium mt-3">Услуги по стеганию</p>
                </a>
            </div>
        </div>
    </div>
    <div class="section-3"  style="margin-top: 10%">
        <div class="pr-0 overflow-hidden">
            <div class="col-15 text-center px-5">
                <h2 class="mf-medium">Хиты продаж</h2>
            </div>
            <div class="prevNextButton-single position-relative" style="height: 30px;">
                <a class="nextBtn-single c-pointer">
                    <img src="{{asset('images/leftArrow.png')}}" alt="">
                </a>
                <a class="prevBtn-single c-pointer">
                    <img src="{{asset('images/rightArrow.png')}}" alt="">
                </a>
            </div>
            <div class="d-flex justify-content-center single-item py-5">
                <div class="col-3 d-flex justify-content-center new-product product m-4 py-5">
                    <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                    <img class="product-image" src="{{asset('images/container1.png')}}" alt="">
                    <div class="overlay"></div>
                    <div class="spec d-none w-100 px-4">
                        <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                        <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                        <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                        <button class="btn btn-view mt-2"><a href="/inner-product">Подробнее</a></button>
                        <button class="btn btn-view mt-2" data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center product m-4 py-5">
                    <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                    <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                    <div class="overlay"></div>
                    <div class="spec d-none w-100 px-4">
                        <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                        <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                        <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                        <button class="btn btn-view mt-2"><a href="/inner-product">Подробнее</a></button>
                        <button class="btn btn-view mt-2" data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center new-product product m-4 py-5">
                    <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                    <img class="product-image" src="{{asset('images/container1.png')}}" alt="">
                    <div class="overlay d-none px-2"></div>
                    <div class="spec d-none w-100 px-4">
                        <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                        <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                        <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                        <button class="btn btn-view mt-2"><a href="/inner-product">Подробнее</a></button>
                        <button class="btn btn-view mt-2" data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center product m-4 py-5">
                    <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                    <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                    <div class="overlay"></div>
                    <div class="spec d-none w-100 px-4">
                        <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                        <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                        <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                        <button class="btn btn-view mt-2"><a href="/inner-product">Подробнее</a></button>
                        <button class="btn btn-view mt-2" data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center product m-4 py-5">
                    <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                    <img class="product-image" src="{{asset('images/container1.png')}}" alt="">
                    <div class="overlay"></div>
                    <div class="spec d-none w-100 px-4">
                        <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                        <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                        <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                        <button class="btn btn-view mt-2"><a href="/inner-product">Подробнее</a></button>
                        <button class="btn btn-view mt-2" data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-4" style="margin: 10% 0% 17% 0%;">
        <div class="col-15 text-center px-5">
            <h2 class="mf-medium">Преимущества</h2>
            <p class="mf-light">Постоянное развитие ассортимента, совершенствование технологии, непрерывное обучение персонала, гибкость,
                а также использование только высококачественного сырья – это приоритеты работы компании, обеспечивающие конкурентные преимущества.</p>
        </div>
        <div class="d-flex align-items-center section-4-bg section-4-bg-img" style="flex-wrap: wrap;">
            <div class="col-md-4 col-sm-6 text-center">
                <img src="{{asset('images/callCenter.png')}}" alt="">
                <p class="mf-medium advantages-text">Индивидуальный <br> подход к каждому <br> клиенту</p>
            </div>
            <div class="col-md-4 col-sm-6 text-center">
                <img src="{{asset('images/guarantee.png')}}" alt=""  style="transform: translate(-10%,20%);z-index:100">
                <p class="mf-medium advantages-text" style="transform: translate(5%,-45%);z-index:150">Гарантия <br> качества <br> продукции</p>
            </div>
            <div class="col-md-4 col-sm-6 text-center">
                <img src="{{asset('images/ecology.png')}}" alt="">
                <p class="mf-medium advantages-text">Экологически <br> безопасное <br> производство</p>
            </div>
            <div class="col-md-4 d-none d-lg-block">

            </div>
            <div class="col-md-4 col-sm-6 text-center">
                <img src="{{asset('images/unique.png')}}" alt="">
                <p class="mf-medium advantages-text" style="transform: translate(-5%,-90%)">Уникальные <br> технологии <br> производства</p>
            </div>
            <div class="col-md-4 col-sm-12 text-center">
                <img src="{{asset('images/ownLogistic.png')}}" alt="">
                <p class="mf-medium advantages-text w-auto">Собственная   <br> логистическая <br> служба</p>
            </div>
        </div>
    </div>
    <div class="section-5" style="margin-top: 10%;" id="partners">
        <div class="d-flex justify-content-center mt-5">
            <div class="col-15 text-center">
                <h2 class="header-30 mf-bold">Партнеры</h2>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            <div class="col-3 text-center px-0">
                <img class="responsive-img" src="{{asset('images/polyer.svg')}}" alt="">
            </div>
            <div class="col-3 text-center px-0">
                <img class="responsive-img" src="{{asset('images/proteck.svg')}}" alt="">
            </div>
            <div class="col-3 text-center px-0">
                <img class="responsive-img" src="{{asset('images/polyer.svg')}}" alt="">
            </div>
            <div class="col-3 text-center px-0">
                <img class="responsive-img" src="{{asset('images/proteck.svg')}}" alt="">
            </div>
        </div>
    </div>
    <div class="section-6 pr-0 overflow-hidden" style="margin-top:10%;"  id="news">
        <div class="col-15 text-center px-5 d-flex justify-content-center">
            <h2 class="mf-bold">Новости</h2>
            <p class="ml-auto mf-light">Читать все новости</p>
        </div>
        <div class="prevNextButton-news position-relative" style="height: 30px;">
            <a class="nextBtn-news c-pointer">
                <img src="{{asset('images/leftArrow.png')}}" alt="">
            </a>
            <a class="prevBtn-news c-pointer">
                <img src="{{asset('images/rightArrow.png')}}" alt="">
            </a>
        </div>
        <div class="d-flex justify-content-center news-carousel" data-slick='{"arrows": true}'>
            <div class="col-3 news-content d-flex justify-content-center tableware m-4">
                <div>
                    <img src="{{asset('images/news1.png')}}" alt="">
                    <p class="product-desc mf-medium mt-3">Посуда и упаковка для кейтеринга</p>
                </div>
            </div>
            <div class="col-3 news-content d-flex justify-content-center tableware m-4">
                <div>
                    <img src="{{asset('images/news2.png')}}" alt="">
                    <p class="product-desc mf-medium mt-3">Посуда и упаковка для кейтеринга</p>
                </div>
            </div>
            <div class="col-3 news-content d-flex justify-content-center tableware m-4">
               <div>
                   <img src="{{asset('images/news1.png')}}" alt="">
                    <p class="product-desc mf-medium mt-3">Посуда и упаковка для кейтеринга</p>
               </div>
            </div>
            <div class="col-3 news-content d-flex justify-content-center tableware m-4">
                <div>
                    <img src="{{asset('images/news2.png')}}" alt="">
                    <p class="product-desc mf-medium mt-3">Посуда и упаковка для кейтеринга</p>
                </div>
            </div>
        </div>
    </div>
</div>
@include('modals.get_price')
@endsection
@push('scripts')
    <script>
        $('.main-carousel').slick({
            centerPadding: '10px',
            slidesToShow: 1,
            dots: true,
            arrows:true,
            autoplay:true,
            infinite:true,
        });
    </script>
    <script>
        $('.single-item').slick({
            centerPadding: '10px',
            slidesToShow: 4,
            dots: true,
            arrows:true,
            // autoplay:true,
            infinite:true,
            responsive: [
                {
                    breakpoint: 1400,
                    settings: {
                        arrows: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        arrows: true,
                        centerPadding: '40px',
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        arrows: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    </script>


    <script>
        $('.news-carousel').slick({
            centerPadding: '30px',
            slidesToShow: 3,
            dots: true,
            arrows:true,
            autoplay:true,
            infinite:true,
            responsive: [
                {
                    breakpoint: 1400,
                    settings: {
                        arrows: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 1200,
                    settings: {
                        arrows: true,
                        centerPadding: '40px',
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 900,
                    settings: {
                        arrows: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    </script>
    <script>
        $('.prevBtn-news').on('click',function (e) {
            $('.news-carousel').slick('slickPrev');
        });
        $('.nextBtn-news').on('click',function (e) {
            $('.news-carousel').slick('slickNext');
        });
        $('.prevBtn-main').on('click',function (e) {
            $('.main-carousel').slick('slickPrev');
        });
        $('.nextBtn-main').on('click',function (e) {
            $('.main-carousel').slick('slickNext');
        });
        $('.prevBtn-single').on('click',function (e) {
            $('.single-item').slick('slickPrev');
        });
        $('.nextBtn-single').on('click',function (e) {
            $('.single-item').slick('slickNext');
        });
    </script>
    <script>
        $(document).ready(function () {
            let width = $('body').width();
            let dots = $('.main-carousel').find('.slick-dots');
            let btn = $('.allAssortment');
            if(width>1000){
                let h2 = $('.slick-active').find('.main-carousel-h2');
                h2 = h2.offset();
                let prev = $('.prevBtn-main');
                let next = $('.nextBtn-main');
                prev.css('top',parseInt(h2.top)+70);
                prev.css('left',parseInt(h2.left)+180);
                next.css('left',parseInt(h2.left)-50);
                next.css('top',parseInt(h2.top)+70);
                dots.css('top',parseInt(h2.top)+40);
                dots.css('left',parseInt(h2.left)+42);
                btn.css('left',parseInt(h2.left)-50);
                btn.css('top',parseInt(h2.top)-20);
            }else{
                let h2 = $('.slick-active').find('.main-carousel-h2');
                h2 = h2.offset();
                let prev = $('.prevBtn-main');
                let next = $('.nextBtn-main');
                prev.css('top',parseInt(h2.top)+190);
                prev.css('left',parseInt(h2.left)+180);
                next.css('left',parseInt(h2.left));
                next.css('top',parseInt(h2.top)+190);
                dots.css('top',parseInt(h2.top)+157);
                dots.css('left',parseInt(h2.left)+70);
                btn.css('left',parseInt(h2.left)-10);
                btn.css('top',parseInt(h2.top)+80);
            }
        });
        $(window).resize(function() {
            let width = $('body').width();
            let dots = $('.main-carousel').find('.slick-dots');
            let btn = $('.allAssortment');
            if(width>1000){
                let h2 = $('.slick-active').find('.main-carousel-h2');
                h2 = h2.offset();
                let prev = $('.prevBtn-main');
                let next = $('.nextBtn-main');
                prev.css('top',parseInt(h2.top)+70);
                prev.css('left',parseInt(h2.left)+180);
                next.css('left',parseInt(h2.left)-50);
                next.css('top',parseInt(h2.top)+70);
                dots.css('top',parseInt(h2.top)+40);
                dots.css('left',parseInt(h2.left)+42);
                btn.css('left',parseInt(h2.left)-50);
                btn.css('top',parseInt(h2.top)-20);
            }else{
                let h2 = $('.slick-active').find('.main-carousel-h2');
                h2 = h2.offset();
                let prev = $('.prevBtn-main');
                let next = $('.nextBtn-main');
                prev.css('top',parseInt(h2.top)+190);
                prev.css('left',parseInt(h2.left)+180);
                next.css('left',parseInt(h2.left));
                next.css('top',parseInt(h2.top)+190);
                dots.css('top',parseInt(h2.top)+157);
                dots.css('left',parseInt(h2.left)+70);
                btn.css('left',parseInt(h2.left)-10);
                btn.css('top',parseInt(h2.top)+80);
            }
        });
    </script>
@endpush
