@extends('layouts.layout')
@push('styles')
    <style>
        .catalogTabs{
            background: #E5E5E5;
            border-radius: 10px!important;
        }
        .catalogTabs.active{
            background: #F9BB68!important;
        }
        .main-carousel-h2{
            font-size: 33px;
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
        .product-image{
            width: 100%;
        }
        .product:hover .overlay{
            display: block!important;
            position: absolute; /* Sit on top of the page content */ /* Hidden by default */
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: linear-gradient(180deg, rgba(196, 196, 196, 0) 0%, rgba(231, 179, 109, 0.734272) 60.72%, #F3AC4D 100%);
            z-index: 2;
            border-radius: 20px;
            cursor: pointer;
        }
        .product:hover .spec{
            position: absolute;
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
        .tableware{
            background: #FFFFFF;
            box-shadow: 10px 15px 25px rgba(0, 0, 0, 0.05);
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
    <div class="d-flex nav nav-tabs mt-5 border-0" role="tablist">
        <div class="col-lg-3 col-sm-6 mt-4 mt-lg-0 nav-item">
            <a class="nav-link btn rounded-0 border-0 btn-block text-left mf-light p-2 pl-3 catalogTabs active" href="#tableware" data-toggle="tab" role="tab"  style="box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.05);">Одноразовая посуда</a>
        </div>
        <div class="col-lg-3 col-sm-6 mt-4 mt-lg-0 nav-item">
            <a class="nav-link btn rounded-0 border-0 btn-block text-left mf-light p-2 pl-3 catalogTabs"  href="#halofiber" data-toggle="tab" role="tab"  style="box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.05);">Синтепон / халофайбер</a>
        </div>
        <div class="col-lg-3 col-sm-6 mt-4 mt-lg-0 nav-item">
            <a class="nav-link btn rounded-0 border-0 btn-block text-left mf-light p-2 pl-3 catalogTabs"  href="#oil" data-toggle="tab" role="tab"  style="box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.05);">Растительное масло</a>
        </div>
        <div class="col-lg-3 col-sm-6 mt-4 mt-lg-0 nav-item">
            <a class="nav-link btn rounded-0 border-0 btn-block text-left mf-light p-2 pl-3 catalogTabs"  href="#servcies" data-toggle="tab" role="tab"  style="box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.05);">Услуги по стеганию</a>
        </div>
    </div>
    <div class="tab-content" id="myTabContent">
        <div class="pt-4 tab-pane fade active show s-activeTab w-100" id="tableware" style="flex-wrap: wrap;">
            <div class="row">
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container1.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container1.png')}}" alt="">
                        <div class="overlay d-none px-2"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container1.png')}}" alt="">
                        <div class="overlay d-none px-2"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container1.png')}}" alt="">
                        <div class="overlay d-none px-2"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container1.png')}}" alt="">
                        <div class="overlay d-none px-2"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-4 tab-pane fade s-activeTab w-100" id="halofiber" style="flex-wrap: wrap;">
            <div class="row">
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container1.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container1.png')}}" alt="">
                        <div class="overlay d-none px-2"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container1.png')}}" alt="">
                        <div class="overlay d-none px-2"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container1.png')}}" alt="">
                        <div class="overlay d-none px-2"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container1.png')}}" alt="">
                        <div class="overlay d-none px-2"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-4 tab-pane fade s-activeTab w-100" id="oil" style="flex-wrap: wrap;">
            <div class="row">
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container1.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container1.png')}}" alt="">
                        <div class="overlay d-none px-2"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2">Подробнее</button>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-4 tab-pane fade s-activeTab w-100" id="servcies" style="flex-wrap: wrap;">
            <div class="row">
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container1.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                            <button class="btn btn-view mt-2">Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                            <button class="btn btn-view mt-2">Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container1.png')}}" alt="">
                        <div class="overlay d-none px-2"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                            <button class="btn btn-view mt-2">Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                            <button class="btn btn-view mt-2">Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container1.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                            <button class="btn btn-view mt-2">Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                            <button class="btn btn-view mt-2">Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container1.png')}}" alt="">
                        <div class="overlay d-none px-2"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                            <button class="btn btn-view mt-2">Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                            <button class="btn btn-view mt-2">Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container1.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                            <button class="btn btn-view mt-2">Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                            <button class="btn btn-view mt-2">Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container1.png')}}" alt="">
                        <div class="overlay d-none px-2"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                            <button class="btn btn-view mt-2">Подробнее</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 py-5">
                    <div class="px-4 d-flex justify-content-center w-100 product">
                        <img class="new-mark d-none" src="{{asset('images/new.png')}}" alt="">
                        <img class="product-image" src="{{asset('images/container2.png')}}" alt="">
                        <div class="overlay"></div>
                        <div class="spec d-none w-100 px-4">
                            <p class="mb-0 mf-light" style="color: #fff">Материал изделия: ПЭТ</p>
                            <p class="mb-0 mf-light" style="color: #fff">Кол-во в коробе, шт.: 240</p>
                            <p class="mb-0 mf-light" style="color: #fff">Объем короба, м3: 0.077112 </p>
                            <button class="btn btn-view mt-2"  data-toggle="modal" data-target="#getPrice">Узнать цену</button>
                            <button class="btn btn-view mt-2">Подробнее</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('modals.get_price')
@endsection
@push('scripts')
    <script>
        $(document).on('click','.nav-link',function (e) {
            $('.nav-link').removeClass('active');
            $(e.currentTarget).addClass('active');
        });
        $(document).ready(function () {
            let pathname = (window.location.href);
            history.replaceState && history.replaceState(null,'',pathname.split('#')[0]);
            pathname = pathname.split('#')[1];
            $('.nav-link[href="#'+pathname+'"]').trigger('click');
        });
    </script>
@endpush
